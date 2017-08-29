<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller{

    public function index()
    {
        $products = Product::paginate(8);

        return view('shop.index', ['products' => $products]);
    }
}
