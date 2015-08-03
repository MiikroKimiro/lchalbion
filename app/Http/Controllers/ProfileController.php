<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
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
        
        return view('profile' , ['userName' => $userName]);
    }
    
    public function showProfile($userID) {
        
        $ownProfil = false;
        if ($userID == Auth::user()->id) {
            $ownProfil = true;
        }
        
        $user = User::find($userID);
        $error = null;
        $userName = null;
        $skills = null;
        if ($user == null) {
            $error = "<h4>L'utilisateur n'existe pas.</h4>";
            return view('profile', ['error' => $error])->with('userID', $userID);
        } else {
            $userName = $user->name;
        }
        
        $skills = Skills::firstOrCreate(['userID' => $userID]);
        
        if ($skills->fightingSkills == null) {
            // 00 - Trainee Fighter
            $fightingSkills = "00.";
            // ************** WARRIOR WEAPON / PLATE ************** //
            // 01 - Journayman Warrior
            $fightingSkills .= "00.";
            // 02/06 - Sword Masteries
            $fightingSkills .= "00.00.00.00.00.";
            // 07/11 - Axe Masteries
            $fightingSkills .= "00.00.00.00.00.";
            // 12/16 - Hammer Masteries
            $fightingSkills .= "00.00.00.00.00.";
            // 13/17 - Shield Masteries
            $fightingSkills .= "00.00.00.00.00.";
            // 18/22 - Crossbow Masteries
            $fightingSkills .= "00.00.00.00.00.";
            // 23/27 - Plate Chest Masteries
            $fightingSkills .= "00.00.00.00.00.";
            // 28/32 - Plate Helmet Masteries
            $fightingSkills .= "00.00.00.00.00.";
            // 33/37 - Plate Boots Masteries
            $fightingSkills .= "00.00.00.00.00.";
            // ************** RANGE WEAPON / LEATHER ************** //
            // 38 - Journayman Ranger
            $fightingSkills .= "00.";
            // 39/43 - Spear Masteries
            $fightingSkills .= "00.00.00.00.00.";
            // 44/48 - Bow Masteries
            $fightingSkills .= "00.00.00.00.00.";
            // 49/53 - Throwing Masteries
            $fightingSkills .= "00.00.00.00.00.";
            // 54/58 - Totem Masteries
            $fightingSkills .= "00.00.00.00.00.";
            // 59/63 - Nature Staff Masteries
            $fightingSkills .= "00.00.00.00.00.";
            // 64/68 - Leather Chest Masteries
            $fightingSkills .= "00.00.00.00.00.";
            // 69/73 - Leather Helmet Masteries
            $fightingSkills .= "00.00.00.00.00.";
            // 74/78 - Leather Boots Masteries
            $fightingSkills .= "00.00.00.00.00.";
            // ************** MAGIC WEAPON / CLOTH   ************** //
            // 79 - Journayman Magic
            $fightingSkills .= "00.";
            // 80/84 - Firestaff MasteMies
            $fightingSkills .= "00.00.00.00.00.";
            // 85/89 - Cursed Masteries
            $fightingSkills .= "00.00.00.00.00.";
            // 90/94 - Arcane Masteries
            $fightingSkills .= "00.00.00.00.00.";
            // 95/99 - Book Masteries
            $fightingSkills .= "00.00.00.00.00.";
            // 100/104 - Holy Staff Masteries
            $fightingSkills .= "00.00.00.00.00.";
            // 105/109 - Cloth Chest Masteries
            $fightingSkills .= "00.00.00.00.00.";
            // 110/114 - Cloth Helmet Masteries
            $fightingSkills .= "00.00.00.00.00.";
            // 115/119 - Cloth Boots Masteries
            $fightingSkills .= "00.00.00.00.00.";
            
            $skills->fightingSkills = $fightingSkills;
        }
        
        if ($skills->craftingSkills == null) {
            $craftingSkills = "00.";
            
            $skills->craftingSkills = $craftingSkills;
        }
        
        $skills->save();
        
        // Alimentation des skills de fight sur la page
        $profile = Profile::firstOrNew(['userID' => $userID]);
        $profile->tf = explode($skills->fightingSkills)[0];
        
        return view('profile', ['ownProfile' => $ownProfil, 'userName' => $userName, 'error' => $error, 'profile' => $profile])->with('userID', $userID);
    }

}