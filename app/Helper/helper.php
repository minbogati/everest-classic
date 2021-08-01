<?php

use League\CommonMark\Inline\Element\Image;

if (!function_exists('fileUpload')) {

    function fileUpload($file , $path)
    {
        $name = $file->getClientOriginalName();
        $destinationPath = public_path($path);
        // create instance
        $image = Image::make($file);

        // resize image to fixed size
        $image->resize(200, 200);
        $image->save($destinationPath.$name);
        return $name;

    }

}
