<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('login');
});

Route::get('index',function(){
    return view('index');
});

Route::get('login',function(){
    return view('login');
});

Route::post('login',[UserController::class,'login']);

Route::get('dashboard',[ProductController::class,'product']);

Route::get('detail/{id}',[ProductController::class,'detail']);

Route::get('search',[ProductController::class,'search']);

Route::get('addtocart/{id}',[ProductController::class,'addtocart']);

Route::get('logout',[ProductController::class,'logout']);

Route::get('totalcart',[ProductController::class,'totalcart']);

Route::get("remove/{id}",[ProductController::class,'remove']);

Route::get('buynow',[ProductController::class,'buynow']);

Route::get('register',function(){
    return view('register');
});

Route::post('register',[UserController::class,'register']);