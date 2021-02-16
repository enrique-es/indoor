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
Route::get('/prueba', 'HomeController@prueba')->name('prueba');

Route::get('/clima', 'HomeController@clima')->name('clima');
Route::get('/actuadores', 'HomeController@actuadores')->name('actuadores');
Route::get('/historicos', 'HomeController@historicos')->name('historicos');
Route::get('/configuracion', 'HomeController@configuracion')->name('configuracion');
