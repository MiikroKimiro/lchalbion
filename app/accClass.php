<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accClass extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'accclass';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['className'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];
}
