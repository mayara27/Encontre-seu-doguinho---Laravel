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

Route::get('/', function () {
    return view('welcome');
});


Route::get('admin/cachorros', ['as'=>'admin.cachorros', 'uses'=>'Admin\CachorroController@index']);
Route::get('admin/cachorros/adicionar', ['as'=>'admin.cachorros.adicionar', 'uses'=>'Admin\CachorroController@adicionar']);
Route::post('admin/cachorros/salvar', ['as'=>'admin.cachorros.salvar', 'uses'=>'Admin\CachorroController@salvar']);
Route::get('admin/cachorros/deletar/{id}', ['as'=>'admin.cachorros.deletar', 'uses'=>'Admin\CachorroController@deletar']);
