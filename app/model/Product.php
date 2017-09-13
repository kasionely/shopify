<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['imagePath', 'title','little_description', 'description', 'price', 'slug'];

    public function getProductId()
    {
        return $this->id;
    }

    public function getProductName()
    {
        return $this->title;
    }

    public function getSlug()
    {
        return translit_link($this->getProductName());
    }
}