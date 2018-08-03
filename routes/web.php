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

/**
 *  Route Gestion des Documents
 */
Route::get('gestionDocuments', 'GestionDocumentController@index')->name('gestionDocuments');
Route::get('addDocuments', 'GestionDocumentController@addDoc')->name('addDocuments');
Route::get('showDocument', 'GestionDocumentController@showDoc')->name('showDocument');
Route::get('revisions', 'RevisionsController@index')->name('revisions');
Route::get('revisions', 'RevisionsController@index')->name('revisions');
Route::get('revisions', 'RevisionsController@index')->name('revisions');
Route::get('revisions', 'RevisionsController@index')->name('revisions');
Route::get('revisions', 'RevisionsController@index')->name('revisions');


/**
 *  Route Gestion des Dossiers
 *
 */
route::get('gestionDossiers','GestionDossiersController@index')->name('gestionDossiers');
Route::get('addDossiers', 'GestionDossiersController@addDoc')->name('addDossiers');
Route::get('showDossiers', 'GestionDossiersController@showDoc')->name('showDossiers');
Route::get('consulDossiers', 'GestionDossiersController@consul')->name('consulDossiers');
Route::get('exportDossiers', 'GestionDossiersController@expo')->name('exportDossiers');
Route::get('imporDossiers', 'GestionDossiersController@impo')->name('imporDossiers');
Route::get('deplDossiers', 'GestionDossiersController@depl')->name('deplDossiers');


/**
 *  Route Gestion des Documents
 */
Route::get('historique','GestionDossiersController@histo')->name('historique');

//route Gestion des dossiers






route::get('gestionRepertoires','GestionRepertoireController@index')->name('gestionRepertoires');
route::get('gestionArchives','GestionArchiveController@index')->name('gestionArchives');
route::get('gestionMails','GestionMailController@index')->name('gestionMails');
route::get('gestionUtilisateurs','GestionUtilisateurController@index')->name('gestionUtilisateurs');


/**
 * test admin
 */

Route::get('dashboard','AdminController@index')->name('dashboard');