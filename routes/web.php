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

 Route::get('/home', 'HomeController@index')->name('home');


 // Etudiants 
Route::get('etudiants','EtudiantsController@index');
Route::get('etudiants/enregistrer','EtudiantsController@enregistrer');
Route::post('etudiants','EtudiantsController@store');
Route::get('etudiants/{client}','EtudiantsController@show');
Route::get('etudiants/{client}/edit','EtudiantsController@edit');
