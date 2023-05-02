<?php

use App\Models\Division;
use App\Models\division_action;
use App\Models\DocRoutes;
use App\Models\DocStatus;
use App\Models\User;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Log;
use App\helpers;
use App\Models\DocRouteAction;
use App\Models\DocRouteUser;
use Carbon\Carbon;
use App\Models\Document;
use Illuminate\Support\Arr;

$docs = getDocList();
$recent = getDocListActive($docs)->whereHas('docRouteActions' ,function ($query) {
    $query->where('action_id', 18)->orderBy('doc_routes.id', 'desc');
});

$recent->get();
$recent->count();