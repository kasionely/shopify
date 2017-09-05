<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Category;

class ManageController extends Controller
{
    public function getIndex()
    {
        $products = Product::all()->toArray();

        return view('manage.index', compact('products'));
    }

    public function getList()
    {
        $products = Product::all()->toArray();

        return view('manage.shop.product.list', compact('products'));
    }

    public function getAdd()
    {
        return view('manage.shop.product.add');
    }

    public function getEdit($id)
    {
        $product = Product::find($id);

        return view('manage.shop.product.update', compact('product','id'));
    }

    public function getCategoryList()
    {
        $categories = Category::all()->toArray();

        return view('manage.shop.category.list', compact('categories', 'id'));
    }

    public function getCategoryAdd()
    {
        return view('manage.shop.category.add');
    }

    public function getCategoryEdit($id)
    {
        $category = Category::find($id);

        return view('manage.shop.category.update', compact('category', 'id'));
    }

}