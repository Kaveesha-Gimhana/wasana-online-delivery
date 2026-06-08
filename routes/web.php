<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 🏠 Public Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/all-products', function () {
    return view('allProduct');
})->name('products');

Route::get('/single-view', function () {
    return view('singalProdct');
})->name('single.product');


// 🔐 ADMIN AUTH ROUTES (NO LOGIN = ALLOWED ONLY HERE)
/* Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');


// 🔒 PROTECTED ADMIN ROUTES (IMPORTANT FIX)
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');

    Route::post('/logout', [AdminController::class, 'logout'])
        ->name('admin.logout');

}); */

// LOGIN (public)
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');


// PROTECTED ADMIN AREA
Route::prefix('admin')->middleware(['admin'])->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');

    Route::post('/logout', [AdminController::class, 'logout'])
        ->name('admin.logout');
});