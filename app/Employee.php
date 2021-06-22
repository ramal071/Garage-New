<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // create add employee 

   // protected $table = 'employee';

    public function role()
    {
        return $this->belongsTo('App\Role');
    }
}
