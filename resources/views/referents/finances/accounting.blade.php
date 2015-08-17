@extends ('layouts.main')

@section ('content')
    @parent
<div class="row" style="margin-top: 3%">
    <div class="col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong><i class="fa fa-plus fa-fw"></i> New Entry</strong>
            </div>
            <div class="panel-body">
            {!! Form::open(['action' => 'ReferentsController@postNewEntry', 'class' => 'form-horizontal']) !!}
                <div class="form-group form-group-sm">
                    {!! Form::label('concept', 'Concept', ['class'=>'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                    {!! Form::text('concept', null, ['class'=>'form-control', 'placeholder'=>'Concept']) !!}
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    {!! Form::label('accClass', 'Class', ['class'=>'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::select('accClass', $classList, null,  ['class'=>'form-control', 'id'=>'accClass']) !!}
                        <button type="button" class="btn btn-default btn-xs" style="margin-top: 5px" id="addNewClassBtn">Add new class</button>
                     </div>
                </div>
                <div class="form-group form-group-sm">
                    {!! Form::label('operation', 'Operation', ['class'=>'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        <div class="input-group input-group-sm">
                            <span class="input-group-btn">
                                <button class="btn btn-success" type="button" id="amountButton" name="amountButton"><i class="glyphicon glyphicon-plus" id="amountBtnGlyph"></i></button>
                            </span>
                            <input type="text" class="form-control" placeholder="Amount" name="amount">
                            <input id="amountOperator" name="amountOperator" value="plus" hidden>
                        </div>

                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <div class="col-sm-10 col-sm-offset-2">
                    {!! Form::submit('Submit', ['class'=>'btn btn-default btn-sm btn-block']) !!}
                    </div>
                </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<div class="row" style="margin-top: 3%">
    <div class="col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong><i class="fa fa-line-chart fa-fw"></i> General Balance - <small id="LCGenTitleTime">This Week</small></strong>
                <div class="pull-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Time span <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" id="LCgeneral">
                            <li><a id="LCgeneralWeek">This week</a></li>
                            <li><a id="LCgeneralMonth">This month</a></li>
                            <li><a id="LCgeneralYear">This year</a></li>
                            <li><a id="LCgeneralAll">All time</a></li>
                        </ul>
                    </div>
                </div>
            </div><!--Panel Heading-->
            <div class="panel-body">
                <div id="acc-lineChart-gen"></div>
            </div><!--Panel Body-->
        </div>
    </div>
</div>
    <div class="modal fade" id="newAccClassModal" tabindex="-1" role="dialog" aria-labelledby="newAccClassLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add a new class</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        {!! Form::open(['action' => 'ReferentsController@postNewClass', 'class' => 'form-horizontal']) !!}
                            <div class="form-group">
                                <div class="col-sm-12">
                                    {!! Form::text('newClass', null, ['class'=>'form-control', 'placeholder'=>'New class']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    {!! Form::submit('Submit', ['class'=>'btn btn-primary btn-sm btn-block']) !!}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
@section('customScripts')
    @include('layouts.partials.customScripts')
    <script src="{{URL::to('assets/js/modules/accounting.js')}}"></script>
@endsection