<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('', function () {
//     return view('front.homeBage');
// });
Route::get('', [App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('service/{service}', [App\Http\Controllers\HomeController::class,'service'])->name('service');
Route::get('about', [App\Http\Controllers\HomeController::class,'about'])->name('about');
// Route::resource('orders', App\Http\Controllers\API\OrdersController::class);

Route::get('admin/{any?}', function () {
    return view('backEnd');
    
});
Route::get('admin/{any}/{any2}', function () {
    return view('backEnd');
});
// Route::group(['middleware'=>'auth'], function(){
//     Route::resource('carts', 'CartsController');
//     Route::resource('users', 'UsersController');
// });
// Route::get('print', [App\Http\Controllers\HomeController::class,'print']);

// Route::resource('orders', App\Http\Controllers\API\OrdersController::class);


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
