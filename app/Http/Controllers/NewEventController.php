<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\DomCrawler\Form;

class NewEventController extends Controller
{
    public function getNewEvent()
    {
        $members_list = User::lists('name', 'id');
        $userID = Auth::user()->id;
        $userName = Auth::user()->name;
        $userLevel = Auth::user()->userLevel;
        return view('participation/new-event', array('members_list' => $members_list, 'userName' => $userName, 'userLevel' => $userLevel, 'userID' => $userID));
    }

}