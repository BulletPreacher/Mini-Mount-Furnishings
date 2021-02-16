<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    public function OrderDetails()
    {
        return $this->hasMany('App\OrderDetailsModel');
    }
}
