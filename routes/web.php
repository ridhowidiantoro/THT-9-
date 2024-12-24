<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
