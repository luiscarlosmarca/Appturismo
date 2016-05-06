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

//Rutas para el modulo administrativo de hoteles
Route::group(['middleware'=>'auth'], function(){

	Route::get('/crear-hotel',[
		'uses'	=>'HotelsController@create',
		'as'	=>'hotels.create'
	]);

	Route::post('/crear-hotel',[
		'uses'=>'HotelsController@store',
		'as'  =>'hotels.store'
		]);

	Route::get('/crear-habitacion/{id}',[
		'uses'	=>'HotelsController@create_room',
		'as'	=>'hotels.createroom'
	]);

	Route::post('/crear-habitacion',[
		'uses'=>'HotelsController@store_room',
		'as'  =>'hotels.store_room'
		]);
 
});


//Rutas para el envio de mensaje
Route::get('/enviar-mensaje/{id}',[
		'uses'	=>'HotelsController@create_message',
		'as'	=>'hotels.create_message'
]);

Route::post('/enviar-mensaje',[
		'uses'=>'HotelsController@store_message',
		'as'  =>'hotels.store_message'
]);

Route::get('/ver-mensaje/{id}',[
'uses'	=>'HotelsController@verMensajes',
'as'	=>'hotels.ver_message'
]);


//Rutas para comentarios
Route::post('/comentar-hotel',[
		'uses'=>'HotelsController@store_comment',
		'as'  =>'hotels.store_comment'
]);