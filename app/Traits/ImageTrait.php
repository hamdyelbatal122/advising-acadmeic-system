<?php

namespace App\Traits;

trait ImageTrait
{
    function saveImage($image,$path){

        $file_extension=$image->getClientOriginalExtension();
        $file_name=time().'.'.$file_extension;
        $path =$path;
        $image->move(public_path($path),$file_name);
        return $path.$file_name ;
    }
}
