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
    return view('index');
});

Route::get('/inscription','App\Http\Controllers\InscriptionsController@inscription');

Route::post('/inscription','App\Http\Controllers\InscriptionsController@inscriptions');

Route::get('/connexion','App\Http\Controllers\ConnexionController@form');

Route::post('/connexion','App\Http\Controllers\ConnexionController@connexion' );

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/signout','App\Http\Controllers\UserAccountController@signout');

Route::get('/upload','App\Http\Controllers\ProduitsController@ajout'); //Afficher le formulaire pour créer un produit

Route::post('/upload','App\Http\Controllers\ProduitsController@produit'); //Envoyer les donnée à la base de donnée

Route::get('/uploads','App\Http\Controllers\AmbiancesController@ajouts'); //Afficher le formulaire pour créer un produit

Route::post('/uploads','App\Http\Controllers\AmbiancesController@ambiances'); //Envoyer les donnée à la base de donnée

Route::get('/modif/{id}','App\Http\Controllers\AmbiancesController@form_ambiance')->name('modification.ambiance');
Route::post('/ambiance_modification','App\Http\Controllers\AmbiancesController@update');

Route::get('modifs/{id}','App\Http\Controllers\ProduitsController@form_produit')->name('modification.produit');
Route::post('/produit_modification','App\Http\Controllers\ProduitsController@update');

Route::get('show/{id}','App\Http\Controllers\AmbiancesController@show')->name('showAmbiance');

Route::get('shows/{id}','App\Http\Controllers\ProduitsController@show')->name('showProduit');

Route::get('/ajout','App\Http\Controllers\ProduitsController@ajout_en_masse');

Route::get('/ajouts','App\Http\Controllers\AmbiancesController@ajout_en_masse');

Route::get('/ambiance','App\Http\Controllers\AmbiancesController@catalogue');
Route::get('/produit','App\Http\Controllers\ProduitsController@catalogue');

Route::get('/search', 'App\Http\Controllers\ProduitsController@recherche');
Route::get('/searchs', 'App\Http\Controllers\AmbiancesController@recherche');