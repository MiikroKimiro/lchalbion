@extends ('layouts.main')

@section('customHeader')
    @parent

@endsection

@section ('content')
    @parent
<div class="row" style="margin-top: 3%">
    <div class="col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong><i class="fa fa-plus fa-fw"></i> New Entry</strong>
            </div>
            <div class="panel-body">
            {!! Form::open(['url' => 'referents/accounting/new-entry', 'class' => 'form-horizontal']) !!}
                <div class="form-group form-group-sm">
                    {!! Form::label('concept', 'Concept', ['class'=>'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('concept', null, ['class'=>'form-control', 'placeholder'=>'Concept']) !!}
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    {!! Form::label('accClass', 'Class', ['class'=>'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::select('accClass', $classList, 0, ['class'=>'form-control select2', 'id'=>'accClass']) !!}
                        <div>
                            <button type="button" class="btn btn-default btn-xs" style="margin-top: 5px" id="manageAccClassBtn">Manage Classes</button>
                        </div>
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
    <div class="modal fade" id="manageAccClassModal" tabindex="-1" role="dialog" aria-labelledby="newAccClassLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Manage accounting Classes</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-default btn-sm btn-block" id="newClassBtn">Add a new Class</button>
                            </div>
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-default btn-sm btn-block" id="modifyClassBtn">Modify a Class</button>
                            </div>
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-default btn-sm btn-block" id="deleteClassBtn">Delete a Class</button>
                            </div>
                        </div>
                        <div class="row" >
                            <div></div>
                    <!--  New Class Form -->
                            <div class="col-sm-12">
                                {!! Form::open(['url' => 'referents/accounting/new-class', 'id' => 'newClassForm', 'hidden'=> 'hidden', 'class' => 'form-horizontal']) !!}
                                    <div class="form-group">
                                        {!! Form::label('newClass', 'Add a new accounting class:', ['class'=> 'control-label']) !!}
                                        {!! Form::text('newClass', null, ['class'=>'form-control', 'placeholder'=>'New class']) !!}
                                    </div>
                            @if ($errors->any())
                                <!--<div class="col-sm-12">-->
                                    <div class="form-group">
                                        <div class="alert alert-danger" role="alert">
                                            @foreach ($errors->get('newClass') as $error)
                                                <ul>
                                                    <li>{{$error}}</li>
                                                </ul>
                                            @endforeach
                                        </div>
                                    </div>
                                <!--</div>-->
                            @endif
                                <!--<div class="col-sm-12">-->
                                    <div class="form-group">
                                        {!! Form::submit('Add new class', ['class'=>'btn btn-primary btn-sm btn-block']) !!}
                                    </div>
                                <!--</div>-->
                            {!! Form::close() !!}
                            </div>
                    <!--  Modify Class Form -->
                            {!! Form::open(['url' => 'referents/accounting/delete-class', 'class' => 'form-horizontal', 'id' => 'modifyClassForm', 'hidden'=> 'hidden']) !!}
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {!! Form::label('modifyClassSelect', 'Select the accounting class to modify:', ['class'=> 'control-label']) !!}
                                    {!! Form::select('modifyClassSelect', $classList, 0, ['class'=>'form-control select2', 'id'=>'modifyClassList']) !!}
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {!! Form::label('modifyClassInput', 'Enter the new accounting class name:', ['class'=> 'control-label']) !!}
                                    {!! Form::text('modifyClassInput', null, ['class'=>'form-control', 'placeholder'=>'New class name']) !!}
                                </div>
                            </div>
                            @if ($errors->any())
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="alert alert-danger" role="alert">
                                            @foreach ($errors->get('newClass') as $error)
                                                <ul>
                                                    <li>{{$error}}</li>
                                                </ul>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {!! Form::submit('Modify class', ['class'=>'btn btn-primary btn-sm btn-block']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        <!--  Delete Class Form -->
                            {!! Form::open(['url' => 'referents/accounting/delete-class', 'class' => 'form-horizontal', 'id' => 'deleteClassForm', 'hidden'=> 'hidden']) !!}
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {!! Form::label('deleteClassList', 'Select the accounting to delete :', ['class'=> 'control-label']) !!}
                                    {!! Form::select('deleteClassList', $classList, 0, ['class'=>'form-control select2', 'id'=>'deleteClassList']) !!}
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {!! Form::submit('Delete Class', ['class'=>'btn btn-primary btn-sm btn-block']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
@section('customScripts')
    <script>
        $(".select2").select2({
            placeholder: "Select a class",
            minimumResultsForSearch: Infinity,
            theme: "bootstrap",
            width: null
        });
    </script>
    @if ($errors->any())
        <script>
            $(function(){
                $('#newAccClassModal').modal('show');
            })
        </script>
    @endif
    <script src="{{URL::to('assets/js/modules/accounting.js')}}"></script>
@endsection