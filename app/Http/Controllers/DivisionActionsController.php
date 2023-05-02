<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Action;
use App\Models\Division;
use App\Models\division_action;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DivisionActionsController extends Controller
{

    /**
     * Display a listing of the division actions.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $divisionActions = division_action::with('division','action')->paginate(25);
        $overdues =  duesCount("overdues")->count();
        $dueToday  =  duesCount("dueToday")->count();
        $recent  =    duesCount("recent")->count();
        $activePage = "dashboard";

        return view('division_actions.index', compact('divisionActions','overdues','dueToday','recent','activePage'));


        
    }


    public function fetchAll(){

        $user_division = Auth::user()->division_id;

        $divisionActions = division_action::with('division','action')->where('division_id',$user_division)->get('action_id','action.name');
        
        return response()->json([
            'status' => 200,
            'actions' =>  $divisionActions
        ]);
    }
    /**
     * Show the form for creating a new division action.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $Divisions = Division::pluck('name','id')->all();
        $Actions = Action::pluck('name','id')->all();
        
        return view('division_actions.create', compact('Divisions','Actions'));
    }

    /**
     * Store a new division action in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            division_action::create($data);

            return redirect()->route('division_actions.division_action.index')
                ->with('success_message', 'Division Action was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified division action.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $divisionAction = division_action::with('division','action')->findOrFail($id);

        return view('division_actions.show', compact('divisionAction'));
    }

    /**
     * Show the form for editing the specified division action.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $divisionAction = division_action::findOrFail($id);
        $Divisions = Division::pluck('name','id')->all();
$Actions = Action::pluck('name','id')->all();

        return view('division_actions.edit', compact('divisionAction','Divisions','Actions'));
    }

    /**
     * Update the specified division action in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $divisionAction = division_action::findOrFail($id);
            $divisionAction->update($data);

            return redirect()->route('division_actions.division_action.index')
                ->with('success_message', 'Division Action was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified division action from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $divisionAction = division_action::findOrFail($id);
            $divisionAction->delete();

            return redirect()->route('division_actions.division_action.index')
                ->with('success_message', 'Division Action was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
                'division_id' => 'required',
            'action_id' => 'required', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
