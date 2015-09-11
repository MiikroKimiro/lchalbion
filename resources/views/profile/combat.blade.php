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
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseMelee" aria-expanded="false" class="collapsed"><img src="{{ URL::asset('assets/images/icon/melee.png') }}" height="50px" width="50px"></img> Compétences de Guerrier</a>
                </h4>
            </div>
            <div id="collapseMelee" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                <div class="panel-body">
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('profile.skillselector', ['skillTitle' => 'Journeyman Warrior :', 'skillName' => 'f_jw', 'skillMapping' => $skills->f_jw, 'skillMin' => 0, 'skillMax' => 5, 'masteryImg' => 'missing.png'])
                    	    </div>
                    	</div>
                    </div>
                    <!--Swords-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('profile.skillselector', ['skillTitle' => 'Broadsword Fighter :',          'skillName' => 'f_wa1', 'skillMapping' => $skills->f_wa1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Claymore Fighter :',            'skillName' => 'f_wa2', 'skillMapping' => $skills->f_wa2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Glaive Fighter :',              'skillName' => 'f_wa3', 'skillMapping' => $skills->f_wa3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Broadword Fighter :', 'skillName' => 'f_wa4', 'skillMapping' => $skills->f_wa4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Claymore Fighter :',  'skillName' => 'f_wa5', 'skillMapping' => $skills->f_wa5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Glaive Fighter :',    'skillName' => 'f_wa6', 'skillMapping' => $skills->f_wa6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                    	    </div>
                    	</div>
                    </div>
                    <!--Axes-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('profile.skillselector', ['skillTitle' => 'Battle Axe Fighter :',           'skillName' => 'f_wb1', 'skillMapping' => $skills->f_wb1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Great Axe Fighter :',            'skillName' => 'f_wb2', 'skillMapping' => $skills->f_wb2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Scythe Fighter :',               'skillName' => 'f_wb3', 'skillMapping' => $skills->f_wb3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Battle Axe Fighter :', 'skillName' => 'f_wb4', 'skillMapping' => $skills->f_wb4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Great Axe Fighter :',  'skillName' => 'f_wb5', 'skillMapping' => $skills->f_wb5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Scythe Fighter :',     'skillName' => 'f_wb6', 'skillMapping' => $skills->f_wb6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Maces-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('profile.skillselector', ['skillTitle' => 'Mace Fighter :',                 'skillName' => 'f_wc1', 'skillMapping' => $skills->f_wc1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Heavy Mace Fighter :',           'skillName' => 'f_wc2', 'skillMapping' => $skills->f_wc2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Flail Fighter :',                'skillName' => 'f_wc3', 'skillMapping' => $skills->f_wc3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Mace Fighter :',       'skillName' => 'f_wc4', 'skillMapping' => $skills->f_wc4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Heavy Mace Fighter :', 'skillName' => 'f_wc5', 'skillMapping' => $skills->f_wc5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Flail Fighter :',      'skillName' => 'f_wc6', 'skillMapping' => $skills->f_wc6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Hammer-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('profile.skillselector', ['skillTitle' => 'Hammer Fighter :',                 'skillName' => 'f_wd1', 'skillMapping' => $skills->f_wd1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Pole Hammer Fighter :',            'skillName' => 'f_wd2', 'skillMapping' => $skills->f_wd2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Great Hammer Fighter :',           'skillName' => 'f_wd3', 'skillMapping' => $skills->f_wd3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Hammer Fighter :',       'skillName' => 'f_wd4', 'skillMapping' => $skills->f_wd4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Pole Hammer Fighter :',  'skillName' => 'f_wd5', 'skillMapping' => $skills->f_wd5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Great Hammer Fighter :', 'skillName' => 'f_wd6', 'skillMapping' => $skills->f_wd6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Crossbow-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('profile.skillselector', ['skillTitle' => 'Crossbowman :',                     'skillName' => 'f_we1', 'skillMapping' => $skills->f_we1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Heavy Crossbowman :',               'skillName' => 'f_we2', 'skillMapping' => $skills->f_we2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Repeating Crossbowman :',           'skillName' => 'f_we3', 'skillMapping' => $skills->f_we3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted  Crossbowman:',           'skillName' => 'f_we4', 'skillMapping' => $skills->f_we4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted  Heavy Crossbowman:',     'skillName' => 'f_we5', 'skillMapping' => $skills->f_we5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted  Repeating Crossbowman:', 'skillName' => 'f_we6', 'skillMapping' => $skills->f_we6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Shield-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('profile.skillselector', ['skillTitle' => 'Shield Fighter :',                  'skillName' => 'f_wf1', 'skillMapping' => $skills->f_wf1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Tower Shield Fighter :',            'skillName' => 'f_wf2', 'skillMapping' => $skills->f_wf2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Spiked Shield Fighter :',           'skillName' => 'f_wf3', 'skillMapping' => $skills->f_wf3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Shield Fighter :',        'skillName' => 'f_wf4', 'skillMapping' => $skills->f_wf4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Tower Shield Fighter :',  'skillName' => 'f_wf5', 'skillMapping' => $skills->f_wf5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Spiked Shield Fighter :', 'skillName' => 'f_wf6', 'skillMapping' => $skills->f_wf6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Plate Helmet-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('profile.skillselector', ['skillTitle' => 'Plate Helmet Lvl 1 :', 'skillName' => 'f_wg1', 'skillMapping' => $skills->f_wg1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Helmet Lvl 2 :', 'skillName' => 'f_wg2', 'skillMapping' => $skills->f_wg2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Helmet Lvl 3 :', 'skillName' => 'f_wg3', 'skillMapping' => $skills->f_wg3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Helmet Lvl 4 :', 'skillName' => 'f_wg4', 'skillMapping' => $skills->f_wg4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Helmet Lvl 5 :', 'skillName' => 'f_wg5', 'skillMapping' => $skills->f_wg5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Helmet Lvl 6 :', 'skillName' => 'f_wg6', 'skillMapping' => $skills->f_wg6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Plate Armor-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('profile.skillselector', ['skillTitle' => 'Plate Armor Lvl 1 :', 'skillName' => 'f_wh1', 'skillMapping' => $skills->f_wh1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Armor Lvl 2 :', 'skillName' => 'f_wh2', 'skillMapping' => $skills->f_wh2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Armor Lvl 3 :', 'skillName' => 'f_wh3', 'skillMapping' => $skills->f_wh3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Armor Lvl 4 :', 'skillName' => 'f_wh4', 'skillMapping' => $skills->f_wh4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Armor Lvl 5 :', 'skillName' => 'f_wh5', 'skillMapping' => $skills->f_wh5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Armor Lvl 6 :', 'skillName' => 'f_wh6', 'skillMapping' => $skills->f_wh6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Plate Boots-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('profile.skillselector', ['skillTitle' => 'Plate Boots Lvl 1 :', 'skillName' => 'f_wi1', 'skillMapping' => $skills->f_wi1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Boots Lvl 2 :', 'skillName' => 'f_wi2', 'skillMapping' => $skills->f_wi2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Boots Lvl 3 :', 'skillName' => 'f_wi3', 'skillMapping' => $skills->f_wi3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Boots Lvl 4 :', 'skillName' => 'f_wi4', 'skillMapping' => $skills->f_wi4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Boots Lvl 5 :', 'skillName' => 'f_wi5', 'skillMapping' => $skills->f_wi5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Boots Lvl 6 :', 'skillName' => 'f_wi6', 'skillMapping' => $skills->f_wi6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
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
                        <div class="panel panel-default">
                            <div class="panel-body">
                             @include('profile.skillselector', ['skillTitle' => 'Journeyman Hunter :', 'skillName' => 'f_jh', 'skillMapping' => $skills->f_jh, 'skillMin' => 0, 'skillMax' => 5, 'masteryImg' => 'missing.png'])
                        	</div>
                    	</div>
                    </div>
                    <!--Swords-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Bowman :', 'skillName' => 'f_ha1', 'skillMapping' => $skills->f_ha1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Warbowman :', 'skillName' => 'f_ha2', 'skillMapping' => $skills->f_ha2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Longbowman :', 'skillName' => 'f_ha3', 'skillMapping' => $skills->f_ha3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Bowman :', 'skillName' => 'f_ha4', 'skillMapping' => $skills->f_ha4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Warbowman :', 'skillName' => 'f_ha5', 'skillMapping' => $skills->f_ha5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Longbowman :', 'skillName' => 'f_ha6', 'skillMapping' => $skills->f_ha6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                        	</div>
                    	</div>
                    </div>
                    <!--Axes-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Spear Fighter :', 'skillName' => 'f_hb1', 'skillMapping' => $skills->f_hb1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Pike Fighter :', 'skillName' => 'f_hb2', 'skillMapping' => $skills->f_hb2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Halberdier :', 'skillName' => 'f_hb3', 'skillMapping' => $skills->f_hb3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Spear Fighter :', 'skillName' => 'f_hb4', 'skillMapping' => $skills->f_hb4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Pike Fighter :', 'skillName' => 'f_hb5', 'skillMapping' => $skills->f_hb5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Halberdier :', 'skillName' => 'f_hb6', 'skillMapping' => $skills->f_hb6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Maces-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Druid :', 'skillName' => 'f_hc1', 'skillMapping' => $skills->f_hc1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Great Druid :', 'skillName' => 'f_hc2', 'skillMapping' => $skills->f_hc2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Seer :', 'skillName' => 'f_hc3', 'skillMapping' => $skills->f_hc3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Druid :', 'skillName' => 'f_hc4', 'skillMapping' => $skills->f_hc4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Great Druid :', 'skillName' => 'f_hc5', 'skillMapping' => $skills->f_hc5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Seer :', 'skillName' => 'f_hc6', 'skillMapping' => $skills->f_hc6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Hammer-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Dagger Fighter :', 'skillName' => 'f_hd1', 'skillMapping' => $skills->f_hd1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Dagger Pair Fighter :', 'skillName' => 'f_hd2', 'skillMapping' => $skills->f_hd2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Claw Fighter :', 'skillName' => 'f_hd3', 'skillMapping' => $skills->f_hd3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Daggeragger Fighter :', 'skillName' => 'f_hd4', 'skillMapping' => $skills->f_hd4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Dagger Pair Fighter :', 'skillName' => 'f_hd5', 'skillMapping' => $skills->f_hd5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Claw Fighter :', 'skillName' => 'f_hd6', 'skillMapping' => $skills->f_hd6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Crossbow-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Knife Thrower :', 'skillName' => 'f_he1', 'skillMapping' => $skills->f_he1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Axe Thrower :', 'skillName' => 'f_he2', 'skillMapping' => $skills->f_he2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Hammer Thrower :', 'skillName' => 'f_he3', 'skillMapping' => $skills->f_he3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Knife Thrower :', 'skillName' => 'f_he4', 'skillMapping' => $skills->f_he4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Axe Thrower :', 'skillName' => 'f_he5', 'skillMapping' => $skills->f_he5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Hammer Thrower :', 'skillName' => 'f_he6', 'skillMapping' => $skills->f_he6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Shield-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Torch Fighter :', 'skillName' => 'f_hf1', 'skillMapping' => $skills->f_hf1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Totem Fighter :', 'skillName' => 'f_hf2', 'skillMapping' => $skills->f_hf2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Hornblower :', 'skillName' => 'f_hf3', 'skillMapping' => $skills->f_hf3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Torch Fighter :', 'skillName' => 'f_hf4', 'skillMapping' => $skills->f_hf4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Totem Fighter :', 'skillName' => 'f_hf5', 'skillMapping' => $skills->f_hf5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Hornblower :', 'skillName' => 'f_hf6', 'skillMapping' => $skills->f_hf6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Leather Hood-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Hood Lvl 1 :', 'skillName' => 'f_hg1', 'skillMapping' => $skills->f_hg1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Hood Lvl 2 :', 'skillName' => 'f_hg2', 'skillMapping' => $skills->f_hg2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Hood Lvl 3 :', 'skillName' => 'f_hg3', 'skillMapping' => $skills->f_hg3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Hood Lvl 4 :', 'skillName' => 'f_hg4', 'skillMapping' => $skills->f_hg4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Hood Lvl 5 :', 'skillName' => 'f_hg5', 'skillMapping' => $skills->f_hg5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Hood Lvl 6 :', 'skillName' => 'f_hg6', 'skillMapping' => $skills->f_hg6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Leather Armor-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Armor Lvl 1 :', 'skillName' => 'f_hh1', 'skillMapping' => $skills->f_hh1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Armor Lvl 2 :', 'skillName' => 'f_hh2', 'skillMapping' => $skills->f_hh2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Armor Lvl 3 :', 'skillName' => 'f_hh3', 'skillMapping' => $skills->f_hh3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Armor Lvl 4 :', 'skillName' => 'f_hh4', 'skillMapping' => $skills->f_hh4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Armor Lvl 5 :', 'skillName' => 'f_hh5', 'skillMapping' => $skills->f_hh5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Armor Lvl 6 :', 'skillName' => 'f_hh6', 'skillMapping' => $skills->f_hh6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Leather Shoes-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Shoes Lvl 1 :', 'skillName' => 'f_hi1', 'skillMapping' => $skills->f_hi1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Shoes Lvl 2 :', 'skillName' => 'f_hi2', 'skillMapping' => $skills->f_hi2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Shoes Lvl 3 :', 'skillName' => 'f_hi3', 'skillMapping' => $skills->f_hi3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Shoes Lvl 4 :', 'skillName' => 'f_hi4', 'skillMapping' => $skills->f_hi4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Shoes Lvl 5 :', 'skillName' => 'f_hi5', 'skillMapping' => $skills->f_hi5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Shoes Lvl 6 :', 'skillName' => 'f_hi6', 'skillMapping' => $skills->f_hi6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
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
                        <div class="panel panel-default">
                            <div class="panel-body">
                				@include('profile.skillselector', ['skillTitle' => 'Journeyman Mage :', 'skillName' => 'f_jm', 'skillMapping' => $skills->f_jm, 'skillMin' => 0, 'skillMax' => 5, 'masteryImg' => 'missing.png'])
                        	</div>
                    	</div>
                    </div>
                    <!--Swords-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Pyromancer :', 'skillName' => 'f_ma1', 'skillMapping' => $skills->f_ma1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Great Pyromancer :', 'skillName' => 'f_ma2', 'skillMapping' => $skills->f_ma2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Infernal Mage :', 'skillName' => 'f_ma3', 'skillMapping' => $skills->f_ma3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Pyromancer :', 'skillName' => 'f_ma4', 'skillMapping' => $skills->f_ma4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Great Pyromancer :', 'skillName' => 'f_ma5', 'skillMapping' => $skills->f_ma5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Infernal Mage :', 'skillName' => 'f_ma6', 'skillMapping' => $skills->f_ma6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                        	</div>
                    	</div>
                    </div>
                    <!--Axes-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Priest :', 'skillName' => 'f_mb1', 'skillMapping' => $skills->f_mb1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Great Priest :', 'skillName' => 'f_mb2', 'skillMapping' => $skills->f_mb2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Divine Priest :', 'skillName' => 'f_mb3', 'skillMapping' => $skills->f_mb3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Priest :', 'skillName' => 'f_mb4', 'skillMapping' => $skills->f_mb4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Great Priest :', 'skillName' => 'f_mb5', 'skillMapping' => $skills->f_mb5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Divine Priest :', 'skillName' => 'f_mb6', 'skillMapping' => $skills->f_mb6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Maces-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Arcanist :', 'skillName' => 'f_mc1', 'skillMapping' => $skills->f_mc1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Great Arcanist :', 'skillName' => 'f_mc2', 'skillMapping' => $skills->f_mc2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enigmatist :', 'skillName' => 'f_mc3', 'skillMapping' => $skills->f_mc3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Arcanist :', 'skillName' => 'f_mc4', 'skillMapping' => $skills->f_mc4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Great Arcanist :', 'skillName' => 'f_mc5', 'skillMapping' => $skills->f_mc5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Enigmatist :', 'skillName' => 'f_mc6', 'skillMapping' => $skills->f_mc6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Hammer-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Frost Mage :', 'skillName' => 'f_md1', 'skillMapping' => $skills->f_md1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Great Frost Mage :', 'skillName' => 'f_md2', 'skillMapping' => $skills->f_md2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Glacial Mage :', 'skillName' => 'f_md3', 'skillMapping' => $skills->f_md3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Frost Mage :', 'skillName' => 'f_md4', 'skillMapping' => $skills->f_md4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Great Frost Mage :', 'skillName' => 'f_md5', 'skillMapping' => $skills->f_md5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Glacial Mage :', 'skillName' => 'f_md6', 'skillMapping' => $skills->f_md6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Crossbow-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Warlock :', 'skillName' => 'f_me1', 'skillMapping' => $skills->f_me1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Great Warlock :', 'skillName' => 'f_me2', 'skillMapping' => $skills->f_me2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Demonologist :', 'skillName' => 'f_me3', 'skillMapping' => $skills->f_me3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Warlock :', 'skillName' => 'f_me4', 'skillMapping' => $skills->f_me4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Great Warlock :', 'skillName' => 'f_me5', 'skillMapping' => $skills->f_me5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Demonologist :', 'skillName' => 'f_me6', 'skillMapping' => $skills->f_me6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Shield-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Tome Fighter :', 'skillName' => 'f_mf1', 'skillMapping' => $skills->f_mf1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Magical Orb Fighter :', 'skillName' => 'f_mf2', 'skillMapping' => $skills->f_mf2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Harp Fighter :', 'skillName' => 'f_mf3', 'skillMapping' => $skills->f_mf3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Tome Fighter :', 'skillName' => 'f_mf4', 'skillMapping' => $skills->f_mf4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Magical Orb Fighter :', 'skillName' => 'f_mf5', 'skillMapping' => $skills->f_mf5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Harp :', 'skillName' => 'f_mf6', 'skillMapping' => $skills->f_mf6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Cloth Hood-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Hood Lvl 1 :', 'skillName' => 'f_mg1', 'skillMapping' => $skills->f_mg1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Hood Lvl 2 :', 'skillName' => 'f_mg2', 'skillMapping' => $skills->f_mg2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Hood Lvl 3 :', 'skillName' => 'f_mg3', 'skillMapping' => $skills->f_mg3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Hood Lvl 4 :', 'skillName' => 'f_mg4', 'skillMapping' => $skills->f_mg4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Hood Lvl 5 :', 'skillName' => 'f_mg5', 'skillMapping' => $skills->f_mg5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Hood Lvl 6 :', 'skillName' => 'f_mg6', 'skillMapping' => $skills->f_mg6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Robe-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Robe Lvl 1 :', 'skillName' => 'f_mh1', 'skillMapping' => $skills->f_mh1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Robe Lvl 2 :', 'skillName' => 'f_mh2', 'skillMapping' => $skills->f_mh2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Robe Lvl 3 :', 'skillName' => 'f_mh3', 'skillMapping' => $skills->f_mh3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Robe Lvl 4 :', 'skillName' => 'f_mh4', 'skillMapping' => $skills->f_mh4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Robe Lvl 5 :', 'skillName' => 'f_mh5', 'skillMapping' => $skills->f_mh5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Robe Lvl 6 :', 'skillName' => 'f_mh6', 'skillMapping' => $skills->f_mh6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Cloth Shoes-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Shoes Lvl 1 :', 'skillName' => 'f_mi1', 'skillMapping' => $skills->f_mi1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Shoes Lvl 2 :', 'skillName' => 'f_mi2', 'skillMapping' => $skills->f_mi2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Shoes Lvl 3 :', 'skillName' => 'f_mi3', 'skillMapping' => $skills->f_mi3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Shoes Lvl 4 :', 'skillName' => 'f_mi4', 'skillMapping' => $skills->f_mi4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Shoes Lvl 5 :', 'skillName' => 'f_mi5', 'skillMapping' => $skills->f_mi5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Shoes Lvl 6 :', 'skillName' => 'f_mi6', 'skillMapping' => $skills->f_mi6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>