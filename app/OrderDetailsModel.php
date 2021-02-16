<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetailsModel extends Model
{
    public function Product()
    {
        return $this->belongsTo('App\ProductModel','product_id','id');
    }

    public function Order(){
    return $this->belongsTo('App\OrderModel','order_id','id');
    }
}
