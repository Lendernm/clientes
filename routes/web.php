<?php

use Illuminate\Support\Facades\Route;

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
    return view('cliente.lista');
});

/*Route::get('/form','ClientesController@clienteform');
Route::post('/save','ClientesController@save')->name('save');
*/

//grilla cliente
Route::get('/', 'App\Http\Controllers\ClienteController@lista');

//form cliente
Route::get('/form', 'App\Http\Controllers\ClienteController@clienteform')->name('clienteform');
//guardar clientes
Route::post('/save', 'App\Http\Controllers\ClienteController@save')->name('save');



//borrar clientes
Route::delete('/delete/{id})', 'App\Http\Controllers\ClienteController@delete')->name('delete');

//editar clientes
Route::get('/editform/{id})', 'App\Http\Controllers\ClienteController@editform')->name('editform');

Route::patch('/edit/{id})', 'App\Http\Controllers\ClienteController@edit')->name('edit');
