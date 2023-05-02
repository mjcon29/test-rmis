<?php

namespace App\Http\Controllers;

use App\Models\DocRouteAction;
use App\Models\DocRoutes;
use App\Models\DocRouteUser;
use App\Models\DocUser;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;


class DocRouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = Auth::user();

        try {
            $DocRoutes = new DocRoutes;
            $DocRoutes->document_id = $request->document_id;

            $DocRoutes->remarks = $request->remarks;
            $DocRoutes->user_id = $user->id;

            $is_saved = $DocRoutes->push(); // This will update both user and phone record in DB  

            if($is_saved){
                // dec 13
                // $deleted = DocUser::where('user_id', $user->id)->where('document_id', $request->document_id)->delete();
                
                $deleted = DocUser::where('document_id', $request->document_id)->delete();
                $DocRoutes->actions()->attach($request->action);
                $DocRoutes->document->usersAssignedTo()->attach($request->route_user); // send notification to users
                $DocRoutes->users()->attach($request->route_user);
            }


        } catch (\Exception $e) {
            return response()->json(['status' => 'exception', 'msg' => $e->getMessage()]);
        }

        return response()->json(['status' => "success"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DocRoute  $docRoute
     * @return \Illuminate\Http\Response
     */
    public function show(DocRoutes $docRoute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DocRoute  $docRoute
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $docRoutes  = DocRoutes::find($request->id);

        $divisions = "";
        $actions = $docRoutes->actions()->pluck('id');
        $recepients = $docRoutes->users()->pluck('id');
        $remarks = $docRoutes->remarks;
        $date_received = "";

        return response()->json([
            'status' => "success",
            $docRoutes,
            'route_id' =>   $request->id,
            'divisions' =>  $divisions,
            'recepients' =>  $recepients,
            'date_received' =>  $date_received,
            'actions' =>  $actions,
            'remarks' =>  $remarks,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DocRoute  $docRoute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $docroute = DocRoutes::find($request->route_id);
        $docroute->remarks = $request->remarks;
        $docroute->save();
        $docroute->users()->sync($request->route_user);
        $sync = $docroute->actions()->sync($request->action);
        $docroute->document->usersAssignedTo()->sync($request->route_user);
        $docroute->document->usersAssignedTo()->detach($sync['detached']);

        return response()->json([
            'message' => 'Data updated successfully!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DocRoute  $docRoute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            $docroute = DocRoutes::find($request->id);
            $docroute->document->usersAssignedTo()->detach();
            $docroute->delete();
    
            return response()->json([
                'message' => 'Data deleted successfully!'
            ]);
          
        } catch (Exception $exception) {

            return response()->json([
                'message' => $exception
            ]);

        }



    }
}
