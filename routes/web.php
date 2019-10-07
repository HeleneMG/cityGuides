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
//paramètre 1 = url utilisée par le navigateur
//paramètre 2 = template utilisé pour afficher la page

