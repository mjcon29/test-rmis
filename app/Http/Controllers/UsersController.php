<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Office;
use App\Models\Division;
use App\Models\DocType;
use App\Models\Document;
use App\Models\user;
use App\Models\Role;
use Carbon\Carbon;
use CrestApps\CodeGenerator\Support\Arr;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Log;




class UsersController extends Controller
{

    /**
     * Display a listing of the users.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $offices = Office::all();
        $divisions = Division::all();
        $roles = Role::all();

        $docs = getDocList();


        return view('users.index', [
            'section' => 'users',
            'titlePage' => 'users',
            'users' => user::with('division')->paginate(15),
            'origin_offices'  =>  DocType::orderBy('id', 'desc')->paginate(10),
            'overdues'  =>  getDocListOverdues($docs)->count(),
            'dueToday'  =>  getDocListDuesToday($docs)->count(),
            'dueSoon'  =>  getDocListDuesSoon($docs)->count(),
            'recent'  =>    getDocListRecent($docs)->count(),
            'archive'  =>    getDocListArchive($docs)->count(),
            'active'  =>    getDocListActivePerUser($docs)->count(),
            'forSign'  =>    getDocListForSign($docs)->count() ,
            'forAction'  =>    getDocListForAction($docs)->count() ,
            'filter'    => "",
            'offices' => $offices,
            'divisions' => $divisions,
            'roles' => $roles,
        ]);
    }

    /**
     * Show the form for creating a new user.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $Divisions = Division::pluck('name', 'id')->all();

        return view('users.create', compact('Divisions'));
    }

    /**
     * Store a new user in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */

    public function store(Request $request)
    {
        $msg    =   "";
        try {

            $request->validate([
                'email' => 'required|email'
            ]);

            
            // 'email' => 'romelmar.alejandrino@gmail.com',
            // 'name' => 'Romelmar Aleajndrino',
            // 'designation' => 'IT Specialist',
            // 'username' => 'Administrator',
            // 'role_id' => '10',
            // 'id' => '2',
            // 'office_id' => '1',
            // 'division_id' => '1',

            $input = $request->all();

            if(Auth::user()->hasRole('superadmin')){
                $role_id = $input['role_id'];
                unset($input['role_id']);
                
            }
            else {
                $role_id = 2;
            }

            $dummy = array_merge($input, ['email_verified_at' => now(), 'password' => Hash::make('password')]);
            $user_new = User::create($dummy);
            $user = User::find($user_new->id);
            $user->attachRole($role_id);

            $status    =   200;
            $msg =   '<b>' . $request->name . '</b> added successfully';
        } catch (\Exception $e) {
            $msg    =   $e->getMessage();
            $status =   'exception';
            return response()->json(['status' => 'exception', 'msg' => $msg]);
        }

        return response()->json([
            'status' => $status,
            'msg'   =>  $msg
        ]);
    }

    /**
     * Display the specified user.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        // $user = user::with('division')->findOrFail($id);

        // return view('users.show', compact('user'));

        $today =  Carbon::now('Asia/Manila')->format('Y-m-d');
        $doc_list = docList();
        $overdues = Document::orderBy('updated_at', 'desc')->where("deadline", "<", $today)->whereIn('id', $doc_list);
        $dueToday = Document::orderBy('updated_at', 'desc')->where("deadline", "=", $today)->whereIn('id', $doc_list);

        return view('users.show', [
            'section' => 'users',
            'titlePage' => 'users',
            'user' =>  user::with('division')->findOrFail($id),
            'origin_offices'  =>  DocType::orderBy('id', 'desc')->paginate(10),
            // 'overdues'  =>  duesCount("overdues")->count(),
            // 'overduesAll'  =>  duesCount("overduesAll")->count(),
            // 'dueToday'  =>  duesCount("dueToday")->count(),
            // 'dueSoon'  =>  duesCount("dueSoon")->count(),
            // 'recent'  =>    duesCount("recent")->count(),
            // 'archive'  =>    duesCount("archive")->count(),
        ]);
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    // public function edit($id)
    // {
    //     $user = user::findOrFail($id);
    //     $Divisions = Division::pluck('name','id')->all();

    //     return view('users.edit', compact('user','Divisions'));
    // }
    public function edit(Request $request)
    {
        $where = array('id' => $request->id);
        // $users = User::where($where)->first();
        $users = User::find($request->id);
        $roles = $users->roles()->pluck('id');


        return response()->json([
            'status' => 200,
            'user' => $users,
            'roles' => $roles,
            // $divisions
        ]);
    }
    /**
     * Update the specified user in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */

