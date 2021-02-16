<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    public function User(){
        return $this->belongsTo('App\User');
    }

    public function OrderDetails(){
        return $this->hasMany('App\OrderDetailsModel','order_id','id');
    }
}
