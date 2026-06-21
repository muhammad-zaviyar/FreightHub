<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\AirwaybillController;

// ---------------------------------------------------------------
// GUEST routes (unauthenticated only)
// ---------------------------------------------------------------
Route::middleware('guest')->group(function () {
    Route::get('/',     [AuthController::class, 'showLogin'])->name('login');
    Route::get('login', [AuthController::class, 'showLogin']);
    Route::post('login',[AuthController::class, 'login'])->name('login.post');
});

// ---------------------------------------------------------------
// AUTHENTICATED routes
// ---------------------------------------------------------------
Route::middleware('auth')->group(function () {

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    // Dashboard (all authenticated users)
    Route::get('dashboard', [DashboardsController::class, 'index'])->name('dashboard');

    // AIR WAY BILL — super_admin | customer_support | branch
    Route::middleware('role:super_admin|customer_support|branch')->group(function () {
        Route::get('airwaybill/create', [AirwaybillController::class, 'create'])->name('airwaybill.create');
    });

    // ACCOUNTS — super_admin | accounts | branch
    // (views will be added later; group is ready)
    Route::middleware('role:super_admin|accounts|branch')->group(function () {
        // Route::get('accounts', ...)
        // Route::get('invoices', ...)
    });

    // DELIVERY — super_admin | delivery_partner | branch
    Route::middleware('role:super_admin|delivery_partner|branch')->group(function () {
        // Route::get('delivery/upload', ...)
    });

    // COMPLAINTS — super_admin | customer_support | delivery_partner | accounts | branch
    Route::middleware('role:super_admin|customer_support|delivery_partner|accounts|branch')->group(function () {
        // Route::get('complaints', ...)
    });

    // SUPER ADMIN only
    Route::middleware('role:super_admin')->group(function () {
        // Route::get('users', ...)
    });

});
