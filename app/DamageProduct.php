<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DamageProduct extends Model
{
    //



    public function stock(){
        return $this->belongsTo(Stock::class);
    }
}
