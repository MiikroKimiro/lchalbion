@extends ('layouts.main')

@section ('content')
    @parent

    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">Manage Events</h1>
            <div class="panel">
                <div class="panel-body">
                    <div class="col-sm-12">
                        <table id="eventsTbl" class="table table-hover table-condensed table-striped" width="100%"></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeBtn"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="eventModalLabel">New message</h4>
                </div>
                <div class="modal-body">
                    <div class="panel">
                        <div class="panel-body">
                            {!! Form::open(['url' => 'participation/events', 'class' => 'form-horizontal', 'id' => 'modifyForm', 'hidden'=> 'hidden', 'method'=>'patch']) !!}
                                <div class="form-group">
                                    {!! Form::label('modifiedEventSelect', 'Modified event name:', ['class'=> 'control-label']) !!}
                                    {!! Form::text('modifiedEventSelect', null, ['class'=>'form-control input-sm ', 'id'=>'modifiedEventSelect', 'disabled']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('modifiedEventNameInput', 'Modified event new name:', ['class'=> 'control-label']) !!}
                                    {!! Form::text('modifiedEventNameInput', null, ['class'=>'form-control input-sm', 'id'=>'modifiedEventInput']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('modifiedEventTypeRadios', 'Modified event new type', ['class' => 'control-label']) !!}
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="modifiedEventTypeRadios" id="eventType1" value="PvP" checked>
                                            PvP
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="modifiedEventTypeRadios" id="eventType2" value="PvE">
                                            PvE
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Modify class', ['class'=>'btn btn-primary btn-sm btn-block', 'id'=>'modifySubmitBtn']) !!}
                                </div>
                            {!! Form::close() !!}
                            {!! Form::open(['url' => 'participation/events', 'class' => 'form-horizontal', 'id' => 'deleteForm', 'hidden'=> 'hidden', 'method'=>'delete']) !!}
                                <div class="form-group">
                                    {!! Form::label('deletedEventSelect', 'Deleted event name:', ['class'=> 'control-label']) !!}
                                    {!! Form::text('deletedEventSelect', null, ['class'=>'form-control input-sm ', 'id'=>'deletedEventSelect', 'disabled']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Delete class', ['class'=>'btn btn-danger btn-sm btn-block', 'id'=>'deleteSubmitBtn']) !!}
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section ('customScripts')
    <script src="{{URL::asset('assets/js/modules/manageEvents.js')}}" type="text/javascript"></script>
@endsection