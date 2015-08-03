@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <h3 class="panel-heading">Participation / Total Guild participation</h3>
                <div class="panel-body">
                    <div id="papsTotalDC"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <h3 class="panel-heading">Participation / Event type</h3>
                <div class="panel-body">
                        <div id="papsTypeDC"></div>
                </div><!--panel-body-->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <h3 class="panel-heading">Participation this month</h3>
                <div class="panel-body">
                        <div id="papsMonthly"></div>
                </div><!--panel-body-->
            </div>
        </div>
    </div>
@endsection

@section('customScripts')
    <script>
        new Morris.Donut({
            element: 'papsTotalDC',
            data: [
                { label: '{{$userName}}', value: {{$papsTotalUser}} },
                { label: 'Others' , value: {{$papsUserRatio}} }
            ],
            resize: true
        });
        new Morris.Donut({
            element: 'papsTypeDC',
            data: [
                { label: 'PvP', value: {{$papsUserPvP}} },
                { label: 'PvE' , value: {{$papsUserPvE}} }
            ],
            resize: true,
            colors: [
                '#B20000',
                '#297A29'
            ]
        });
        new Morris.Area({
            element: 'papsMonthly',
            data: '{!!$papsMonthlyData!!}',
            xkey: 'date',
            ykeys: ['papsTotal', 'papsUser'],
            xLabels:'day',
            labels: ['Guild', '{{$userName}}'],
            dateFormat: function (x) { return new Date(x).toLocaleDateString('fr-FR'); }
        });
    </script>
@endsection