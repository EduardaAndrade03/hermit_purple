<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('hermit-purple')->group(function () {          // "/hermit-purple/"

    Route::prefix('admin')->name('admin.')->group(function () {       // "/hermit-purple/admin"

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

        Route::resource('/products', ProductController::class);
        Route::resource('/clients', ClientController::class);
        Route::resource('/sales', SaleController::class);
    });
});
