<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Gallery;
use Illuminate\Http\Request;
use Validator;
use Response;
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

        $product->gallery()->delete();

        foreach( (array) $request->input('gallery') as $image )
        {
            $gallery[] = new Gallery(['image' => $image]);
        }

        if( !empty($gallery) )
        {
            $product->gallery()->saveMany($gallery);
        }


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

    public function image(Request $request)
    {
        $validator =
            Validator::make($request->all(), [
                'image_uploader' => 'required'
            ]);

        if( $validator->fails() )
        {
            $message = 'Ошибка в картинке';

            return Response::json(['result' => 3, 'src' => NULL, 'message' => $message], 200, ['Content-Type' => 'text/html']);
        }
        try{
            $image    = $request->file('image_uploader');

            $filename = time() . '.' . $image->getClientOriginalExtension();

            $location = public_path('images/' . $filename);

            $imagePath = ('images/' . $filename);

            Image::make($image)->resize(900, 900)->save($imagePath);

            return Response::json([
                'result'     => 1,
                'src'        =>  '/' . $imagePath,
                'images'     =>  '/' . $imagePath

            ], 200, ['Content-Type' => 'text/html']);
        }

        catch (\Exception $e)
        {
            return Response::json(['result' => 0, 'src' => NULL, 'message' => $e->getMessage()], 200, ['Content-Type' => 'text/html']);
        }
    }
}