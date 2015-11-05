												<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
													<div class="panel panel-default">
												    	<div class="panel-body">
															<div class="text-center">
																<img src="{!! URL::asset('assets/images/icon/masteries/' . $masteryImg) !!}" height="64px" width="64px"></img>
															    <h5>{!! $skillTitle !!}</h5> <!--Changement de taille pour évitr le dégroupage des skills-->
												                {!! Form::selectRange($skillName, $skillMin, $skillMax, $skillMapping, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
															</div>
														</div>
												    </div>
												</div>