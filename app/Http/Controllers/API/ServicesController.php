<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\helpers\Images;
use DB;

class ServicesController extends Controller
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
            $success['services']=Service::where('name','like','%'.$request->search.'%')->paginate(10);
        }else{
            $success['services']=Service::paginate(10);
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
        $request->validate(['name' =>'required|max:100']);
        $service=Service::create(['name'=>$request->name]);
        return response()->json(['success' =>'done'], $this->successStatus);
    }
    
    /**
    * Display the specified resource.
    *
    * @param  \App\OrderDetail  $service
    * @return \Illuminate\Http\Response
    */
    public function show(Service $service)
    {
        return response()->json(['service' => $service], $this->successStatus);
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\OrderDetail  $service
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Service $service)
    {
        $request->validate(['name' =>'required|max:100',
            'icon' =>'nullable',
            'description' =>'nullable',
            'content' =>'nullable'
        ]);
        $service->update(['name'=>$request->name,
        'description'=>$request->description,
        'content'=>$request->content,
        'icon'=>$request->icon,
        ]);
        return response()->json(['success' =>'done'], $this->successStatus);
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\OrderDetail  $service
    * @return \Illuminate\Http\Response
    */
    public function destroy(Service $service)
    {
        $service->delete();
        return response()->json(['success' => 'done'], $this->successStatus);
    }
    
}
