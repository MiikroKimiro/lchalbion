<?php

namespace App\Http\Controllers;


use App\Http\Requests\NewEventRequest;
use DB;
use Carbon\Carbon;
use App\User;
use App\Events;
use App\Paps;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Participation2Controller extends Controller
{
    public function getNewEvent()
    {
        $members_list = User::orderBy('name')->lists('name', 'id');

        return view('participation/new-event', ['members_list' => $members_list]);

    }

    public function postNewEvent(NewEventRequest $request){

        $input = $request;
        $eventLeadID = $request['eventLead'];
        $user = Auth::user();
        $eventLead = User::where('id', '=', "$eventLeadID")->value('name');
        $Events = new Events();

        $Events -> userID = $user->id;
        $Events -> leadID = $eventLeadID;
        $Events -> eventName = $request['eventName'];
        $Events -> eventType = $request['eventType'];
        $Events -> eventComment = $request['eventComments'];
        $hashedValue = Hash::make($request['eventLead'] . $request['eventName']);
        $Events -> hashedID = $hashedValue;
        $Events -> save();

        $eventName = $request['eventName'];
        $eventPoster = $user->name;
        $papURL = route('memberRegistered',  ['event' => $hashedValue]);

        if($eventLeadID <> $user->id){

            $eventID = Events::where('eventName', '=', $input['eventName'])->value('id');

            $Paps = new Paps();
            $Paps->userID = $eventLeadID;
            $Paps->eventID = $eventID;
            $Paps->save();

            $PapsUser = new Paps();
            $PapsUser->userID = $user->id;
            $PapsUser->eventID = $eventID;
            $PapsUser->save();

            $answer = "<h4>Thank you <strong>{$eventPoster}</strong>!</h4>
                    <h4>The Event of <strong>{$eventLead}</strong>: <strong>{$eventName}</strong> has been successfully registered!</h4>";

            return view('participation/event-registered',['eventName' => $eventName, 'eventPoster' => $eventPoster, 'eventLead' => $eventLead, 'papURL' => $papURL, 'answer' => $answer]);
        }
        else {

            $eventID = Events::where('eventName', '=', $input['eventName'])->value('id');

            $Paps = new Paps();
            $Paps->userID = $eventLeadID;
            $Paps->eventID = $eventID;
            $Paps->save();

            $answer = "<h4>Thank you <strong>{$eventPoster}</strong>!</h4>
                <h4>Your Event <strong>{$eventName}</strong> has been successfully registered!</h4>";

            return view('participation/event-registered',['eventName' => $eventName, 'eventPoster' => $eventPoster, 'eventLead' => $eventLead, 'papURL' => $papURL, 'answer' => $answer]);

        }
    }

    public function registerPap(){

        $input = Request::all();
        $eventHashed = $input['event'];
        $queryEvent = Events::where('hashedID', '=', $eventHashed);
        $query = $queryEvent->get();
        $eventID = $queryEvent->value('id');
        $eventName = $queryEvent->value('eventName');
        $user = Auth::user();
        $queryEventValidation = Paps::where('userID', '=', $user->id, 'and')->where('eventID', '=', $eventID)->get();

        if($queryEventValidation -> isEmpty()) {

            $Paps = new Paps();
            $Paps->userID = $user;
            $Paps->eventID = $eventID;
            $Paps->save();

            $answer = "<h4>Your participation to the Event <strong>$eventName</strong> has been successfully Registered!</h4>";

            return view('participation/pap-registered', ['answer'=>$answer, 'eventName' => $eventName]);
        }
        else {

            $answer = "<h4>Your participation to the Event <strong>$eventName</strong> has already been registered.</h4>";

            return view('participation/pap-registered', ['answer'=>$answer, 'eventName' => $eventName]);
        }
    }

    // ---------------------  DASHBOARD USERS ---------------------------------------------------
    public function getUserDashboard(){
        
        Carbon::setLocale('fr');
        $userID = Auth::user()->id;
       //$userID = 2;
        $userName = Auth::user()->name;
        $first = Carbon::create()->startOfMonth();
        $last = Carbon::create()->endOfMonth();
        
        $papsUser = DB::table('participation')
            -> where('userID', '=', $userID)
            -> lists('eventID');
        $papsTotalUser = DB::table('events')
            -> where('participation.created_at', '>=',$first)
            -> join('participation', function($join){
                $join   -> on('events.id', '=', 'participation.eventID')
                    -> where('participation.userID', '=', Auth::user()->id);
            })
            -> count();
        $papsUserPvP = DB::table('events')
            -> join('participation', function($join){
                $join   -> on('events.id', '=', 'participation.eventID')
                    -> where('participation.userID', '=', Auth::user()->id);
            })
            -> where('eventType', '=', 'PvP')
            -> count();
        $papsUserPvE = DB::table('events')
            -> join('participation', function($join){
                $join   -> on('events.id', '=', 'participation.eventID')
                    -> where('participation.userID', '=', Auth::user()->id);
            })
            -> where('eventType', '=', 'PvE')
            -> count();
        $papsTotalMonth = DB::table('participation')
            -> where('created_at', '>=',$first)
            -> count();
        $papsUserRatio = $papsTotalMonth - $papsTotalUser;
        
        //-------------------------
        

        
        $papsTotalMonthNDay = Paps::where('created_at', '>=', $first)
            ->where('created_at','<=', $last)
            ->groupBy('date')
            ->orderBy('date', 'DESC')
            ->get([
                DB::raw('Date(created_at) as date'),
                DB::raw('COUNT(*) as papsTotal')
                ]);
               
        $papsUserMonthNDay = Paps::where('created_at', '>=', $first)
            ->where('created_at','<=', $last)
            ->where('userID', '=', $userID)
            ->groupBy('date')
            ->orderBy('date', 'DESC')
            ->get([
                DB::raw('Date(created_at) as date'),
                DB::raw('COUNT(*) as papsUser')
                ]);

    
       $monthData = [];
       foreach($papsTotalMonthNDay as $k){
         foreach($papsUserMonthNDay as $x){
             if($k->date == $x->date){
                 $monthData[] = ['date' => $k->date, 'papsTotal' => $k->papsTotal, 'papsUser' => $x->papsUser];
             }
         } 
       }

        return dd($papsUserMonthNDay);
            //view('participation/pap-dashboard', ['papsTotalUser'=>$papsTotalUser, 'papsUserRatio'=>$papsUserRatio, 'papsUserPvP'=>$papsUserPvP, 'papsUserPvE'=>$papsUserPvE, 'monthData'=> (($monthData))]);
    } 
    
    // ---------------------- DASHBOARD REFERENTS -------------------------
    public function getAdminDashboard(){
            $first = Carbon::create()->startOfMonth();
            $last = Carbon::create()->endOfMonth();
            
            /*$papsAllUsers =
            Paps::select('userID')
                ->groupBy('userID')
                ->where('created_at', '>=', $first)
                ->where('created_at','<=', $last)
                ->count();*/
            //$top3Users = Paps::select(DB::raw(''))
        
        return $papsAllUsers;
    }
}