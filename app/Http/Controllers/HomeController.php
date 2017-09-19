<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;

class HomeController extends Controller{

    public function index(Request $request, Product $products)
    {
        $product    = Product::all();
        $categories = Category::all();

        return view('shop.index', [
            'products'   => $product,
            'categories' => $categories,
            'slugs'      => $products->getSlug()
        ]);
    }
}
