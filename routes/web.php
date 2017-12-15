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

Route::get('teachers/create', 'TeacherController@create');
Route::post('teachers','TeacherController@store') ; 


Route::get('/wen',  function (){
	return view('hello');
});
Route::get('/about',  function (){
	return view('about');
});
Route::get('/product',  function (){
	return view('product');
});
Route::get('/services',  function (){
	return view('services');
});
Route::get('/','welcomeController@index');