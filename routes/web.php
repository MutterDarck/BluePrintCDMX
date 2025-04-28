<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/servicios', [ServiceController::class, 'index'])->name('services');
Route::get('/servicios/{slug}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/nosotros', [AboutController::class, 'index'])->name('about');
Route::get('/contacto', [ContactController::class, 'index'])->name('contact');
Route::post('/contacto', [ContactController::class, 'submit'])->name('contact.submit');