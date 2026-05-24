<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\SaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('hermit-purple')->group(function () { // "/hermit-purple/"

    Route::prefix('admin')->group(function () { // "/hermit-purple/admin"
        Route::get('/dashboard', function () { // "/hermit-purple/admin/dashboard"
            return view();
        });
        Route::resource('/products', ProductController::class);
        Route::resource('/clients', ClientController::class);
        Route::resource('/sale', SaleController::class);
    });
});
