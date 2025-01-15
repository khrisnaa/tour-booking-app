<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TourPackageController;
use App\Http\Controllers\TourPhotoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/details', 'public.tours.details')->name('tour.detailsx');

Route::get('/home', [ClientController::class, 'home'])->name('home');

Route::get('/tours', [ClientController::class, 'tours'])->name('tours');

Route::get('/category/{category:slug}', [ClientController::class, 'category'])->name('category');

Route::get('/tours/{tour:slug}', [ClientController::class, 'details'])->name('tour.details');

Route::get('/favorites', [ClientController::class, 'favorites'])->name('favorites');

Route::get('/more', [ClientController::class, 'tours'])->name('more');

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
