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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/register_app',function(){
//   return view('index');
//});

Route::get('/register_app','RegisterAppController@index');

Route::post('/saveRegisterApp','RegisterAppController@store');
