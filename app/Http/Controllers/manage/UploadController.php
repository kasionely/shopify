<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Model\Product;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Approached\LaravelImageOptimizer\ImageOptimizer;
use Intervention\Image\Image;

class UploadController extends Controller{

    public function image(Request $request, ImageOptimizer $imageOptimizer)
    {
        $file = NULL;

        $validator =
            Validator::make($request->all(),[
               $file = 'required|image'
            ]);

        if ($validator->fails() )
        {
            redirect('/');
        }

        try
        {
            $image = $request->file($file);

            $imageOptimizer->optimizeUploadedImageFile($image);

            $object = Image::make($image->getRealPath());

            $filepath = sprintf('%s.%s', generate_filepath($image->getClientOriginalName()), $image->getClientOriginalExtension());

            $destinationPath = public_path('/images');

            $image->move($destinationPath, $object->stream($image->getClientOriginalExtension(), 70)->__toString());

        }
        catch (\Exception $e)
        {

        }
    }
}