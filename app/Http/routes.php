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

Route::get('/', 'HomeController@home');

Route::get('/register', [
	'uses' => 'RegisterController@getRegister',
	'as' => 'getRegister']
);

Route::post('/postRegister', 'RegisterController@postRegister');

Route::get('/login', [
	'uses' => 'LoginController@getLogin',
	'as' => 'getLogin']
);

Route::get('/adminDashboard', [
	'uses' => 'AdminController@home',
	'as' => 'adminDashboard']
);

Route::get('/adminView', [
	'uses' => 'AdminController@viewUser',
	'as' => 'adminView']
);

Route::get('/userDashboard', [
	'uses' => 'UserController@home',
	'as' => 'userDashboard']
);

Route::get('/pageEmail', [
	'uses' => 'UserController@pageEmail',
	'as' => 'pageEmail']
);

Route::get('/userEmail', [
	'uses' => 'UserController@sendEmail',
	'as' => 'userEmail']
);

Route::post('/postLogin', 'LoginController@postLogin');

Route::get('/logout', [ 
	'uses' => 'HomeController@logout',
	'as' => 'logout'
]);

Route::get('/english', 'LanguageController@english');
Route::get('/indonesia', 'LanguageController@indonesia');