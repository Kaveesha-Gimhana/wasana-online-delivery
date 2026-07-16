<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 🏠 Public Routes
Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/all-products', function () {
    return view('allProduct');
})->name('products'); */
Route::get('/all-products',[ProductController::class,'showAllProducts']);

/* Route::get('/single-view', function () {
    return view('singalProdct');
})->name('single.product'); */
Route::get('/product/{product_code}', [ProductController::class, 'show']);

// LOGIN (public)
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');


// PROTECTED ADMIN AREA
Route::prefix('admin')->middleware(['admin'])->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');

    /* Route::get('/product' , [AdminController::class, 'product'])
        ->name('admin.product'); */

    Route::post('/logout', [AdminController::class, 'logout'])
        ->name('admin.logout');

    /* Route::get('/admin/product', function () {
        return view('admin.product');
    })->name('admin.product'); */

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/orders', function () {
        return view('admin.orders');
    })->name('admin.orders');

    Route::get('/admin/settings', function () {
        return view('admin.settings');
    })->name('admin.settings');

    Route::get('/admin/customers', function () {
        return view('admin.customers');
    })->name('admin.customers');

    Route::get('/admin/admin', function () {
        return view('admin.admin');
    })->name('admin.admin');

    Route::get('/controller_page/product_add', function () {
        return view('controller_page.product_add');
    })->name('controller_page.product_add');

    Route::post('/product/store', [ProductController::class, 'store'])
    ->name('product.store');

    Route::get('/products',[ProductController::class, 'index'])
    ->name('admin.product');

    Route::delete('/product/{product_code}', [ProductController::class, 'destroy'])
    ->name('product.destroy');

    Route::get('/product/edit/{product_code}', [ProductController::class, 'edit'])
    ->name('product.edit');

    Route::put('/product/update/{product_code}', [ProductController::class, 'update'])
    ->name('product.update');

});




