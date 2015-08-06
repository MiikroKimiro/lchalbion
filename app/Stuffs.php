<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stuffs extends Model
{
    protected $table = 'stuffs';
    protected $fillable = ['userID', 'headID', 'bodyID', 'bootsID', 'weaponID', 'offhandID'];
}
