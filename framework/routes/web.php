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
Route::delete('/usuarios/{usuario}','UsuarioController@detail');
Route::delete('/usuarios/{usuario}','UsuarioController@destroy');

Route::get('/usuario/{usuario}/pagos','PagoController@indexUsuario')->name('pagos');
Route::post('/usuario/{usuario}/pagos','PagoController@store');
Route::delete('/usuario/{usuario}/pagos/{pago}','PagoController@destroy');

Route::get('/usuario/{usuario}/favoritos','FavoritoController@indexUsuario')->name('favoritos');
Route::post('/usuario/{usuario}/favoritos','FavoritoController@store');
Route::delete('/usuario/{usuario}/favoritos/{favorito}','FavoritoController@destroy');