<?php

namespace App\Http\Controllers;


use Request;
use DB;
use App\User;
use App\Events;
use App\Paps;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ParticipationController extends Controller
{
    public function getNewEvent()
    {
        $members_list = User::lists('name', 'id');

        $userID = Auth::user()->id;
        $userName = Auth::user()->name;
        $userLevel = Auth::user()->userLevel;

        return view('participation/new-event', ['members_list' => $members_list, 'userName' => $userName, 'userLevel' => $userLevel, 'userID' => $userID]);
    }

    public function postNewEvent(Request $request){


        $input = Request::all();
        $Events = new Events();

        $Events -> userID = Auth::user()->id;
        $Events -> leadID = $input['eventLead'];
        $Events -> eventName = $input['eventName'];
        $Events -> eventType = $input['eventType'];
        $Events -> eventComment = $input['eventComments'];
        $hashedValue = Hash::make($input['eventLead'] . $input['eventName']);
        $Events -> hashedID = $hashedValue;
        $Events -> save();
        
        $eventID = Events::all()->last()->id;
        $eventLeadID = $input['eventLead'];
        $eventName = $input['eventName'];
        
        $Paps = new Paps();
        $Paps->userID = $eventLeadID;
        $Paps->eventID = $eventID;
        $Paps->save();

        
        $eventPoster = Auth::user()->name;
        $eventLead = User::where('id', '=', "$eventLeadID")->value('name');
        //$pap
        $papURL = route('memberRegistered',  ['event' => $hashedValue]);

        return view('participation/event-registered',['eventName' => $eventName, 'eventPoster' => $eventPoster, 'eventLead' => $eventLead, 'papURL' => $papURL]);

    }

    public function registerPap(){

        $input = Request::all();
        $eventHashed = $input['event'];
        $queryEvent = Events::where('hashedID', '=', $eventHashed);
        $query = $queryEvent->get();
        $eventID = $queryEvent->value('id');
        $eventName = $queryEvent->value('eventName');
        $user = Auth::user()->id;
        $queryEventValidation = Paps::where('userID', '=', $user, 'and')->where('eventID', '=', $eventID)->get();

        if($queryEventValidation -> isEmpty()) {

            $Paps = new Paps();
            $Paps->userID = $user;
            $Paps->eventID = $eventID;
            $Paps->save();

            $answer = "<h4>Your participation to the Event <strong>$eventName</strong> has been successfully Registered!</h4>";

            return view('participation/pap-registered', ['answer'=>$answer, 'eventName' => $eventName ]);
        }
        else {

            $answer = "<h4>Your participation to the Event <strong>$eventName</strong> has already been registered.</h4>";

            return view('participation/pap-registered', ['answer'=>$answer, 'eventName' => $eventName ]);
        }
    }

    public function getDashboard(){

        $events = Events::all();
        $paps = Paps::all();
        $user = Auth::user()->id;
        $papsUser = DB::table('participation') 
            -> select('eventID')
            -> where('userID', '=', $user);
        $papsUserget = $papsUser -> get();
        $papsUserValue = $papsUser -> lists('eventID');
        $papsCount = $papsUser -> count();
        $papsType = DB::table('events')
            ->join('participation', 'events.id', '=', 'participation.eventID')->where('id', '=', $papsUserValue);
        $papsPvP = $papsType -> where('eventType', '=', 'PvP')->get();
        //$papsPvE = $papsType -> where('eventType', '=', 'PvE')->get();
          
        return $papsPvP;


    }
}
