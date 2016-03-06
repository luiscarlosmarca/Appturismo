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

Route::get('/', function () {
    return view('layout');
});

Route::get('home',[
'uses'	=>'HomeController@index',
'as'	=>'home'
]);

// Authentication routes...
Route::get('ingresar',[
'uses'	=>'Auth\AuthController@getLogin',
'as'	=>'login'
]);
Route::post('ingresar', 'Auth\AuthController@postLogin');

Route::get('cerrar-sesión', [
'uses'	=>'Auth\AuthController@getLogout',
'as'	=>'cerrar'
]);

// Registration routes...
Route::get('registro',[
'uses'	=> 'Auth\AuthController@getRegister',
'as'	=>'registro'
]);
Route::post('registro', 'Auth\AuthController@postRegister');