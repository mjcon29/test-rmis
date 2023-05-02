<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\helpers;

class DashboardController extends Controller
{
    public function masterlist()
    {
        $docs = getDocList();

        return view('masterlist', [
            'overdues'  =>  getDocListOverdues($docs)->count(),
            'dueToday'  =>  getDocListDuesToday($docs)->count(),
            'dueSoon'  =>  getDocListDuesSoon($docs)->count(),
            'recent'  =>    getDocListRecent($docs)->count(),
            'archive'  =>    getDocListArchive($docs)->count(),
            'active'  =>    getDocListActivePerUser($docs)->count(),
            'forSign'  =>    getDocListForSign($docs)->count(),
            'forAction'  =>    getDocListForAction($docs)->count(),
            'filter'    => "",

        ]);
    }
}
