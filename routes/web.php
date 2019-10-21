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
Route::view('/contact', 'contact');
Route::view('/espace-membre', 'espace-membre');
Route::view('/espace-admin', 'espace-admin');
Route::view('/espace-annonces', 'templates');
Route::view('/annonces', 'test');
Route::view('/login', 'login');
Route::view('/register', 'register');
//paramètre 1 = url utilisée par le navigateur
//paramètre 2 = template (.blade.php) utilisé pour afficher la page


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
