<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\PagesController;
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

// Common routes
Route::get('/', [ PagesController::class, 'index'] )->name('home');

// Guest routes
Route::get('/contact', [ PagesController::class, 'contact' ])->name('contact');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', [ PagesController::class, 'dashboard'] )->name('dashboard');
    
    // Clients
    Route::resource('clients', ClientController::class )->names('clients');
});
