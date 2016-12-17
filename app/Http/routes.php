<?php
//Crear la ruta en GET, se ve por url.
/*
clase: ROUTE
verbo: get
ruta: login
Controlador: LoginController
metodo: view
alias: loginview
*/
Route::get('login', 'LoginController@index')->name('loginview');
Route::get('welcome', 'LoginController@welcome')->name('welcome');
Route::get('logout', 'LoginController@logout')->name('logout');

Route::get('register/user', 'LoginController@registerUser')->name('loginview');
Route::post('login', 'LoginController@login')->name('loginview');

Route::get('delete/user/{id}', 'LoginController@destroy')->name('destroy');