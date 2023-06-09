<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cards', [CardController::class, 'index'])->name('card.home');
Route::get('/preview/{card}', [CardController::class, 'preview'])->name('card.preview');
Route::post('/cards', [CardController::class, 'store'])->name('card.store');
