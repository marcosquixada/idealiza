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

Route::get('/',function(){
    return view('home');
})->name('login');

Route::post('/login','AdminController@login');

Route::get('/logout',function(){
    if(Auth::check()){
        Auth::logout();
        return redirect('/');
    }else{
        return false;
    }
});

Route::group(['middleware'=>['auth']],function() {
    Route::get('listaArquivos', 'AdminController@listaArquivos');
    Route::get('/getFile', 'AdminController@getFile');
    Route::get('/arquivos/create', 'AdminController@create');
    Route::post('/arquivos/create', 'AdminController@upload');
});

Route::get('/redefinir','AdminController@redefinir');
Route::post('/verificaemail','AdminController@verificaemail');
Route::get('/newpassword/{id}/{hash}','AdminController@newpassword');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
