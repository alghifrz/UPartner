<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\RegisterDosenController;

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::get('/registerDosen', [RegisterDosenController::class, 'showRegistrationForm'])->name('registerDosen');
Route::get('/loginDosen', function () {
    return view('auth.loginDosen');
})->name('loginDosen');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
