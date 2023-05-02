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
// $user_id = 2;
// $result = Document::whereHas('docRouteUsers', function ($query) use ($user_id) {
//     $query->where('doc_route_users.user_id', '=', $user_id);
// })->with('docRouteActions', 'docRouteUsers')->get();

// $result->count();
