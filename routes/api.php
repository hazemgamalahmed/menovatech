<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post("login",[App\Http\Controllers\API\AuthController::class, 'login']);

Route::group(["middleware" => "auth:api"], function(){
    
    Route::post("logout",[App\Http\Controllers\API\AuthController::class, 'logout']);
    Route::resource('users', App\Http\Controllers\API\UsersController::class);

    /////////////////////////Products/////
    Route::resource('services', App\Http\Controllers\API\ServicesController::class);
    
    // get user info
    Route::get("user", [App\Http\Controllers\API\AuthController::class,'user']);
});

