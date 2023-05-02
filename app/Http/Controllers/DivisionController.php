<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Document;
use Illuminate\Http\Request;

use Carbon\Carbon;

use Illuminate\Support\Facades\Log;


class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today =  Carbon::now('Asia/Manila')->format('Y-m-d');
        return view('divisions.home', [
            'origin_offices'  =>  Division::orderBy('id', 'desc')->paginate(10),
            'overdues'  =>  Document::all()->where("deadline", "<", $today)->count(),
            'dueToday'  =>  Document::all()->where("deadline", "==", $today)->count(),
            'recent'  =>  Document::all()->where("deadline", ">", $today)->count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $today =  Carbon::now('Asia/Manila')->format('Y-m-d');
        return view("divisions.create", [
            'overdues'  =>  Document::all()->where("deadline", "<", $today)->count(),
            'dueToday'  =>  Document::all()->where("deadline", "==", $today)->count(),
            'recent'  =>  Document::all()->where("deadline", ">", $today)->count(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:divisions',
        ]);


        Division::create($request->all());
        return response()->json([
            'status' => 200,
            'msg'   => '<b>' . $request->name . '</b> added successfully'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function show(Division $division)
    {
        //
    }

    public function list()
    {
        $Divisions = Division::all();
        return response()->json([
            'status' => 200,
            'list' => $Divisions,
        ]);
    }

    public function fetchAll()
    {
        $Divisions = Division::all();
        $fields = [
            'Name',
            'Updated at',
            'action'
        ];

        $output = '';
        if ($Divisions->count() > 0) {
            $output .= '<table id="all_divisions" class="table table-striped table-sm align-middle">
            <thead>
              <tr>';

            foreach ($fields as $field) $output .= '<th>' . $field . '</th>';

            $output .= '
            </tr>
            </thead>
            <tbody>';
            foreach ($Divisions as $Division) {
                $output .= '<tr>
                <td>' . $Division->name . '</td>
                <td>' . $Division->updated_at . '</td>
                <td>
                    <span class="pull-right">
                        <a id="' . $Division->id . '"   class="text-success mx-1 editIcon editMaster"  data-toggle="modal" data-target="#editMasterModal" data-title="Edit Division" data-dbname="divisions" data-db="' . route('divisions.edit', $Division->id) . '" data-route="' . route('divisions.update', $Division->id) . '">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <a id="del_' . $Division->id . '" class="text-danger mx-1 deleteIcon deleteDivision">
                            <i class="bi bi-trash"></i>
                        </a>                          
                    </span>
                </td>
              </tr>';
            }
            $output .= '</tbody></table>';
            echo $output;
        } else {
            echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */

    public function edit(Request $request)
    {
        $where = array('id' => $request->id);
        $origin = Division::where($where)->first();

        return response()->json([
            'status' => 200,
            $origin,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|unique:divisions',
        ]);

        $division = Division::find($id);
        $input = $request->all();
        $division->fill($input)->save();
        return response()->json([
            'status' => 200,
            'msg'   => '<b>' . $request->name . '</b> Has been updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $division = Division::find($request->id);
        $division->delete();

        return response()->json([
            'message' => 'Data deleted successfully!'
        ]);
    }

    public function fetchToSelect()
    {
        $divisions = Division::all();
        return response()->json([
            'status' => 200,
            'division' =>  $divisions
        ]);
    }
}
