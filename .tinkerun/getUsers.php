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


// $result = DocRouteUser::where('doc_routes_id', 32)->with('user')->with('user.division')->get();
// $result = Document::with('docRoutes')->get();


// $result = DocRouteUser::where('doc_routes_id', 3)->with('user','user.division')->get();
// $result = DocRouteAction::where('doc_routes_id', 3)->get();

// $users = $result->pluck('action_id');

// $actions = routeActions($request->id)->pluck('action_id');
// $divisions = $result->pluck('user.division.name');


// ->pluck('doc_routes_id.user_id')->flatten(1)
$currentUser = User::find(3);
// User::where([['id', '!=',$currentUser->id],['division_id','=',$currentUser->division->id]])->
// orWhere('id','=',1)->get(['name','division_id']);
$array = array(1,3, 4, 26, 12);

 
$filtered = Arr::where($array, function ($value, $key) use ($currentUser) {
    if($value != $currentUser->id)  return $value;
});

User::where([['id', '!=',$currentUser->id],['division_id','=',$currentUser->division->id]])->orWhereIn('id',$filtered)->get(['name','division_id']);