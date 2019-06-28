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
    return view('layout.acceuil.index');
});

// Route::get('/index', function () {
//     return view('layout.acceuil.index');
// });

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
// Route::get('/clients/selectvillage', function () {
//     return view('clients.selectvillage');
//  })->name('clients.selectvillage');
 
 

Auth::routes();

Route::get('/clients/selectvillage', function () {
    return view('clients.selectvillage');
 })->name('clients.selectvillage');

 Route::get('/villages/selectvillage', function () {
    return view('villages.selectvillage');
 })->name('villages.selectvillage');

 Route::get('/abonnements/compteur', function () {
    return view('abonnements.selectcompteur');
 })->name('abonnements.selectcompteur');

 Route::get('/abonnements/selectclient', function () {
    return view('abonnements.selectclient');
 })->name('abonnements.selectclient');
 
//  Route::get('/gestionnaires/selectvillage', function () {
//     return view('gestionnaires.selectvillage');
//  })->name('gestionnaires.selectvillage');


Route::get('/home' , 'HomeController@index')->name('home');
Route::get('/villages/list', 'VillageController@list')->name('villages.list');
Route::resource('villages' , 'VillageController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clients/list', 'ClientController@list')->name('clients.list');
Route::resource('clients', 'ClientController');

Route::get('/compteurs/list', 'CompteurController@list')->name('compteurs.list');
Route::resource('compteurs', 'CompteurController');
Route::get('/compteurs/listfree', 'CompteurController@listfree')->name('compteurs.listfree');

Route::get('/abonnements/list', 'AbonnementController@list')->name('abonnements.list');
Route::resource('abonnements', 'AbonnementController');

Route::get('/users/list', 'UserController@list')->name('users.list');
Route::resource('users', 'UserController');

Route::get('/gestionnaires/list', 'GestionnaireController@list')->name('gestionnaires.list');
Route::resource('gestionnaires', 'GestionnaireController');

Route::get('/administrateurs/list', 'AdministrateurController@list')->name('administrateurs.list');
Route::resource('administrateurs', 'AdministrateurController');

Route::get('/comptables/list', 'ComptableController@list')->name('comptables.list');
Route::resource('comptables', 'ComptableController');

Route::get('/agents/list', 'AgentController@list')->name('agents.list');
Route::resource('agents', 'AgentController');


Route::get('/factures/list', 'FactureController@list')->name('factures.list');
Route::resource('factures', 'FactureController');


Route::get('/consommations/list/{abonnement?}','ConsommationController@list')->name('consommations.list');
Route::resource('consommations', 'ConsommationController');




Route::get('loginfor/{rolename?}',function($rolename=null){
    if(!isset($rolename)){
        return view('auth.loginfor');
    }else
    { 
        $role=App\Role::where('name',$rolename)->first();
        if($role){
            $user=$role->users()->first();
            Auth::login($user,true);
            return redirect()->route('home');
        
 } 
 }
 return redirect()->route('login');
 })->name('loginfor');
 

// Route::resource('consommation', 'consommationController');

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

use Illuminate\Support\Facades\Date;

Route::get('carbon', function () {
   $date = Date::now();
   dump($date);
   $newDate = $date->copy()->addDays(7);
   dump($newDate);
}
);