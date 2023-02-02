<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;



Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/abstrak', [DashboardController::class, 'abstrak'])->name('dashboard.abstrak');
Route::get('/paper', [DashboardController::class, 'paper'])->name('dashboard.paper');
Route::get('/ppt', [DashboardController::class, 'ppt'])->name('dashboard.ppt');
Route::get('/payment', [DashboardController::class, 'payment'])->name('dashboard.payment');
