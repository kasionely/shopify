<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Model\Product;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $imagePath = null;

        if ($request->hasFile('imagePath')){
            $image    = $request->file('imagePath');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            $imagePath = ('images/' . $filename);
            Image::make($image)->resize(900, 900)->save($imagePath);
        }

        $product = new Product([
            'title'              => $request->get('title'),
            'little_description' => $request->get('little_description'),
            'description'        => $request->get('description'),
            'price'              => $request->get('price'),
            'imagePath'          => $imagePath
        ]);

        $product->save();

        return redirect('/manage/shop/products/list');
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->title              = $request->get('title');
        $product->little_description = $request->get('little_description');
        $product->description        = $request->get('description');
        $product->price              = $request->get('price');
        $product->imagePath          = $request->get('imagePath');

        $product->save();

        return redirect('/manage/shop/products/list');

    }

    public function delete($id)
    {
        $product = Product::find($id);

        $product->delete();

        return redirect('/manage/shop/products/list');
    }
}