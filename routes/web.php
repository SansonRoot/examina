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

Route::get('/', 'HomeController@index');

Auth::routes();

//Route group for normal students
Route::group(['prefix'=>'/',['middleware'=>'auth']],function(){

  Route::get('/home', 'HomeController@index')->name('home');

});

//Admin routes
Route::group(['prefix'=>'admin',['middleware'=>'auth']],function (){

  Route::get('/home','AdminController@index');

});

//Lecturers Routes
Route::group(['prefix'=>'lecturer',['middleware'=>'auth']],function (){

  Route::get('/home','LecturerController@index');

});
