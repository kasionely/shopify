<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Collections;

use Auth;
use Session;

class Basket extends Model
{
    protected $table = 'baskets';

    protected $fillable = ['user_id', 'session_id', 'product_id', 'qty'];

    public function newCollection(array $models = [])
    {
        return new Collections\Basket($models);
    }

    public function getPrice()
    {
        return $this->product->price;
    }

    public function product()
    {
        return $this->belongsTo('App\Model\Product');
    }

    public static function getBasket(Product $product)
    {
        $basket = NULL;

        if ($user = Auth::guard()->user()) {
            $basket = Basket::where([
                'user_id' => $user->id,
                'product_id' => $product->id
            ])->first();
        } else {
            $basket = Basket::where([
                'session_id' => Session::getId(),
                'product_id' => $product->id
            ])->first();
        }

        return $basket;
    }

    public static function getBaskets()
    {
        $baskets = NULL;

        if ($user = Auth::guard()->user()) {
            $baskets = Basket::where([
                'user_id' => $user->id
            ]);
        } else {
            $baskets = Basket::where([
                'session_id' => Session::getId()
            ]);
        }

        return $baskets->get();
    }
}