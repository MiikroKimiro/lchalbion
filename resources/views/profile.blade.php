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
        <div class="tab-content">
            <div class="tab-pane fade in active" id="general-pills">
                <h4><img src="{{ URL::asset('assets/images/icon/general.png') }}" height="100px" width="100px"></img>  Général / Préférences</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="tab-pane fade" id="combat-pills">
                <h4><img src="{{ URL::asset('assets/images/icon/fight.png') }}" height="100px" width="100px"></img>  Compétences de Combat</h4>
                <br/>
                <div class="row">
                    <div class="col-lg-2">
                        Trainee Fighter : {!! Form::selectRange('number', 0, 5, (explode($skills->fightingSkills))[0], ['class' => 'form-control']) !!}
                    </div>
                </div>
                
                <div class="row">
                    <div class="panel-group" id="CombatAccordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseMelee" aria-expanded="false" class="collapsed"><img src="{{ URL::asset('assets/images/icon/melee.png') }}" height="50px" width="50px"></img> Compétences de Mélée</a>
                                </h4>
                            </div>
                            <div id="collapseMelee" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseRanged" class="collapsed" aria-expanded="false"><img src="{{ URL::asset('assets/images/icon/ranged.png') }}" height="50px" width="50px"></img> Compétences de Chasseur</a>
                                </h4>
                            </div>
                            <div id="collapseRanged" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseMagic" class="" aria-expanded="false"><img src="{{ URL::asset('assets/images/icon/magic.png') }}" height="50px" width="50px"></img> Compétences de Magicien</a>
                                </h4>
                            </div>
                            <div id="collapseMagic" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="tab-pane fade" id="craft-pills">
                <h4><img src="{{ URL::asset('assets/images/icon/craft.png') }}" height="100px" width="100px"></img>  Compétences de Craft</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="tab-pane fade" id="recolte-pills">
                <h4><img src="{{ URL::asset('assets/images/icon/gather.png') }}" height="100px" width="100px"></img>  Compétences de Récolte</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="tab-pane fade" id="agriculture-pills">
                <h4><img src="{{ URL::asset('assets/images/icon/farming.png') }}" height="100px" width="100px"></img>  Compétences d'Agriculture</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
    <!-- /.panel-body -->
    @endif
@endsection