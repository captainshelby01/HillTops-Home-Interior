<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ConsultationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| HillTops Home Interior Routes
|--------------------------------------------------------------------------
*/

// Homepage (The Conversion Engine)
Route::get('/', [PageController::class, 'homepage'])->name('home');

// Services & Process (The Value Builder)
Route::get('/services', [PageController::class, 'services'])->name('services');

// Portfolio Grid & Case Studies (The Proof)
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio/{slug}', [PageController::class, 'portfolioDetail'])->name('portfolio.detail');

// About / Philosophy (The Connection)
Route::get('/about', [PageController::class, 'about'])->name('about');

// Contact & Booking (The Closer)
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Lead Capture API/Form Submission
Route::post('/book-consultation', [ConsultationController::class, 'store'])->name('consultation.store');
