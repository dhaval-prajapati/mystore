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

Route::get('/', 'WelcomeController@index');
Route::get('submenu/{id}','Category_Menu@subMenu');
Route::get('home', 'HomeController@index');
//Route::get('create','FlyerController@create');
//Route::get('create','FlyerController@uploadImage');
//Route::resource('image','FlyerController@uploadImage');
Route::post('image','FlyerController@uploadImageTest');
Route::get('create_form','FlyerController@create');
Route::post('create_form','FlyerController@store');
Route::get('deleteimage/{id}','FlyerController@deleteimage');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
