<?php

namespace App\Http\Controllers;

use App\Models\Files;

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

use Illuminate\Http\UploadedFile;
use App\Http\Requests\StoreFileRequest;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = Files::all();
        $current_user = User::where('id', Auth::id())->first();
        $division_name = $current_user->division->name;
        $division = $current_user->division_id;
        $docTypes = DocType::all();
        $mors = MeansOfReceiving::all();
        $origin_offices = OriginOffice::all();
        $user = Auth::user();

        if ($user->hasRole('superadmin') || $user->hasRole(['return-clerk'])) {
            $users = getSelectData('User', [['id', '!=', Auth::id()]]);
        } else {
            $users = getSelectData('User', [['id', '!=', Auth::id()], ['division_id', '=', Auth::user()->division->id]]);
        }

        $actions = getSelectData('Action');
        $docs = getDocList();
        return view('documents.file', [
            'files' => $files,
            'overdues'  =>  getDocListOverdues($docs)->count(),
            'dueToday'  =>  getDocListDuesToday($docs)->count(),
            'dueSoon'  =>  getDocListDuesSoon($docs)->count(),
            'recent'  =>    getDocListRecent($docs)->count(),
            'archive'  =>    getDocListArchive($docs)->count(),
            'active'  =>    getDocListActivePerUser($docs)->count(),

            'forSign'  =>    getDocListForSign($docs)->count(),
            'filter'    => "",
            'users'  =>    $users,
            'actions'  =>    $actions,

            'division'  => $division,
            'division_name' =>  "RECENT - ",
            'activePage' => "dashboard",

            'docTypes' => $docTypes,
            'mors' => $mors,
            'origin_offices' => $origin_offices,
        ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $files = Files::all();
        $current_user = User::where('id', Auth::id())->first();
        $division_name = $current_user->division->name;
        $division = $current_user->division_id;
        $docTypes = DocType::all();
        $mors = MeansOfReceiving::all();
        $origin_offices = OriginOffice::all();
        $user = Auth::user();

        if ($user->hasRole('superadmin') || $user->hasRole(['return-clerk'])) {
            $users = getSelectData('User', [['id', '!=', Auth::id()]]);
        } else {
            $users = getSelectData('User', [['id', '!=', Auth::id()], ['division_id', '=', Auth::user()->division->id]]);
        }

        $actions = getSelectData('Action');
        $docs = getDocList();        
        return view('documents.file-create' , [
            'overdues'  =>  getDocListOverdues($docs)->count(),
            'dueToday'  =>  getDocListDuesToday($docs)->count(),
            'dueSoon'  =>  getDocListDuesSoon($docs)->count(),
            'recent'  =>    getDocListRecent($docs)->count(),
            'archive'  =>    getDocListArchive($docs)->count(),
            'active'  =>    getDocListActivePerUser($docs)->count(),

            'forSign'  =>    getDocListForSign($docs)->count(),
            'filter'    => "",
            'users'  =>    $users,
            'actions'  =>    $actions,

            'division'  => $division,
            'division_name' =>  "RECENT - ",
            'activePage' => "dashboard",

            'docTypes' => $docTypes,
            'mors' => $mors,
            'origin_offices' => $origin_offices,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreFileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFileRequest $request)
    {
        // $fileName = auth()->id() . '_' . time() . '.'. $request->file->extension();  
        // $fileName = $date . "-" . $image->getClientOriginalName();
        $fileName =$request->file->getClientOriginalName();

        $type = $request->file->getClientMimeType();
        $size = $request->file->getSize();

        // $request->file->move(public_path('file'), $fileName);
        $request->file('file')->storeAs('images', $fileName);

        Files::create([
            'user_id' => auth()->id(),
            'name' => $fileName,
            'type' => $type,
            'size' => $size
        ]);

        return redirect()->route('files.index')->withSuccess(__('File added successfully.'));
    }
}
