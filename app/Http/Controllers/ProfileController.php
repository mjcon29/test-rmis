<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\Document;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {



        $current_user = User::where('id', Auth::id())->first();
        $division_name = $current_user->division->name;
        $division = $current_user->division_id;
        // $users = getSelectData('User', [['id', '!=', Auth::id()]]);
        $user = Auth::user();

        if($user->hasRole('superadmin')){
            $users = getSelectData('User', [['id', '!=', Auth::id()]]);
        }
        else {
            $users = getSelectData('User', [['id', '!=', Auth::id()],['division_id','=',Auth::user()->division->id]]);
        }


        $actions = getSelectData('Action');
        $control_id = now()->year . "-" . $division;
        $docs = getDocList();

        return view('profile.edit', [
            'overdues'  =>  getDocListOverdues($docs)->count(),
            'dueToday'  =>  getDocListDuesToday($docs)->count(),
            'dueSoon'  =>  getDocListDuesSoon($docs)->count(),
            'recent'  =>    getDocListRecent($docs)->count(),
            'archive'  =>    getDocListArchive($docs)->count(),
            'active'  =>    getDocListActivePerUser($docs)->count(),
            'forSign'  =>    getDocListForSign($docs)->count(),
            'forAction'  =>    getDocListForAction($docs)->count(),
            'filter'    => "",
            'users'  =>    $users,
            'actions'  =>    $actions,
            'division'  => $division,
            'division_name' =>  "RECENT - ",
            'activePage' => "dashboard"
        ]);
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        auth()->user()->update($request->all());

        return back()->withStatus(__('Profile successfully updated.'));
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withStatusPassword(__('Password successfully updated.'));
    }
}
