<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Profile routes for authenticated users
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin-specific routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->name('adminDashboard');
    Route::get('/admin-settings', [AdminController::class, 'settings'])->name('SettingsAdmin');
    // Route::get('/admin-settings/clients',[ClientController::class, 'index'])->name('SettingClient');
    Route::resource('clients', ClientController::class);
});

// Sales-specific routes
// Route::middleware(['auth', 'sales'])->group(function () {
    Route::get('/sales-dashboard', [SalesController::class, 'dashboard'])->name('salesDashboard');
// });

require __DIR__.'/auth.php';
