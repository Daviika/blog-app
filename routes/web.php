<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
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
Route::get('/',[HomeController::class,'index']);
Route::get('/about',[Homecontroller::class,'about']);
Route::get('/contact',function(){
    return 'Contat US! ';
});
Route::get('/contact2',function(){
    return 'Contat US! ';
});

Route::get('/contact3',function(){
    return 'Contat US!';
});
