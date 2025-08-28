<?php

use App\Http\Controllers\Agency\AgencyController;
use App\Http\Controllers\Contact\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Language\LanguageController;
use App\Http\Controllers\Portfolio\PortfolioController;
use App\Http\Controllers\Service\ServiceController;

Route::get('/', [HomeController::class, "index"])->name('home.index');
Route::get('/about', [AgencyController::class, "index"])->name('about.index');
Route::get('/services', [ServiceController::class, "index"])->name('service.index');
Route::get('/services/{slug}', [ServiceController::class, "show"])->name('service.show');
Route::get('/services/category/{category}', [ServiceController::class, "category"])->name('service.category');
Route::get('/portfolio', [PortfolioController::class, "index"])->name('portofolio.index');
Route::get('/portfolio/{slug}', [PortfolioController::class, "show"])->name('portfolio.show');
Route::get('/contact', [ContactController::class, "index"])->name('contact.index');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::get('locale/{lang}', [LanguageController::class, "store"])->name('locale.store');
