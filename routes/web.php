<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TourController as AdminTourController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/tours', function () {
    return view('frontend.tours');
})->name('tours');

Route::get('/destinations', function () {
    return view('frontend.destinations');
})->name('destinations');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/booking', function () {
    return view('frontend.booking');
})->name('booking');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('admin.auth')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        
        Route::resource('tours', AdminTourController::class);
        Route::post('tours/{tour}/toggle-status', [AdminTourController::class, 'toggleStatus'])->name('tours.toggle-status');
        
        Route::get('bookings', [AdminBookingController::class, 'index'])->name('bookings.index');
        Route::post('bookings/{booking}/status', [AdminBookingController::class, 'updateStatus'])->name('bookings.update-status');
        Route::delete('bookings/{booking}', [AdminBookingController::class, 'destroy'])->name('bookings.destroy');
        
        Route::get('contacts', [AdminContactController::class, 'index'])->name('contacts.index');
        Route::post('contacts/{contact}/status', [AdminContactController::class, 'updateStatus'])->name('contacts.update-status');
        Route::delete('contacts/{contact}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');
    });
});
