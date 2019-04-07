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

Auth::routes();
Route::get('contact','ContactController@index');

Route::get('query','ContactController@queryForm');
Route::post('query','ContactController@querySave');

Route::prefix('admin')->middleware(['auth','auth.admin'])->group(function () {
    Route::get('link1',function(){
        echo 'link 1 test route';
    });
    Route::get('link2','ContactController@querySave');
    Route::get('link3','ContactController@querySave');

});

Route::group(['prefix'=>'manager','middleware'=>['auth','auth.manager']],function(){
    Route::get('link3','ContactController@querySave');
    Route::get('create/user','UserController@showForm');
    Route::post('create/user','UserController@userInsert');

});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home');
