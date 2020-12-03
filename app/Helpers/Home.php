<?php

namespace App\Helpers;

class Home {
    
    static public function GetCategories()
    {
        // $categories=Category::where('is_active',1)->with('active_subs')->get();
        // return $categories;
        return [];
    }

}
