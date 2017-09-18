<?php

namespace App\Model;

use App\Model\Abstracts;

class Gallery extends Abstracts\Model
{
    public $timestamps = false;

    protected $table = 'product_gallery';
    protected $fillable = [
        'product_id', 'image'
    ];
}