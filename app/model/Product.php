<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Notifications\Notifiable;

use App\Model\Abstracts;

use Session;
use Cache;
use DB;

class Product extends Abstracts\Model implements Arrayable
{
    protected $table = 'products';

    protected $fillable = ['imagePath', 'title','little_description', 'description', 'price', 'slug'];

    public function getProductId()
    {
        return $this->id;
    }

    public function getProductImage()
    {
        $images = NULL;

        return $this->gallery->first()->image;
    }

    public function gallery()
    {
        return $this->hasMany('App\Model\Gallery', 'product_id', 'id')->cacheTags($this->getCacheTag())->remember(60);
    }

    public function getGallery()
    {
        $images = [];

        foreach( $this->gallery as $image )
        {
            $images[] = $image->image;
        }

        return $images;
    }

    public function getProductName()
    {
        return $this->title;
    }

    public function getSlug()
    {
        return translit_link($this->getProductName());
    }

    public function brand()
    {
        return $this->hasOne('App\Model\Shop\Brand', 'id', 'brand_id')->remember(60);
    }

    /* not for public; use getProperty($key) or getProperties() */
    public function properties()
    {
        return $this->hasMany('App\Model\Shop\Product\Property', 'product_id', 'id');
    }
}