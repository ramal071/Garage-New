<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //  add roles to technician
    protected $table = 'roles';
    
    protected $fillable = [
       'name','status','slug'
    ];

    protected $casts = [
        'status'=>'boolean'
    ];

    public function employees()
    {
        return $this->belongsToMany(Employee::class,'employee_role','role_id','employee_id');
    }
}
