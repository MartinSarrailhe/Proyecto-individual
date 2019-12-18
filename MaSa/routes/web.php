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

//pelicula
Route::get('/peliculas', 'PeliculaController@index')->name('peliculas');
Route::get('/pelicula/{id}', 'PeliculaController@show')->name('pelicula');
Route::get('/peliculas/{pelicula}', 'PeliculaController@show')->name('pelicula.show');

//carrito
Route::get('/cart', 'CartController@index')->middleware('auth')->name('cart');
Route::post('/addtocart', 'CartController@store')->middleware('auth');
Route::get('/delete/{id}', 'CartController@destroy')->middleware('auth');
Route::post('/cartclose', 'CartController@cartclose')->middleware('auth');
Route::get('/thankyou', 'CartController@cartclose')->middleware('auth');
Route::get('/history', 'CartController@history')->middleware('auth');

//agregar pelicula
Route::get('/pelicula/genero/{name}', 'PeliculaController@genero')->name('genero');
Route::post('/addpelicula', 'CartController@pelicula')->middleware('auth');
Route::get('/search', 'PeliculaController@search')->name('search');

//adm
Route::group(['middleware' => 'admin'], function () {
    Route::get('/addpelicula', 'AdminController@index')->name('addpelicula');
    Route::post('/addpeliculadb', 'AdminController@createProduct')->name('addpeliculadb');
});
