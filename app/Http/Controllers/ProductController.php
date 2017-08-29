<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Intervention\Image\Image;

class ProductController extends Controller{

    public function getIndex()
    {
        $products = Product::paginate(8);

        return view('shop.index', ['products' => $products]);
    }

}