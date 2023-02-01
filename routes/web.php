<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

//Routes

Route::get('/', [FrontendController::class, 'index']);
Route::get('/abstract', [FrontendController::class, 'abstract']);
Route::get('/payment', [FrontendController::class, 'payment']);
