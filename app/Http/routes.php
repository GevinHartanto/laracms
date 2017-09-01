<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/post/{id}', 'PostController@index');

//Route::resource('posts', 'PostController');

//Route::get('/contact', 'PostController@contact');

//Route::get('post/{id}/{name}/{password}', 'PostController@show_post');

Route::get('/insert', function(){
	DB::insert("INSERT INTO posts(title, content) values(?, ?)",
		['PHP with Laravel', 'Laravel is the Best Thing that happen to PHP']);
});