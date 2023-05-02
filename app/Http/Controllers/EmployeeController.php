<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Document;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

Use App\Models\User;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today =  Carbon::now('Asia/Manila')->format('Y-m-d');
        $thisweek =  Carbon::now('Asia/Manila')->addDays(6)->format('Y-m-d');
        return view('employees.home',[
            'employees'  =>  Employee::orderBy('id','desc')->paginate(10),
            'overdues'  =>  Document::all()->where("deadline","<",$today)->count(),
            'dueToday'  =>  Document::all()->where("deadline","==",$today)->count(),
            'recent'  =>  Document::all()->where("deadline",">",$today)->count(),
        ]);        
    }

    public function fetchAll(){
        $Employees = User::all();
        $fields = [
            'Fullname',
            'Designation',
            'Division',
            'Email',
            'Action',
        ];

        $output = '';
        if ($Employees->count() > 0) {
            $output .= '<table id="allEmployees" class="table table-striped table-sm text-center align-middle">
            <thead>
              <tr>';

            foreach ($fields as $field) $output .= '<th>' . $field . '</th>';

            $output .= '
            </tr>
            </thead>
            <tbody>';
            foreach ($Employees as $Employee) {
                $output .= '<tr>
                <td>' . $Employee->name . '</td>
                <td>' . $Employee->designation . '</td>
                <td>' . $Employee->division->name . '</td>
                <td>' . $Employee->email . '</td>
                <td>
                    <a id="' . $Employee->id . '"   class="btn btn-success mx-1 editIcon editEmployee"  data-toggle="modal" data-target="#editEmployeeModal" data-dbname="Employee" data-title="Edit Employee" data-db="'.route('employees.edit',$Employee->id ).'" data-route="'.route('employees.update',$Employee->id ).'">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <a id="del_' . $Employee->id . '" class="btn btn-danger mx-1 deleteIcon deleteEmp">
                        <i class="bi bi-trash"></i>
                    </a>  
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $today =  Carbon::now('Asia/Manila')->format('Y-m-d');

        return view("employees.create",[
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

        Employee::create($request->all());
        return response()->json([
            'status' => 200,
            'msg'   => 'New Employee has been added successfully'
        ]);
    }

    public function store_ajax(Request $request)
    {

        print_r($_POST);
        // Employee::create($request->all());
        // return response()->json(['success'=>'Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        // $where = array('id' => $request->id);
        $origin = User::with('division')->find($request->id);

        return response()->json([
            'status' => 200,
            $origin,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

         
        $employee = Employee::find($request->id);
        $input = $request->all();
        
        $employee->fill($input)->save();


        return response()->json([
            'status' => 200,
            'msg'   => 'Employee\'s data has been updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function imageUploadPost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        
  
        /* Store $imageName name in DATABASE from HERE */
    
        return back()
            ->with('success','You have successfully upload image.')
            ->with('image','../images/' . $imageName); 
    }

    public function destroy(Request $request)
    {
        $employee = Employee::find($request->id);


        $employee->delete();
    
        return response()->json([
          'message' => 'Data deleted successfully!'
        ]);
    }


    public function fetchAllEmployeeDivision(){


        $divisionActions =  Employee::with('division')->get();

        return response()->json([
            'status' => 200,
            'actions' =>  $divisionActions
        ]);
    }
}
