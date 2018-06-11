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
Route::get('/', 'indexController@accueil')->name('accueil');


//Routes erreurs
Route::get('/404', 'errorsController@pagenontrouvee')->middleware('auth')->name('404');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
