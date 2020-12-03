<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;

class UsersController extends Controller
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
            $success['users']=User::
            where('name','like','%'.$request->search.'%')
            ->where('pharmacy_id',\Auth::user()->pharmacy_id)
            ->paginate(10);
        }else{
            $success['users']=User::where('pharmacy_id',\Auth::user()->pharmacy_id)->paginate(10);
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
       
    }
    
    /**
    * Display the specified resource.
    *
    * @param  \App\OrderDetail  $user
    * @return \Illuminate\Http\Response
    */
    public function show(User $user)
    {
        //
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\OrderDetail  $user
    * @return \Illuminate\Http\Response
    */
    public function edit(User $user)
    {
        //
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\OrderDetail  $user
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string|unique:users,phone,'.$user->id,
            'password' => 'required|min:6'
        ]);
        $user->update([
            "name" => $request->name,
            "phone" => $request->phone,
            "password" => bcrypt($request->password)
        ]);
        $success['users']=User::paginate(10);
        return response()->json(['success' => $success], $this->successStatus);
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\OrderDetail  $user
    * @return \Illuminate\Http\Response
    */
    public function destroy(User $user)
    {
    }

}
