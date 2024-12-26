<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\RegisterDosenController;
use App\Http\Middleware\EnsureUserIsAuthenticated;
use App\Http\Middleware\EnsureUserIsAuthenticatedDosen;

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/tentang', [LandingPageController::class, 'about']);

Route::get('/register', [AuthController::class, 'showRegistrationFormMahasiswa'])->name('register');
Route::get('/registerDosen', [AuthController::class, 'showRegistrationFormDosen'])->name('registerDosen');

Route::post('/register', [AuthController::class, 'registerCustomMahasiswa'])->name('register.custom.mahasiswa');
Route::post('/registerDosen', [AuthController::class, 'registerCustomDosen'])->name('register.custom.dosen');

Route::get('/login', [AuthController::class, 'showLoginFormMahasiswa'])->name('login');
Route::get('/loginDosen', [AuthController::class, 'showLoginFormDosen'])->name('loginDosen');

Route::post('/login', [AuthController::class, 'loginCustomMahasiswa'])->name('login.custom.mahasiswa');
Route::post('/loginDosen', [AuthController::class, 'loginCustomDosen'])->name('login.custom.dosen');

Route::middleware(['web', EnsureUserIsAuthenticated::class])->group(function () {
    Route::get('/dashboard-mahasiswa', [DashboardController::class, 'showDashboardMahasiswa'])->name('dashboard-mahasiswa');
});

Route::middleware(['web', EnsureUserIsAuthenticatedDosen::class])->group(function () {
    Route::get('/dashboard-dosen', [DashboardController::class, 'showDashboardDosen'])->name('dashboard-dosen');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified', // Pastikan pengguna sudah terverifikasi
// ])->group(function () {
//     // Route untuk Dashboard Mahasiswa
//     Route::get('/dashboard-mahasiswa', [DashboardController::class, 'showDashboardMahasiswa'])
//         ->name('dashboard-mahasiswa');

//     // Route untuk Dashboard Dosen
//     // Route::get('/dashboard-dosen', [DashboardController::class, 'showDashboardDosen'])
//     //     ->name('dashboard-dosen');
// });
