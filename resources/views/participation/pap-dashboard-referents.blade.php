@extends('layouts.main')
@section('content')
    <div class="row" style="margin-top: 3%">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>5 Top participation</h3>
                </div>
                <div class="panel-body">
                    <table id="papTop5Tbl" class="table table-hover table-condensed table-striped" width="100%"></table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>5 Worst participation</h3>
                </div>
                <div class="panel-body">
                    <table id="papBot5Tbl" class="table table-hover table-condensed table-striped" width="100%"></table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customScripts')
    <script src="{{URL::asset('assets/js/modules/pap-dash-ref.js')}}"></script>
@endsection