<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class ImageController extends Controller
{
    public function resize()
    {
        $image = Image::make(public_path('images/demo.jpg'));
        $image->fit(600, 600)->save(public_path('images/demo_larage.jpg'))->backup();
        $image->fit(400, 400)->save(public_path('images/demo_medium.jpg'))->backup();
        $image->fit(150, 150)->save(public_path('images/demo_thumbnail.jpg'))->backup();

        return 'Done';
    }

    public function flyResize($size, $imagePath)
    {
        $imageFullPath = public_path($imagePath);
        $sizes = config('image.sizes');

        if (!file_exists($imageFullPath) || !isset($sizes[$size])) {
            abort(404);
        }

        $savedPath = public_path('resizes/' . $size . '/' . $imagePath);
        $savedDir = dirname($savedPath);
        if (!is_dir($savedDir)) {
            mkdir($savedDir, 0777, true);
        }

        list($width, $height) = $sizes[$size];

        $image = Image::make($imageFullPath)->fit($width, $height)->save($savedPath);

        return $image->response();
    }
}
