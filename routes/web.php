<?php

use App\Http\Controllers\Auth\AdminInviteRegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// Halaman awal — arahkan ke halaman login lewat controller yang sama
// supaya konsisten (dapat old input, error session, dsb)
Route::middleware('guest')->group(function () {
    Route::get('/', [LoginController::class, 'showLoginForm']);
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// Admin Invite Registration
Route::get('/admin/register/invite', [AdminInviteRegisterController::class, 'showForm'])
    ->name('admin.invite.register');
Route::post('/admin/register/invite', [AdminInviteRegisterController::class, 'register'])
    ->name('admin.invite.register.submit');