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

<<<<<<< HEAD
//Routes Trajets
Route::post('/recherche','trajetController@recherche')->name('rechercheTrajet');


//Route Utilisateur


//Route footer 
Route::get('/vieprivee', 'footercontroller@vieprivee')->name('vieprivee');
Route::get('/mentionslegales', 'footercontroller@mentionslegales')->name('mentionslegales');
Route::get('/Conditions', 'footercontroller@conditionsutilisations')->name('conditions');
Route::get('/sitemap', 'footercontroller@sitemap')->name('sitemap');
Route::get('/contact', 'footercontroller@contact')->name('contact');
Route::get('/quisommesnous', 'footercontroller@quisommesnous')->name('quisommesnous');
Route::get('/infospratiques', 'footercontroller@infospratiques')->name('infospratiques');
Route::get('/partenaires', 'footercontroller@partenaires')->name('partenaires');
Route::get('/vieprivee', 'footercontroller@vieprivee')->name('vieprivee');
Route::get('/confidentialite', 'footercontroller@confidentialite')->name('confidentialite');
Route::get('/hebergement', 'footercontroller@hebergement')->name('hebergement');
Route::get('/emploi', 'footercontroller@emploi')->name('emploi');
Route::get('/faqs', 'footercontroller@faqs')->name('faqs');
Route::get('/commentcamarche', 'footercontroller@commentcamarche')->name('commentcamarche');
Route::get('/presse', 'footercontroller@presse')->name('presse');
Route::get('/cookies', 'footercontroller@cookies')->name('cookies');
Route::get('/vieprivee', 'footercontroller@vieprivee')->name('vieprivee');
=======
>>>>>>> Front

//Routes erreurs
Route::get('/404', 'errorsController@pagenontrouvee')->middleware('auth')->name('404');


Auth::routes();

<<<<<<< HEAD
=======
Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> Front
