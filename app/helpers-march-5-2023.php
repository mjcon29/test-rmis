<?php

use App\Models\Action;
use App\Models\DocRouteAction;
use App\Models\DocRoutes;
use App\Models\DocRouteUser;
use App\Models\Document;
use App\Models\DocUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use mikehaertl\pdftk\Pdf as Pdf2;

use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

// ------------------------------------------------------------------
use setasign\Fpdi\Fpdi;
use Illuminate\Http\Request;
// -----------------------------------------------------
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Writer\ValidationException;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\TryCatch;

if (!function_exists('docList')) {
    // Get ID list of doc routed to current user
    function docList()
    {
        $doc_list = array();
        $current_user = User::where('id', Auth::id())->first();
        $routes = $current_user->docRoutes;

        foreach ($routes as $route) {
            array_push($doc_list, $route->document_id);
        }

        return $doc_list;
    }
}

if (!function_exists('docTable')) {
    // Get ID list of doc routed to current user
    function docTable($db, $fields, $model)
    {
        $auth_user = Auth::user();
        $output = '';
        if ($db->count() > 0) {
            $output .= '<table id="documentTable" class="table table-striped table-sm text-center align-middle">
            <thead>
              <tr>';

            foreach ($fields as $field) $output .= '<th>' . $field . '</th>';

            $output .= '
              </tr>
            </thead>
            <tbody>';

            foreach ($db as $doc) {

                if (empty($doc->images[0])) $content = "No Attachment";
                else $content = $doc->images[0]->content;

                if (empty($doc->doc_number)) $doc_number = "No Attachment";

                $status_date = ($doc->status) ? '<span class="badge badge-pill badge-info fsize-1" >' . $doc->updated_at . '</span>' : $model->currently_at($doc->id);

                $output .= '<tr>
                <td>' . $doc->getDayLapsed() . '</td>
                <td><p class="title">' . $doc->doctype->name . ((empty($doc->doc_number)) ? '' : " no. " . $doc->doc_number) . '</p><small class="badge badge-pill badge-' . $doc->expired() . '">' . $doc->getDayLapsed() . '</small> </td>
                <td>' . $doc->subject . '  </td>
                <td>' . $content . '  </td>
                <td> ' . $status_date . '</td>
                ';


                $output .= '<td ><div class="d-flex flex-column flex-lg-row">';
                if ($auth_user->hasPermission(['routes-read']))
                    $output .= '<a href="' . route('documents.show',  $doc->id) . '" id="' . $doc->id . '" class="btn btn-info "><i class="bi bi-eye"></i></a>';
                if ($doc->status != 1 || $auth_user->id == 2) {
                    if (($auth_user->hasPermission(['documents-update']) && ($auth_user->id == $doc->user_id )) || $auth_user->hasRole(['superadmin']) ) {
                        $output .= '<a id="' . $doc->id . '"  class="btn btn-success mx-1 editIcon editDoc"  data-toggle="modal" data-target="#editDocumentModal" >
                        <i class="bi bi-pencil"></i>
                    </a>';
                    }

                    if (($auth_user->hasPermission(['documents-delete']) && ($auth_user->id == $doc->user_id )) || $auth_user->hasRole(['superadmin']) ) {
                        $output .= '<a id="del_' . $doc->id . '" class="btn btn-danger mx-1 deleteIcon deleteDoc">
                        <i class="bi bi-trash"></i>
                    </a>';
                    }
                }

                $output .= '</div></td>';
                $output .= '</tr>';
            }

            $output .= '</tbody></table>';
            // echo $output;
        } else {
            $output = '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }

        return $output;
    }
}

if (!function_exists('buildTable')) {
    // Get ID list of doc routed to current user
    function buildTable($db, $fields, $model)
    {
        $auth_user = Auth::user();
        $output = '';
        if ($db->count() > 0) {

            $output .= '<table id="logsTable" class="table table-striped table-sm text-center align-middle">
            <thead>
              <tr>';

            foreach ($fields as $field) $output .= '<th>' . $field . '</th>';

            $output .= '
              </tr>
            </thead>
            <tbody>';
            foreach ($db as $activity_log) {



                $has_causer = (!is_null($activity_log->causer) ? 1 : 0);

                $output .= '<tr>';

                foreach ($fields as $field) {

                    if (strcmp($field, "causer_id")) {
                        $output .= '<td>' . $activity_log->$field . '</td>';
                    } else {

                        $dummy = $has_causer ? $activity_log->causer->name : "";
                        $output .= '<td>' . $dummy . '</td>';
                    }
                }

                $output .= '</tr>';
            }
            $output .= '</tbody></table>';
            // echo $output;
        } else {
            $output = '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }


        return $output;
    }
}

if (!function_exists('createSlug')) {
    function createSlug($str, $delimiter = '-')
    {

        $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
        return $slug;
    }
}

if (!function_exists('syncSigned')) {
    function syncSigned()
    {

        $files = Storage::disk('google')->allFiles();
       

        foreach ($files as $file) {
            $filename = Storage::disk('google')->getMetadata($file);
            $content = Storage::disk('google')->get($file);
            Storage::put('images/'.$filename['name'], $content);
            Storage::disk('google')->delete($file);
        }



        // $directories = ['//172.16.2.6/images'];
        // $from = '//172.16.2.6/images';

        // $to = 'local';
        // foreach ($directories as $directory) {
        //     $files = File::files($from);

        //     foreach ($files as $file) {
        //         $filename = pathinfo($file);

        //         try {
        //             File::move($file, storage_path('app/images/') . $filename['basename']);
        //         } catch (Exception $exception) {
        //         }
        //     }
        // }
    }

}

if (!function_exists('pdfIsLock')) {
    function pdfIsLock($targetPath)
    {
        $pdf_file = new Pdf2(storage_path('app/images/') . $targetPath);
        $data = $pdf_file->getData();
        if ($data === false) {
            return true;
        }

        return false;
    }
}


if (!function_exists('routeRecepients')) {

    function routeRecepients($route_id)
    {
        $users = DocRouteUser::where('doc_routes_id', $route_id)->with('user', 'user.division')->get();

        return $users;
    }
}

if (!function_exists('routeActions')) {

    function routeActions($route)
    {
        // $actions = DocRouteAction::where('doc_routes_id', $route_id)->get();

        return $route->actions()->pluck('id');
    }
}

if (!function_exists('routeRecepientsNames')) {

    function routeRecepientsNames($route)
    {

        $str = '<ul class="list-group userlist">';

        foreach ($route->users as $user) {
            $str .= '<li class="list-group-item routedTo"><p>' .  $user->name . '</p><p><small ><b>' . $user->division->name . '</b></small> </p></li>';
        }

        $str .= '</ul>';

        return $str;
    }
}
if (!function_exists('routeActionNames')) {

    function routeActionNames($route)
    {
        $str = '<ul class="list-normal">';

        foreach ($route->actions as $action) {
            $str .= '<li>' . $action->name . '</li>';
        }

        $str .= '</ul>';

        return $str;
    }
}

if (!function_exists('routeTable')) {
    // Get ID list of doc routed to current user
    function routeTable($db, $fields, $model)
    {
        $auth_user = Auth::user();
        $output = '';
        if ($db->count() > 0) {
            $output .= '<table id="myTable" class="table table-striped table-sm text-center align-middle">
            <thead>
              <tr>';

            foreach ($fields as $field) $output .= '<th>' . $field . '</th>';

            $output .= '
              </tr>
            </thead>
            <tbody>';
            foreach ($db as $docRoute) {

                $output .= '<tr>
                <td>' . $docRoute->id . '</td>

                <td>' . routeRecepientsNames($docRoute) . '</td>
                <td><small>' . $docRoute->date_received . '</small>' . routeActionNames($docRoute) . '</td>

                <td class="remarks"><p class="title">' . $docRoute->remarks . '</p><p>by: ' . $docRoute->routeOwner->name . '</p><p><span class="badge badge-' . Str::slug(strtolower($docRoute->routeOwner->division->name), '-') . '">' . $docRoute->created_at .  '</span></p></td>

                <td>';

                // should be multiple recepient
                if ($auth_user->hasPermission(['routes-update']) && (!$docRoute->document->status) && ($auth_user->id == $docRoute->user_id)) {
                    $output .= '<a id="' . $docRoute->id . '"  class="btn btn-success mx-1 editIcon editDoc"  data-toggle="modal" data-target="#editRouteModal">
                    <i class="bi-pencil-square"></i>
                </a>';
                }

                // if ($auth_user->hasRole(['superadmin']) && (!$docRoute->document->status)) {
                if (($auth_user->hasRole(['superadmin']) && (!$docRoute->document->status)) || ($auth_user->hasPermission(['routes-delete']) && ($auth_user->id == $docRoute->user_id)  && (!$docRoute->document->status))) {
                    $output .= '<a id="del_' . $docRoute->id . '" class="btn btn-danger mx-1 deleteIcon deleteRoute" data-deltarget="' . route('delete.route') . '">
                    <i class="bi bi-trash"></i>
                </a>';
                }

                $output .= '</td>
              </tr>';
            }
            $output .= '</tbody></table>';
            echo $output;
        } else {
            echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }

        return $output;
    }
}

// if (!function_exists('duesCount')) {
//     function duesCount($name)
//     {
//         $doc_list = docList();
//         $today =  Carbon::now('Asia/Manila')->format('Y-m-d');

//         switch ($name) {
//             case "overdues":
//                 // overdue per user
//                 // return Document::orderBy('updated_at', 'desc')->where("deadline", "<", $today)->whereIn('id', $doc_list)->where('status', 0);
//                 $user_id = Auth::id();
//                 return Document::orderBy('updated_at', 'desc')->where("deadline", "<", $today)->where('status', 0)
//                                 ->whereHas('docUsers', function ($query) {
//                                     return $query->where('user_id', Auth::id());
//                                 });

//                 break;
//             case "overduesAll":
//                 return Document::orderBy('updated_at', 'desc')->where("deadline", "<", $today)->where('status', 0);
//                 break;
//             case "dueToday":
//                 return Document::orderBy('updated_at', 'desc')->where("deadline", "=", $today)->where('status', 0)
//                                 ->whereHas('docUsers', function ($query) {
//                                     return $query->where('user_id', Auth::id());
//                                 });
//                 break;
//             case "dueTodayAll":
//                 // overdue per user
//                 // return Document::orderBy('updated_at', 'desc')->where("deadline", "=", $today)->where('user_id', Auth::id())->where('status', 0);
//                 return Document::orderBy('updated_at', 'desc')->where("deadline", "=", $today)->where('status', 0);
//                 break;
//             case "active":
//                 return Document::all()->where('status', 0);
//                 break;
//             case "archive":
//                 return Document::all()->where('status', 1);
//                 break;

//             case "recent":
//                 $user_id = Auth::id();

//                 return   Document::whereHas('docUsers', function ($query) {
//                     return $query->where('user_id', Auth::id());
//                 })->get();


//                 break;

//             case "dueSoon":

//                 $startDate = Carbon::today();
//                 $endDate = Carbon::today()->addDays(1);

//                 return Document::orderBy('updated_at', 'desc')->whereBetween('deadline', [$startDate, $endDate])->where('status', 0)
//                                 ->whereHas('docUsers', function ($query) {
//                                     return $query->where('user_id', Auth::id());
//                                 });
//                 break;

//             case "dueSoonAll":

//                 $startDate = Carbon::today();
//                 $endDate = Carbon::today()->addDays(1);

//                 return Document::orderBy('updated_at', 'desc')->whereBetween('deadline', [$startDate, $endDate])->where('status', 0);
//                 break;
//             default:
//                 return Document::all()->where("deadline", ">", $today)->where('status', 0);
//         }
//     }
// }

if (!function_exists('lastAction')) {
    function lastAction($id)
    {
        $where = array('id' => $id);
        $docRoutes  = DocRoutes::where('document_id', $id)->orderBy('id', 'desc')->first();

        return $docRoutes;
    }
}

if (!function_exists('getSelectData')) {
    function getSelectData($modelName, $condition = [])
    {
        $selectData = [];

        switch ($modelName) {
            case 'User':
                // $selectData  = User::where($condition)->get();
                $user = Auth::user();
                $route_list = array();

                if ($user->hasPermission(['route-to-unit-division-heads', 'route-to-pd', 'route-to-rd','route-to-hrmo','route-to-records'])){
                    if ($user->hasPermission(['route-to-unit-division-heads'])){
                        $heads = User::whereRoleIs('unit-head')->orWhereRoleIs('division-head')->get('id')->toArray();

                        $route_list = array_keys(
                            array_flip($route_list) + array_flip( Arr::flatten($heads) )
                        );
                    }
    
                    if ($user->hasPermission(['route-to-pd'])){
                        $pds = User::whereRoleIs('provincial-director')->get('id')->toArray();
                        $route_list = array_keys(
                            array_flip($route_list) + array_flip( Arr::flatten($pds))
                        );
        
                    }
    
                    if ($user->hasPermission(['route-to-rd'])){
                        $rds = User::whereRoleIs('regional-director')->get('id')->toArray();
                        $route_list = array_keys(
                            array_flip($route_list) + array_flip( Arr::flatten($rds))
                        );
                    }
                    
                    if ($user->hasPermission(['route-to-hrmo'])){
                        $rds = User::whereRoleIs('hrmo')->get('id')->toArray();
                        $route_list = array_keys(
                            array_flip($route_list) + array_flip( Arr::flatten($rds))
                        );
                    }
                    
                    if ($user->hasPermission(['route-to-records'])){
                        $rds = User::whereRoleIs('records')->get('id')->toArray();
                        $route_list = array_keys(
                            array_flip($route_list) + array_flip( Arr::flatten($rds))
                        );
                    }

                    $selectData  = User::where($condition)->orWhereIn('id', $route_list)->get();
                }

                else $selectData  = User::where($condition)->get();

                break;
            case 'Action':
                $selectData  = Action::where($condition)->get();
                break;
        }

        return $selectData;
    }
}


if (!function_exists('attachMemoNumber')) {
    function attachMemoNumber($path, $memo_number)
    {
        $filePath = storage_path('app/images/') . $path;
        $outputFilePath = storage_path('app/images/output/') . $path;

        pdfBackup($filePath, $outputFilePath);
        processTextOnPDFFileMemoNumber($filePath, $filePath, $memo_number);
    }
}

if (!function_exists('pdfBackup')) {
    function pdfBackup($file, $outputFilePath)
    {
        $fpdi = new Fpdi;
        $count = $fpdi->setSourceFile($file);

        for ($i = 1; $i <= $count; $i++) {

            $template = $fpdi->importPage($i);
            $size = $fpdi->getTemplateSize($template);
            $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
            $fpdi->useTemplate($template);

            $left = 40;
            $top = 90;

            $img_w = 30;
            $img_h = 30;

            $ml = 18;
            $mb = 5;
            // $fpdi->SetFont("helvetica", "", 12);
            // $text = "No. " . $memo_number;
            // $fpdi->Cell(0, 75, $text, 0, 0, 'C');
        }
        return $fpdi->Output($outputFilePath, 'F');
    }
}


if (!function_exists('processTextOnPDFFileMemoNumber')) {

    function processTextOnPDFFileMemoNumber($file, $outputFilePath, $memo_number)
    {
        $fpdi = new Fpdi;

        $count = $fpdi->setSourceFile($file);

        for ($i = 1; $i <= $count; $i++) {

            $template = $fpdi->importPage($i);
            $size = $fpdi->getTemplateSize($template);
            $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
            $fpdi->useTemplate($template);

            $left = 40;
            $top = 90;

            $img_w = 30;
            $img_h = 30;

            $ml = 18;
            $mb = 5;
            $fpdi->SetFont("helvetica", "", 12);
            $text = "No. " . $memo_number;
            $fpdi->Cell(0, 75, $text, 0, 0, 'C');
        }

        return $fpdi->Output($outputFilePath, 'F');
    }
}



if (!function_exists('updatePDF')) {
    function updatePDF()
    {
        $filePath = storage_path('app/images/') . "sample.pdf";
        $outputFilePath = storage_path('app/images/output/') . "sample.pdf";
        $outputFilePath = $filePath;
        // processTextOnPDFFileMemoNumber($filePath, $outputFilePath);

        attachSignature($filePath, $outputFilePath);
        attachWaterMark($filePath, $outputFilePath);
        attachQr($filePath, $outputFilePath);

        // processTextOnPDFFile($filePath, $outputFilePath);

        return response()->file($outputFilePath);
    }
}

if (!function_exists('attachSecurity')) {
    function attachSecurity($path, $trackingNo)
    {
        $filePath = storage_path('app/images/') . $path;
        // $outputFilePath = storage_path('app/images/output/') . "sample.pdf";
        $outputFilePath = $filePath;
        // processTextOnPDFFileMemoNumber($filePath, $outputFilePath);

        // attachSignature($filePath, $outputFilePath);

        attachWaterMark($filePath, $outputFilePath, $trackingNo);
        attachQr($filePath, $outputFilePath);


        // processTextOnPDFFile($filePath, $outputFilePath);

        return response()->file($outputFilePath);
    }
}


// if (!function_exists('processTextOnPDFFile')) {

//     function processTextOnPDFFile($file, $outputFilePath)
//     {
//         $fpdi = new Fpdi;

//         $count = $fpdi->setSourceFile($file);

//         for ($i = 1; $i <= $count; $i++) {

//             $template = $fpdi->importPage($i);
//             $size = $fpdi->getTemplateSize($template);
//             $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
//             $fpdi->useTemplate($template);

//             $left = 40;
//             $top = 90;

//             $img_w = 15;
//             $img_h = 15;

//             $ml = 5;
//             $mb = 5;
//             $fpdi->SetFont("helvetica", "", 5);
//             $text = "System Generated";
//             $fpdi->Text(25, ($size['height'] - ($img_h  + $mb)) - 1, $text);
//             $fpdi->SetFont("helvetica", "", 6);
//             $text = "Scan QR Code";
//             $fpdi->Text(25, ($size['height'] - ($mb / 2)), $text);

//             $fpdi->Image(storage_path('app/qr') . '/qrcode.png', 25, ($size['height'] - ($img_h + $mb)), $img_w, $img_h);
//         }

//         return $fpdi->Output($outputFilePath, 'F');
//     }
// }







// ---------------------------------------------------------------------------------------------------------------------------------------------
//    FDP acctachment functions
// ---------------------------------------------------------------------------------------------------------------------------------------------

if (!function_exists('makeQR')) {
    function makeQR($content)
    {
        $writer = new PngWriter();

        // Create QR code
        $qrCode = QrCode::create($content)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(1)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        // Create generic logo
        $logo = Logo::create(storage_path('app/qr/') . "tesdalogo.png")
            ->setResizeToWidth(100);

        // Create generic label
        $label = Label::create('System Generated')
            ->setTextColor(new Color(0, 0, 0));

        $result = $writer->write($qrCode, $logo, $label);

        // Save it to a file
        $result->saveToFile(storage_path('app/qr') . '/qrcode.png');
        header('Content-Type: ' . $result->getMimeType());
        echo $result->getString();
    }
}


if (!function_exists('attachSignature')) {
    function attachSignature($file = "", $outputFilePath = "", $specimens = array())
    {
        $specimens = array(
            'Romelmar Aleajndrnio' => array(
                'designation' => 'IT Officer',
                'specimen' => 'specimen here',
                'date' => 'date signed - timestamp'
            ),
            'Rosano Sevilla' => array(
                'designation' => 'Computer Operator III',
                'specimen' => 'specimen here',
                'date' => 'date signed - timestamp'
            ),

        );

        // $test = Arr::dot($test);


        $fpdi = new Fpdi;

        $count = $fpdi->setSourceFile($file);

        for ($i = 1; $i <= $count; $i++) {

            $template = $fpdi->importPage($i);
            $size = $fpdi->getTemplateSize($template);
            $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
            $fpdi->useTemplate($template);

            $left = 40;
            $top = 80;

            $img_w = 40;
            $img_h = 40;

            $ml = 5;
            $mb = 5;

            $count_signee = 1;

            foreach ($specimens as $signee => $value) {
                $fpdi->SetFont("helvetica", "B", 12);
                $text = $signee;
                $fpdi->Cell(0, ($img_h * $count_signee) +  $top, $text, 0, 0, 'R');

                $fpdi->SetFont("helvetica", "", 7);
                $text = $value['designation'];
                $fpdi->Cell(0, ($img_h * $count_signee) +  $top + 6, $text, 0, 0, 'R');

                $count_signee++;
            }



            // $fpdi->Image(storage_path('app/qr') . '/qrcode.png', 25, ($size['height'] - ($img_h + $mb)), $img_w, $img_h);
        }

        return $fpdi->Output($outputFilePath, 'F');
    }
}

if (!function_exists('attachQr')) {
    function attachQr($file, $outputFilePath)
    {
        $fpdi = new Fpdi;

        $count = $fpdi->setSourceFile($file);

        for ($i = 1; $i <= $count; $i++) {

            $template = $fpdi->importPage($i);
            $size = $fpdi->getTemplateSize($template);
            $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
            $fpdi->useTemplate($template);

            $left = 40;
            $top = 10;

            $img_w = 20;
            $img_h = 20;

            $ml = 5;
            $mb = 5;

            $fpdi->Image(storage_path('app/qr') . '/qrcode.png', $size['width'] - $img_w - 15, $img_h + 12, $img_w, $img_h);
        }

        return $fpdi->Output($outputFilePath, 'F');
    }
}

if (!function_exists('attachWaterMark')) {
    function attachWaterMark($file, $outputFilePath, $trackingNo)
    {
        $fpdi = new Fpdi;

        $count = $fpdi->setSourceFile($file);

        for ($i = 1; $i <= $count; $i++) {

            $template = $fpdi->importPage($i);
            $size = $fpdi->getTemplateSize($template);
            $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
            $fpdi->useTemplate($template);

            $left = 40;
            $top = 10;

            $img_w = 20;
            $img_h = 20;

            $ml = 5;
            $mb = 5;

            $fpdi->SetFont("helvetica", "B", 8);
            $text = $trackingNo;
            $fpdi->Cell(0, -5, $text, 0, 0, 'R');
            $fpdi->Image(storage_path('app/qr') . '/watermark.png', 0, 0, $size['width'], $size['height']);
        }

        return $fpdi->Output($outputFilePath, 'F');
    }
} 



if (!function_exists('strWordCut')) {
    function strWordCut($string,$length,$end='....')
    {
        $string = strip_tags($string);

        if (strlen($string) > $length) {

            // truncate string
            $stringCut = substr($string, 0, $length);

            // make sure it ends in a word so assassinate doesn't become ass...
            $string = substr($stringCut, 0, strrpos($stringCut, ' ')).$end;
        }
        return iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $string);
    }
}
// --------------------------------------------------------------------------------------------------------------
//  Universal Document query
// ---------------------------------------------------------------------------------------------------------------
if (!function_exists('getDocList')) {
    function getDocList()
    {
        // return Document::all();
        return Document::select('id', 'doc_number', 'subject' )->get();
    }
}

if (!function_exists('getDocListActive')) {
    function getDocListActive()
    {
        return Document::where('status', 0);
    }
}

if (!function_exists('getDocListArchive')) {
    function getDocListArchive()
    {
        $archive = Document::where('status', 1);
        return $archive;
    }
}

if (!function_exists('getDocListArchivePerUser')) {
    function getDocListArchivePerUser()
    {
        $user_id = Auth::user()->office_id;
       $archive =Document::whereHas('user', function ($query) use ($user_id){
        return $query->where('office_id', $user_id)->with('user');
        })->where('status', 1);

        // $doc_list = docList();
        // return getDocListActive($doc)->whereIn('id', $doc_list)->orWhere('user_id', Auth::id());
        // return getDocListArchive($doc_list)->whereIn('id', $doc_list)->orWhere('user_id', Auth::id())->where('status', 1);

        

        return $archive;
    }
}

if (!function_exists('getDocListOverduesAll')) {
    function getDocListOverduesAll($doc, $operating_unit='')
    {
        $today =  Carbon::now('Asia/Manila')->format('Y-m-d');

        if($operating_unit != ''){
            return getDocListActive($doc)->where("deadline", "<", $today)->with('user')->where('users.office_id', 24);
        }
        else {
            // return getDocListActive($doc)->where("deadline", "<", $today)
            // ->selectRaw('*, datediff(documents.date_received,documents.deadline) as due')
            // ->orderBy('due','desc');
            // return getDocListActive($doc)->where("deadline", "<", $today);
            return getDocListActive($doc)->where("deadline", "<", $today)->with('user', function($query){
                return $query->where('users.office_id',24);
            });
        }
    }
}

if (!function_exists('getDocListOverdues')) {
    function getDocListOverdues($doc)
    {
        $today =  Carbon::now('Asia/Manila')->format('Y-m-d');
        return getDocListOverduesAll($doc)->whereHas('docUsers', function ($query) {
                                        return $query->where('user_id', Auth::id());
                                    });
    }
}

if (!function_exists('getDocListDuesTodayAll')) {
    function getDocListDuesTodayAll($doc)
    {
        $today =  Carbon::now('Asia/Manila')->format('Y-m-d');
        return getDocListActive($doc)->where("deadline", "=", $today);
    }
}

if (!function_exists('getDocListDuesToday')) {
    function getDocListDuesToday($doc)
    {
        $today =  Carbon::now('Asia/Manila')->format('Y-m-d');
        return getDocListDuesTodayAll($doc)->whereHas('docUsers', function ($query) {
                                        return $query->where('user_id', Auth::id());
                                    });
    }
}

if (!function_exists('getDocListDuesSoon')) {
    function getDocListDuesSoon($doc)
    {
        $startDate = Carbon::today();
        $endDate = Carbon::today()->addDays(1);

        return getDocListActive($doc)->whereBetween('deadline', [$startDate, $endDate])
                                ->whereHas('docUsers', function ($query) {
                                    return $query->where('user_id', Auth::id());
                                });
    }
}

if (!function_exists('getDocListDuesSoonAll')) {
    function getDocListDuesSoonAll($doc)
    {
        $startDate = Carbon::today();
        $endDate = Carbon::today()->addDays(1);

        return getDocListActive($doc)->whereBetween('deadline', [$startDate, $endDate]);
    }
}

if (!function_exists('getDocListRecent')) {
    function getDocListRecent($doc)
    {

        return getDocListActive($doc)
        ->whereHas('docUsers', function ($query) {
            return $query->where('user_id', Auth::id());
        });

    }
}

if (!function_exists('getDocListRecentAll')) {
    function getDocListRecentAll($doc)
    {
        $today =  Carbon::now('Asia/Manila')->format('Y-m-d');

        return getDocListActive($doc)->where("deadline", ">", $today);
    }
}

if (!function_exists('getDocListActivePerUser')) {
    function getDocListActivePerUser($doc)
    {
        $doc_list = docList();
        // return getDocListActive($doc)->whereIn('id', $doc_list)->orWhere('user_id', Auth::id());
        return getDocListActive($doc)->whereIn('id', $doc_list)->orWhere('user_id', Auth::id())->where('status', 0);
    }
}


if (!function_exists('getDocListForSign')) {
    function getDocListForSign($doc)
    {
        $today =  Carbon::now('Asia/Manila')->format('Y-m-d');

        // return getDocListActive($doc)
        // ->whereHas('docUsers', function ($query) {
        //     return $query->where('user_id', Auth::id());
        // });

        // return getDocListRecent($doc)->whereHas('docRouteActions' ,function ($query) {
        //     $query->where('action_id', 18);
        // });

        return getDocListActive($doc)
        ->whereHas('docUsers', function ($query) {
            return $query->where('user_id', Auth::id());
        })->whereHas('docRouteActions' ,function ($query) {
                $query->where('action_id', 18);
            });

        // $recent = getDocListActive($doc)->whereHas('docUsers', function ($query) { $query->where('user_id', 2); })->whereHas('docRouteActions' ,function ($query) {
        //     $query->where('action_id', 18);
        // });
        
    }
}

if (!function_exists('getDocListForSignAll')) {
    function getDocListForSignAll($doc)
    {

        // return getDocListActive($doc)->whereHas('docRouteActions' ,function ($query) {
        //     $query->where('action_id', 18)->orderBy('doc_routes.id', 'desc');
        // });

        return getDocListActive($doc)->whereHas('docRouteActions' ,function ($query) {
            $query->where('action_id', 18);
        });
        
    }
}

if (!function_exists('getDocListForAction')) {
    function getDocListForAction($doc)
    {
        $today =  Carbon::now('Asia/Manila')->format('Y-m-d');

        // $doc_list = docList();
        // return getDocListRecent($doc)->whereHas('docRouteActions' ,function ($query) {
        //     $query->where('action_id', 20);
        // });

        return getDocListRecent($doc)->whereHas('docRouteActions' ,function ($query) {
            $query->where('action_id','!=', 18);
        });
        
    }
}

if (!function_exists('getDocListForActionAll')) {
    function getDocListForActionAll($doc)
    {
        $today =  Carbon::now('Asia/Manila')->format('Y-m-d');

        // return getDocListRecentAll($doc)->whereHas('docRouteActions' ,function ($query) {
        //     $query->where('action_id','!=', 18);
        // });

        return getDocListActive($doc)->whereHas('docRouteActions' ,function ($query) {
            $query->where('action_id','!=', 18)->orderBy('doc_routes.id', 'desc');
        });        
    }
}

if (!function_exists('isRoutedToMe')) {
    function isRoutedToMe($doc_id)
    {
        $doc = Document::where('id', $doc_id);
        $doc_list = docList();

        $test = $doc->whereIn('id', $doc_list)->count();
        return $test;
    }
}


if (!function_exists('headOfOffice')) {
    function headOfOffice($office_id)
    {
        $id = User::where('office_id',$office_id)->whereRoleIs('head-of-office')->get('id')->toArray();
        return $id;
    }
}

if (!function_exists('releasingClerk')) {
    function releasingClerk($office_id)
    {
        $id = User::where('office_id',$office_id)->whereRoleIs('releasing-clerk')->get('id')->toArray();
        return $id;
    }
}

if (!function_exists('hrmoOfOffice')) {
    function hrmoOfOffice($office_id)
    {
        $id = User::where('office_id',$office_id)->whereRoleIs('hrmo')->get('id')->toArray();
        return $id;
    }
}


if (!function_exists('ConvertToUTF8')) {
function ConvertToUTF8($text)
{
    $encoding = mb_detect_encoding($text.'x', mb_detect_order(), false);
    if($encoding == "UTF-8")
    {
        //Converte letra a letra
        $i    = 0;
        $conv = '';
        do 
        {
            $letra = substr($text,$i,1);
            $conv .= iconv(mb_detect_encoding($letra, mb_detect_order(), true), "UTF-8//IGNORE", $letra);
            $i ++;
        } while ($i < strlen($text) );
        $text = $conv;
    }
    else if ($encoding == 'ISO-8859-1')
    {
        $text = mb_convert_encoding($text, 'ISO-8859-1', 'UTF-8');
    }
    else if ($encoding == 'ASCII')
    {
        $text = mb_convert_encoding($text, "UTF-8");
    }
    $out = iconv(mb_detect_encoding($text.'x', mb_detect_order(), false), "UTF-8//TRANSLIT//IGNORE", $text);

    return $out;
}//Fim Módulo
}
//         $user_id = Auth::id();

//         return   Document::whereHas('docUsers', function ($query) {
//             return $query->where('user_id', Auth::id());
//         })->get();


// $today =  Carbon::now('Asia/Manila')->format('Y-m-d');

// switch ($name) {
//     case "overdues":
//         // overdue per user
//         // return Document::orderBy('updated_at', 'desc')->where("deadline", "<", $today)->whereIn('id', $doc_list)->where('status', 0);
//         $user_id = Auth::id();
//         return Document::orderBy('updated_at', 'desc')->where("deadline", "<", $today)->where('status', 0)
//                         ->whereHas('docUsers', function ($query) {
//                             return $query->where('user_id', Auth::id());
//                         });

//         break;
//     case "overduesAll":
//         return Document::orderBy('updated_at', 'desc')->where("deadline", "<", $today)->where('status', 0);
//         break;
//     case "dueToday":
//         return Document::orderBy('updated_at', 'desc')->where("deadline", "=", $today)->where('status', 0)
//                         ->whereHas('docUsers', function ($query) {
//                             return $query->where('user_id', Auth::id());
//                         });
//         break;
//     case "dueTodayAll":
//         return Document::orderBy('updated_at', 'desc')->where("deadline", "=", $today)->where('status', 0);
//         break;
//     case "active":
//         return Document::all()->where('status', 0);
//         break;
//     case "archive":
//         return Document::all()->where('status', 1);
//         break;

//     case "recent":
//         $user_id = Auth::id();

//         return   Document::whereHas('docUsers', function ($query) {
//             return $query->where('user_id', Auth::id());
//         })->get();


//         break;

//     case "dueSoon":

//         $startDate = Carbon::today();
//         $endDate = Carbon::today()->addDays(1);

//         return Document::orderBy('updated_at', 'desc')->whereBetween('deadline', [$startDate, $endDate])->where('status', 0)
//                         ->whereHas('docUsers', function ($query) {
//                             return $query->where('user_id', Auth::id());
//                         });
//         break;

//     case "dueSoonAll":

//         $startDate = Carbon::today();
//         $endDate = Carbon::today()->addDays(1);

//         return Document::orderBy('updated_at', 'desc')->whereBetween('deadline', [$startDate, $endDate])->where('status', 0);
//         break;
//     default:
//         return Document::all()->where("deadline", ">", $today)->where('status', 0);