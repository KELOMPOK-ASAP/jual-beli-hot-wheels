<?php

use App\Http\Controllers\DiecastController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/diecast', [DiecastController::class, 'index'])->name('diecast.index');
