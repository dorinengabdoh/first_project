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
Route::get('connexion', "HomeController@connexion");
Route::get('tes', 'ContactController@contacter');
Route::post('create', 'ContactController@create');
Route::get('hello', 'PaieController@paiement');
Route::post('statut', 'PaieController@statut');
Route::get('maga', "MagaController@retourner");
Route::get('chat', "ChatController@retourner");
Route::get('test', "ChienController@retourner");
Route::get('beagle', "BeagleController@retourner");
Route::get('le_berger_allemand', "BergeController@retourner");
Route::get('le_cane_corso', "CaneController@retourner");
Route::get('le_caniche', "CanicheController@retourner");
Route::get('le_carlin', "CarlinController@retourner");
Route::get('le_golden_getriever', "GoldenController@retourner");
Route::get('le_labrador_retriever', "LabradorController@retourner");
Route::get('le_rottweiler', "RottController@retourner");
Route::get('Munchkin', "MunController@retourner");
Route::get('bengal', "BenController@retourner");
Route::get('siberien', "SibController@retourner");
Route::get('scottish', "ScoController@retourner");
Route::get('persan', "PerController@retourner");
Route::get('ragdol', "RagController@retourner");
Route::get('birman', "BirController@retourner");
Route::get('chartreux', "ChaController@retourner");