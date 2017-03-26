<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',['uses'=>'AccueilController@infos', 'as'=>'accueil']);

Route::get('/ventes', ['uses'=>'VentesController@index', 'as'=>'ventes']);
Route::get('/locations', ['uses'=>'LocationsController@index', 'as'=>'locations']);
Route::get('/contacts', ['uses'=>'ContactController@index', 'as'=>'contacts']);

Route::get('/ajoutBien', ['uses'=>'FormulairesController@ajoutBien', 'as'=>'ajoutBien'])->middleware('vendeur');
Route::post('/ajoutBien', ['uses'=>'FormulairesController@update', 'as'=>'ajouteBienForm']);

Route::get('/details/{id}', ['uses'=>'DetailsController@index', 'as'=>'details']);
Route::get('/supprimerBien/{id}', ['uses'=>'FormulairesController@supprimerBien', 'as'=>'supprimerBien']);

Route::get('/rechercheBien', ['uses'=>'VentesController@requeteAjax', 'as'=>'ajaxVentes']);

Auth::routes();


