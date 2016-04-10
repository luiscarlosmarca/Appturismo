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
//Rutas para mostrar hoteles en el index publico
Route::get('/',[
'uses'	=>'HotelsController@index',
'as'	=>'hoteles'
]);

Route::get('/populares',[
'uses'	=>'HotelsController@popular',
'as'	=>'hoteles.populares'
]);

//Cuando habran algun hotel detalles de este.
Route::get('/hotel/{id}',[
'uses'	=>'HotelsController@details',
'as'	=>'hotel.detail'
]);

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
Route::get('crear-cuenta',[
'uses'	=> 'Auth\AuthController@getRegister',
'as'	=>'registro'
]);
Route::post('crear-cuenta', 'Auth\AuthController@postRegister');