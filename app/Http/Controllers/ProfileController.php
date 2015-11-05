<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Skills;
use App\Profile;

class ProfileController extends Controller
{
    /**
     * Update the user's profile.
     *
     * @param  Request  $request
     * @return Response
     */
    public function updateProfile(Request $request)
    {
        if ($request->user()) {

        }
    }

    public function getProfile() {
        
        $userName = Auth::user()->name;
        
        return view('profile/profile' , ['userName' => $userName]);
    }
    
    public function showProfile($userID) {
        
        $enabledDisableEdit = 'disabled';
        if ($userID == Auth::user()->id) {
            $enabledDisableEdit = 'enabled';
        }
        
        $user = User::find($userID);
        $error = null;
        $userName = null;
        $skills = null;
        if ($user == null) {
            $error = "<h4>L'utilisateur n'existe pas.</h4>";
            return view('profile/profile', ['error' => $error])->with('userID', $userID);
        } else {
            $userName = $user->name;
        }
        
        $skills = Skills::firstOrCreate(['userID' => $userID]);
        $skills->save();
        
        return view('profile/profile', ['enabledDisableEdit' => $enabledDisableEdit, 'userName' => $userName, 'error' => $error, 'skills' => $skills])->with('userID', $userID);
    }
    
    public function saveProfile(Request $request, $userID) {
        
        $skills = Skills::firstOrCreate(['userID' => $userID]);

        $input = $request->all();
        
        if (!$skills->update($input)) {
            return Redirect::back()
                    ->with('message', 'Something wrong happened while saving your model')
                    ->withInput();
        }
        
        $enabledDisableEdit = 'disabled';
        if ($userID == Auth::user()->id) {
            $enabledDisableEdit = 'enabled';
        }
        $error = null;
        $user = User::find($userID);
        $userName = $user->name;
    
        return view('profile/profile', ['enabledDisableEdit' => $enabledDisableEdit, 'userName' => $userName, 'error' => $error, 'skills' => $skills])->with('userID', $userID);
    }

}