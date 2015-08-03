<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['userID','tf', 'jw', 'aw1', 'aw2', 'aw3', 'aw4', 'aw5'];
}
