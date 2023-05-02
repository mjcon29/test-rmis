<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\Causer;
use App\Models\Subject;
use App\Models\User;
use App\Models\DocType;
use App\Models\MeansOfReceiving;
use App\Models\OriginOffice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Log;


use App\Models\Document;

class ActivityLogsController extends Controller
{

    /**
     * Display a listing of the activity logs.
     *
     * @return Illuminate\View\View
     */

    public function duesCount($name)
    {
        $doc_list = docList();
        $today =  Carbon::now('Asia/Manila')->format('Y-m-d');

        switch ($name) {
            case "overdues":
                return Document::orderBy('updated_at', 'desc')->where("deadline", "<", $today)->whereIn('id', $doc_list)->where('status', 0);
                break;
            case "dueToday":
                return Document::orderBy('updated_at', 'desc')->where("deadline", "=", $today)->whereIn('id', $doc_list)->where('status', 0);
                break;
            default:
                return Document::all()->where("deadline", ">", $today)->where('status', 0);
        }
    }

    public function index()
    {
        $activityLogs = ActivityLog::paginate(25);

        $current_user = User::where('id', Auth::id())->first();
        $division_name = $current_user->division->name;
        $division = $current_user->division_id;
        $docTypes = DocType::all();
        $mors = MeansOfReceiving::all();
        $origin_offices = OriginOffice::all();

        $control_id = now()->year . "-" . $division;
        $user = Auth::user();
        $actions = getSelectData('Action');

        if($user->hasRole('superadmin')){
            $users = getSelectData('User', [['id', '!=', Auth::id()]]);
        }
        else {
            $users = getSelectData('User', [['id', '!=', Auth::id()],['division_id','=',Auth::user()->division->id]]);
        }

        $docs = getDocList();

        return view('activity_logs.index', compact('activityLogs'), [
            'overdues'  =>  getDocListOverdues($docs)->count(),
            'dueToday'  =>  getDocListDuesToday($docs)->count(),
            'dueSoon'  =>  getDocListDuesSoon($docs)->count(),
            'recent'  =>    getDocListRecent($docs)->count(),
            'archive'  =>    getDocListArchive($docs)->count(),
            'active'  =>    getDocListActivePerUser($docs)->count(),
            'forSign'  =>    getDocListForSign($docs)->count() ,
            'forAction'  =>    getDocListForAction($docs)->count(),
            'filter'    => "",
            'division'  => $division,
            'division_name' =>  $division_name . " Routed ",
            'users'  =>    $users,
            'actions'  =>    $actions,
            'activePage' => "dashboard",            'docTypes' => $docTypes ,
            'mors' => $mors ,
            'origin_offices' => $origin_offices ,
        ]);
    }

    /**
     * Show the form for creating a new activity log.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $subjects = Subject::pluck('id', 'id')->all();
        $causers = Causer::pluck('id', 'id')->all();

        return view('activity_logs.create', compact('subjects', 'causers'));
    }

    /**
     * Store a new activity log in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {

            $data = $this->getData($request);

            ActivityLog::create($data);

            return redirect()->route('activity_logs.activity_log.index')
                ->with('success_message', 'Activity Log was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }


    /**
     * Remove the specified activity log from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $activityLog = ActivityLog::findOrFail($id);
            $activityLog->delete();

            return redirect()->route('activity_logs.activity_log.index')
                ->with('success_message', 'Activity Log was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
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
            'log_name' => 'nullable|string|min:0|max:255',
            'description' => 'required',
            'subject_type' => 'nullable|string|min:0|max:255',
            'event' => 'nullable|string|min:0|max:255',
            'subject_id' => 'nullable',
            'causer_type' => 'nullable|string|min:0|max:255',
            'causer_id' => 'nullable',
            'properties' => 'nullable|string|min:0|max:4294967295',
            'batch_uuid' => 'nullable|string|min:0|max:36',
        ];


        $data = $request->validate($rules);




        return $data;
    }

    protected function fetchAll(Request $request)
    {
        $docs = ActivityLog::all();

        $fields = [
            'id',
            'log_name',
            // 'description',
            'event',
            'subject_type',
            'subject_id',
            // 'causer_type',
            'causer_id',
            'properties',
            'created_at',
        ];


        $output = buildTable($docs, $fields, $this);

        return response()->json([
            'content' =>    $output,
        ]);
    }
}
