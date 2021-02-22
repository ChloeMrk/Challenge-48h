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
    return view('welcome');
});

Route::get('/inscription','App\Http\Controllers\InscriptionsController@inscription');

Route::post('/inscription','App\Http\Controllers\InscriptionsController@inscriptions');

Route::get('/connexion','App\Http\Controllers\ConnexionController@form');

Route::post('/connexion','App\Http\Controllers\ConnexionController@connexion' );

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/signout','App\Http\Controllers\UserAccountController@signout');

Route::get('/produit','App\Http\Controllers\ProduitsController@ajout'); //Afficher le formulaire pour créer un produit

Route::post('/produit','App\Http\Controllers\ProduitsController@produit'); //Envoyer les donnée à la base de donnée

Route::get('/ambiance','App\Http\Controllers\AmbiancesController@ajouts'); //Afficher le formulaire pour créer un produit

Route::post('/ambiance','App\Http\Controllers\AmbiancesController@ambiances'); //Envoyer les donnée à la base de donnée

Route::get('/modif','App\Http\Controllers\AmbiancesController@form_ambiance');
Route::post('/modif','App\Http\Controllers\AmbiancesController@ambiance_modification');

Route::get('/modifs/{id}','App\Http\Controllers\ProduitsController@form_produit');
Route::post('/modifs/{id}','App\Http\Controllers\ProduitsController@produit_modification');