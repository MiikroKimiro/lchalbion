@extends('layouts.main')
@section ('content')
    @parent

    @if ($error != null) 
    {!! $error !!}
    @else
    <h1 class="page-header">Profil de {!! $userName !!}</h1>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <!-- Nav tabs -->
        <ul class="nav nav-pills">
            <li class="active"><a href="#general-pills" data-toggle="tab">Général / Préférences</a>
            </li>
            <li><a href="#combat-pills" data-toggle="tab">Combat</a>
            </li>
            <li><a href="#craft-pills" data-toggle="tab">Craft</a>
            </li>
            <li><a href="#recolte-pills" data-toggle="tab">Récolte</a>
            </li>
            <li><a href="#agriculture-pills" data-toggle="tab">Agriculture</a>
            </li>
        </ul>

        <!-- Tab panes -->
        {!! Form::model($skills, array('action' => array('ProfileController@saveProfile', $userID))) !!}
        <div class="tab-content">
            <div class="tab-pane fade in active" id="general-pills">
                @include('profile.general')
            </div>
            <div class="tab-pane fade" id="combat-pills">
                @include('profile.combat')
            </div>
            <div class="tab-pane fade" id="craft-pills">
                @include('profile.craft')
            </div>
            <div class="tab-pane fade" id="recolte-pills">
                @include('profile.recolte')
            </div>
            <div class="tab-pane fade" id="agriculture-pills">
                @include('profile.agriculture')
            </div>
        </div>
        @if ($enabledDisableEdit == 'enabled') 
        {!!Form::submit('Submit', ['class' => 'btn btn-success btn-outline'])!!}
        @endif
        {!! Form::close()  !!}
    </div>
    <!-- /.panel-body -->
    @endif
@endsection