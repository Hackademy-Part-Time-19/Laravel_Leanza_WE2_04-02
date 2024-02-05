<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'HomePage'])->name('home'); 

Route::get('/ticket-dettaglio/{id}', [PageController::class, 'TicketDettaglio'])->name('ticket-dettaglio');

Route::post('/ticket-dettaglio/invio', [PageController::class, 'invioMail'])->name('invio');

