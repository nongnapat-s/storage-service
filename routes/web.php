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

// user list management
Route::get('/user-list','UserListController@index')->name('user-list');
Route::post('/user-list/store','UserListController@store');
Route::get('/user-list/edit/{id}','UserListController@edit');
Route::put('/user-list/update/{id}','UserListController@update');
Route::delete('/user-list/delete/{id}','UserListController@destroy');
// register app
Route::get('/dashboard', 'AppRegisterController@index');
Route::post('/store', 'AppRegisterController@store');
Route::delete('/delete/{id}', 'AppRegisterController@destroy');

// storage service routes
Route::post('/upload','StorageServiceController@store');
Route::put('/update', 'StorageServiceController@update');
Route::delete('/delete-file','StorageServiceController@deleteFile');
Route::delete('/delete-folder', 'StorageServiceController@deleteFolder');
Route::get('/file/{slug}','StorageServiceController@show');
// Checking Files
Route::get('medsicon/images', function () {  
    $directory = request()->input('directory');
    $imagePath = request()->input('imagePath'); 

    if ($directory !== null)  return view('medsicon.images')->with(['imagePaths' => \Storage::directories($directory)]); 

    $imagePath = request()->input('imagePath'); 
    if ($imagePath !== null) {
        $allFiles = \Storage::files($imagePath);
        $files = [];
        foreach($allFiles as $index => $allFile)
            $files[] = ['file' => $allFile, 'date' => \Carbon\Carbon::parse(Storage::lastModified($allFile))->addHours(7), 'lastModified' => Storage::lastModified($allFile)];
        return view('medsicon.images')->with(['files' => collect($files)->sortByDesc('date')]); 
    }
    return view('medsicon.images')->with(['directories' => \Storage::directories('medsicon/images')]);
});