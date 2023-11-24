<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
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
Route::get('/nuovo/annunci',[AdvertisementController::class,'create'])->middleware('auth')->name('advertisement.create');
