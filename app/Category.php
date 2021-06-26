<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function stock()
    {
        return $this->hasMany('App\Stock');
    }
}
