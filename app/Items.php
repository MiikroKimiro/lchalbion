<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'items';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'skillName', 'skillLevel', 'slot', 'tier', 'level', 'image', 'guildprice', 'marketprice', 'twoHand'];
}
