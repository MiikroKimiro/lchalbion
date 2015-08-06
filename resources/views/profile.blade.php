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
                <h4><img src="{{ URL::asset('assets/images/icon/general.png') }}" height="100px" width="100px"></img>  Général / Préférences</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="tab-pane fade" id="combat-pills">
                <h4><img src="{{ URL::asset('assets/images/icon/fight.png') }}" height="100px" width="100px"></img>  Compétences de Combat</h4>
                <br/>
                <div class="row">
                	<div class="col-sm-2">
        				<div class="panel panel-default">
                        	<div class="panel-body">
                				<div class="text-center">
                				    <h5>Trainee Fighter :</h5>
                				    {!! Form::selectRange('f_tf', 0, 5, $skills->f_tf, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                				</div>
                			</div>
                	    </div>
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
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Journeyman Warrior :</h4>
                				                        {!! Form::selectRange('f_jw', 0, 5, $skills->f_jw, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Sword :</h4>
                				                        {!! Form::selectRange('f_wa1', 0, 10, $skills->f_wa1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Sword Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_wa2', 0, 10, $skills->f_wa2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Sword Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_wa3', 0, 10, $skills->f_wa3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Sword Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_wa4', 0, 10, $skills->f_wa4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Sword Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_wa5', 0, 10, $skills->f_wa5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Sword Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_wa6', 0, 10, $skills->f_wa6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Axe :</h4>
                				                        {!! Form::selectRange('f_wb1', 0, 10, $skills->f_wb1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Axe Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_wb2', 0, 10, $skills->f_wb2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Axe Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_wb3', 0, 10, $skills->f_wb3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Axe Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_wb4', 0, 10, $skills->f_wb4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Axe Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_wb5', 0, 10, $skills->f_wb5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Axe Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_wb6', 0, 10, $skills->f_wb6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Mace :</h4>
                				                        {!! Form::selectRange('f_wc1', 0, 10, $skills->f_wc1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Mace Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_wc2', 0, 10, $skills->f_wc2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Mace Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_wc3', 0, 10, $skills->f_wc3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Mace Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_wc4', 0, 10, $skills->f_wc4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Mace Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_wc5', 0, 10, $skills->f_wc5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Mace Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_wc6', 0, 10, $skills->f_wc6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Hammer :</h4>
                				                        {!! Form::selectRange('f_wd1', 0, 10, $skills->f_wd1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Hammer Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_wd2', 0, 10, $skills->f_wd2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Hammer Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_wd3', 0, 10, $skills->f_wd3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Hammer Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_wd4', 0, 10, $skills->f_wd4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Hammer Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_wd5', 0, 10, $skills->f_wd5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Hammer Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_wd6', 0, 10, $skills->f_wd6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Crossbow :</h4>
                				                        {!! Form::selectRange('f_we1', 0, 10, $skills->f_we1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Crossbow Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_we2', 0, 10, $skills->f_we2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Crossbow Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_we3', 0, 10, $skills->f_we3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Crossbow Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_we4', 0, 10, $skills->f_we4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Crossbow Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_we5', 0, 10, $skills->f_we5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Crossbow Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_we6', 0, 10, $skills->f_we6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Shield :</h4>
                				                        {!! Form::selectRange('f_wf1', 0, 10, $skills->f_wf1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Shield Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_wf2', 0, 10, $skills->f_wf2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Shield Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_wf3', 0, 10, $skills->f_wf3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Shield Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_wf4', 0, 10, $skills->f_wf4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Shield Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_wf5', 0, 10, $skills->f_wf5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Shield Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_wf6', 0, 10, $skills->f_wf6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Plate :</h4>
                				                        {!! Form::selectRange('f_wg1', 0, 10, $skills->f_wg1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Plate Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_wg2', 0, 10, $skills->f_wg2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Plate Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_wg3', 0, 10, $skills->f_wg3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Plate Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_wg4', 0, 10, $skills->f_wg4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Plate Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_wg5', 0, 10, $skills->f_wg5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Plate Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_wg6', 0, 10, $skills->f_wg6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Plate :</h4>
                				                        {!! Form::selectRange('f_wh1', 0, 10, $skills->f_wh1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Plate Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_wh2', 0, 10, $skills->f_wh2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Plate Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_wh3', 0, 10, $skills->f_wh3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Plate Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_wh4', 0, 10, $skills->f_wh4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Plate Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_wh5', 0, 10, $skills->f_wh5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Plate Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_wh6', 0, 10, $skills->f_wh6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Plate :</h4>
                				                        {!! Form::selectRange('f_wi1', 0, 10, $skills->f_wi1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Plate Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_wi2', 0, 10, $skills->f_wi2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Plate Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_wi3', 0, 10, $skills->f_wi3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Plate Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_wi4', 0, 10, $skills->f_wi4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Plate Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_wi5', 0, 10, $skills->f_wi5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Plate Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_wi6', 0, 10, $skills->f_wi6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
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
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Journeyman Hunter :</h4>
                				                        {!! Form::selectRange('f_jh', 0, 5, $skills->f_jh, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Bow :</h4>
                				                        {!! Form::selectRange('f_ha1', 0, 10, $skills->f_ha1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Bow Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_ha2', 0, 10, $skills->f_ha2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Bow Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_ha3', 0, 10, $skills->f_ha3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Bow Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_ha4', 0, 10, $skills->f_ha4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Bow Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_ha5', 0, 10, $skills->f_ha5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Bow Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_ha6', 0, 10, $skills->f_ha6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Spear :</h4>
                				                        {!! Form::selectRange('f_hb1', 0, 10, $skills->f_hb1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Spear Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_hb2', 0, 10, $skills->f_hb2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Spear Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_hb3', 0, 10, $skills->f_hb3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Spear Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_hb4', 0, 10, $skills->f_hb4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Spear Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_hb5', 0, 10, $skills->f_hb5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Spear Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_hb6', 0, 10, $skills->f_hb6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Nature Staff :</h4>
                				                        {!! Form::selectRange('f_hc1', 0, 10, $skills->f_hc1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Nature Staff Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_hc2', 0, 10, $skills->f_hc2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Nature Staff Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_hc3', 0, 10, $skills->f_hc3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Nature Staff Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_hc4', 0, 10, $skills->f_hc4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Nature Staff Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_hc5', 0, 10, $skills->f_hc5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Nature Staff Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_hc6', 0, 10, $skills->f_hc6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Dagger :</h4>
                				                        {!! Form::selectRange('f_hd1', 0, 10, $skills->f_hd1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Dagger Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_hd2', 0, 10, $skills->f_hd2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Dagger Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_hd3', 0, 10, $skills->f_hd3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Dagger Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_hd4', 0, 10, $skills->f_hd4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Dagger Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_hd5', 0, 10, $skills->f_hd5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Dagger Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_hd6', 0, 10, $skills->f_hd6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Throwing :</h4>
                				                        {!! Form::selectRange('f_he1', 0, 10, $skills->f_he1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Throwing Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_he2', 0, 10, $skills->f_he2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Throwing Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_he3', 0, 10, $skills->f_he3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Throwing Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_he4', 0, 10, $skills->f_he4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Throwing Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_he5', 0, 10, $skills->f_he5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Throwing Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_he6', 0, 10, $skills->f_he6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Torch :</h4>
                				                        {!! Form::selectRange('f_hf1', 0, 10, $skills->f_hf1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Torch Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_hf2', 0, 10, $skills->f_hf2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Torch Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_hf3', 0, 10, $skills->f_hf3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Torch Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_hf4', 0, 10, $skills->f_hf4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Torch Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_hf5', 0, 10, $skills->f_hf5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Torch Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_hf6', 0, 10, $skills->f_hf6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Leather :</h4>
                				                        {!! Form::selectRange('f_hg1', 0, 10, $skills->f_hg1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Leather Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_hg2', 0, 10, $skills->f_hg2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Leather Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_hg3', 0, 10, $skills->f_hg3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Leather Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_hg4', 0, 10, $skills->f_hg4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Leather Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_hg5', 0, 10, $skills->f_hg5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Leather Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_hg6', 0, 10, $skills->f_hg6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Leather :</h4>
                				                        {!! Form::selectRange('f_hh1', 0, 10, $skills->f_hh1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Leather Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_hh2', 0, 10, $skills->f_hh2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Leather Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_hh3', 0, 10, $skills->f_hh3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Leather Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_hh4', 0, 10, $skills->f_hh4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Leather Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_hh5', 0, 10, $skills->f_hh5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Leather Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_hh6', 0, 10, $skills->f_hh6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Leather :</h4>
                				                        {!! Form::selectRange('f_hi1', 0, 10, $skills->f_hi1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Leather Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_hi2', 0, 10, $skills->f_hi2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Leather Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_hi3', 0, 10, $skills->f_hi3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Leather Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_hi4', 0, 10, $skills->f_hi4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Leather Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_hi5', 0, 10, $skills->f_hi5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Leather Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_hi6', 0, 10, $skills->f_hi6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
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
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Journeyman Mage :</h4>
                				                        {!! Form::selectRange('f_jm', 0, 5, $skills->f_jm, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Fire Staff :</h4>
                				                        {!! Form::selectRange('f_ma1', 0, 10, $skills->f_ma1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Fire Staff Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_ma2', 0, 10, $skills->f_ma2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Fire Staff Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_ma3', 0, 10, $skills->f_ma3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Fire Staff Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_ma4', 0, 10, $skills->f_ma4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Fire Staff Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_ma5', 0, 10, $skills->f_ma5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Fire Staff Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_ma6', 0, 10, $skills->f_ma6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Holy Staff :</h4>
                				                        {!! Form::selectRange('f_mb1', 0, 10, $skills->f_mb1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Holy Staff Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_mb2', 0, 10, $skills->f_mb2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Holy Staff Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_mb3', 0, 10, $skills->f_mb3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Holy Staff Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_mb4', 0, 10, $skills->f_mb4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Holy Staff Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_mb5', 0, 10, $skills->f_mb5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Holy Staff Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_mb6', 0, 10, $skills->f_mb6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Arcane Staff :</h4>
                				                        {!! Form::selectRange('f_mc1', 0, 10, $skills->f_mc1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Arcane Staff Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_mc2', 0, 10, $skills->f_mc2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Arcane Staff Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_mc3', 0, 10, $skills->f_mc3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Arcane Staff Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_mc4', 0, 10, $skills->f_mc4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Arcane Staff Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_mc5', 0, 10, $skills->f_mc5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Arcane Staff Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_mc6', 0, 10, $skills->f_mc6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Frost Staff :</h4>
                				                        {!! Form::selectRange('f_md1', 0, 10, $skills->f_md1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Frost Staff Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_md2', 0, 10, $skills->f_md2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Frost Staff Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_md3', 0, 10, $skills->f_md3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Frost Staff Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_md4', 0, 10, $skills->f_md4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Frost Staff Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_md5', 0, 10, $skills->f_md5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Frost Staff Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_md6', 0, 10, $skills->f_md6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Cursed Staff :</h4>
                				                        {!! Form::selectRange('f_me1', 0, 10, $skills->f_me1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Cursed Staff Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_me2', 0, 10, $skills->f_me2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Cursed Staff Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_me3', 0, 10, $skills->f_me3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Cursed Staff Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_me4', 0, 10, $skills->f_me4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Cursed Staff Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_me5', 0, 10, $skills->f_me5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Cursed Staff Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_me6', 0, 10, $skills->f_me6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Tome :</h4>
                				                        {!! Form::selectRange('f_mf1', 0, 10, $skills->f_mf1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Tome Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_mf2', 0, 10, $skills->f_mf2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Tome Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_mf3', 0, 10, $skills->f_mf3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Tome Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_mf4', 0, 10, $skills->f_mf4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Tome Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_mf5', 0, 10, $skills->f_mf5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Tome Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_mf6', 0, 10, $skills->f_mf6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Cloth :</h4>
                				                        {!! Form::selectRange('f_mg1', 0, 10, $skills->f_mg1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Cloth Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_mg2', 0, 10, $skills->f_mg2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Cloth Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_mg3', 0, 10, $skills->f_mg3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Cloth Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_mg4', 0, 10, $skills->f_mg4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Cloth Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_mg5', 0, 10, $skills->f_mg5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Cloth Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_mg6', 0, 10, $skills->f_mg6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Cloth :</h4>
                				                        {!! Form::selectRange('f_mh1', 0, 10, $skills->f_mh1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Cloth Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_mh2', 0, 10, $skills->f_mh2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Cloth Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_mh3', 0, 10, $skills->f_mh3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Cloth Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_mh4', 0, 10, $skills->f_mh4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Cloth Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_mh5', 0, 10, $skills->f_mh5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Cloth Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_mh6', 0, 10, $skills->f_mh6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Cloth :</h4>
                				                        {!! Form::selectRange('f_mi1', 0, 10, $skills->f_mi1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Cloth Lvl 2 :</h4>
                				                        {!! Form::selectRange('f_mi2', 0, 10, $skills->f_mi2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Cloth Lvl 3 :</h4>
                				                        {!! Form::selectRange('f_mi3', 0, 10, $skills->f_mi3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Cloth Lvl 4 :</h4>
                				                        {!! Form::selectRange('f_mi4', 0, 10, $skills->f_mi4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Cloth Lvl 5 :</h4>
                				                        {!! Form::selectRange('f_mi5', 0, 10, $skills->f_mi5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Cloth Lvl 6 :</h4>
                				                        {!! Form::selectRange('f_mi6', 0, 10, $skills->f_mi6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="tab-pane fade" id="craft-pills">
                <h4><img src="{{ URL::asset('assets/images/icon/craft.png') }}" height="100px" width="100px"></img>  Compétences de Craft</h4>
                <div class="row">
                	<div class="col-sm-2">
        				<div class="panel panel-default">
                        	<div class="panel-body">
                				<div class="text-center">
                				    <h5>Trainee Craftsman :</h5>
                				    {!! Form::selectRange('c_tc', 0, 5, $skills->c_tc, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                				</div>
                			</div>
                	    </div>
                	</div>
                </div>
                
                <div class="row">
                    <div class="panel-group" id="CraftAccordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseCraftMelee" aria-expanded="false" class="collapsed"><img src="{{ URL::asset('assets/images/icon/melee.png') }}" height="50px" width="50px"></img> Compétences du Warrior's Forge</a>
                                </h4>
                            </div>
                            <div id="collapseCraftMelee" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Warrior Forge :</h4>
                				                        {!! Form::selectRange('c_jw', 0, 5, $skills->c_jw, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Sword :</h4>
                				                        {!! Form::selectRange('c_wa1', 0, 10, $skills->c_wa1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Sword Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_wa2', 0, 10, $skills->c_wa2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Sword Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_wa3', 0, 10, $skills->c_wa3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Sword Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_wa4', 0, 10, $skills->c_wa4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Sword Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_wa5', 0, 10, $skills->c_wa5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Sword Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_wa6', 0, 10, $skills->c_wa6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Axe :</h4>
                				                        {!! Form::selectRange('c_wb1', 0, 10, $skills->c_wb1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Axe Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_wb2', 0, 10, $skills->c_wb2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Axe Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_wb3', 0, 10, $skills->c_wb3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Axe Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_wb4', 0, 10, $skills->c_wb4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Axe Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_wb5', 0, 10, $skills->c_wb5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Axe Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_wb6', 0, 10, $skills->c_wb6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Mace :</h4>
                				                        {!! Form::selectRange('c_wc1', 0, 10, $skills->c_wc1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Mace Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_wc2', 0, 10, $skills->c_wc2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Mace Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_wc3', 0, 10, $skills->c_wc3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Mace Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_wc4', 0, 10, $skills->c_wc4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Mace Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_wc5', 0, 10, $skills->c_wc5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Mace Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_wc6', 0, 10, $skills->c_wc6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Hammer :</h4>
                				                        {!! Form::selectRange('c_wd1', 0, 10, $skills->c_wd1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Hammer Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_wd2', 0, 10, $skills->c_wd2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Hammer Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_wd3', 0, 10, $skills->c_wd3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Hammer Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_wd4', 0, 10, $skills->c_wd4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Hammer Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_wd5', 0, 10, $skills->c_wd5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Hammer Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_wd6', 0, 10, $skills->c_wd6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Crossbow :</h4>
                				                        {!! Form::selectRange('c_we1', 0, 10, $skills->c_we1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Crossbow Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_we2', 0, 10, $skills->c_we2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Crossbow Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_we3', 0, 10, $skills->c_we3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Crossbow Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_we4', 0, 10, $skills->c_we4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Crossbow Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_we5', 0, 10, $skills->c_we5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Crossbow Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_we6', 0, 10, $skills->c_we6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Shield :</h4>
                				                        {!! Form::selectRange('c_wf1', 0, 10, $skills->c_wf1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Shield Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_wf2', 0, 10, $skills->c_wf2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Shield Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_wf3', 0, 10, $skills->c_wf3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Shield Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_wf4', 0, 10, $skills->c_wf4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Shield Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_wf5', 0, 10, $skills->c_wf5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Shield Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_wf6', 0, 10, $skills->c_wf6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Plate :</h4>
                				                        {!! Form::selectRange('c_wg1', 0, 10, $skills->c_wg1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Plate Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_wg2', 0, 10, $skills->c_wg2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Plate Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_wg3', 0, 10, $skills->c_wg3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Plate Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_wg4', 0, 10, $skills->c_wg4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Plate Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_wg5', 0, 10, $skills->c_wg5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Plate Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_wg6', 0, 10, $skills->c_wg6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Plate :</h4>
                				                        {!! Form::selectRange('c_wh1', 0, 10, $skills->c_wh1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Plate Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_wh2', 0, 10, $skills->c_wh2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Plate Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_wh3', 0, 10, $skills->c_wh3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Plate Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_wh4', 0, 10, $skills->c_wh4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Plate Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_wh5', 0, 10, $skills->c_wh5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Plate Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_wh6', 0, 10, $skills->c_wh6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Plate :</h4>
                				                        {!! Form::selectRange('c_wi1', 0, 10, $skills->c_wi1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Plate Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_wi2', 0, 10, $skills->c_wi2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Plate Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_wi3', 0, 10, $skills->c_wi3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Plate Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_wi4', 0, 10, $skills->c_wi4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Plate Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_wi5', 0, 10, $skills->c_wi5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Plate Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_wi6', 0, 10, $skills->c_wi6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseCraftRanged" class="collapsed" aria-expanded="false"><img src="{{ URL::asset('assets/images/icon/ranged.png') }}" height="50px" width="50px"></img> Compétences du Hunter's Lodge</a>
                                </h4>
                            </div>
                            <div id="collapseCraftRanged" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Hunter's Lodge :</h4>
                				                        {!! Form::selectRange('c_jh', 0, 5, $skills->c_jh, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Bow :</h4>
                				                        {!! Form::selectRange('c_ha1', 0, 10, $skills->c_ha1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Bow Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_ha2', 0, 10, $skills->c_ha2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Bow Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_ha3', 0, 10, $skills->c_ha3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Bow Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_ha4', 0, 10, $skills->c_ha4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Bow Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_ha5', 0, 10, $skills->c_ha5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Bow Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_ha6', 0, 10, $skills->c_ha6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Spear :</h4>
                				                        {!! Form::selectRange('c_hb1', 0, 10, $skills->c_hb1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Spear Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_hb2', 0, 10, $skills->c_hb2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Spear Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_hb3', 0, 10, $skills->c_hb3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Spear Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_hb4', 0, 10, $skills->c_hb4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Spear Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_hb5', 0, 10, $skills->c_hb5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Spear Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_hb6', 0, 10, $skills->c_hb6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Nature Staff :</h4>
                				                        {!! Form::selectRange('c_hc1', 0, 10, $skills->c_hc1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Nature Staff Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_hc2', 0, 10, $skills->c_hc2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Nature Staff Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_hc3', 0, 10, $skills->c_hc3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Nature Staff Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_hc4', 0, 10, $skills->c_hc4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Nature Staff Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_hc5', 0, 10, $skills->c_hc5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Nature Staff Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_hc6', 0, 10, $skills->c_hc6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Dagger :</h4>
                				                        {!! Form::selectRange('c_hd1', 0, 10, $skills->c_hd1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Dagger Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_hd2', 0, 10, $skills->c_hd2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Dagger Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_hd3', 0, 10, $skills->c_hd3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Dagger Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_hd4', 0, 10, $skills->c_hd4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Dagger Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_hd5', 0, 10, $skills->c_hd5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Dagger Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_hd6', 0, 10, $skills->c_hd6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Throwing :</h4>
                				                        {!! Form::selectRange('c_he1', 0, 10, $skills->c_he1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Throwing Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_he2', 0, 10, $skills->c_he2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Throwing Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_he3', 0, 10, $skills->c_he3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Throwing Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_he4', 0, 10, $skills->c_he4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Throwing Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_he5', 0, 10, $skills->c_he5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Throwing Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_he6', 0, 10, $skills->c_he6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Torch :</h4>
                				                        {!! Form::selectRange('c_hf1', 0, 10, $skills->c_hf1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Torch Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_hf2', 0, 10, $skills->c_hf2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Torch Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_hf3', 0, 10, $skills->c_hf3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Torch Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_hf4', 0, 10, $skills->c_hf4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Torch Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_hf5', 0, 10, $skills->c_hf5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Torch Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_hf6', 0, 10, $skills->c_hf6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Leather :</h4>
                				                        {!! Form::selectRange('c_hg1', 0, 10, $skills->c_hg1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Leather Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_hg2', 0, 10, $skills->c_hg2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Leather Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_hg3', 0, 10, $skills->c_hg3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Leather Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_hg4', 0, 10, $skills->c_hg4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Leather Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_hg5', 0, 10, $skills->c_hg5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Leather Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_hg6', 0, 10, $skills->c_hg6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Leather :</h4>
                				                        {!! Form::selectRange('c_hh1', 0, 10, $skills->c_hh1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Leather Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_hh2', 0, 10, $skills->c_hh2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Leather Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_hh3', 0, 10, $skills->c_hh3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Leather Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_hh4', 0, 10, $skills->c_hh4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Leather Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_hh5', 0, 10, $skills->c_hh5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Leather Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_hh6', 0, 10, $skills->c_hh6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Leather :</h4>
                				                        {!! Form::selectRange('c_hi1', 0, 10, $skills->c_hi1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Leather Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_hi2', 0, 10, $skills->c_hi2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Leather Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_hi3', 0, 10, $skills->c_hi3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Leather Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_hi4', 0, 10, $skills->c_hi4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Leather Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_hi5', 0, 10, $skills->c_hi5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Leather Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_hi6', 0, 10, $skills->c_hi6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseCraftMagic" class="" aria-expanded="false"><img src="{{ URL::asset('assets/images/icon/magic.png') }}" height="50px" width="50px"></img> Compétences de la Mage's Tower</a>
                                </h4>
                            </div>
                            <div id="collapseCraftMagic" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Mage's Tower :</h4>
                				                        {!! Form::selectRange('c_jm', 0, 5, $skills->c_jm, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Fire Staff :</h4>
                				                        {!! Form::selectRange('c_ma1', 0, 10, $skills->c_ma1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Fire Staff Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_ma2', 0, 10, $skills->c_ma2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Fire Staff Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_ma3', 0, 10, $skills->c_ma3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Fire Staff Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_ma4', 0, 10, $skills->c_ma4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Fire Staff Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_ma5', 0, 10, $skills->c_ma5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Fire Staff Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_ma6', 0, 10, $skills->c_ma6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Holy Staff :</h4>
                				                        {!! Form::selectRange('c_mb1', 0, 10, $skills->c_mb1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Holy Staff Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_mb2', 0, 10, $skills->c_mb2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Holy Staff Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_mb3', 0, 10, $skills->c_mb3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Holy Staff Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_mb4', 0, 10, $skills->c_mb4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Holy Staff Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_mb5', 0, 10, $skills->c_mb5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Holy Staff Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_mb6', 0, 10, $skills->c_mb6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Arcane Staff :</h4>
                				                        {!! Form::selectRange('c_mc1', 0, 10, $skills->c_mc1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Arcane Staff Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_mc2', 0, 10, $skills->c_mc2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Arcane Staff Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_mc3', 0, 10, $skills->c_mc3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Arcane Staff Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_mc4', 0, 10, $skills->c_mc4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Arcane Staff Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_mc5', 0, 10, $skills->c_mc5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Arcane Staff Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_mc6', 0, 10, $skills->c_mc6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Frost Staff :</h4>
                				                        {!! Form::selectRange('c_md1', 0, 10, $skills->c_md1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Frost Staff Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_md2', 0, 10, $skills->c_md2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Frost Staff Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_md3', 0, 10, $skills->c_md3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Frost Staff Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_md4', 0, 10, $skills->c_md4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Frost Staff Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_md5', 0, 10, $skills->c_md5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Frost Staff Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_md6', 0, 10, $skills->c_md6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Cursed Staff :</h4>
                				                        {!! Form::selectRange('c_me1', 0, 10, $skills->c_me1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Cursed Staff Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_me2', 0, 10, $skills->c_me2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Cursed Staff Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_me3', 0, 10, $skills->c_me3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Cursed Staff Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_me4', 0, 10, $skills->c_me4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Cursed Staff Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_me5', 0, 10, $skills->c_me5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Cursed Staff Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_me6', 0, 10, $skills->c_me6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Tome :</h4>
                				                        {!! Form::selectRange('c_mf1', 0, 10, $skills->c_mf1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Tome Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_mf2', 0, 10, $skills->c_mf2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Tome Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_mf3', 0, 10, $skills->c_mf3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Tome Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_mf4', 0, 10, $skills->c_mf4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Tome Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_mf5', 0, 10, $skills->c_mf5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Tome Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_mf6', 0, 10, $skills->c_mf6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Cloth :</h4>
                				                        {!! Form::selectRange('c_mg1', 0, 10, $skills->c_mg1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Cloth Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_mg2', 0, 10, $skills->c_mg2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Cloth Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_mg3', 0, 10, $skills->c_mg3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Cloth Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_mg4', 0, 10, $skills->c_mg4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Cloth Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_mg5', 0, 10, $skills->c_mg5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Head Cloth Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_mg6', 0, 10, $skills->c_mg6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Cloth :</h4>
                				                        {!! Form::selectRange('c_mh1', 0, 10, $skills->c_mh1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Cloth Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_mh2', 0, 10, $skills->c_mh2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Cloth Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_mh3', 0, 10, $skills->c_mh3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Cloth Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_mh4', 0, 10, $skills->c_mh4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Cloth Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_mh5', 0, 10, $skills->c_mh5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Body Cloth Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_mh6', 0, 10, $skills->c_mh6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Cloth :</h4>
                				                        {!! Form::selectRange('c_mi1', 0, 10, $skills->c_mi1, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Cloth Lvl 2 :</h4>
                				                        {!! Form::selectRange('c_mi2', 0, 10, $skills->c_mi2, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Cloth Lvl 3 :</h4>
                				                        {!! Form::selectRange('c_mi3', 0, 10, $skills->c_mi3, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Cloth Lvl 4 :</h4>
                				                        {!! Form::selectRange('c_mi4', 0, 10, $skills->c_mi4, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Cloth Lvl 5 :</h4>
                				                        {!! Form::selectRange('c_mi5', 0, 10, $skills->c_mi5, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    	<div class="col-sm-2">
                            				<div class="panel panel-default">
                                            	<div class="panel-body">
                                    				<div class="text-center">
                                    				    <h4>Boot Cloth Lvl 6 :</h4>
                				                        {!! Form::selectRange('c_mi6', 0, 10, $skills->c_mi6, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
                                    				</div>
                                    			</div>
                                    	    </div>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
        @if ($enabledDisableEdit == 'enabled') 
        {!!Form::submit('Submit', ['class' => 'btn btn-success btn-outline'])!!}
        @endif
        {!! Form::close()  !!}
    </div>
    <!-- /.panel-body -->
    @endif
@endsection