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

Route::get('/user-list','UserListController@index');

Route::post('/user-list/store','UserListController@store');

Route::get('/dashboard','AppRegisterController@index');

Route::post('/store','AppRegisterController@store');

Auth::routes();

Route::post('/storage-service','StorageServiceController');
Route::get('/download/{slug}','StorageServiceController@download');