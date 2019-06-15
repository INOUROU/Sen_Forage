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

Route::get('/dashboard', function () {
    return view('layout.default');
});

Route::get('/village', function () {
    return view('layout.villages.create');
});


Route::get('/user', function () {
    return view('layout.user');
});

Route::get('/table', function () {
    return view('layout.table');
});

Route::get('/facture', function () {
    return view('layout.facture');
});

Route::get('/client', function () {
    return view('layout.client');
});

Route::get('/typography', function () {
    return view('layout.typography');
});


Auth::routes();
Route::get('/home' , 'HomeController@index')->name('home');
Route::resource('villages' , 'VillageController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
