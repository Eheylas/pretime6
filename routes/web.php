<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'usuario'], function(){
Route::get('listar', 'UsuarioController@listar');
Route::get('criar', 'UsuarioController@criar');
Route::get('{id}/editar', 'UsuarioController@editar');
Route::get('{id}/remover', 'UsuarioController@remover');
Route::get('salvar', 'UsuarioController@salvar');
});
