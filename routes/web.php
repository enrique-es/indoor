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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/clima', 'ClimaController@index')->name('clima');
Route::get('/actuadores', 'ActuadoresController@index')->name('actuadores');

Route::get('/historicos', 'HomeController@historicos')->name('historicos');
Route::get('/configuracion', 'HomeController@configuracion')->name('configuracion');
