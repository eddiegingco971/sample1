<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SiteController::class, 'index'])->name('landingpage');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/services', [SiteController::class, 'services'])->name('services');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');


// Pages
Route::get('/feature', [SiteController::class, 'feature'])->name('feature');
Route::get('/countries', [SiteController::class, 'countries'])->name('countries');
Route::get('/testimonial', [SiteController::class, 'testimonial'])->name('testimonial');
Route::get('/training', [SiteController::class, 'training'])->name('training');


