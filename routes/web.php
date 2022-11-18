<?php

use App\Http\Controllers\SpanishController;
use Illuminate\Support\Facades\Route;

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

/* PRINCIPAL */
Route::get('/', [SpanishController::class, 'index']);


/* ESPAÑOL ROUTES */
Route::get('/tierras-blancas', [SpanishController::class, 'tierrasblancas'])->name('tierrasblancas');
Route::get('/limena', [SpanishController::class, 'limena'])->name('limena');
Route::get('/cabalgatas', [SpanishController::class, 'cabalgatas'])->name('cabalgatas');
Route::get('/aventura', [SpanishController::class, 'aventura'])->name('aventura');
Route::get('/gastronomia', [SpanishController::class, 'gastronomia'])->name('gastronomia');



/* PORTUGUES ROUTES */
// Route::get('/pt', [FrontendController::class, 'pt']);
// Route::get('/pt/passeios',  [FrontendController::class, 'passeios']);

/* ENGLISH ROUTES */
// Route::get('/en',  [FrontendController::class, 'en']);
// Route::get('/en/ride',  [FrontendController::class, 'enRide']);
