<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->name('adminDashboard')->middleware(['auth','admin']);
Route::middleware('sales')->group(function () {
    Route::get('/sales-dashboard', [SalesController::class, 'dashboard'])->name('salesDashboard');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


require __DIR__.'/auth.php';
