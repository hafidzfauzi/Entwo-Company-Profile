<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Http\Request;

// Tambahkan ini di bagian atas atau di RouteServiceProvider
RateLimiter::for('contact-form', function (Request $request) {
    return Limit::perMinute(10)->by($request->ip());
});

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/service', 'pages.service')->name('services');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/portfolio', 'pages.portfolio')->name('portfolio');
// Route-nya
Route::post('/contact/send', [ContactController::class, 'store'])
    ->middleware('throttle:contact-form')
    ->name('contact.store');
