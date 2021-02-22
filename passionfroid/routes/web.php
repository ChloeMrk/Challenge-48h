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
