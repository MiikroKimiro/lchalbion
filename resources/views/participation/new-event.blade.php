@extends ('layouts.main')

@section ('content')
    @parent

    <h1 class="page-header">New Event</h1>
    <div class="col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">Enregister un nouvel Event</div>
            <div class="panel-body">
                <form role ="form" class="form-horizontal col-sm-10">
                    <div class="form-group">
                        <label class="control-label col-sm-3">Event Leader</label>
                        <div class="col-sm-8">
                            {!!  Form::select('eventLead', $members_list, $userID, array('class' => 'form-control', 'id' => 'eventLead')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Event name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="eventName" placeholder="Event name" name="eventName">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Event type</label>
                        <div class="col-sm-8">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="eventType" id="eventType1" value="PvP" checked>
                                    PvP
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="eventType" id="eventType2" value="PvE">
                                    PvE
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Comments</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="3" id="eventComments" name="eventComments"></textarea>
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 30px">
                        <div class=" col-sm-3 col-sm-offset-9">
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection