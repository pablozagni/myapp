<?php

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

Route::get('/', function () {
    if( auth()->guest() ) {
        // dd( 'home');
        return view('guest.home');
    } else {
        if( ! auth()->user()->enabled ) {
            // dd('wait');
            return view('user.wait');
        } else {
            // dd('dashboard');
            return view('user.dashboard');
        }
    }
})->name('home');

Route::get('/contacto', function() {
    return view('guest.contacto');
})->name('contacto');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
