<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Office;
use Illuminate\Http\Request;
use Exception;

use App\Models\DocType;
use App\Models\MeansOfReceiving;
use App\Models\OriginOffice;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class OfficesController extends Controller
{

    /**
     * Display a listing of the offices.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $offices = Office::paginate(25);
        $current_user = User::where('id', Auth::id())->first();
        $division_name = $current_user->division->name;
        $division = $current_user->division_id;
        $docTypes = DocType::all();
        $mors = MeansOfReceiving::all();
        $origin_offices = OriginOffice::all();
        // $users = getSelectData('User', [['id', '!=', Auth::id()]]);
        $user = Auth::user();

        if ($user->hasRole('superadmin') || $user->hasRole(['return-clerk'])) {
            $users = getSelectData('User', [['id', '!=', Auth::id()]]);
        } else {
            $users = getSelectData('User', [['id', '!=', Auth::id()], ['division_id', '=', Auth::user()->division->id]]);
        }


        $actions = getSelectData('Action');
        $control_id = now()->year . "-" . $division;

        $docs = getDocList();

        $overdues  =  getDocListOverdues($docs)->count();
        $dueToday  =  getDocListDuesToday($docs)->count();
        $dueSoon =  getDocListDuesSoon($docs)->count();
        $recent  =    getDocListRecent($docs)->count();
        $archive  =    getDocListArchive($docs)->count();
        $active  =    getDocListActivePerUser($docs)->count();

        $forSign  =    getDocListForSign($docs)->count();
        $forAction  =    getDocListForAction($docs)->count();
        $filter    = "";
        $users  =    $users;
        $actions  =    $actions;

        $division  = $division;
        $division_name =  "RECENT - ";
        $activePage = "dashboard";

        $docTypes = $docTypes;
        $mors = $mors;
        $origin_offices = $origin_offices;

        return view('offices.index',  compact(
                        'offices',
                        'overdues',
                        'dueToday',
                        'dueSoon',
                        'recent',
                        'archive',
                        'active',
                        'forSign',
                        'filter',
                        'users',
                        'actions',
                        'division',
                        'division_name',
                        'activePage',
                        'docTypes',
                        'mors',
                        'origin_offices',
                ));
    }

    /**
     * Show the form for creating a new office.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('offices.create');
    }

    /**
     * Store a new office in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:origin_offices',
        ]);

        // OriginOffice::create($request->all());
        Office::create($request->all());
        return response()->json([
            'status' => 200,
            'msg'   => '<b>'.$request->name.'</b> added successfully'
        ]);
    }


    /**
     * Display the specified office.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $office = Office::findOrFail($id);

        return view('offices.show', compact('office'));
    }

    /**
     * Show the form for editing the specified office.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        $where = array('id' => $request->id);
        $origin = Office::where($where)->first();

        return response()->json([
            'status' => 200,
            $origin,
        ]);
    }

    /**
     * Update the specified office in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);

            $office = Office::findOrFail($id);
            $office->update($data);

            return response()->json([
                'status' => 200,
                'msg'   => '<b>'.$request->name.'</b> Has been updated successfully'
            ]);

        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    // public function update(Request $request, $id)
    // {


    //         $validated = $request->validate([
    //             'name' => 'required|unique:origin_offices',
    //         ]);

    //         $OriginOffice = OriginOffice::find($id);
    //         $input = $request->all();
    //         $OriginOffice->fill($input)->save();

    //         return response()->json([
    //             'status' => 200,
    //             'msg'   => '<b>'.$request->name.'</b> Has been updated successfully'
    //         ]);
    // }

    /**
     * Remove the specified office from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy(Request $request)
    {
        $OriginOffice = Office::find($request->id);
        $OriginOffice->delete();

       
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
                'name' => 'required|string|min:1|max:255',
            'short_name' => 'nullable|string|min:0|max:255', 
        ];
        
        $data = $request->validate($rules);


        return $data;
    }
    public function fetchAll(){
        // $OriginOffices = OriginOffice::all();
        $OriginOffices = Office::all();
        $fields = [
            'Name',
            'Updated at',
            'action'
        ];

        $output = '';
        if ($OriginOffices->count() > 0) {
            $output .= '<table id="all_offices" class="table table-striped table-sm align-middle">
            <thead>
              <tr>';

            foreach ($fields as $field) $output .= '<th>' . $field . '</th>';

            $output .= '
              </tr>
            </thead>
            <tbody>';
            foreach ($OriginOffices as $OriginOffice) {
                $output .= '<tr>
                <td>' . $OriginOffice->name . '</td>
                <td>' . $OriginOffice->updated_at. '</td>
                <td>
                    <span class="pull-right">
                        <a id="' . $OriginOffice->id . '"   class="text-success mx-1 editIcon editMaster"  data-toggle="modal" data-target="#editMasterModal" data-title="Edit Office" data-dbname="offices" data-db="'.route('offices.edit',$OriginOffice->id ).'" data-route="'.route('offices.update',$OriginOffice->id ).'">
                            <i class="bi bi-pencil"></i>
                        </a>';
                    
                    if(Auth::user()->isAbleTo('origin_offices-delete')) {

                        $output .= '<a id="del_' . $OriginOffice->id . '" class="text-danger mx-1 deleteIcon deleteOffice">
                        <span data-tilt><i class="bi bi-trash"></i></span>
                        </a> ';
                    }

                    $output .= '</span>
                </td>
              </tr>';
            }
            $output .= '</tbody></table>';
            echo $output;
        } else {
            echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }        
    }

}
