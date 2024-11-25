<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/skrivbord', function() {
    return view('errors.desktop');
})->name('errors.desktop');

Route::get('/', function() {
    return view('home');
});

Route::get('/app', [AppController::class, 'redirect'])->name('app.redirect');

// temporary route for google forms
Route::get('/formulär', [AppController::class, 'google_forms'])->name('app.google_forms');
