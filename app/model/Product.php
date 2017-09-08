<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['imagePath', 'title', 'description', 'price', 'slug'];

    public function getProductName()
    {
        return $this->title;
    }

    public function getSlug()
    {
        $slug = NULL;

        $slug = translit_link($this->getProductName());

        return $slug;
    }
}