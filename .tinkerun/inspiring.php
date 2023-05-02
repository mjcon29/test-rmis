<?php

use App\Models\Division;
use App\Models\division_action;
use App\Models\DocRoutes;
use App\Models\DocStatus;
use App\Models\Employee;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Log;
use App\helpers;
use Carbon\Carbon;

// Employee::all();


// Division::with('employees')->get();
// $emp = Employee::with('division')->where('id',2)->get();

// $emp[0]->division->name;


$input = array(
    'date_received' => '2022-09-28',
    'action_id' => '10',
    'remarks' => 'ay karun',
    'employee_id' => '5',
    'id' => '26',
    'document_id' => '1',
);

// $doc_route = DocRoutes::where('id',$input['id'])->update($input); 

$request = array(
    'user_id' => 5,
    'document_id' => NULL,
    'date_received' => '2022-09-28',
    'deadline' => '2022-10-01',
    'doctype' => 'Application for Leave',
    'doctype_id' => '10',
    'doc_number' => NULL,
    'subject' => 'dddd',
    'origin' => 'ODG',
    'origin_id' => '6',
    'mor' => 'Email',
    'mor_id' => '1',
);

// $DocRoutes = new DocRoutes;
// $DocRoutes->date_received = $request['date_received'];
// $DocRoutes->document_id = 41;
// $DocRoutes->action_id = 16;
// $DocRoutes->employee_id = $request['user_id'];
// $DocRoutes->remarks = "To HRMO";
// $DocRoutes->save(); // Th


// DocRoutes::where('document_id', 4)->orderBy('id', 'desc')->first();


// $where = array('id' => 1);
// DocRoutes::where('document_id', 1)->orderBy('id', 'desc')->first();
$doc_list = docList();
$today =  Carbon::now('Asia/Manila')->format('Y-m-d');

Document::orderBy('updated_at', 'desc')->where("created_at", "=", $today)->whereIn('id', $doc_list)->where('status', 0)
