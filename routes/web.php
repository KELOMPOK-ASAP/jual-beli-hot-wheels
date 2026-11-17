<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DiecastController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/diecast', [DiecastController::class, 'index'])->name('diecast.index');

// Authentication Routes
Route::middleware('guest')->group(function (): void {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Admin Protected Routes (CRUD Diecast & Kategori)
Route::middleware(['auth', 'admin'])->group(function (): void {
    Route::get('/diecast/create', [DiecastController::class, 'create'])->name('diecast.create');
    Route::post('/diecast', [DiecastController::class, 'store'])->name('diecast.store');
    Route::get('/diecast/{diecast}/edit', [DiecastController::class, 'edit'])->name('diecast.edit');
    Route::put('/diecast/{diecast}', [DiecastController::class, 'update'])->name('diecast.update');
    Route::delete('/diecast/{diecast}', [DiecastController::class, 'destroy'])->name('diecast.destroy');

    Route::resource('kategori', KategoriController::class)->except(['create', 'show', 'edit']);
});

Route::get('/diecast/{diecast}', [DiecastController::class, 'show'])->name('diecast.show');
