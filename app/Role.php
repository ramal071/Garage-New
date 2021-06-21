<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //  add roles to technician
    //  protected $table = 'roles';

    public function employees()
    {
        return $this->hasMany('App\Employee');
    }
}
