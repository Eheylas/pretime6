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

Route::group(['prefix' => 'ato'], function(){
Route::get('listar', 'AtoController@listar');
Route::get('criar', 'AtoController@criar');
Route::get('{id}/editar', 'AtoController@editar');
Route::get('{id}/remover', 'AtoController@remover');
Route::get('salvar', 'AtoController@salvar');
});

Route::group(['prefix' => 'ata'], function(){
Route::get('listar', 'AtaController@listar');
Route::get('criar', 'AtaController@criar');
Route::get('{id}/editar', 'AtaController@editar');
Route::get('{id}/remover', 'AtaController@remover');
Route::get('salvar', 'AtaController@salvar');
});