<?php

use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\TourController;
use Illuminate\Support\Facades\Route;

Route::get('/tours', [TourController::class, 'index']);
Route::get('/tour/{id}', [TourController::class, 'show']);
Route::post('/booking', [BookingController::class, 'store']);
Route::post('/contact', [ContactController::class, 'store']);
