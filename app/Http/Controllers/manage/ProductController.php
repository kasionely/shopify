<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $product = new Product([
            'title'       => $request->get('title'),
            'description' => $request->get('description'),
            'price'       => $request->get('price'),
            'imagePath'   => $request->get('imagePath')
        ]);

        $product->save();

        return redirect('/');
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->title        = $request->get('title');
        $product->description  = $request->get('description');
        $product->price        = $request->get('price');
        $product->imagePath    = $request->get('imagePath');

        $product->save();

        return redirect('/');

    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/');
    }
}