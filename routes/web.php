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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'accueil');
Route::any('/contact/store', 'contactController@store');
Route::view('/contact', 'contact');
Route::view('/espace-admin', 'espace-admin');
Route::view('/espace-annonces', 'templates');
Route::view('/annonces', 'test');
Route::view('/login', 'login');
Route::view('/register', 'register');
Route::any('/annonce/store', 'AnnonceController@store');
Route::view('/annonces', 'annonces');

//limiter accès à l'espace memebre au membre connectés + logout
Route::any('/espace-membre', 'AnnonceController@afficherEspaceMembre');
Route::any('/deconnexion', 'AnnonceController@deconnexion');

//paramÃ¨tre 1 = url utilisÃ©e par le navigateur
//paramÃ¨tre 2 = template (.blade.php) utilisÃ© pour afficher la page

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
