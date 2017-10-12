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

    public function getAbout()
    {
        return view('shop.pages.about');
    }

    public function getDelivery()
    {
        return view('shop.pages.delivery');
    }

    public function getPayment()
    {
        return view('shop.pages.payment');
    }

    public function getRefund()
    {
        return view('shop.pages.refund');
    }

    public function getContacts()
    {
        return view('shop.pages.contacts');
    }

    public function getCatalog()
    {
        $products = Product::paginate(16);

        return view('shop.chunks.catalog', [
            'products' => $products,
        ]);
    }
}
