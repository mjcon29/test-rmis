<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DocType;
use App\Models\MeansOfReceiving;
use App\Models\OriginOffice;
use App\Models\User;
use App\Models\Document;
use App\Models\images;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\helpers;
use App\Models\Division;
use App\Models\DocRouteAction;
use App\Models\DocRoutes;
use App\Models\DocRouteUser;
use App\Models\DocUser;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use mikehaertl\pdftk\Pdf as Pdf2;


class DocumentsController extends Controller
{

    /**
     * Display a listing of the documents.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        // updatePDF();
        // syncSigned();
        // attachQr('romelmar');
        $user = Auth::user();
        $division_name = $user->division->name;
        $division = $user->division_id;
        $office_id = Auth::user()->office_id;


        $docTypes = DocType::select('id','name')->get();
        $mors = MeansOfReceiving::select('id','name')->get();
        $origin_offices = OriginOffice::select('id','name')->get();

        if ($user->hasRole('superadmin') || $user->hasRole(['return-clerk'])) {
            $users = getSelectData('User', [['id', '!=', $user->id]]);
        } else {
            // $users = getSelectData('User', [['id', '!=', $user->id], ['division_id', '=', $division]]);
            $users = getSelectData('User', [['id', '!=', $user->id], ['office_id', '=', $office_id]]);
        }


        $actions = getSelectData('Action');
        $control_id = now()->year . "-" . $division;

        $docs = getDocList();

        return view('documents.home', [
            'overdues'  =>  getDocListOverdues($docs)->count(),
            'dueToday'  =>  getDocListDuesToday($docs)->count(),
            'dueSoon'  =>  getDocListDuesSoon($docs)->count(),
            'recent'  =>    getDocListRecent($docs)->count(),
            // 'archive'  =>    getDocListArchivePerUser($docs)->count(),
            'active'  =>    getDocListActivePerUser($docs)->count(),

            'forSign'  =>    getDocListForSign($docs)->count(),
            'forAction'  =>    getDocListForAction($docs)->count(),
            'filter'    => "",
            'users'  =>    $users,
            'actions'  =>    $actions,

            'division'  => $division,
            'division_name' =>  "RECEIVED - ",
            'activePage' => "dashboard",

            'docTypes' => $docTypes,
            'mors' => $mors,
            'origin_offices' => $origin_offices,
        ]);
    }

    public function index_all()
    {
        // syncSigned();
        $division = 0;
        $user = Auth::user();
        $docTypes = DocType::select('id','name')->get();
        $mors = MeansOfReceiving::select('id','name')->get();
        $origin_offices = OriginOffice::select('id','name')->get();

        if ($user->hasRole('superadmin') || $user->hasRole(['return-clerk'])) {
            $users = getSelectData('User', [['id', '!=', $user->id]]);
        } else {
            $users = getSelectData('User', [['id', '!=', $user->id], ['division_id', '=', $user->division->id]]);
        }


        $docs = getDocList();

        $actions = getSelectData('Action');

        return view('documents.home', [
            // 'docs'  =>  Document::orderBy('created_at', 'desc')->paginate(10),
            'overdues'  =>  getDocListOverduesAll($docs)->count(),
            // 'overduesAll'  =>  duesCount("overduesAll")->count(),
            // 'dueToday'  =>  duesCount("dueTodayAll")->count(),
            'dueToday'  =>  getDocListDuesTodayAll($docs)->count(),
            // 'dueSoon'  =>  getDocListDuesSoon($docs)->count(),
            'dueSoon'  =>  getDocListDuesSoonAll($docs)->count(),
            'recent'  =>    getDocListRecentAll($docs)->count(),
            'users'  =>    $users,
            'actions'  =>    $actions,
            'active'  =>    getDocListActive($docs)->count(),
            'forSign'  =>    getDocListForSignAll($docs)->count(),
            'forAction'  =>    getDocListForAction($docs)->count(),
            'archive'  =>    getDocListArchive($docs)->count(),
            'tabOverdue'    =>  "",
            'tabToday'  =>  "",
            'division'  => $division,
            'division_name' =>  "ALL - ",
            'activePage' => "general",
            'filter'    => "all",
            'docTypes' => $docTypes,
            'mors' => $mors,
            'origin_offices' => $origin_offices,
        ]);
    }

    /**
     * Show the form for creating a new document.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $OriginOffices = OriginOffice::pluck('name', 'id')->all();
        $MeansOfReceivings = MeansOfReceiving::pluck('name', 'id')->all();
        $DocTypes = DocType::pluck('name', 'id')->all();
        $Users = User::pluck('name', 'id')->all();

        return view('documents.create', compact('OriginOffices', 'MeansOfReceivings', 'DocTypes', 'Users'));
    }

    /**
     * Store a new document in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {


        try {

            $data = $this->getData($request);

            document::create($data);

            return redirect()->route('documents.document.index')
                ->with('success_message', 'Document was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    public function store_ajax(Request $request)
    {


        try {
            $input = $request->all();

            $origin_id = $request->origin_id;
            $mor_id = $request->mor_id;
            $doctype_id = $request->doctype_id;

            $confidential = isset($request->switch_confidential) ? 1 : 0;

            if ($request->origin_id === null) {
                $origin = OriginOffice::create(
                    [
                        'name' => $request->origin,
                    ]
                );
                $origin_id  = $origin->id;
            }

            if ($request->mor_id === null) {
                $mor = MeansOfReceiving::create(
                    [
                        'name' => $request->mor,
                    ]
                );
                $mor_id  = $mor->id;
            }

            $doctype_id  = $request->doctype_id;

            $document = new Document;
            $document->origin_id = $origin_id;
            $document->doctype_id  = $doctype_id;
            $document->mor_id = $mor_id;
            $document->user_id = $request->user_id;

            $document->date_received = $request->date_received;
            $document->subject = $request->subject;
            $document->deadline = $request->deadline;
            // $document->required_action = $request->required_action;
            $document->doc_number = $request->doc_number;

            if ($document->save()) {
                $hr_docs = array(8, 9, 10, 11);
                $psu_docs = array(98);
                $utpras_docs = array(
                    99, 104, 105, 106, 107, 108, 109, 110,
                    111, 112, 113, 114, 115, 116, 117, 118, 119, 120,
                    121, 122, 123, 124, 125, 126,135
                );

                $auth_user = Auth::user();

                if ($auth_user->hasRole(['records'])) {
                    if (in_array($document->doctype_id, $hr_docs)) {
                        $hrmo = Arr::flatten(hrmoOfOffice($auth_user->office_id));
                        $to = User::find($hrmo[0]);

                        $DocRoutes = new DocRoutes;
                        $DocRoutes->document_id = $document->id;
                        $DocRoutes->user_id = $request->user_id;
                        $DocRoutes->remarks = "Forwarded to " . $to->name;
                        $DocRoutes->save(); // Th

                        $DocRoutes->users()->attach([$to->id]);
                        $DocRoutes->actions()->attach([21]);
                        $DocRoutes->document->usersAssignedTo()->attach([$to->id]);
                    }
                    else if (in_array($document->doctype_id, $utpras_docs)) {

                        $DocRoutes = new DocRoutes;
                        $DocRoutes->document_id = $document->id;
                        $DocRoutes->user_id = $request->user_id;
                        $DocRoutes->remarks = "Forwarded to ROD";
                        $DocRoutes->save(); // Th

                        $DocRoutes->users()->attach([3]);
                        $DocRoutes->actions()->attach([21]);
                        $DocRoutes->document->usersAssignedTo()->attach([3]);
                    } else {

                        $office_head = Arr::flatten(headOfOffice($auth_user->office_id));
                        $to = User::find($office_head[0]);

                        $DocRoutes = new DocRoutes;
                        $DocRoutes->document_id = $document->id;
                        $DocRoutes->user_id = $request->user_id;
                        $DocRoutes->remarks = "Forwarded to" . $to->name;
                        $is_saved = $DocRoutes->save(); // Th


                        if ($is_saved) {

                            $DocRoutes->users()->attach([$to->id]);
                            $DocRoutes->document->usersAssignedTo()->attach([$to->id]);
                            $DocRoutes->actions()->attach([21]);
                        }
                    }
                } else {
                    $DocRoutes = new DocRoutes;
                    $DocRoutes->document_id = $document->id;
                    $DocRoutes->user_id = $request->user_id;
                    $DocRoutes->remarks = "Internal Document";
                    $is_saved = $DocRoutes->save(); // Th


                    if ($is_saved) {

                        $DocRoutes->users()->attach($request->RouteUser);
                        $DocRoutes->document->usersAssignedTo()->attach($request->RouteUser);
                        $DocRoutes->actions()->attach($request->RouteAction);
                    }
                }
            }
        } catch (\Exception $e) {

            return response()->json(['status' => 'exception', 'msg' => $e->getMessage()]);
        }

        return response()->json(['status' => "success", 'document_id' => $document->id, 'confidential' => $confidential]);



        //   ----------------------------------------------------------------------------------------
    }

    public function storeFile(Request $request)
    {

        if ($request->file('file')) {
            $date = date('Y-m-d H:i');
            $image = $request->file('file');
            
            $imageUpload = new Images;
            $imageUpload->document_id =  $request->document_id;

            $ext =  $image->getClientOriginalExtension();
            $imageName = $date . "-" . $image->getClientOriginalName();
            $imageName = createSlug($imageName) . "." . $ext;

            $request->file('file')->storeAs('images', $imageName);
            $targetPath = storage_path('app/images/') . $imageName;

            $parser = new \Smalot\PdfParser\Parser();
            $file = $targetPath;

            // Parse pdf file using Parser library 
            $pdf = $parser->parseFile($file);

            // Extract text from PDF 
            $data = strWordCut($pdf->getText(), 1000);
            // $data = "";

            $pdf = new Pdf2(
                $targetPath
            );

            $password = Str::random(10);
            $userPassword = $password . 'b';

            if ($request->is_confidential == "true") {
                $result = $pdf
                    ->allow('AllFeatures')
                    ->setPassword($password)
                    ->setUserPassword($userPassword)
                    ->passwordEncryption(128)
                    ->saveAs($targetPath);
            }


            $imageUpload->is_attachment = isset($request->is_attachment) ? $request->is_attachment : 0;
            $imageUpload->image_path = $imageName;
            $imageUpload->password = $password;
            $imageUpload->content = $data;
            $imageUpload->save();
            return response()->json(
                [
                    'status' => "success",
                    'path' => $targetPath

                ]
            );
        } else {
            return response()->json(
                [
                    'status' => "success",
                ]
            );
        }
    }

    public function storeFileUpdate(Request $request)
    {
        $date = date('Y-m-d H:i');
        $image = $request->file('file');


        if ($request->file('file')) {
            $imageUpload = new Images;
            $imageUpload->document_id =  $request->document_id;

            $ext =  $image->getClientOriginalExtension();
            $imageName = $date . "-" . $image->getClientOriginalName();
            $imageName = createSlug($imageName) . "." . $ext;

            $request->file('file')->storeAs('images', $imageName);
            $targetPath = storage_path('app/images/') . $imageName;

            $parser = new \Smalot\PdfParser\Parser();
            $file = $targetPath;

            // Parse pdf file using Parser library 
            $pdf = $parser->parseFile($file);

            // Extract text from PDF 
            // $data = strWordCut($pdf->getText(), 1000);
            
            // $data =  $pdf->getText();

            $data = "";

            $pdf = new Pdf2(
                $targetPath
            );

            $password = Str::random(10);
            $userPassword = $password . 'b';

            if ($request->is_confidential == "true") {
                $result = $pdf
                    ->allow('AllFeatures')
                    ->setPassword($password)
                    ->setUserPassword($userPassword)
                    ->passwordEncryption(128)
                    ->saveAs($targetPath);
            }


            $imageUpload->is_attachment = isset($request->is_attachment) ? $request->is_attachment : 0;
            $imageUpload->image_path = $imageName;
            $imageUpload->password = $password;
            $imageUpload->content = $data;
            $imageUpload->save();
            return response()->json(
                [
                    'status' => "success",
                    'path' => $targetPath

                ]
            );
        } else {
            return response()->json(
                [
                    'status' => "success",
                ]
            );
        }
    }

    /**
     * Display the specified document.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $images = Document::find($id)->images;
        $where = array('id' => $id);
        $document = Document::with('images')->where($where)->first();


        $docs = getDocList();
        $overdues = getDocListOverdues($docs)->count();
        $dueToday = getDocListDuesToday($docs)->count();
        $dueSoon = getDocListDuesSoon($docs)->count();
        $recent  =  getDocListRecent($docs)->count();
        $active =   getDocListActivePerUser($docs)->count();
        $forSign  =    getDocListForSign($docs)->count();
        $forAction  =    getDocListForAction($docs)->count();
        $archive =   getDocListArchive($docs)->count();
        $filter = "";

        $lastAction = lastAction($id);

        // $users = getSelectData('User', [['id', '!=', Auth::id()]]);
        $user = Auth::user();

        $origin = ($document->mor_id == 3) ? $document->user->division->name : $document->originOffice->name;

        if ($user->hasRole('superadmin')) {
            $users = getSelectData('User', [['id', '!=', Auth::id()]]);
            

        } 
        else if ($user->hasRole('records') || $user->hasRole(['return-clerk'])) {
            $users = getSelectData('User', [['id', '!=', $user->id], ['office_id', '=', $user->office_id]]);
        }
        else{
            $users = getSelectData('User', [['id', '!=', Auth::id()], ['division_id', '=', Auth::user()->division->id]]);
        }


        // $users = getSelectData('User', [['id', '!=', Auth::id()],['division_id','=',Auth::user()->division->id]]);
        $actions = getSelectData('Action');

        return view('documents.view', compact(
            'users',
            'actions',
            'document',
            'images',
            'overdues',
            // 'overduesAll',
            'dueToday',
            'dueSoon',
            'recent',
            'active',
            'forSign',
            'forAction',
            'archive',
            'filter',
            'lastAction',
            'origin',
        ));
    }

    /**
     * Show the form for editing the specified document.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit(Request $request)
    {
        $document = document::findOrFail($request->id);
        $origin = $document->originOffice->name;
        $focal = $document->user->name;
        $mor = $document->MeansOfReceiving->name;
        $doctype = $document->docType->name;


        return response()->json([
            'status' => 200,
            $document,
            'origin' =>  $origin,
            'employee' =>  $focal,
            'mor' =>  $mor,
            'doctype' =>  $doctype,
        ]);
    }

    /**
     * Update the specified document in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update(Request $request)
    {
        $input = $request->all();
        $user = Auth::user();
        $input = Arr::except($input, ['_token', '_method', 'doctype', 'origin', 'mor', 'switch-primary_edit']);

        // $input['user_id'] = $user->role_id;
        $input['updated_at'] = Carbon::now();

        // $inserted = Document::where('id', $input["id"]);

        Document::findOrFail($input["id"])->update($input);

        // $model->update($input);

        $request->session()->put('document_id', $input["id"]);
        return response()->json([
            'status' => "success",
            'document_id' => $input["id"]
        ]);
    }

    public function attach(Request $request)
    {
        $input = $request->all();

        $request->session()->put('document_id', $input["id"]);
        return response()->json([
            'status' => "success",
            'document_id' => $input["id"]
        ]);
    }

    /**
     * Remove the specified document from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    // public function destroy($id)
    // {
    //     try {
    //         $document = document::findOrFail($id);
    //         $document->delete();

    //         return redirect()->route('documents.document.index')
    //             ->with('success_message', 'Document was successfully deleted.');
    //     } catch (Exception $exception) {

    //         return back()->withInput()
    //             ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
    //     }
    // }
    public function destroy(Request $request)
    {
        $document = Document::find($request->id);

        // $data = Images::where('document_id',$request->id)->get();
        // $image_path = storage_path('app/images/') . $data->image_path[0];


        // unlink($image_path);
        // $document->delete();

        $avatar_record = Images::where('document_id',$request->id);
        $avatar = $avatar_record->get('image_path');

        if($avatar_record->count()){
            foreach($avatar as $image){
                $image_path =  storage_path('app/images/') . $image->image_path;
                if(file_exists($image_path)){
                    if(unlink($image_path)) {
                        $avatar_record->delete();
                        
                    }
                }
                $document->delete();
            }
    
        }
        else  $document->delete();

        return response()->json([
            'message' => 'Data deleted successfully!'
        ]);
    }


    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'doc_number' => 'nullable|numeric',
            'origin_id' => 'required',
            'mor_id' => 'required',
            'doctype_id' => 'required',
            'user_id' => 'required',
            'date_received' => 'required|string|min:1|max:255',
            'status' => 'boolean',
            'subject' => 'required',
            'deadline' => 'nullable|string|min:0|max:255',
            'required_action' => 'nullable',
        ];


        $data = $request->validate($rules);


        $data['status'] = $request->has('status');


        return $data;
    }
    public function fetchAll($division_id, $status = 0)
    {
        $auth_user = Auth::user();
        $docs = getDocList();
        $docs =  getDocListRecent($docs)->get();

        $fields = [
            '#',
            'Tracking No.',
            'Subject',
            'Content',
            'Status',
            // 'Updated At',
            'Action',
        ];

        $output = docTable($docs, $fields, $this);

        return response()->json([
            'content' =>    $output,


        ]);
    }

    // Get all docs tha are due (overdue / due today)
    public function queryDoc($division_id, $due_type)
    {
        $today =  Carbon::now('Asia/Manila')->format('Y-m-d');
        $docs = getDocList();

        switch ($due_type) {



            case "active":
                return getDocListActivePerUser($docs)->get();
                break;
            case "activeall":
                return getDocListActive($docs)->get();
                break;
            case "duesoon":
                return getDocListDuesSoon($docs)->get();
                break;
            case "recent":
                return getDocListRecent($docs)->get();
                break;
            case "recentall":
                return getDocListRecentAll($docs)->get();
                break;
            case "duesoonall":
                return getDocListDuesSoonAll($docs)->get();
                break;

            case "duetoday":
                // overdue per user
                // return Document::orderBy('updated_at', 'desc')->where("deadline", "=", $today)->where('user_id', Auth::id())->where('status', 0);
                return getDocListDuesToday($docs)->get();
                break;
            case "duetodayall":
                // overdue per user
                // return Document::orderBy('updated_at', 'desc')->where("deadline", "=", $today)->where('user_id', Auth::id())->where('status', 0);
                return getDocListDuesTodayAll($docs)->get();
                break;
            case "overdueall":
                // overdue per user
                // return Document::orderBy('updated_at', 'desc')->where("deadline", "=", $today)->where('user_id', Auth::id())->where('status', 0);
                return getDocListOverduesAll($docs)->get();
                break;
            case "forSignature":
                // overdue per user
                // return Document::orderBy('updated_at', 'desc')->where("deadline", "=", $today)->where('user_id', Auth::id())->where('status', 0);
                return getDocListForSign($docs)->get();
                break;

            case "forSignatureall":
                // overdue per user
                // return Document::orderBy('updated_at', 'desc')->where("deadline", "=", $today)->where('user_id', Auth::id())->where('status', 0);
                return getDocListForSignAll($docs)->get();
                break;

            case "forAction":
                // overdue per user
                // return Document::orderBy('updated_at', 'desc')->where("deadline", "=", $today)->where('user_id', Auth::id())->where('status', 0);
                return getDocListForAction($docs)->get();
                break;

            case "forActionall":
                // overdue per user
                // return Document::orderBy('updated_at', 'desc')->where("deadline", "=", $today)->where('user_id', Auth::id())->where('status', 0);
                return getDocListForActionAll($docs)->get();
                break;



            default:
                return getDocListOverdues($docs)->get();
        }
    }

    // display all docs tha are due (overdue / due today)
    public function fetchAllOverdue(Request $request)
    {

        $docs =  $this->queryDoc($request->division_id, $request->due_type);
        $users = getSelectData('User', [['id', '!=', Auth::id()], ['division_id', '=', Auth::user()->division->id]]);
        $actions = getSelectData('Action');
        $fields = [
            '#',
            'Tracking No.',
            'Subject',
            'Content',
            'Status',
            // 'Updated At',
            'Action',
        ];

        $output = docTable($docs, $fields, $this);

        return response()->json([
            'content' =>    $output,
        ]);
    }

    public function fetchAllRoute($document_id)
    {
        $auth_user = Auth::user();
        $docRoutes = DocRoutes::where('document_id', $document_id)->get();

        $fields = [
            'id',
            'Routed To / Assigned To',
            'Particular',
            'Remarks / Date',
            'Action'
        ];

        routeTable($docRoutes, $fields, $this);
    }

    public function archive(Request $request)
    {

        $user_id = Auth::id();

        $doc = Document::find($request->id);
        $doc->update(['status' => 2,'updater_id'=>$user_id]);
        $docroute = DocRoutes::where('document_id', $request->id)->latest()->first();
        $docroute->document->usersAssignedTo()->detach();

        return response()->json([
            'message' => 'Data archived successfully!'
        ]);
    }

    public function markCompleted(Request $request)
    {

        $user_id = Auth::id();
        $memo_number = "testssss" .$user_id;

        $doc = Document::find($request->id);
        $doc->update(['status' => 1,'updater_id'=>$user_id, 'memo_number' => $memo_number]);
        $docroute = DocRoutes::where('document_id', $request->id)->latest()->first();
        $docroute->document->usersAssignedTo()->detach();

        $content = 'tracking number: ' . $doc->doc_number . '<br/>' . 'Subject:' . $doc->subject;
        // makeQR($content);

        // foreach($doc->images as $image){
        //     Log::info($image->image_path);
        //     attachSecurity($image->image_path,$doc->doc_number);
        // }

        return response()->json([
            'message' => 'Data archived successfully!'
        ]);
    }

    public function sign(Request $request)
    {
        // $doc = Document::with('images')->where('id', $request->id)->first();

        Log::info('clicked signed');

        $user = Auth::user();

        $DocRoutes = new DocRoutes;
        $DocRoutes->document_id = $request->id;

        $DocRoutes->remarks = "Signed";
        $DocRoutes->user_id = $user->id;
// ----------------------------------------------------------------------------
        $releasingClerk = Arr::flatten(releasingClerk($user->office_id));
        $to = User::find($releasingClerk[0]);

        if ($DocRoutes->save()) {
            $DocRoutes->users()->attach([$to->id]);
            $DocRoutes->actions()->attach(24);
            // $DocRoutes->document->usersAssignedTo()->attach([35]); // send notification to users
            $DocRoutes->document->usersAssignedTo()->sync([$to->id]); // send notification to users
            $DocRoutes->document->update(['memo_number' => "test123"]);
        }
    }

    public function releasing(Request $request)
    {
        // $doc = Document::with('images')->where('id', $request->id)->first();
        $user = Auth::user();

        $DocRoutes = new DocRoutes;
        $DocRoutes->document_id = $request->id;

        $DocRoutes->remarks = "For Releasing";
        $DocRoutes->user_id = $user->id;
// ----------------------------------------------------------------------------
        $releasingClerk = Arr::flatten(releasingClerk($user->office_id));
        $to = User::find($releasingClerk[0]);

        if ($DocRoutes->save()) {
            $DocRoutes->users()->attach([$to->id]);
            $DocRoutes->actions()->attach(24);
            // $DocRoutes->document->usersAssignedTo()->attach([35]); // send notification to users
            $DocRoutes->document->usersAssignedTo()->sync([$to->id]); // send notification to users
            $DocRoutes->document->update(['memo_number' => "test123"]);
        }
    }

    public function returnDoc(Request $request)
    {
        // $doc = Document::with('images')->where('id', $request->id)->first();
        $user = Auth::user();
        $last_route_id = lastAction($request->id)->id;
        $lastUser = DocRoutes::find($last_route_id);


        $DocRoutes = new DocRoutes;
        $DocRoutes->document_id = $request->id;

        $DocRoutes->remarks = "Returned";


        $DocRoutes->user_id = $user->id;
        if ($DocRoutes->save()) {
            $DocRoutes->users()->attach([$lastUser->user_id]);
            $DocRoutes->actions()->attach(22);
            // $DocRoutes->document->usersAssignedTo()->attach([35]); // send notification to users
            $DocRoutes->document->usersAssignedTo()->sync([$lastUser->user_id]); // send notification to users
        }
    }

    public function dues($type,$office_id)
    {
        // $current_user = User::where('id', Auth::id())->first();
        // $division_name = $current_user->division->name;
        // $division = $current_user->division_id;
        // $template = Str::of('documents.')->append($type);
        $template = Str::of('documents.')->append('overdue');
        // $users = getSelectData('User', [['id', '!=', Auth::id()]]);
        $users = getSelectData('User', [['id', '!=', Auth::id()], ['division_id', '=', Auth::user()->division->id]]);
        $actions = getSelectData('Action');


        $docTypes = DocType::select('id','name')->get();
        $mors = MeansOfReceiving::select('id','name')->get();
        $origin_offices = OriginOffice::select('id','name')->get();

        $docs = getDocList();

        $all = array("recentall","overdueall", "duetodayall", "duesoonall", "activeall",'forSignatureall');

        

        $headerTitle = array(
                            'recent' => array('label'=> 'Received by: ','title' => Auth::user()->name),
                            'overdue' => array('label'=> 'Overdues For: ','title' => Auth::user()->name),
                            'duetoday' => array('label'=> 'Due today For: ','title' => Auth::user()->name),
                            'duesoon' => array('label'=> 'Due soon For: ','title' => Auth::user()->name),
                            'active' => array('label'=> 'Active For: ','title' => Auth::user()->name),
                            'forSignature' => array('label'=> 'For Signature For: ','title' => Auth::user()->name),
                            'forAction' => array('label'=> 'For Action For: ','title' => Auth::user()->name),
                            

                            'recentall' => array('label'=> 'Received by: ','title' => Auth::user()->division->name),
                            'overdueall' => array('label'=> 'Overdues For: ','title' => Auth::user()->division->name),
                            'duetodayall' => array('label'=> 'Due today For: ','title' => Auth::user()->division->name),
                            'duesoonall' => array('label'=> 'Due soon For: ','title' => Auth::user()->division->name),
                            'activeall' => array('label'=> 'Active For: ','title' => Auth::user()->division->name),
                            'forSignatureall' => array('label'=> 'For Signature For: ','title' => Auth::user()->division->name),
                            'forActionall' => array('label'=> 'For Action For: ','title' => Auth::user()->division->name),

                        );


        if (in_array($type, $all)) {
            $filter = "all";
            $overdues  = getDocListOverduesAll($docs)->count();
            $dueToday  =   getDocListDuesTodayAll($docs)->count();
            $dueSoon  =   getDocListDuesSoonAll($docs)->count();
            $recent  =    getDocListRecentAll($docs)->count();
            $active  =    getDocListActive($docs)->count();
            $forSign  =    getDocListForSignAll($docs)->count();
            $forAction  =    getDocListForActionAll($docs)->count();
        } else {
            $filter = "";
            $overdues  = getDocListOverdues($docs)->count();
            $dueToday  =   getDocListDuesToday($docs)->count();
            $dueSoon  =   getDocListDuesSoon($docs)->count();
            $recent  =    getDocListRecent($docs)->count();
            $active  =    getDocListActivePerUser($docs)->count();
            $forSign  =    getDocListForSign($docs)->count();
            $forAction  =    getDocListForAction($docs)->count();
        }


        return view($template, [
            // 'docs'  =>      duesCount("overdues")->paginate(10),
            'overdues'  =>  $overdues,
            'dueToday'  =>  $dueToday,
            'dueSoon'  =>   $dueSoon,
            'recent'  =>    $recent,
            'active'  =>    $active,
            'forSign'  =>    $forSign ,
            'forAction'  =>    $forAction ,
            'archive'  =>    getDocListArchive($docs)->count(),
            'filter'    => $filter,
            'tabAll'    =>  "",
            'division' => Auth::user()->division->id,
            'division_name' =>  Auth::user()->division->name . " - ",
            // 'activePage' => $type,
            'activePage' => $type,
            'headerTitle' => $headerTitle[$type],
            'users'  =>    $users,
            'actions'  =>    $actions,
            'docTypes' => $docTypes,
            'mors' => $mors,
            'origin_offices' => $origin_offices,
        ]);
    }

    public function docFilter($operating_uni, $type)
    {

       
        
        $current_user = User::where('id', Auth::id())->first();
        $division_name = $current_user->division->name;
        $division = $current_user->division_id;
        // $template = Str::of('documents.')->append($type);
        $template = Str::of('documents.')->append('overdue');
        // $users = getSelectData('User', [['id', '!=', Auth::id()]]);
        $users = getSelectData('User', [['id', '!=', Auth::id()], ['division_id', '=', Auth::user()->division->id]]);
        $actions = getSelectData('Action');


        $docTypes = DocType::select('id','name')->get();
        $mors = MeansOfReceiving::select('id','name')->get();
        $origin_offices = OriginOffice::select('id','name')->get();

        $docs = getDocList();

        $all = array("overdueall", "duetodayall", "duesoonall", "activeall");

        if (in_array($type, $all)) {
            $filter = "all";
            $overdues  = getDocListOverduesAll($docs)->count();
            $dueToday  =   getDocListDuesTodayAll($docs)->count();
            $dueSoon  =   getDocListDuesSoonAll($docs)->count();
            $recent  =    getDocListRecentAll($docs)->count();
            $active  =    getDocListActive($docs)->count();
        } else {
            $filter = "";
            $overdues  = getDocListOverdues($docs)->count();
            $dueToday  =   getDocListDuesToday($docs)->count();
            $dueSoon  =   getDocListDuesSoon($docs)->count();
            $recent  =    getDocListRecent($docs)->count();
            $active  =    getDocListActivePerUser($docs)->count();
        }


        return view($template, [
            // 'docs'  =>      duesCount("overdues")->paginate(10),
            'overdues'  =>  $overdues,
            'dueToday'  =>  $dueToday,
            'dueSoon'  =>   $dueSoon,
            'recent'  =>    $recent,
            'active'  =>    $active,
            'archive'  =>    getDocListArchive($docs)->count(),
            'filter'    => $filter,
            'tabAll'    =>  "",
            'division' => $division,
            'division_name' =>  $division_name  . " - ",
            'activePage' => $type,
            'users'  =>    $users,
            'actions'  =>    $actions,
            'docTypes' => $docTypes,
            'mors' => $mors,
            'origin_offices' => $origin_offices,
        ]);
    }

    public function archiveList($type = "archive")
    {
        $current_user = User::where('id', Auth::id())->first();
        $division_name = $current_user->division->name;
        $division = $current_user->division_id;
        $template = Str::of('documents.')->append('archive');
        $docs = getDocList();
        return view($template, [
            'overdues'  =>  getDocListOverdues($docs)->count(),
            'dueToday'  =>   getDocListDuesToday($docs)->count(),
            'dueSoon'  =>   getDocListDuesSoon($docs)->count(),
            'recent'  =>    getDocListRecent($docs)->count(),
            'active'  =>    getDocListActivePerUser($docs)->count(),
            'forSign'  =>    getDocListForSign($docs)->count(),
            'forAction'  =>    getDocListForAction($docs)->count(),
            // 'archive'  =>    getDocListArchivePerUser($docs)->count(),
            'filter'    => "all",
            'tabAll'    =>  "",
            'division' => $division,
            'division_name' =>  $division_name  . " - ",
            'activePage' => $type
        ]);
    }

    public function forSignature($type = "forSignature")
    {
        $current_user = User::where('id', Auth::id())->first();
        $division_name = $current_user->division->name;
        $division = $current_user->division_id;
        $template = Str::of('documents.')->append('forSignature');
        $docs = getDocList();

        return view($template, [
            'overdues'  =>  getDocListOverdues($docs)->count(),
            'dueToday'  =>  getDocListDuesToday($docs)->count(),
            'dueSoon'  =>  getDocListDuesSoon($docs)->count(),
            'recent'  =>    getDocListRecent($docs)->count(),
            'archive'  =>    getDocListArchive($docs)->count(),
            'active'  =>    getDocListActivePerUser($docs)->count(),
            'filter'    => "",
            // 'forSignature'  =>    duesCount("forSignature")->count(),
            'tabAll'    =>  "",
            'division' => $division,
            'division_name' =>  $division_name  . " - ",
            'activePage' => $type
        ]);
    }


    public function currently_at($document_id)
    {
        $doc_routes = DocRoutes::where('document_id', $document_id)->orderBy('id', 'desc')->first();

        if (isset($doc_routes)) {

            return routeActionNames($doc_routes);
            // return '<b class="text-primary">' . $doc_routes->user->division->name . "</b><p>" . $doc_routes->action->name . '<br /><span class="badge badge-pill badge-success" >' . $doc_routes->created_at . '</span></p>';
        } else
            return '<span  class="text-secondary" >Not routed yet</span>';
    }

    public function fetchArchive($filter, $status = 1)
    {
        $docs = getDocListArchivePerUser()->get();

        $fields = [
            '#',
            'Tracking No.',
            'Subject',
            'Content',
            'Archive Date',
            'Action',
        ];

        $output = docTable($docs, $fields, $this);

        return response()->json([
            'content' =>    $output,
        ]);
    }
    public function forSignatureFetch($division_id, $status = 1)
    {

        $docs =  Document::whereHas('docUsers', function ($query) {
            return $query->where('user_id', Auth::id());
        })->get();

        $fields = [
            '#',
            'Tracking No.',
            'Subject',
            'Content',
            'Archive Date',
            // 'Updated At',
            'Action',
        ];

        $output = docTable($docs, $fields, $this);

        return response()->json([
            'content' =>    $output,
            // 'overdues'  =>  duesCount("overdues")->count(),
            // 'overduesAll'  =>  duesCount("overduesAll")->count(),
            // 'dueToday'  =>  duesCount("dueToday")->count(),
            // 'dueSoon'  =>  duesCount("dueSoon")->count(),
            // 'recent'  =>    duesCount("recent")->count(),
            // 'active'  =>    duesCount("active")->count(),
            // 'archive'  =>    duesCount("archive")->count(),
        ]);
    }
}
