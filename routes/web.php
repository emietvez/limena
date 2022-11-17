<?php

use App\Http\Controllers\FrontendController;
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
Route::get('/', [FrontendController::class, 'index']);

/* ESPAÑOL ROUTES */
Route::get('/cabalgatas', [FrontendController::class, 'es'])->name('cabalgatas');

/* PORTUGUES ROUTES */
Route::get('/pt', [FrontendController::class, 'pt']);
Route::get('/pt/passeios',  [FrontendController::class, 'passeios']);

/* ENGLISH ROUTES */
Route::get('/en',  [FrontendController::class, 'en']);
Route::get('/en/ride',  [FrontendController::class, 'enRide']);
