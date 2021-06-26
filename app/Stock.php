<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function capacity()
    {
        return $this->belongsTo('App\Capacity');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function manufacturer()
    {
        return $this->belongsTo('App\Manufacturer');
    }
    public function vehicle()
    {
        return $this->belongsTo('App\Vehicle');
    }
}
