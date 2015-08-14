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
                        <ul class="dropdown-menu" id="LCgeneral">
                            <li value="week"><a>This week</a></li>
                            <li value="month"><a>This month</a></li>
                            <li value="year"><a>This year</a></li>
                            <li value="all"><a>All time</a></li>
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

    </script>
@endsection