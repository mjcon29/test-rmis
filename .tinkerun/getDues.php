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
use App\Models\Document;

$today =  Carbon::now('Asia/Manila')->format('Y-m-d');

Document::orderBy('updated_at', 'desc')->whereDate("date_received", Carbon::today())->where('status', 0)->count();
Document::orderBy('updated_at', 'desc')->where("deadline", "<", $today)->where('status', 0)->count();
Document::orderBy('updated_at', 'desc')->where("deadline", "=", $today)->where('user_id', 1)->where('status', 0)->count();

$startDate = Carbon::today()->format('Y-m-d');
$endDate = Carbon::today()->subDays(1)->format('Y-m-d');

Document::orderBy('updated_at', 'desc')->whereBetween('date_received', [$endDate,$startDate])->where('status', 0)->count();