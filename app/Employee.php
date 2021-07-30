<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // create add employee 

   protected $table = 'employees';

   protected $fillable =[];

   protected $casts = [
    'status'=>'boolean'
   ];

    public function roles()
    {
        return $this->belongsToMany(Role::class,'employee_role','employee_id', 'role_id')->withTimestamps();
    }

    public function loans(){
        return $this->hasMany(EmployeeLoan::class);
    }

    public function serviceRepair(){
        return $this->belongsToMany(ServiceRepair::class,'employee_service_repair','employee_id','service_repair_id');
    }


}
