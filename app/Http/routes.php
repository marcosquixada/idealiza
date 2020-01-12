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

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['middleware'=>['auth']],function(){
    Route::get('/processos','ProcessoController@index');
    Route::get('/processos/novo','ProcessoController@create');
    Route::post('/processos/salvar','ProcessoController@store');
    Route::get('/processos/{id}/editar','ProcessoController@edit');
    Route::patch('/processos/{processo}','ProcessoController@update');
    Route::delete('/processos/{processo}','ProcessoController@destroy');

    Route::get('/construtoras','ConstrutoraController@index');
    Route::get('/construtoras/novo','ConstrutoraController@create');
    Route::post('/construtoras/salvar','ConstrutoraController@store');
    Route::get('/construtoras/{id}/editar','ConstrutoraController@edit');
    Route::patch('/construtoras/{construtora}','ConstrutoraController@update');
    Route::delete('/construtoras/{construtora}','ConstrutoraController@destroy');

    Route::get('/imoveis','ImovelController@index');
    Route::get('/imoveis/novo','ImovelController@create');
    Route::post('/imoveis/salvar','ImovelController@store');
    Route::get('/imoveis/{id}/editar','ImovelController@edit');
    Route::patch('/imoveis/{imovel}','ImovelController@update');
    Route::delete('/imoveis/{imovel}','ImovelController@destroy');

    Route::get('/condominios','CondominioController@index');
    Route::get('/condominios/novo','CondominioController@create');
    Route::post('/condominios/salvar','CondominioController@store');
    Route::get('/condominios/{id}/editar','CondominioController@edit');
    Route::patch('/condominios/{condominio}','CondominioController@update');
    Route::delete('/condominios/{condominio}','CondominioController@destroy');

    Route::get('/blocos','BlocoController@index');
    Route::get('/blocos/novo','BlocoController@create');
    Route::post('/blocos/salvar','BlocoController@store');
    Route::get('/blocos/{id}/editar','BlocoController@edit');
    Route::patch('/blocos/{bloco}','BlocoController@update');
    Route::delete('/blocos/{bloco}','BlocoController@destroy');

    Route::get('/clientes','ClientesController@index');
    Route::get('/clientes/novo','ClientesController@create');
    Route::post('/clientes/salvar','ClientesController@store');
    Route::get('/clientes/{id}/editar','ClientesController@edit');
    Route::patch('/clientes/{cliente}','ClientesController@update');
    Route::delete('/clientes/{cliente}','ClientesController@destroy');

    Route::get('/atendentes','AtendentesController@index');
    Route::get('/atendentes/novo','AtendentesController@create');
    Route::post('/atendentes/salvar','AtendentesController@store');
    Route::get('/atendentes/{id}/editar','AtendentesController@edit');
    Route::patch('/atendentes/{atendente}','AtendentesController@update');
    Route::delete('/atendentes/{atendente}','AtendentesController@destroy');
});