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

/*Route::get('/', function () {
    return view('welcome');
});*/

/**
 * Route Accueil
 */

Route::get('/', 'AcceuilController@index')->name('home');
Route::get('gestionDocuments', 'GestionDocumentController@index')->name('gestionDocuments');
route::get('gestionRepertoires','GestionRepertoireController@index')->name('gestionRepertoires');
route::get('gestionArchives','GestionArchiveController@index')->name('gestionArchives');
route::get('gestionMails','GestionMailController@index')->name('gestionMails');
route::get('gestionUtilisateurs','GestionUtilisateurController@index')->name('gestionUtilisateurs');