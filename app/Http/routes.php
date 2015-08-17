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
//CONTROLADOR ARTICULOS
//rutas para el recurso articulos
Route::resource('articulos', 'ArticulosController');
//una nueva ruta para eliminar registros con el metodo get
Route::get('articulos/destroy/{id}', ['as', 'articulos/destroy', 'uses'=> 'ArticulosController@destroy']);
//ruta para realizar busqueda de registros
Route::post('articulos/search',['as' => 'articulos/search','uses' =>'ArticulosController@search']);


//CONTROLADOR CANTIDAD
Route::resource('cantidads', 'CantidadController');
//una nueva ruta para eliminar registros con el metodo get
Route::get('cantidads/destroy/{id}', ['as', 'cantidads/destroy', 'uses'=> 'CantidadsController@destroy']);
//ruta para realizar busqueda de registros
Route::post('cantidads/search',['as' => 'cantidads/search','uses' =>'CantidadsController@search']);


//CONTROLADOR CLIENTE
Route::resource('clientes', 'ClientesController');
//una nueva ruta para eliminar registros con el metodo get
Route::get('clientes/destroy/{id}', ['as', 'clientes/destroy', 'uses'=> 'ClientesController@destroy']);
//ruta para realizar busqueda de registros
Route::post('clientes/search',['as' => 'clientes/search','uses' =>'ClientesController@search']);


//CONTROLADOR FABRICA
Route::resource('fabricas', 'FabricasController');
//una nueva ruta para eliminar registros con el metodo get
Route::get('fabricas/destroy/{id}', ['as', 'fabricas/destroy', 'uses'=> 'FabricasController@destroy']);
//ruta para realizar busqueda de registros
Route::post('fabricas/search',['as' => 'fabricas/search','uses' =>'FabricasController@search']);

//CONTROLADOR PEDIDOARTICULO
Route::resource('pedidoarticulos', 'PedidoArticulosController');
//una nueva ruta para eliminar registros con el metodo get
Route::get('pedidoariticulos/destroy/{id}', ['as', 'pedidoarticulos/destroy', 'uses'=> 'PedidoArticulosController@destroy']);
//ruta para realizar busqueda de registros
Route::post('pedidoarticulos/search',['as' => 'pedidoarticulos/search','uses' =>'PedidoArticulosController@search']);


//CONTROLADOR PEDIDOCLIENTE
Route::resource('pedidoclientes', 'PedidoClientesController');
//una nueva ruta para eliminar registros con el metodo get
Route::get('pedidoclientes/destroy/{id}', ['as', 'pedidoclientes/destroy', 'uses'=> 'PedidoClientesController@destroy']);
//ruta para realizar busqueda de registros
Route::post('pedidoclientes/search',['as' => 'pedidoclientes/search','uses' =>'PedidoClientesController@search']);