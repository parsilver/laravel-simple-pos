<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers;

Route::get('/', [Controllers\HomePageController::class, 'landingPage']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [Controllers\DashboardController::class, 'dashboard'])->name('dashboard');


    Route::get('/serve', [Controllers\ReadyToServeController::class, 'serve'])->name('serve');
});
