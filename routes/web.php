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
Route::get('/', function () { return view('welcome'); });

Auth::routes();

Route::get('/user-list','UserListController@index');
Route::post('/user-list/store','UserListController@store');


Route::get('/dashboard', 'AppRegisterController@index');
Route::post('/store', 'AppRegisterController@store');
Route::delete('/delete/{id}', 'AppRegisterController@destroy');

// storage service routes
Route::post('/upload','StorageServiceController@store');
Route::put('/update', 'StorageServiceController@update');
Route::delete('/delete-file','StorageServiceController@deleteFile');
Route::delete('/delete-folder', 'StorageServiceController@deleteFolder');

Route::get('/files/{slug}','StorageServiceController@show');

//user-list edit,delete
Route::get('/user-list/delete/{id}','UserListController@destroy');
Route::get('/user-list/edit/{id}','UserListController@edit');
Route::post('/user-list/update','UserListController@update');
Route::put('/user-list/update/{id}','UserListController@update');