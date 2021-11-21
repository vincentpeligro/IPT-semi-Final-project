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

Route::get('/',[App\Http\Controllers\MerchandiseController::class,'index']);
Route::get('merchandise-list-show',[App\Http\Controllers\MerchandiseController::class,'show']);
Route::get('create-merchandise',[App\Http\Controllers\MerchandiseController::class,'create']);
Route::post('store-merchandise',[App\Http\Controllers\MerchandiseController::class,'store']);

