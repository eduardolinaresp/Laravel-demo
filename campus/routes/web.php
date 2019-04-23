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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('usuarios', 'UsuariosController');

Route::resource('clientes', 'ClienteController');

Route::get('api/users',function (){
    return datatables()->eloquent(App\User::query())->toJson();
});

Route::get('api/clientes',function (){
    return datatables()->eloquent(App\Cliente::query())->toJson();
});
