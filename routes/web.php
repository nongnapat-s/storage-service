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

Route::get('/dashboard','AppRegisterController@index');

Route::post('/store','AppRegisterController@store');

Route::post('/upload','StorageServiceController@upload');

Route::get('/user_list','UserListController@index');

Route::post('/storeUserList','UserListController@store');

Route::get('test', function() {
    return view('test');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
