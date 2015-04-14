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

Route::get('/setup', 'SetupController@index');
Route::get('/setup', 'SetupController@index');

/*Url to home page*/

Route::get('/', 'HomeController@index');

/*Url to view post detail*/
Route::get('/{id}-{title}', 'HomeController@view');

/*url for post administration - CRUD*/
Route::get('/post', 'PostController@index');
Route::get('/post/create', 'PostController@create');
Route::post('/post/create', 'PostController@create');
Route::get('/post/edit/{id}', 'PostController@edit');
Route::post('/post/edit/{id}', 'PostController@edit');
Route::get('/post/delete/{id}', 'PostController@delete');
Route::post('/post/delete/{id}', 'PostController@delete');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
