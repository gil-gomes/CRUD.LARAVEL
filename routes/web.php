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
    return view('welcome');
});


Route::get('show', 'Products@show');

Route::post('inserir', 'Products@creat');

Route::get('listar', 'Products@list');

//Rota para excluir cadastro
Route::get('excluir/{id}', 'Products@destroy');

//Rota para exibir o fomulário de cadastro 
Route::get('editar/{id}', 'Products@mostrar_editar');

//Rota para editar cadastro
Route::post('alterar/{id}', 'Products@edit')->name('alterar.edit');