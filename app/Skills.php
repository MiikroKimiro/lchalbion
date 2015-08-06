<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'skills';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
                            // FIGHTER
                            'f_tf', // Trainee Fighter
                            // WARRIOR
                            'f_jw', // Journeyman Warrior
                            'f_wa1','f_wa2','f_wa3','f_wa4','f_wa5','f_wa6', // Epee
                            'f_wb1','f_wb2','f_wb3','f_wb4','f_wb5','f_wb6', // Hache
                            'f_wc1','f_wc2','f_wc3','f_wc4','f_wc5','f_wc6', // Mace
                            'f_wd1','f_wd2','f_wd3','f_wd4','f_wd5','f_wd6', // Marteau
                            'f_we1','f_we2','f_we3','f_we4','f_we5','f_we6', // Arbalete
                            'f_wf1','f_wf2','f_wf3','f_wf4','f_wf5','f_wf6', // Bouclier
                            'f_wg1','f_wg2','f_wg3','f_wg4','f_wg5','f_wg6', // Tete plaque
                            'f_wh1','f_wh2','f_wh3','f_wh4','f_wh5','f_wh6', // Torse plaque
                            'f_wi1','f_wi2','f_wi3','f_wi4','f_wi5','f_wi6', // Botte plaque
                            // HUNTER
                            'f_jh', // Journeyman Hunter
                            'f_ha1','f_ha2','f_ha3','f_ha4','f_ha5','f_ha6', // Arc
                            'f_hb1','f_hb2','f_hb3','f_hb4','f_hb5','f_hb6', // Lance
                            'f_hc1','f_hc2','f_hc3','f_hc4','f_hc5','f_hc6', // Baton Nature
                            'f_hd1','f_hd2','f_hd3','f_hd4','f_hd5','f_hd6', // Dague
                            'f_he1','f_he2','f_he3','f_he4','f_he5','f_he6', // Arme de lancer
                            'f_hf1','f_hf2','f_hf3','f_hf4','f_hf5','f_hf6', // Torche
                            'f_hg1','f_hg2','f_hg3','f_hg4','f_hg5','f_hg6', // Tete cuir
                            'f_hh1','f_hh2','f_hh3','f_hh4','f_hh5','f_hh6', // Torse cuir
                            'f_hi1','f_hi2','f_hi3','f_hi4','f_hi5','f_hi6', // Botte cuir
                            // MAGE
                            'f_jm', // Journeyman Mage
                            'f_ma1','f_ma2','f_ma3','f_ma4','f_ma5','f_ma6', // Baton Feu
                            'f_mb1','f_mb2','f_mb3','f_mb4','f_mb5','f_mb6', // Baton Holy
                            'f_mc1','f_mc2','f_mc3','f_mc4','f_mc5','f_mc6', // Baton Arcane
                            'f_md1','f_md2','f_md3','f_md4','f_md5','f_md6', // Baton Glace
                            'f_me1','f_me2','f_me3','f_me4','f_me5','f_me6', // Baton Maudit
                            'f_mf1','f_mf2','f_mf3','f_mf4','f_mf5','f_mf6', // Tome
                            'f_mg1','f_mg2','f_mg3','f_mg4','f_mg5','f_mg6', // Tete tissus
                            'f_mh1','f_mh2','f_mh3','f_mh4','f_mh5','f_mh6', // torse tissus
                            'f_mi1','f_mi2','f_mi3','f_mi4','f_mi5','f_mi6', // Botte tissus
                            // GATHER
                            'g_tg', // Trainee Gatherer
                            'g_fh', // Fiber Harverst
                            'g_as', // Animal Skinner
                            'g_om', // Ore Miner
                            'g_qm', // Quarry Man
                            'g_lj', // LumberJack
                            // FARMER
                            'fa_tf', // Trainee Farmer
                            'fa_gk', // Goat Kebab
                            'fa_pc', // Pork Chops
                            'fa_mp', // Meat Pie
                            'fa_ck', // Cake
                            'fa_fm', // Farmer's Meal
                            'fa_jb', // Journeyman Breeder
                            'fa_ab', // Adepts Breeder
                            'fa_eb', // Expert Breeder
                            'fa_jf', // Journeyman Farmer
                            'fa_af', // Adepts Farmer
                            'fa_ef', // Expert Farmer
                            'fa_ja', // Journeyman Alchemist
                            'fa_aa', // Adepts Alchemist
                            'fa_ea', // Expert Alchemist
                            // CRAFTER
                            'c_tc', // Trainee Crafter
                            // WARRIOR
                            'c_jw', // Journeyman Warrior
                            'c_wa1','c_wa2','c_wa3','c_wa4','c_wa5','c_wa6', // Epee
                            'c_wb1','c_wb2','c_wb3','c_wb4','c_wb5','c_wb6', // Hache
                            'c_wc1','c_wc2','c_wc3','c_wc4','c_wc5','c_wc6', // Mace
                            'c_wd1','c_wd2','c_wd3','c_wd4','c_wd5','c_wd6', // Marteau
                            'c_we1','c_we2','c_we3','c_we4','c_we5','c_we6', // Arbalete
                            'c_wf1','c_wf2','c_wf3','c_wf4','c_wf5','c_wf6', // Bouclier
                            'c_wg1','c_wg2','c_wg3','c_wg4','c_wg5','c_wg6', // Tete plaque
                            'c_wh1','c_wh2','c_wh3','c_wh4','c_wh5','c_wh6', // Torse plaque
                            'c_wi1','c_wi2','c_wi3','c_wi4','c_wi5','c_wi6', // Botte plaque
                            // HUNTER
                            'c_jh', // Journeyman Hunter
                            'c_ha1','c_ha2','c_ha3','c_ha4','c_ha5','c_ha6', // Arc
                            'c_hb1','c_hb2','c_hb3','c_hb4','c_hb5','c_hb6', // Lance
                            'c_hc1','c_hc2','c_hc3','c_hc4','c_hc5','c_hc6', // Baton Nature
                            'c_hd1','c_hd2','c_hd3','c_hd4','c_hd5','c_hd6', // Dague
                            'c_he1','c_he2','c_he3','c_he4','c_he5','c_he6', // Arme de lancer
                            'c_hf1','c_hf2','c_hf3','c_hf4','c_hf5','c_hf6', // Torche
                            'c_hg1','c_hg2','c_hg3','c_hg4','c_hg5','c_hg6', // Tete cuir
                            'c_hh1','c_hh2','c_hh3','c_hh4','c_hh5','c_hh6', // Torse cuir
                            'c_hi1','c_hi2','c_hi3','c_hi4','c_hi5','c_hi6', // Botte cuir
                            // MAGE
                            'c_jm', // Journeyman Mage
                            'c_ma1','c_ma2','c_ma3','c_ma4','c_ma5','c_ma6', // Baton Feu
                            'c_mb1','c_mb2','c_mb3','c_mb4','c_mb5','c_mb6', // Baton Holy
                            'c_mc1','c_mc2','c_mc3','c_mc4','c_mc5','c_mc6', // Baton Arcane
                            'c_md1','c_md2','c_md3','c_md4','c_md5','c_md6', // Baton Glace
                            'c_me1','c_me2','c_me3','c_me4','c_me5','c_me6', // Baton Maudit
                            'c_mf1','c_mf2','c_mf3','c_mf4','c_mf5','c_mf6', // Tome
                            'c_mg1','c_mg2','c_mg3','c_mg4','c_mg5','c_mg6', // Tete tissus
                            'c_mh1','c_mh2','c_mh3','c_mh4','c_mh5','c_mh6', // torse tissus
                            'c_mi1','c_mi2','c_mi3','c_mi4','c_mi5','c_mi6', // Botte tissus
                            // TOOL CRAFTER
                            'c_jt', // Journeyman Toolmaker
                            'c_bt', // Bag Tailor
                            'c_ct', // Cape Tailor
                            'c_ac', // Axe Crafter
                            'c_shc', // Stone Hammer Crafter
                            'c_px', // Picaxe Crafter
                            'c_skc', // Skinning Knife Crafter
                            'c_sc', // Sickle Crafter
                            'c_dhc', // Demolition Hammer Crafter
                            'userID'];
                            
    
    /**
     * Avoid the update of created_at and updated_at in database
     */
    public $timestamps = false;
}
