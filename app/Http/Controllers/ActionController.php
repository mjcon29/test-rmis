<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\division_action;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;



class ActionController extends Controller
{

    public function index()
    {
        //
    }
    
    public function fetchAll()
    {
        $actions = Action::all();


        return response()->json([
            'status' => 200,
            'actions' =>  $actions
        ]);
    }

}
