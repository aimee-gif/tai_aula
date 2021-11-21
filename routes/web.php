<?php

use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;
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
Route::get('', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group (['middleware' => 'auth'], function (){

Route::get('/segmentos', function () {
    return view('segmentos');
});

Route::get('/clientes', "ClientesController@index");
Route::get('/clientes/create', "ClientesController@create");
Route::post('/clientes/store/{id}', "ClientesController@store");
Route::get('/clientes/edit/{id}', "ClientesController@edit");
Route::get('/clientes/destroy/{id}', "ClientesController@destroy");
Route::post('/clientes/search', "ClientesController@search");


Route::get('/pedido', "PedidoController@index");
Route::get('/pedido/create', "PedidoController@create");
Route::post('/pedido/store/{id}', "PedidoController@store");
Route::get('/pedido/edit/{id}', "PedidoController@edit");
Route::get('/pedido/destroy/{id}', "PedidoController@destroy");
Route::post('/pedido/search', "PedidoController@search");



Route::get('/produto', "ProdutoController@index");
Route::get('/produto/create', "ProdutoController@create");
Route::post('/produto/store/{id}', "ProdutoController@store");
Route::get('/produto/edit/{id}', "ProdutoController@edit");
Route::get('/produto/destroy/{id}', "ProdutoController@destroy");
Route::post('/produto/search', "ProdutoController@search");


Route:: get('/pdf', "PdfController@geraPdf");

Route:: get('/pdf1', "Pdf1Controller@geraPdf");

//Route::resource('/codigo', "App\Http\Controllers\CodigoController");
//Route::resource('/quantidade',"App\Http\Controllers\QuantidadeController");

Route::get('/clientes-email',"ClientesController@sendEmail");

});
