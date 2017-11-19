<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','HomeController@index')->name('home');

Route::get('/usuarios','UsuarioController@index')->name('usuarios');
Route::post('/usuarios','UsuarioController@store');
Route::get('/usuarios/{usuario}','UsuarioController@detail')->name('usuario_detail');
Route::delete('/usuarios/{usuario}','UsuarioController@destroy');

Route::post('/usuarios/{usuario}/pagos','PagoController@store');
Route::delete('/usuarios/{usuario}/pagos/{pago}','PagoController@destroy');

Route::post('/usuarios/{usuario}/favoritos','FavoritoController@store');
Route::delete('/usuarios/{usuario}/favoritos/{usuariofavorito}','FavoritoController@destroy');