<?php

namespace App\Http\Controllers;


use App\Http\Requests\EventRequest;
use App\Http\Controllers\Controller;

use DB;
use Carbon\Carbon;
use App\User;
use App\Events;
use App\Paps;
use Illuminate\Support\Facades\Auth;
use JavaScript;


/**
 * Class EventController
 * @package App\Http\Controllers
 */
class EventController extends Controller
{

    /**
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $user = Auth::user();
        if($user->userLevel >= 20){
            $events = Events::join('users', 'users.id', '=', 'events.leadID')
                ->get(['events.id', 'users.name', 'eventName', 'events.created_at', 'eventType', 'eventComment'])->toArray();
        } elseif ($user->userLevel > 0 and $user->userLevel < 20) {
            $events = Events::join('users', 'users.id', '=', 'events.leadID')
                ->where('users.id', '=', $user->id)
                ->get(['events.id', 'users.name', 'eventName', 'events.created_at', 'eventType', 'eventComment'])->toArray();
        }

        // Event URL maker
        $eventURLs = [];
        foreach ($events as $event) {
            $eventURLs[] = ["id" => $event->id, "eventURL" => route('participation.events.show', $event->eventName)];
        }

        // Table dataset
        $dataSet = [];
        foreach ($events as $k){
            foreach ($eventURLs as $x ) {
                if ($k['id'] == $x['id']){
                    $dataSet[] = [
                        'id' => $k['id'],
                        'leadName' => $k['name'],
                        'eventName' => $k['eventName'],
                        'eventDate' => $k['created_at'],
                        'eventType' => $k['eventType'],
                        'eventComment' => $k['eventComment'],
                        'eventURL' => $x['eventURL']
                    ];
                }
        }

        }

        $members_list = User::orderBy('name')->lists('name', 'id');
        $eventList = Events::orderBy('created_at')->lists('eventName');

        JavaScript::put([
            'dataSet' => json_encode($dataSet)
        ]);

        return view('participation/pap-events', compact('members_list', 'eventList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  EventRequest  $request
     * @return Response
     */
    public function store(EventRequest $request)
    {
        $user = Auth::user();
        $eventName = $request['newEventName'];

        $Events = new Events();

        $Events -> userID = $user['id'];
        $Events -> leadID = $request['newEventLead'];
        $Events -> eventName = $eventName;
        $Events -> eventType = $request['newEventType'];
        $Events -> eventComment = $request['newEventComments'];
        $Events -> save();


        return redirect(route('participation.events.show', $eventName));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $hashedValue
     * @return Response
     */
    public function show($eventName)
    {
        $user = Auth::user();
        $event = Events::where('eventName', '=', $eventName);
        $eventLeadID = $event->leadID;
        $eventLead = User::where('id', '=', "$eventLeadID")->value('name');
        $eventName = $event->get('eventName');
        $eventPoster = $user['name'];

        $papURL = route('memberRegistered',  ['event' => $eventName]);

        if($eventLeadID <> $user->id){

            $eventID = $event->get('id');

            $Paps = new Paps();
            $Paps->userID = $eventLeadID;
            $Paps->eventID = $eventID;
            $Paps->save();

            $PapsUser = new Paps();
            $PapsUser->userID = $user['id'];
            $PapsUser->eventID = $eventID;
            $PapsUser->save();

            $answer = "<h4>Thank you <strong>{$eventPoster}</strong>!</h4>
                    <h4>The Event of <strong>{$eventLead}</strong>: <strong>{$eventName}</strong> has been successfully registered!</h4>";

            return view('participation/event-registered', compact('eventName', 'eventPoster', 'eventLead', 'papURL', 'answer', 'eventID'));
        }
        else {

            $eventID = $event->get('id');

            $Paps = new Paps();
            $Paps->userID = $eventLeadID;
            $Paps->eventID = $eventID;
            $Paps->save();

            $answer = "<h4>Thank you <strong>{$eventPoster}</strong>!</h4>
                <h4>Your Event <strong>{$eventName}</strong> has been successfully registered!</h4>";

            return view('participation/event-registered',compact('eventName', 'eventPoster', 'eventLead', 'papURL', 'answer', 'eventID'));

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $hashedID
     * @return Response
     */
    public function update(NewEventRequest $request, $hashedID)
    {
        return dd($hashedID);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($eventID)
    {
        $event = Events::findOrFail($eventID);

        $event->delete();
        $deleteMessage = 'The Event has been successfully deleted!';
        //return redirect('participation/new-event', compact('deleteMessage'));
        dd($eventID);
    }
}
