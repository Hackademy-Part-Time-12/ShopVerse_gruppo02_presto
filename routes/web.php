<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AdvertisementController;

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
Route::get('/categoria/{category}',[PublicController::class, 'categoryShow'])->name('categoryShow');


//Rotte per gli annunci
Route::get('/nuovo/annuncio',[AdvertisementController::class,'create'])->middleware('auth')->name('advertisement.create');
Route::get('/dettaglio/annuncio/{advertisement}',[AdvertisementController::class,'show'])->name('advertisement.show');
Route::get('/tutti/annunci',[AdvertisementController::class,'index'])->name('advertisement.index');
// Ricerca annuncio
Route::get('/ricerca/annuncio', [PublicController::class, 'searchAdvertisements'])->name('advertisement.search');

// Rotta Revisore-Home
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


