<?php

namespace App\Http\Controllers;

use App\Models\OriginOffice;
use App\Models\Office;
use App\Models\Document;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class OriginOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today =  Carbon::now('Asia/Manila')->format('Y-m-d');

        return view('origin_offices.home',[
            'origin_offices'  =>  OriginOffice::orderBy('id','desc')->paginate(10),
            'overdues'  =>  Document::all()->where("deadline","<",$today)->count(),
            'dueToday'  =>  Document::all()->where("deadline","==",$today)->count(),
            'recent'  =>  Document::all()->where("deadline",">",$today)->count(),
        ]);

        // $data['companies'] = OriginOffice::orderBy('id','desc')->paginate(5);
        // return view('origin_offices.home', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $today =  Carbon::now('Asia/Manila')->format('Y-m-d');
        return view("origin_offices.create",[
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
            'name' => 'required|unique:origin_offices',
        ]);

        OriginOffice::create($request->all());
        // Office::create($request->all());
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
    public function show(OriginOffice $OriginOffice)
    {
        $today =  Carbon::now('Asia/Manila')->format('Y-m-d');
        $overdues  =  Document::all()->where("deadline", "<", $today)->count();
        $dueToday  =  Document::all()->where("deadline", "==", $today)->count();
        $recent  =  Document::all()->where("deadline", ">", $today)->count();
        
        return view('OriginOffice.show',compact(
            'OriginOffice',
            'overdues',
            'dueToday',
            'recent'
        ));
    }

    public function fetchAll(){
        $OriginOffices = OriginOffice::all();
        // $OriginOffices = Office::all();
        $fields = [
            'Name',
            'Updated at',
            'action'
        ];

        $output = '';
        if ($OriginOffices->count() > 0) {
            $output .= '<table id="all_origin_offices" class="table table-striped table-sm align-middle">
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
                        <a id="' . $OriginOffice->id . '"   class="text-success mx-1 editIcon editMaster"  data-toggle="modal" data-target="#editMasterModal" data-title="Edit Origin Office" data-dbname="origin_offices" data-db="'.route('origin-offices.edit',$OriginOffice->id ).'" data-route="'.route('origin-offices.update',$OriginOffice->id ).'">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <a id="del_' . $OriginOffice->id . '" class="text-danger mx-1 deleteIcon deleteOriginOffice">
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
        $origin = OriginOffice::where($where)->first();

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
                'name' => 'required|unique:origin_offices',
            ]);

            $OriginOffice = OriginOffice::find($id);
            $input = $request->all();
            $OriginOffice->fill($input)->save();

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
        $OriginOffice = OriginOffice::find($request->id);
        $OriginOffice->delete();

        return response()->json([
            'message' => 'Data deleted successfully!'
        ]);
    }
}
