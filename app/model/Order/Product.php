<?php

namespace App\Model\Order;

use App\Model\Abstracts\Model;

class Product extends Model
{
    protected $table = 'order_products';
    public $timestamps = false;

    protected $fillable = [
        'order_id', 'product_id', 'product_price', 'quantity'
    ];
}