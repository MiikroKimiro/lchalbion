@extends ('layouts.main')

@section ('content')
    @parent

<div class="row" style="margin-top: 3%">
    <div class="col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-line-chart fa-fw"></i> Line chart
                <div class="pull-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Time span <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="">This week</a></li>
                            <li><a href="#">This month</a></li>
                            <li><a href="#">This year</a></li>
                            <li><a href="#">All time</a></li>
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
@endsection
@section('customScripts')
    <script>
        new Morris.Area({
            element: 'acc-lineChart-gen',
            data: {!!$LCGeneralWeek!!},
            xkey: 'date',
            ykeys: ['total'],
            xLabels:"day",
            labels: ['Total'],
            resize: true
        });
    </script>
@endsection