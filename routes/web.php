<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\{
    HomeController,
    AboutController,
    RealisationController,
    BlogController,
    ContactController
};

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/a-propos', [AboutController::class, 'index'])->name('about');
Route::get('/realisations', [RealisationController::class, 'index'])->name('realisations');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/send-email', [MailController::class, 'sendEmail'])->name('send.email');
Route::get('/realisations/create', [RealisationController::class, 'create'])->name('realisations.create');
Route::post('/realisations', [RealisationController::class, 'store'])->name('realisations.store');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');

