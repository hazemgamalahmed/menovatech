<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\helpers\Images;
use DB;

class SubCategoriesController extends Controller
{
    public $successStatus = 200;
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {
        if($request->search){
            $success['sub_categories']=SubCategory::where('name','like','%'.$request->search.'%')
                ->with('category')->with('products')->paginate(10);
        }else{
            $success['sub_categories']=SubCategory::with('products')->with('category')->paginate(10);
        }
        return response()->json(['success' => $success], $this->successStatus);
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        // return response()->json(['success' =>$request->image->getClientOriginalExtension()], $this->successStatus);
        
        // return response()->json(['success' =>$request->all()], $this->successStatus);
        $request->validate(['name' =>'required|max:100','is_active' =>'required|boolean',
            'id' =>'nullable|exists:sub_categories,id'
        ]);
        if($request->id){
            $category=SubCategory::find($request->id);
            $category->update(['name'=>$request->name,'is_active'=>$request->is_active]);
            if(isset($request->image)){
                if($category->image!='default.png'){
                    Images::delete_image($category->image,'front\img\home');
                }
                $category->image=Images::save_image($request->image,'front\img\home');
                $category->save();
            }
        }else{
            $category=SubCategory::create(['name'=>$request->name,'is_active'=>$request->is_active]);
            if(isset($request->image)){
                $category->image=Images::save_image($request->image,'front\img\home');
                $category->save();
            }
        }
        return response()->json(['success' =>'done'], $this->successStatus);
    }
    
    /**
    * Display the specified resource.
    *
    * @param  \App\OrderDetail  $category
    * @return \Illuminate\Http\Response
    */
    public function show(SubCategory $category)
    {
        //
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\OrderDetail  $category
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, SubCategory $category)
    {
        
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\OrderDetail  $category
    * @return \Illuminate\Http\Response
    */
    public function destroy(SubCategory $category)
    {
        if($category->image!='default.png'){
            Images::delete_image($category->image,'front\img\home');
        }
        $category->delete();
        return response()->json(['success' => 'done'], $this->successStatus);
    }
    
}
