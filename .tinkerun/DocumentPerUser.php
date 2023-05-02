<?php

use App\Models\Division;
use App\Models\division_action;
use App\Models\DocRoutes;
use App\Models\DocStatus;
use App\Models\Employee;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Log;
use App\helpers;
use App\Models\DocRouteAction;
use App\Models\DocRouteUser;
use Carbon\Carbon;
use App\Models\Document;
use Illuminate\Support\Arr;

// $user = DocRoutes::where('id','=',26)->with('doc_route_users')->with('doc_route_users.user')->with('doc_route_users.user.division')->get()->pluck('doc_route_users');



// $result = Document::whereHas('docRouteUsers', function ($query) use ($user_id) {
//     $test = $query->where('doc_route_users.user_id', '=', $user_id);

// })->with('docRouteActions');

// $result->count();
// DocRoutes::where('document_id',1)->latest()->first();
$user_id = 24;

// $docs =  Document::where("deadline", "<", $today)->whereHas('docUsers' , function ($query) use ($user_id){
//     return $query->where('user_id', $user_id)->with('user');
// })->get();

$docs =  Document::whereHas('user', function ($query) use ($user_id){
        return $query->where('office_id', $user_id)->with('user');
    })->get('subject');
$docs->count();