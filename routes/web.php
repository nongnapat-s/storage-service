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

Route::get('/user-lists/index','UserListsController@index');

Route::post('/user-lists/store','UserListsController@store');


Route::get('/dashboard','AppRegisterController@index');

Route::post('/store','AppRegisterController@store');

Route::get('test', function() {
    return view('test');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/upload','StorageServiceController@upload')->middleware('uploadGuard');
Route::post('/download','StorageServiceController@download')->middleware('downloadAndDeleteGuard');
Route::post('/delete','StorageServiceController@delete')->middleware('downloadAndDeleteGuard');