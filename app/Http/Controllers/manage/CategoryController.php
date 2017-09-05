<?php
/**
 * Created by PhpStorm.
 * User: kjkas
 * Date: 04.09.2017
 * Time: 18:46
 */

namespace App\Http\Controllers\Manage;


use App\Model\Category;
use Illuminate\Http\Request;
use Image;

class CategoryController
{
    public function store(Request $request)
    {
        if ($request->hasFile('image')){
            $image    = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $imagelocation = public_path('images/' . $filename);
            Image::make($image)->resize(50, 50)->save($imagelocation);
        }

        if ($request->hasFile('icon')){
            $image    = $request->file('icon');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $iconlocation = public_path('images/' . $filename);
            Image::make($image)->resize(50, 50)->save($iconlocation);
        }

        $category = new Category([
            'name'        => $request->get('name'),
            'description' => $request->get('description'),
            'image'       => $imagelocation,
            'icon'        => $iconlocation
        ]);

        $category->save();

        return redirect('/manage/shop/category/list');
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->title        = $request->get('title');
        $category->description  = $request->get('description');
        $category->price        = $request->get('price');
        $category->imagePath    = $request->get('imagePath');

        $category->save();

        return redirect('/manage/shop/category/list');

    }

    public function delete($id)
    {
        $category = Category::find($id);

        $category->delete();

        return redirect('/manage/shop/category/list');
    }
    
}