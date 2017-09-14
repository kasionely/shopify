<?php

namespace App\Model;


class Gallery
{
    public $timestamps = false;

    protected $table = 'product_gallery';
    protected $fillable = [
        'product_id', 'sku_id', 'image'
    ];
}