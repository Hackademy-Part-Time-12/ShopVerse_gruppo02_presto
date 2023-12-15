<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\PayPalController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Rotte pincipali
Route::get('/',[PublicController::class,'home'])->name('home');
Route::get('/profilo/index',[PublicController::class,'index'])->name('profile.index');

Route::get('/categoria/{category}',[PublicController::class, 'categoryShow'])->name('categoryShow');

// Ricerca annuncio
Route::get('/ricerca/annuncio', [PublicController::class, 'searchAdvertisements'])->name('advertisement.search');


//Rotte per gli annunci
Route::get('/annuncio/nuovo',[AdvertisementController::class,'create'])->middleware('auth')->name('advertisement.create');
Route::get('/annuncio/modifica/{advertisement}',[AdvertisementController::class,'edit'])->name('advertisement.edit');
Route::get('/annuncio/dettaglio/{advertisement}',[AdvertisementController::class,'show'])->name('advertisement.show');
Route::get('/annuncio/elimina/{advertisement}',[AdvertisementController::class,'delete'])->name('advertisement.delete');
Route::get('/tutti/annunci',[AdvertisementController::class,'index'])->name('advertisement.index');




// Rotte Revisore
Route::get('/revisor/home', [RevisorController::class, 'indexRevisor'])->middleware('isRevisor')->name('revisor.index');
// Rotta accetta annuncio-Revisore
Route::patch('/accetta/annuncio/{advertisement}', [RevisorController::class, 'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');
// Rotta rifiuta annuncio-Revisore
Route::patch('/rifiuta/annuncio/{advertisement}', [RevisorController::class, 'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');
// Rotta richiesta diventare revisore
Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
// Rendi utente revisore
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');




//Cambia lingua
Route::post('/lingua/{lang}',[PublicController::class,'setLanguage'])->name('set_language_locale');


//PayPal
Route::get('/paypal/{advertisement}', [PayPalController::class, 'index'])->name('paypal.index');
Route::get('/paypal/payment/buy/{price}', [PayPalController::class, 'payment'])->name('paypal.payment');
Route::get('/paypal/payment/success', [PayPalController::class, 'paymentSuccess'])->name('paypal.payment.success');
Route::get('/paypal/payment/cancel', [PayPalController::class, 'paymentCancel'])->name('paypal.payment/cancel');
