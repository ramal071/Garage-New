<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    // tmj
    // public function brand()
    // {
    //     return $this->belongsTo('App\Brand');
    // }

    public function stock()
    {
        return $this->hasMany('App\Stock');
    }
}
