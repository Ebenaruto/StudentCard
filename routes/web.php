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

Auth::routes();

// Route::get('ListeEtudiant', function () {
//     return view('ListeEtudiant');
// });
// Route::get('Formulaire', function () {
//     return view('Formulaire');
// });


Route::get('ListeEtudiant', 'EtudiantsController@index');
Route::get('Formulaire', 'EtudiantsController@create');
Route::post('ajouter', 'EtudiantsController@strore');

Route::get('Formulaire', 'CyclesController@create');
Route::post('ajouter', 'CyclesController@strore');

Route::get('Formulaire', 'FilieresController@create');
Route::post('ajouter', 'FilieresController@strore');

Route::get('Formulaire', 'NiveauxController@create');
Route::post('ajouter', 'NiveauxController@strore');

Route::get('Formulaire', 'NationalitesController@create');
Route::post('ajouter', 'NationalitesController@strore');

Route::get('Formulaire', 'TuteursController@create');
Route::post('ajouter', 'TuteursController@strore');






// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', 'HomeController@index')->name('home');

