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

Route::get('/', [
'as' => 'home',
'uses'=>'WelcomeController@index'
]);
Route::get('/home', 'WelcomeController@index');
Route::get('/profile', [
'as' => 'profile',
'uses'=>'UserController@index'
]);
//Series Controller

Route::resource('serie', 'SeriesController');

// Authentication routes...
Route::get('login',[
  'as' => 'login',
  'uses' => 'Auth\AuthController@getLogin'
  ]);
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', [
  'as'=> 'logout',
  'uses'=>'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('register', [
  'as'=>'register',
  'uses'=>'Auth\AuthController@getRegister'
  ]);
Route::post('register', 'Auth\AuthController@postRegister');
