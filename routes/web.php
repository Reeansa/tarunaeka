<?php

use App\Http\Controllers\Administrator\ClientController;
use App\Http\Controllers\Administrator\DashboardController;
use App\Http\Controllers\Administrator\Auth\LoginController;
use App\Http\Controllers\Administrator\RoleController;
use App\Http\Controllers\Administrator\ServicesController;
use App\Http\Controllers\Administrator\SliderController;
use App\Http\Controllers\Administrator\UserController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/show', [FrontendController::class, 'show'])->name('show');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');

Route::prefix('administrator')->group(function () {
    route::resource('dashboard', DashboardController::class);
    route::resource('slider', SliderController::class);
    route::resource('client', ClientController::class);
    route::resource('service', ServicesController::class);
    route::resource('user', UserController::class);
    route::resource('role', RoleController::class);
});
