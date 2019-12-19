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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'LandingPageController@index')->name('landing-page');

//carrito
Route::get('/cart', 'CartController@index')->middleware('auth')->name('cart');
Route::post('/addtocart', 'CartController@store')->middleware('auth');
Route::get('/delete/{id}', 'CartController@destroy')->middleware('auth');
Route::post('/cartclose', 'CartController@cartclose')->middleware('auth');
Route::get('/thankyou', 'CartController@cartclose')->middleware('auth');
Route::get('/history', 'CartController@history')->middleware('auth');

//titulos
Route::get('/titulos', 'TituloController@index')->name('titulos');
Route::get('/titulo/{id}', 'TituloController@show')->name('titulo');
Route::get('/titulos/{titulo}', 'TituloController@show')->name('titulo.show');

//generos
Route::get('/titulos/genres/{name}', 'TituloController@genres')->name('genero');

// agregar titulos
Route::post('/addtitulo', 'CartController@titulo')->middleware('auth');


//buscador

Route::get('/search', 'TituloController@search')->name('search');


//admin

Route::group(['middleware' => 'admin'], function () {
    Route::get('/addtitulo', 'AdminController@index')->name('addtitulo');
    Route::post('/addtitulotodb', 'AdminController@createtitulo')->name('addtitulotodb');
});
