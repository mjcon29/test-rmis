<?php

namespace App\Http\Controllers;

use App\Models\DocType;
use App\Models\Document;
use Illuminate\Http\Request;

use Carbon\Carbon;

use Illuminate\Support\Facades\Log;

class DocTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today =  Carbon::now('Asia/Manila')->format('Y-m-d');
        return view('doctypes.home', [
            'origin_offices'  =>  DocType::orderBy('id', 'desc')->paginate(10),
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
        return view("doctypes.create", [
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
            'name' => 'required|unique:doc_types',
        ]);


        DocType::create($request->all());
        return response()->json([
            'status' => 200,
            'msg'   => '<b>' . $request->name . '</b> added successfully'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }
    public function fetchAll()
    {
        $DocTypes = DocType::all();
        $fields = [
            'Name',
            'action',
            'action'

        ];

        $output = '';
        if ($DocTypes->count() > 0) {
            $output .= '<table id="all_doctypes" class="table table-striped table-sm align-middle dataTable no-footer">
            <thead>
              <tr>';

            foreach ($fields as $field) $output .= '<th>' . $field . '</th>';

            $output .= '
            </tr>
            </thead>
            <tbody>';
            foreach ($DocTypes as $DocType) {

                $output .= '<tr>
                <td>' . $DocType->name . '</td>
                <td></td>
               
                <td >
                    <span class="pull-right">
                        <a id="' . $DocType->id . '"   class="text-success mx-1 editIcon editMaster"  data-toggle="modal" data-dbname="doctypes" data-target="#editMasterModal" data-title="Edit Doctype" data-db="' . route('doctypes.edit', $DocType->id) . '" data-route="' . route('doctypes.update', $DocType->id) . '">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <a id="del_' . $DocType->id . '" class="text-danger mx-1 deleteIcon deleteDocType">
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
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $where = array('id' => $request->id);
        $origin = DocType::where($where)->first();

        return response()->json([
            'status' => 200,
            $origin,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|unique:doc_types',
        ]);

        $doctype = DocType::find($id);
        $input = $request->all();
        $doctype->fill($input)->save();

        return response()->json([
            'status' => 200,
            'msg'   => '<b>' . $request->name . '</b> Has been updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $doctype = DocType::find($request->id);

        $doctype->delete();

        return response()->json([
            'message' => 'Data deleted successfully!'
        ]);
    }
}
