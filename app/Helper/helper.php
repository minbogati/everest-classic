<?php
use Intervention\Image\Facades\Image;

if (!function_exists('fileUpload')) {

    function fileUpload($file , $path)
    {
        $name = $file->getClientOriginalName();
        $destinationPath = public_path($path);
        // create instance
        $image = Image::make($file);

        // resize image to fixed size
        $image->resize(416, 312);
        $image->save($destinationPath.$name);
        return $name;

    }

}
if (!function_exists('documentUpload')) {

    function documentUpload($file , $path)
    {
        $filename = $file->getClientOriginalName();
        $file->storeAs($path, $filename);
        return $filename;
    }

}
if (!function_exists('fileUploadUpdate')) {

    function fileUploadUpdate($path , $fileName)
    {
        if(!is_null($fileName))
        {
            if(file_exists(public_path($path.$fileName)))
            {
                unlink(public_path($path.$fileName));
            }
        }
    }
}

