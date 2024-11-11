<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', function() {
    return view('home');
});

Route::get('/app', [AppController::class, 'redirect'])->name('app.redirect');
