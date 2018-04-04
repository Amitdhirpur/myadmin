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

Route::get('/', 'FrontController@index');
Route::get('test', 'TestController@test');
Route::get('showimage', 'TestController@showimage');

Route::post('file/post', 'FileController@uploadfile');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'],function(){

  Route::get('/', 'DashboardController@index');
  Route::get('list', 'DashboardController@list');

Route::group(['prefix' => 'profile'],function(){
     Route::get('/','ProfileController@index');
     Route::get('timeline','ProfileController@timeline');
     Route::get('photos','ProfileController@profilephotos');
     Route::get('connections','ProfileController@connections');
     Route::post('store','ProfileController@store');
     Route::post('storeimage','ProfileController@storeimage');
     Route::get('photos/upload','ProfileController@upload');
     Route::get('videos','ProfileController@Videos');
     Route::get('coverphoto/upload','ProfileController@coverphoto');
     Route::get('photos/{id}','ProfileController@updateprofile');
    });

  Route::group(['prefix' => 'todo'],function(){
    Route::post('store','DashboardController@store');
    Route::post('storelist','DashboardController@storelist');
    Route::get('update','DashboardController@update');
    Route::get('{id}/delete','DashboardController@delete');
    Route::get('{id?}','DashboardController@edit');
    });

});
