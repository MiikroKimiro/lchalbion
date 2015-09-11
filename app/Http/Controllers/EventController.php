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
use Illuminate\Support\Facades\Hash;
use JavaScript;


class EventController extends Controller
{

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

        $user = Auth::user()->id;

        $events = Events::join('users', 'users.id', '=', 'events.leadID')
           // ->where('events.leadID', '=', $user)
            ->get(['events.id', 'users.name', 'eventName', 'events.created_at', 'eventType', 'eventComment'])->toArray();

        $hashedIDs = Events::get(['id', 'hashedID']);

        // Event URL maker
        $eventURLs = [];
        foreach ($hashedIDs as $hashedID) {
            $eventURLs[] = ["id" => $hashedID->id, "eventURL" => route('memberRegistered') . '?' . $hashedID->hashedID];
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
        $eventJson = Events::orderBy('created_at')->get(['eventName', 'id'])->toArray();


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
        $members_list = User::orderBy('name')->lists('name');

        return view('participation/new-event', ['members_list' => $members_list]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  NewEventRequest  $request
     * @return Response
     */
    public function store(NewEventRequest $request)
    {
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

            return view('participation/event-registered', compact('eventName', 'eventPoster', 'eventLead', 'papURL', 'answer', 'eventID'));
        }
        else {

            $eventID = Events::where('eventName', '=', $input['eventName'])->value('id');

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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
