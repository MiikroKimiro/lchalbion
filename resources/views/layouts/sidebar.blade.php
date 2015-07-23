@if ($userLevel >=10)


@elseif ($userLevel >= 5)
    <li>
        <a href="{{URL::to('admin')}}"><i class="fa fa-cog fa-fw"></i> Admin<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{URL::to('adminusergroup')}}">Change member User Group</a>
            </li>
            <li class="nav-divider"> </li>
            <li>
                <a href="{{URL::to('accounting')}}">Accounting</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>

@else
    <li>
        <a href="{{URL::to('participation')}}"><i class="fa fa-line-chart fa-fw"></i> Participation<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{URL::to('participation')}}">Participation dashboard</a>
            </li>
            <li>
                <a href="{{URL::to('new-event')}}">New event</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>
@endif