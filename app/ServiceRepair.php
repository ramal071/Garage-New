<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceRepair extends Model
{
    //
    public function serviceEmployee(){
        return $this->belongsToMany(Employee::class,'employee_service_repair','service_repair_id','employee_id')->withTimestamps();
    }
    public function stockParts(){
    return $this->belongsToMany(Stock::class,'service_repair_stock','service_repair_id','stock_id')->withTimestamps();
    }
}
