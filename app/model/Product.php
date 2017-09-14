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

    public function gallery()
    {
        return $this->hasMany('App\Model\Gallery', 'product_id', 'id')->cacheTags($this->getcacheTag())->remember(60);
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