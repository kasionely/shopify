<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }

    public function products()
    {
        return $this->hasMany('App\Model\Order\Product', 'order_id', 'id');
    }

    public function getProducts()
    {
        $products = [];

        foreach( $this->products as $product)
        {
            $products[] = $product;
        }

        return $products;
    }
}
