<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\MeansOfReceiving;
use Illuminate\Http\Request;
use Carbon\Carbon;


class MeansOfReceivingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today =  Carbon::now('Asia/Manila')->format('Y-m-d');
        return view('mor.home',[
            'MeansOfReceiving'  =>  MeansOfReceiving::orderBy('id','desc')->paginate(10),
            'overdues'  =>  Document::all()->where("deadline","<",$today)->count(),
            'dueToday'  =>  Document::all()->where("deadline","==",$today)->count(),
            'recent'  =>  Document::all()->where("deadline",">",$today)->count(),            
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

        return view("mor.create",[
            'overdues'  =>  Document::all()->where("deadline","<",$today)->count(),
            'dueToday'  =>  Document::all()->where("deadline","==",$today)->count(),
            'recent'  =>  Document::all()->where("deadline",">",$today)->count(),
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
            'name' => 'required|unique:means_of_receivings',
        ]);

        MeansOfReceiving::create($request->all());
        return response()->json([
            'status' => 200,
            'msg'   => '<b>'.$request->name.'</b> added successfully'
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

    public function fetchAll(){
        $MeansOfReceivings = MeansOfReceiving::all();
        $fields = [
            'Name',
            'Updated at',
            'action'
            
        ];

        $output = '';
        if ($MeansOfReceivings->count() > 0) {
            $output .= '<table id="all_mor" class="table table-striped table-sm align-middle">
            <thead>
              <tr>';

            foreach ($fields as $field) $output .= '<th>' . $field . '</th>';

            $output .= '
            </tr>
            </thead>
            <tbody>';
            foreach ($MeansOfReceivings as $MeansOfReceiving) {
                $output .= '<tr>
                <td>' . $MeansOfReceiving->name . '</td>
                <td>' . $MeansOfReceiving->updated_at . '</td>
                <td>
                    <span class="pull-right">

                        <a id="' . $MeansOfReceiving->id . '"   class="text-success mx-1 editIcon editMaster"  data-toggle="modal" data-dbname="mor" data-target="#editMasterModal" data-title="Edit Means of Receiving" data-db="'.route('mor.edit',$MeansOfReceiving->id ).'" data-route="'.route('mor.update',$MeansOfReceiving->id ).'">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <a id="del_' . $MeansOfReceiving->id . '" class="text-danger mx-1 deleteIcon deleteMOR">
                            <span data-tilt><i class="bi bi-trash"></i></span>
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
        $origin = MeansOfReceiving::where($where)->first();

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
            'name' => 'required|unique:means_of_receivings',
        ]);

        $MeansOfReceiving = MeansOfReceiving::find($id);
        $input = $request->all();
        $MeansOfReceiving->fill($input)->save();

        // return redirect()->route('masterlist')
        // ->with('success','Means-of-Receiving Has been updated successfully');     
        
        return response()->json([
            'status' => 200,
            'msg'   => '<b>'.$request->name.'</b> Has been updated successfully'
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
        $MeansOfReceiving = MeansOfReceiving::find($request->id);

        $MeansOfReceiving->delete();

        return response()->json([
            'message' => 'Data deleted successfully!'
        ]);
    }
}
