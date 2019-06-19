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

Route::get('/default', function () {
    return view('layout.default');
});

Route::get('/test', function () {
    return view('layout.default');
});

/* Route::get('/village', function () {
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
 */
Route::get('/clients/selectvillage', function () {
    return view('clients.selectvillage');
 })->name('clients.selectvillage');
 
 

Auth::routes();
Route::get('/home' , 'HomeController@index')->name('home');
Route::resource('villages' , 'VillageController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clients/list', 'ClientController@list')->name('clients.list');
Route::resource('clients', 'ClientController');

Route::get('/compteurs/list', 'CompteurController@list')->name('compteurs.list');
Route::resource('compteurs', 'CompteurController');

Route::get('/abonnements/list', 'AbonnementController@list')->name('abonnements.list');
Route::resource('abonnements', 'abonnementController');


// Route::get('/facture', function () {
//     return view('layout.facture');
// });

// Route::get('/table', function () {
//     return view('layout.table');
// });


// Route::get('/user', function () {
//     return view('layout.user');
// });

// Route::get('/notification', function () {
//     return view('layout.notification');
// });


