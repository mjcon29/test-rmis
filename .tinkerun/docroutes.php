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
$result = Document::whereHas('docRoutes.docRouteUsers', function ($query) {
    $query->where('user_id', '2');
})->with(['docRoutes', 'docRoutes.docRouteUsers'])->get()->pluck('docRoutes.docRouteUsers.name');

$result->count();
