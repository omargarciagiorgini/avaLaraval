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
/*
Route::get('/', function () {
    return view('front.inicio');
});
*/
Route::resource('productos','ProductsController');
Route::get('/','ProductsController@index');
Route::get('json','JsonController@index');
//Route::get('/json','ProductsController@json');