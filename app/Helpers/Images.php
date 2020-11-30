<?php
namespace App\helpers;
use Intervention\Image\Facades\Image;
use DB;

class Images 
{
    static public function get_new_name($type)
    {
        
        $name=time();
        $loop=0;
        $ar=[];
        // $path = base_path($type);
        $path = public_path($type);
        $files = \File::files($path);
        foreach($files as $path) {
            $file = pathinfo($path);
            array_push($ar, $file['filename'])  ;
        }
        while (in_array($name+$loop, $ar)) {
            $loop++;
        }
        return $name+$loop;
    }
    
    static public function save_image($image,$path)
    {
        $name=time();
        $imageName = $name.'.'.$image->getClientOriginalExtension();
        
        $x=Image::make($image);
        $x->save(public_path($path.'/').$imageName);
        // $x->save(base_path($path.'/').$imageName);
        
        return $imageName;
        
    }
    
    static public function delete_image($name,$path)
    {
        \File::delete(public_path($path.'/'.$name));
        // \File::delete(base_path($path.'/'.$name));
    }
    
}
