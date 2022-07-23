<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ChartsController;



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

// les routes(url )de l'utilisateur de l'application

Route::group(['middleware'=>['auth']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name
    ('dashboard');
    Route::view('profile', 'profile')->name('profile');
    Route::put('profile','App\Http\Controllers\ProfileController@update')->name('profile.update');
    
});









//les routes de l'admin 
Route::group(['middleware' => 'auth','role:admin'], function () {
    Route::resource('users',\App\Http\Controllers\UsersController::class)
    ->only(['create','store','update','index','show','edit','destroy']);
    Route::resource('districts',\App\Http\Controllers\DistrictsController::class);
    Route::resource('regions',\App\Http\Controllers\RegionsController::class);
    Route::resource('facturation',\App\Http\Controllers\FacturationController::class)
    ->only(['create','store','update','index','show','edit','destroy']);


});

    



//les routes de le client
Route::group(['middleware'=>['auth','role:user']], function () {
    Route::get('/facture/{id}','App\Http\Controllers\Client\ClientController@facture')->name
    ('dashboard.facture');
    Route::get('/dashboard/factures/{id}','App\Http\Controllers\Client\ClientController@factures_consulter')->name
    ('dashboard.factures');
    Route::get('/dashboard/facture/passer_demande/{reference}','App\Http\Controllers\Client\ClientController@demande')->name
    ('passer.demande');
    Route::post('/dashboard/facture/passer_demande/demande_passer','App\Http\Controllers\Client\ClientController@demande_passer')->name
    ('demande_passer');
    Route::get('/dashboard/consulter demande','App\Http\Controllers\Client\ClientController@consulter_demande')->name
    ('consulter');
    Route::get('/paiement/{ref}/{montant}','App\Http\Controllers\Client\ClientController@paiement')->name('paiement');
    Route::post('paiement', 'App\Http\Controllers\Client\ClientController@paiementPost')->name('paiementPost');
    Route::get('/paiementdemande/{reference}/{montant}','App\Http\Controllers\DemandePaymentController@stripe_demande');
    Route::post('paiementdemande', 'App\Http\Controllers\DemandePaymentController@stripePost_demande')->name('paiement.post.demande');

    
});

//les liens de responsable de recouvrement
Route::group(['middleware'=>['auth','role:responsable_de_recouvrement']], function () {
    Route::get('/dashboard/facturation','App\Http\Controllers\Responsable\ResponsableController@facturation')->name
    ('dashboard.facturation'); 
    Route::get('/recherche','App\Http\Controllers\Responsable\ResponsableController@facturation_recherche');
    Route::get('/dashboard/creance','App\Http\Controllers\Responsable\ResponsableController@creance')->name
    ('dashboard.creance'); 
    Route::get('/dashboard/creance_par_district','App\Http\Controllers\Responsable\ResponsableController@creanceParDistrict')->name
    ('creance_par_district');  
    Route::get('/search','App\Http\Controllers\Responsable\ResponsableController@search');
    Route::get('/dashboard/creance_par_district/recherche','App\Http\Controllers\Responsable\ResponsableController@recherche');  
    Route::get('/dashboard/recherche','App\Http\Controllers\Responsable\ResponsableController@recherche_facturation');
    Route::get('/dashboard/taux','App\Http\Controllers\Responsable\ResponsableController@taux')->name
    ('dashboard.taux');
    Route::get('/taux/evolution','App\Http\Controllers\Responsable\ResponsableController@evolution')->name
    ('taux.evolution');
    Route::get('/dashboard/statistique','App\Http\Controllers\Responsable\ResponsableController@statistique')->name
    ('dashboard.statistique');
    Route::get('/dashboard/objectif','App\Http\Controllers\Responsable\ResponsableController@objectif')->name
    ('objectif');
    Route::post('objectif','App\Http\Controllers\Responsable\ResponsableController@objectif_post')->name
    ('objectif.post');
    Route::get('/dashboard/ecart','App\Http\Controllers\Responsable\ResponsableController@ecart')->name
    ('ecart');
    Route::get('/ecart_recherche','App\Http\Controllers\Responsable\ResponsableController@recherche_ecart')->name
    ('recherche.ecart');
    Route::get('/dashboard/demande','App\Http\Controllers\Responsable\ResponsableController@demande')->name
    ('demande_echlonnement');
    Route::get('/demande/traitement/{id}','App\Http\Controllers\Responsable\ResponsableController@demande_traitement');
    Route::get('/demande/traitement2/{id}','App\Http\Controllers\Responsable\ResponsableController@demande_traitement2');
    
       
});

  



    

require __DIR__.'/auth.php' ;
