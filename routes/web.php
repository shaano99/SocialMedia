<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SocialController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


route::get('auth/google',[SocialController::class, 'googlepage']);

route::get('auth/google/callback',[SocialController::class, 'googlecallback']);