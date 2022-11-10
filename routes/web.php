<?php

use App\Http\Controllers\Users\ManagerController;
use App\Http\Controllers\Users\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'verify.customer'])
    ->prefix('customer')
    ->controller(CustomerController::class)->group(function () {
        Route::get('dashboard', 'index')->name('customer.dashboard');
    });

Route::middleware(['auth', 'verify.manager'])
    ->prefix('manager')
    ->controller(ManagerController::class)->group(function () {
        Route::get('dashboard', 'index')->name('manager.dashboard');
    });
