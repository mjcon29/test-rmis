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
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

$docroute = DocRoutes::find(2);
 
$detached = $docroute->users()->sync([4,5,6]);

// $detached['detached'];