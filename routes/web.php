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

Route::get('/Home', function () {
    return ('Esta es mi nueva ruta');
});

Route::resource('productos', 'ProductoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
