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
    return view('index');
})->name('index');


Route::resources([
    'categoria' => 'CategoriaController',
    'produto' => 'ProdutoController',
    'vendas' => 'VendaController'
]);

Route::get('vendas/{vendas}/vendas_produtos', 'vendaController@vendas_produtos')->name('vendas.vendas_produtos');  
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