    public function update(Request $request)
    {
        // Log::info(isset($request->role_id));

        $user = User::find($request->id);
        $user->email = $request->email;
        $user->name = $request->name;
        $user->designation = $request->designation;
        $user->username = $request->username;
        $user->office_id = $request->office_id;
        $user->division_id = $request->division_id;
        
        $user->save();


        if(isset($request->role_id)){
            $role = array();
            foreach($request->role_id as $key => $value){
                $role = Arr::add($role, $value,['user_type' =>'App\Models\User']);
            }

            $user->roles()->sync($role);
        }

        
        return response()->json([
            'status' => 200,
            'msg'   => '<b>' . $request->name . '</b> Has been updated successfully'
        ]);
    }

    /**
     * Remove the specified user from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy(Request $request)
    {
        $user_rec = User::find($request->id);


        $user_rec->delete();

        return response()->json([
            'message' => 'Data deleted successfully!'
        ]);
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
            'name' => 'required|string|min:1|max:255',
            'email' => 'required|string|min:1|max:255',
            'username' => 'nullable|string|min:0|max:255',
            'email_verified_at' => 'nullable|date_format:j/n/Y g:i A',
            'password' => 'required|string|min:1|max:255',
            'remember_token' => 'nullable|string|min:0|max:100',
            'division_id' => 'required',
        ];


        $data = $request->validate($rules);




        return $data;
    }

    public function fetchAll()
    {
        $auth_user = Auth::user();
        // $users = User::all();
        if($auth_user->hasRole(['superadmin'])){
            $users = User::all();
        }     
       else  $users = User:: where('division_id', Auth::user()->division_id)->get();

        $fields = [
            'Email',
            'Name',
            'Username',
            'Division',
            // 'Permisions',
            'Actions'
        ];

        $output = '';
        if ($users->count() > 0) {
            $output .= '<table id="all_divisions" class="table table-striped table-sm align-middle">
            <thead>
              <tr>';

            foreach ($fields as $field) $output .= '<th class="TH-' . $field . '">' . $field . '</th>';

            $output .= '
            </tr>
            </thead>
            <tbody>';
            foreach ($users as $user) {
                $output .= '<tr>
                <td class="text-lowercase">' . $user->email . '</td>
                <td>' . $user->name . '</td>
                <td>' . $user->username . '</td>
                <td>' . '<p ><small class="font-weight-bold text-primary">' . $user->division->name . '</small></p></td>
                ';
                $output .='<td class="text-center">';
                
                if(Auth::user()->hasPermission('users-update')){
                    $output .= '
                    
                        <a id="' . $user->id . '"  class="btn btn-success mx-1 editIcon editUser"  data-toggle="modal" data-target="#editUserModal" data-title="Edit user" data-dbname="users" data-db="' . route('users.user.edit', $user->id) . '" data-route="' . route('update.user', $user->id) . '">
                            <i class="bi bi-pencil"></i>
                        </a>';
                }

                

                if($auth_user->hasRole('superadmin')){
                    $output .= '
                    <a id="del_' . $user->id . '" class="btn btn-danger mx-1 deleteIcon deleteDoc">
                        <i class="bi bi-trash"></i>
                    </a>                        
                ';

                }

                
                $output .='</td>';

                $output .= '</tr>';
            }
            $output .= '</tbody></table>';
            echo $output;
        } else {
            echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }
    }

    public function fetchAllEmployeeDivision()
    {


        $divisionActions =  user::with('division')->get();

        return response()->json([
            'status' => 200,
            'actions' =>  $divisionActions
        ]);
    }
}
