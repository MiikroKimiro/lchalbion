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
                            'f_jw', // Journeyman Fighter
                            // WARRIOR
                            'f_wa1','f_wa2','f_wa3','f_wa4','f_wa5', // Epee
                            'f_wb1','f_wb2','f_wb3','f_wb4','f_wb5', // Hache
                            'f_wc1','f_wc2','f_wc3','f_wc4','f_wc5', // Mace
                            'f_wd1','f_wd2','f_wd3','f_wd4','f_wd5', // Marteau
                            'f_we1','f_we2','f_we3','f_we4','f_we5', // Arbalete
                            'f_wf1','f_wf2','f_wf3','f_wf4','f_wf5', // Bouclier
                            'f_wg1','f_wg2','f_wg3','f_wg4','f_wg5', // Tete plaque
                            'f_wh1','f_wh2','f_wh3','f_wh4','f_wh5', // Torse plaque
                            'f_wi1','f_wi2','f_wi3','f_wi4','f_wi5', // Botte plaque
                            // HUNTER
                            'f_ha1','f_ha2','f_ha3','f_ha4','f_ha5', // Arc
                            'f_hb1','f_hb2','f_hb3','f_hb4','f_hb5', // Lance
                            'f_hc1','f_hc2','f_hc3','f_hc4','f_hc5', // Baton Nature
                            'f_hd1','f_hd2','f_hd3','f_hd4','f_hd5', // Dague
                            'f_he1','f_he2','f_he3','f_he4','f_he5', // Arme de lancer
                            'f_hf1','f_hf2','f_hf3','f_hf4','f_hf5', // Torche
                            'f_hg1','f_hg2','f_hg3','f_hg4','f_hg5', // Tete cuir
                            'f_hh1','f_hh2','f_hh3','f_hh4','f_hh5', // Torse cuir
                            'f_hi1','f_hi2','f_hi3','f_hi4','f_hi5', // Botte cuir
                            // MAGE
                            'f_ma1','f_ma2','f_ma3','f_ma4','f_ma5', // Baton Feu
                            'f_mb1','f_mb2','f_mb3','f_mb4','f_mb5', // Baton Holy
                            'f_mc1','f_mc2','f_mc3','f_mc4','f_mc5', // Baton Arcane
                            'f_md1','f_md2','f_md3','f_md4','f_md5', // Baton Glace
                            'f_me1','f_me2','f_me3','f_me4','f_me5', // Baton Maudit
                            'f_mf1','f_mf2','f_mf3','f_mf4','f_mf5', // Tome
                            'f_mg1','f_mg2','f_mg3','f_mg4','f_mg5', // Tete tissus
                            'f_mh1','f_mh2','f_mh3','f_mh4','f_mh5', // torse tissus
                            'f_mi1','f_mi2','f_mi3','f_mi4','f_mi5', // Botte tissus
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
                            'userID'];
                            
    
    /**
     * Avoid the update of created_at and updated_at in database
     */
    public $timestamps = false;
}
