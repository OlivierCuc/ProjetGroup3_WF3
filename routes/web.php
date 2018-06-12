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

//Routes Trajets
Route::post('/recherche/{villeDepart}-{villeArrivee}/{date}','trajetController@recherche')->name('rechercheTrajet');
Route::get('/trajet/{villeDepart}-{villeArrivee}/{date}/{id_trajet}','trajetController@affichage')->name('affichageTrajet');
Route::get('/publication','trajetController@publication')->middleware('auth')->name('publicationTrajet');
Route::post('/ajout-trajet','trajetController@ajoutTrajet')->middleware('auth')->name('ajoutTrajet');



//Route Utilisateur
Route::get('/utilisateur', 'usersController@profil')->middleware('auth')->name('profil');
Route::get('/modificationprofil', 'usersController@modif')->middleware('auth')->name('modif');

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

//Routes erreurs
Route::get('/404', 'errorsController@pagenontrouvee')->middleware('auth')->name('404');


Auth::routes();

