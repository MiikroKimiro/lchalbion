<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accounting extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'accounting';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['userID', 'concept', 'class', 'amount'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];
}
