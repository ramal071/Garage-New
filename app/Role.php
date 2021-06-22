<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //  add roles to technician
    //  protected $table = 'roles';

    public function employee()
    {
        return $this->hasMany('App\Employee');
    }
}
