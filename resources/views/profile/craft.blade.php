<h4><img src="{{ URL::asset('assets/images/icon/fight.png') }}" height="100px" width="100px"></img>  Compétences de Combat</h4>
<br/>
<div class="row">
	<div class="col-sm-2">
		<div class="panel panel-default">
        	<div class="panel-body">
				<div class="text-center">
				    <h5>Trainee Crasts Crafter :</h5>
				    {!! Form::selectRange('c_tc', 0, 5, $skills->c_tc, ['class' => 'form-control', $enabledDisableEdit => $enabledDisableEdit]) !!}
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
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseCraftMelee" aria-expanded="false" class="collapsed"><img src="{{ URL::asset('assets/images/icon/melee.png') }}" height="50px" width="50px"></img> Compétences de Warrior's Forge</a>
                </h4>
            </div>
            <div id="collapseCraftMelee" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                <div class="panel-body">
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('profile.skillselector', ['skillTitle' => 'Warrior\'s Forge :', 'skillName' => 'c_jw', 'skillMapping' => $skills->c_jw, 'skillMin' => 0, 'skillMax' => 5, 'masteryImg' => 'missing.png'])
                    	    </div>
                    	</div>
                    </div>
                    <!--Swords-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('profile.skillselector', ['skillTitle' => 'Broadsword Crafter :',          'skillName' => 'c_wa1', 'skillMapping' => $skills->c_wa1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Claymore Crafter :',            'skillName' => 'c_wa2', 'skillMapping' => $skills->c_wa2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Glaive Crafter :',              'skillName' => 'c_wa3', 'skillMapping' => $skills->c_wa3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Broadword Crafter :', 'skillName' => 'c_wa4', 'skillMapping' => $skills->c_wa4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Claymore Crafter :',  'skillName' => 'c_wa5', 'skillMapping' => $skills->c_wa5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Glaive Crafter :',    'skillName' => 'c_wa6', 'skillMapping' => $skills->c_wa6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                    	    </div>
                    	</div>
                    </div>
                    <!--Axes-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('profile.skillselector', ['skillTitle' => 'Battle Axe Crafter :',           'skillName' => 'c_wb1', 'skillMapping' => $skills->c_wb1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Great Axe Crafter :',            'skillName' => 'c_wb2', 'skillMapping' => $skills->c_wb2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Scythe Crafter :',               'skillName' => 'c_wb3', 'skillMapping' => $skills->c_wb3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Battle Axe Crafter :', 'skillName' => 'c_wb4', 'skillMapping' => $skills->c_wb4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Great Axe Crafter :',  'skillName' => 'c_wb5', 'skillMapping' => $skills->c_wb5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Scythe Crafter :',     'skillName' => 'c_wb6', 'skillMapping' => $skills->c_wb6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Maces-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('profile.skillselector', ['skillTitle' => 'Mace Crafter :',                 'skillName' => 'c_wc1', 'skillMapping' => $skills->c_wc1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Heavy Mace Crafter :',           'skillName' => 'c_wc2', 'skillMapping' => $skills->c_wc2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Flail Crafter :',                'skillName' => 'c_wc3', 'skillMapping' => $skills->c_wc3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Mace Crafter :',       'skillName' => 'c_wc4', 'skillMapping' => $skills->c_wc4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Heavy Mace Crafter :', 'skillName' => 'c_wc5', 'skillMapping' => $skills->c_wc5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Flail Crafter :',      'skillName' => 'c_wc6', 'skillMapping' => $skills->c_wc6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Hammer-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('profile.skillselector', ['skillTitle' => 'Hammer Crafter :',                 'skillName' => 'c_wd1', 'skillMapping' => $skills->c_wd1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Pole Hammer Crafter :',            'skillName' => 'c_wd2', 'skillMapping' => $skills->c_wd2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Great Hammer Crafter :',           'skillName' => 'c_wd3', 'skillMapping' => $skills->c_wd3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Hammer Crafter :',       'skillName' => 'c_wd4', 'skillMapping' => $skills->c_wd4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Pole Hammer Crafter :',  'skillName' => 'c_wd5', 'skillMapping' => $skills->c_wd5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Great Hammer Crafter :', 'skillName' => 'c_wd6', 'skillMapping' => $skills->c_wd6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Crossbow-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('profile.skillselector', ['skillTitle' => 'Crossbow Crafter :',                     'skillName' => 'c_we1', 'skillMapping' => $skills->c_we1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Heavy Crossbow Crafter :',               'skillName' => 'c_we2', 'skillMapping' => $skills->c_we2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Repeating Crossbow Crafter :',           'skillName' => 'c_we3', 'skillMapping' => $skills->c_we3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted  Crossbow Crafter :',           'skillName' => 'c_we4', 'skillMapping' => $skills->c_we4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted  Heavy Crossbow Crafter :',     'skillName' => 'c_we5', 'skillMapping' => $skills->c_we5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted  Repeating Crossbow Crafter :', 'skillName' => 'c_we6', 'skillMapping' => $skills->c_we6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Shield-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('profile.skillselector', ['skillTitle' => 'Shield Crafter :',                  'skillName' => 'c_wf1', 'skillMapping' => $skills->c_wf1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Tower Shield Crafter :',            'skillName' => 'c_wf2', 'skillMapping' => $skills->c_wf2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Spiked Shield Crafter :',           'skillName' => 'c_wf3', 'skillMapping' => $skills->c_wf3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Shield Crafter :',        'skillName' => 'c_wf4', 'skillMapping' => $skills->c_wf4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Tower Shield Crafter :',  'skillName' => 'c_wf5', 'skillMapping' => $skills->c_wf5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Spiked Shield Crafter :', 'skillName' => 'c_wf6', 'skillMapping' => $skills->c_wf6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Plate Helmet-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('profile.skillselector', ['skillTitle' => 'Plate Helmet Lvl 1 :', 'skillName' => 'c_wg1', 'skillMapping' => $skills->c_wg1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Helmet Lvl 2 :', 'skillName' => 'c_wg2', 'skillMapping' => $skills->c_wg2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Helmet Lvl 3 :', 'skillName' => 'c_wg3', 'skillMapping' => $skills->c_wg3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Helmet Lvl 4 :', 'skillName' => 'c_wg4', 'skillMapping' => $skills->c_wg4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Helmet Lvl 5 :', 'skillName' => 'c_wg5', 'skillMapping' => $skills->c_wg5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Helmet Lvl 6 :', 'skillName' => 'c_wg6', 'skillMapping' => $skills->c_wg6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Plate Armor-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('profile.skillselector', ['skillTitle' => 'Plate Armor Lvl 1 :', 'skillName' => 'c_wh1', 'skillMapping' => $skills->c_wh1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Armor Lvl 2 :', 'skillName' => 'c_wh2', 'skillMapping' => $skills->c_wh2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Armor Lvl 3 :', 'skillName' => 'c_wh3', 'skillMapping' => $skills->c_wh3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Armor Lvl 4 :', 'skillName' => 'c_wh4', 'skillMapping' => $skills->c_wh4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Armor Lvl 5 :', 'skillName' => 'c_wh5', 'skillMapping' => $skills->c_wh5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Armor Lvl 6 :', 'skillName' => 'c_wh6', 'skillMapping' => $skills->c_wh6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Plate Boots-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('profile.skillselector', ['skillTitle' => 'Plate Boots Lvl 1 :', 'skillName' => 'c_wi1', 'skillMapping' => $skills->c_wi1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Boots Lvl 2 :', 'skillName' => 'c_wi2', 'skillMapping' => $skills->c_wi2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Boots Lvl 3 :', 'skillName' => 'c_wi3', 'skillMapping' => $skills->c_wi3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Boots Lvl 4 :', 'skillName' => 'c_wi4', 'skillMapping' => $skills->c_wi4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Boots Lvl 5 :', 'skillName' => 'c_wi5', 'skillMapping' => $skills->c_wi5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Plate Boots Lvl 6 :', 'skillName' => 'c_wi6', 'skillMapping' => $skills->c_wi6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
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
                        <div class="panel panel-default">
                            <div class="panel-body">
                             @include('profile.skillselector', ['skillTitle' => 'Hunter\'s Lodge :', 'skillName' => 'c_jh', 'skillMapping' => $skills->c_jh, 'skillMin' => 0, 'skillMax' => 5, 'masteryImg' => 'missing.png'])
                        	</div>
                    	</div>
                    </div>
                    <!--Swords-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Bow Crafter :', 'skillName' => 'c_ha1', 'skillMapping' => $skills->c_ha1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Warbow Crafter :', 'skillName' => 'c_ha2', 'skillMapping' => $skills->c_ha2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Longbow Crafter :', 'skillName' => 'c_ha3', 'skillMapping' => $skills->c_ha3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Bow Crafter :', 'skillName' => 'c_ha4', 'skillMapping' => $skills->c_ha4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Warbow Crafter :', 'skillName' => 'c_ha5', 'skillMapping' => $skills->c_ha5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Longbow Crafter :', 'skillName' => 'c_ha6', 'skillMapping' => $skills->c_ha6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                        	</div>
                    	</div>
                    </div>
                    <!--Axes-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Spear Crafter :', 'skillName' => 'c_hb1', 'skillMapping' => $skills->c_hb1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Pike Crafter :', 'skillName' => 'c_hb2', 'skillMapping' => $skills->c_hb2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Halber Crafter :', 'skillName' => 'c_hb3', 'skillMapping' => $skills->c_hb3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Spear Crafter :', 'skillName' => 'c_hb4', 'skillMapping' => $skills->c_hb4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Pike Crafter :', 'skillName' => 'c_hb5', 'skillMapping' => $skills->c_hb5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Halberd Crafter :', 'skillName' => 'c_hb6', 'skillMapping' => $skills->c_hb6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Maces-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Nature Staff Crafter :', 'skillName' => 'c_hc1', 'skillMapping' => $skills->c_hc1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Great Nature Staff Crafter :', 'skillName' => 'c_hc2', 'skillMapping' => $skills->c_hc2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Wild Staff Crafter :', 'skillName' => 'c_hc3', 'skillMapping' => $skills->c_hc3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Nature Staff Crafter :', 'skillName' => 'c_hc4', 'skillMapping' => $skills->c_hc4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Great Nature Staff Crafter :', 'skillName' => 'c_hc5', 'skillMapping' => $skills->c_hc5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Wild Staff Crafter :', 'skillName' => 'c_hc6', 'skillMapping' => $skills->c_hc6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Hammer-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Dagger Crafter :', 'skillName' => 'c_hd1', 'skillMapping' => $skills->c_hd1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Dagger Pair Crafter :', 'skillName' => 'c_hd2', 'skillMapping' => $skills->c_hd2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Claw Crafter :', 'skillName' => 'c_hd3', 'skillMapping' => $skills->c_hd3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Daggeragger Crafter :', 'skillName' => 'c_hd4', 'skillMapping' => $skills->c_hd4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Dagger Pair Crafter :', 'skillName' => 'c_hd5', 'skillMapping' => $skills->c_hd5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Claw Crafter :', 'skillName' => 'c_hd6', 'skillMapping' => $skills->c_hd6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Crossbow-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Throwing Knives Crafter :', 'skillName' => 'c_he1', 'skillMapping' => $skills->c_he1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Throwing Axe Crafter :', 'skillName' => 'c_he2', 'skillMapping' => $skills->c_he2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Throwing Hammer Crafter :', 'skillName' => 'c_he3', 'skillMapping' => $skills->c_he3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Throwing Knives Crafter :', 'skillName' => 'c_he4', 'skillMapping' => $skills->c_he4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Throwing Axe Crafter :', 'skillName' => 'c_he5', 'skillMapping' => $skills->c_he5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Throwing Hammer Crafter :', 'skillName' => 'c_he6', 'skillMapping' => $skills->c_he6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Shield-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Torch Crafter :', 'skillName' => 'c_hf1', 'skillMapping' => $skills->c_hf1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Totem Crafter :', 'skillName' => 'c_hf2', 'skillMapping' => $skills->c_hf2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Hornb Crafter :', 'skillName' => 'c_hf3', 'skillMapping' => $skills->c_hf3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Torch Crafter :', 'skillName' => 'c_hf4', 'skillMapping' => $skills->c_hf4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Totem Crafter :', 'skillName' => 'c_hf5', 'skillMapping' => $skills->c_hf5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Horn Crafter :', 'skillName' => 'c_hf6', 'skillMapping' => $skills->c_hf6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Leather Hood-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Hood Lvl 1 :', 'skillName' => 'c_hg1', 'skillMapping' => $skills->c_hg1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Hood Lvl 2 :', 'skillName' => 'c_hg2', 'skillMapping' => $skills->c_hg2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Hood Lvl 3 :', 'skillName' => 'c_hg3', 'skillMapping' => $skills->c_hg3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Hood Lvl 4 :', 'skillName' => 'c_hg4', 'skillMapping' => $skills->c_hg4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Hood Lvl 5 :', 'skillName' => 'c_hg5', 'skillMapping' => $skills->c_hg5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Hood Lvl 6 :', 'skillName' => 'c_hg6', 'skillMapping' => $skills->c_hg6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Leather Armor-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Armor Lvl 1 :', 'skillName' => 'c_hh1', 'skillMapping' => $skills->c_hh1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Armor Lvl 2 :', 'skillName' => 'c_hh2', 'skillMapping' => $skills->c_hh2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Armor Lvl 3 :', 'skillName' => 'c_hh3', 'skillMapping' => $skills->c_hh3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Armor Lvl 4 :', 'skillName' => 'c_hh4', 'skillMapping' => $skills->c_hh4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Armor Lvl 5 :', 'skillName' => 'c_hh5', 'skillMapping' => $skills->c_hh5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Armor Lvl 6 :', 'skillName' => 'c_hh6', 'skillMapping' => $skills->c_hh6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Leather Shoes-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Shoes Lvl 1 :', 'skillName' => 'c_hi1', 'skillMapping' => $skills->c_hi1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Shoes Lvl 2 :', 'skillName' => 'c_hi2', 'skillMapping' => $skills->c_hi2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Shoes Lvl 3 :', 'skillName' => 'c_hi3', 'skillMapping' => $skills->c_hi3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Shoes Lvl 4 :', 'skillName' => 'c_hi4', 'skillMapping' => $skills->c_hi4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Shoes Lvl 5 :', 'skillName' => 'c_hi5', 'skillMapping' => $skills->c_hi5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Leather Shoes Lvl 6 :', 'skillName' => 'c_hi6', 'skillMapping' => $skills->c_hi6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseCraftMagic" class="" aria-expanded="false"><img src="{{ URL::asset('assets/images/icon/magic.png') }}" height="50px" width="50px"></img> Compétences du Mage's Tower</a>
                </h4>
            </div>
            <div id="collapseCraftMagic" class="panel-collapse collapse" aria-expanded="false">
                <div class="panel-body">
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                				@include('profile.skillselector', ['skillTitle' => 'Mage\'s Tower :', 'skillName' => 'c_jm', 'skillMapping' => $skills->c_jm, 'skillMin' => 0, 'skillMax' => 5, 'masteryImg' => 'missing.png'])
                        	</div>
                    	</div>
                    </div>
                    <!--Swords-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Fire Staff Crafter :', 'skillName' => 'c_ma1', 'skillMapping' => $skills->c_ma1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Great Fire Staff Crafter :', 'skillName' => 'c_ma2', 'skillMapping' => $skills->c_ma2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Infernal Staff Crafter :', 'skillName' => 'c_ma3', 'skillMapping' => $skills->c_ma3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Fire Staff Crafter :', 'skillName' => 'c_ma4', 'skillMapping' => $skills->c_ma4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Great Fire Staff Crafter :', 'skillName' => 'c_ma5', 'skillMapping' => $skills->c_ma5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Infernal  Staff Crafter :', 'skillName' => 'c_ma6', 'skillMapping' => $skills->c_ma6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                        	</div>
                    	</div>
                    </div>
                    <!--Axes-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Holy Staff Crafter :', 'skillName' => 'c_mb1', 'skillMapping' => $skills->c_mb1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Great Holy Staff Crafter :', 'skillName' => 'c_mb2', 'skillMapping' => $skills->c_mb2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Divine Staff Crafter :', 'skillName' => 'c_mb3', 'skillMapping' => $skills->c_mb3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Holy Staff Crafter :', 'skillName' => 'c_mb4', 'skillMapping' => $skills->c_mb4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Great Holy Staff Crafter :', 'skillName' => 'c_mb5', 'skillMapping' => $skills->c_mb5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Divine Staff Crafter :', 'skillName' => 'c_mb6', 'skillMapping' => $skills->c_mb6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Maces-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Arcane Staff Crafter :', 'skillName' => 'c_mc1', 'skillMapping' => $skills->c_mc1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Great Arcane Staff Crafter :', 'skillName' => 'c_mc2', 'skillMapping' => $skills->c_mc2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enigmatic Staff Crafter :', 'skillName' => 'c_mc3', 'skillMapping' => $skills->c_mc3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Arcane Staff Crafter :', 'skillName' => 'c_mc4', 'skillMapping' => $skills->c_mc4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Great Arcane Staff Crafter :', 'skillName' => 'c_mc5', 'skillMapping' => $skills->c_mc5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Enigmatic Staff Crafter :', 'skillName' => 'c_mc6', 'skillMapping' => $skills->c_mc6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Hammer-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Frost Staff Crafter :', 'skillName' => 'c_md1', 'skillMapping' => $skills->c_md1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Great Frost Staff Crafter :', 'skillName' => 'c_md2', 'skillMapping' => $skills->c_md2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Glacial Staff Crafter :', 'skillName' => 'c_md3', 'skillMapping' => $skills->c_md3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Frost Staff Crafter :', 'skillName' => 'c_md4', 'skillMapping' => $skills->c_md4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Great Frost Staff Crafter :', 'skillName' => 'c_md5', 'skillMapping' => $skills->c_md5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Glacial Staff Crafter :', 'skillName' => 'c_md6', 'skillMapping' => $skills->c_md6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Crossbow-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Cursed Staff Crafter :', 'skillName' => 'c_me1', 'skillMapping' => $skills->c_me1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Great Cursed Staff Crafter :', 'skillName' => 'c_me2', 'skillMapping' => $skills->c_me2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Demonic Staff Crafter :', 'skillName' => 'c_me3', 'skillMapping' => $skills->c_me3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Cursed Staff Crafter :', 'skillName' => 'c_me4', 'skillMapping' => $skills->c_me4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Great Cursed Staff Crafter :', 'skillName' => 'c_me5', 'skillMapping' => $skills->c_me5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Demonic Staff Crafter :', 'skillName' => 'c_me6', 'skillMapping' => $skills->c_me6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Shield-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Tome of Spells Crafter :', 'skillName' => 'c_mf1', 'skillMapping' => $skills->c_mf1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Magical Orb Crafter :', 'skillName' => 'c_mf2', 'skillMapping' => $skills->c_mf2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Harp Crafter :', 'skillName' => 'c_mf3', 'skillMapping' => $skills->c_mf3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Tome Crafter :', 'skillName' => 'c_mf4', 'skillMapping' => $skills->c_mf4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Magical Orb Crafter :', 'skillName' => 'c_mf5', 'skillMapping' => $skills->c_mf5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Enchanted Harp :', 'skillName' => 'c_mf6', 'skillMapping' => $skills->c_mf6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Cloth Hood-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Hood Lvl 1 :', 'skillName' => 'c_mg1', 'skillMapping' => $skills->c_mg1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Hood Lvl 2 :', 'skillName' => 'c_mg2', 'skillMapping' => $skills->c_mg2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Hood Lvl 3 :', 'skillName' => 'c_mg3', 'skillMapping' => $skills->c_mg3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Hood Lvl 4 :', 'skillName' => 'c_mg4', 'skillMapping' => $skills->c_mg4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Hood Lvl 5 :', 'skillName' => 'c_mg5', 'skillMapping' => $skills->c_mg5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Hood Lvl 6 :', 'skillName' => 'c_mg6', 'skillMapping' => $skills->c_mg6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Robe-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Robe Lvl 1 :', 'skillName' => 'c_mh1', 'skillMapping' => $skills->c_mh1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Robe Lvl 2 :', 'skillName' => 'c_mh2', 'skillMapping' => $skills->c_mh2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Robe Lvl 3 :', 'skillName' => 'c_mh3', 'skillMapping' => $skills->c_mh3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Robe Lvl 4 :', 'skillName' => 'c_mh4', 'skillMapping' => $skills->c_mh4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Robe Lvl 5 :', 'skillName' => 'c_mh5', 'skillMapping' => $skills->c_mh5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Robe Lvl 6 :', 'skillName' => 'c_mh6', 'skillMapping' => $skills->c_mh6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                    <!--Cloth Shoes-->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Shoes Lvl 1 :', 'skillName' => 'c_mi1', 'skillMapping' => $skills->c_mi1, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Shoes Lvl 2 :', 'skillName' => 'c_mi2', 'skillMapping' => $skills->c_mi2, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Shoes Lvl 3 :', 'skillName' => 'c_mi3', 'skillMapping' => $skills->c_mi3, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Shoes Lvl 4 :', 'skillName' => 'c_mi4', 'skillMapping' => $skills->c_mi4, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Shoes Lvl 5 :', 'skillName' => 'c_mi5', 'skillMapping' => $skills->c_mi5, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            	@include('profile.skillselector', ['skillTitle' => 'Cloth Shoes Lvl 6 :', 'skillName' => 'c_mi6', 'skillMapping' => $skills->c_mi6, 'skillMin' => 0, 'skillMax' => 10, 'masteryImg' => 'missing.png'])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>