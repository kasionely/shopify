<?php

namespace App\Http\Controllers;

use App\Model\Product;

class ProductController extends Controller{

    public function getIndex()
    {
        $products = Product::paginate(8);

        return view('shop.index', ['products' => $products]);
    }

}