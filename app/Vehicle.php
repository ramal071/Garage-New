<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
}
