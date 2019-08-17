<?php

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

Route::resources(['category' => 'CategoryController']);
Route::resources(['product' => 'ProductController']);

Route::get('/', function () {


    // dd("oi!!!");
    //return view('welcome');

});
