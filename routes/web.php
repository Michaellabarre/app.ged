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

// Route Ajout LIst Modif
Route::get('addDocuments', 'GestionDocumentController@addDoc')->name('addDocuments');
Route::get('showDocument', 'GestionDocumentController@showDoc')->name('showDocument');
Route::get('revisions', 'RevisionsController@index')->name('revisions');
///////////////**//////////////////**//////////////////////////****////////////////
Route::get('addDossiers', 'GestionDossiersController@addDoc')->name('addDossiers');
Route::get('showDossiers', 'GestionDossiersController@showDoc')->name('showDossiers');

Route::get('historique','GestionDossiersController@histo')->name('historique');

//route Gestion des dossiers
route::get('gestionDossiers','GestionDossiersController@index')->name('gestionDossiers');


/**
 * CORBEILLES
 */
Route::get('corbeilles','CorbeillesController@corb')->name('corbeilles');

/**
 * ARCHIVES
 */
route::get('gestionArchives','ArchivesController@index')->name('gestionArchives');
Route::get('addArchives', 'ArchivesController@addArch')->name('addArchives');
Route::get('showArchives', 'ArchivesController@showArch')->name('showArchives');
Route::get('catArchives', 'CategoriesArchivesController@index')->name('catArchives');


/**
 * MAIL
 */

route::get('gestionMail','GestionMailController@index')->name('gestionMails');
route::get('boiteReception','GestionMailController@recept')->name('boiteReception');
route::get('messageEnvoye','GestionMailController@meEnv')->name('messageEnvoye');
route::get('nouveauMail','GestionMailController@nouMail')->name('nouveauMail');
/**
 *UTILISATEURS
 */
route::get('gestionUtilisateurs','GestionUtilisateurController@index')->name('gestionUtilisateurs');
route::get('addUtilisateurs','GestionUtilisateurController@addUtil')->name('addUtilisateurs');
route::get('showUtilisateurs','GestionUtilisateurController@showUtil')->name('showUtilisateurs');
route::get('groupeUtilisateurs','GroupeUtlisateursController@index')->name('groupeUtilisateurs');


/**
 * test admin
 */

Route::get('dashboard','AdminController@index')->name('dashboard');

/**
 * AGENDAS
 */
route::get('gestionAgendas','AgendasController@index')->name('gestionAgendas');