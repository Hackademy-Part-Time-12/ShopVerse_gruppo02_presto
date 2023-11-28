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
//Rotte  rpincipali
Route::get('/',[PublicController::class,'home'])->name('home');
Route::get('/categoria/{category}',[PublicController::class, 'categoryShow'])->name('categoryShow');
//Rotte per gli annunci
Route::get('/nuovo/annuncio',[AdvertisementController::class,'create'])->middleware('auth')->name('advertisement.create');
Route::get('/dettaglio/annuncio/{advertisement}',[AdvertisementController::class,'show'])->name('advertisement.show');

Route::get('/tutti/annunci',[AdvertisementController::class,'index'])->name('advertisement.index');

// Rotta Revisore-Home
Route::get('/revisor/home', [RevisorController::class, 'indexRevisor'])->name('revisor.index');

// Rotta accetta annuncio-Revisore
Route::patch('/accetta/annuncio/{advertisement}', [RevisorController::class, 'acceptAnnouncement'])->name('revisor.accept_announcement');

// Rotta rifiuta annuncio-Revisore
Route::patch('/rifiuta/annuncio/{advertisement}', [RevisorController::class, 'rejectAnnouncement'])->name('revisor.reject_announcement');