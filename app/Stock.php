<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{



    protected $fillable = [];
    protected $casts = [
        'description'=>'array',
        'status'=>'boolean',
        'is_damage'=>'boolean'
    ];
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function damageProducts()
    {
        return $this->hasMany(DamageProduct::class);
    }


    public function vehicle()
    {
        return $this->belongsTo('App\Vehicle');
    }
    public function assignParts(){
        return $this->belongsToMany(ServiceRepair::class,'service_repair_stock','stock_id','service_repair_id');
    }
}
