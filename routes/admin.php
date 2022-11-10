<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::middleware('verify.admin')
    ->controller(AdminController::class)->group(function () {
        Route::get('dashboard', 'index')->name('admin.dashboard');
        Route::get('create-user', 'create')->name('admin.create-user');
        Route::post('create-user', 'store');
        Route::get('view-users', 'show')->name('admin.view-users');
        Route::get('edit-user/{uuid}', 'edit')->name('admin.edit-user');
        Route::patch('edit-user/{uuid}', 'update');
        Route::get('settings', 'settings')->name('admin.settings');
        Route::post('settings', 'configure');
    });
