<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;

class PhotoController extends Controller
{
    /**
     * Upload Image.
     */
    public function upload(Request $request)
    {
        // get the base64 image data
        $base64_image = $request->image;

        // decode the base64 image data and create an image resource
        $image = imagecreatefromstring(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64_image)));

        // create a new JPG file
        $filename = Str::uuid() . '.jpg';
        $jpg_image = imagejpeg($image, storage_path('app/' . $filename));

        // check if the file was created successfully
        if ($jpg_image !== false) {
            // store the file in the storage directory
            Storage::put('public/images/profile/' . $filename, file_get_contents(storage_path('app/' . $filename)));

            // delete the temporary image resource and file
            imagedestroy($image);
            unlink(storage_path('app/' . $filename));
        }
        // return the file name in JSON
        return response()->json([
            'success' => true,
            'filename' => basename($filename)
        ]);
    }
}
