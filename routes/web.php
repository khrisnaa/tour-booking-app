<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TourPackageController;
use App\Http\Controllers\TourPhotoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/home', 'public.home.index')->name('home');
Route::view('/tours', 'public.tours.index')->name('tours');
Route::view('/favorites', 'public.favorites.index')->name('favorites');
Route::view('/more', 'public.home.index')->name('more');

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {

    Route::view('dashboard', 'admin.dashboard')->name('dashboard');

    Route::redirect('/', '/admin/dashboard');

    Route::view('profile', 'admin.profile')->name('profile');

    Route::resource('categories', CategoryController::class);

    Route::resource('tour-packages', TourPackageController::class);

    Route::resource('tour-photos', TourPhotoController::class);

    Route::resource('reviews', ReviewController::class);

    Route::resource('banks', BankController::class);

    Route::resource('bookings', BookingController::class);

});

require __DIR__.'/auth.php';
