<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;


//    ----------- FrontEnd ------------    //
//    ----------- Ecommerce Controller ------------    //

Route::get('/', [EcommerceController::class, 'index'])->name('home');
Route::get('/cart', [EcommerceController::class, 'cart'])->name('cart');
Route::get('/checkout', [EcommerceController::class, 'checkout'])->name('checkout');
Route::get('/shop', [EcommerceController::class, 'shop'])->name('shop');
Route::get('/details-product/{id}', [EcommerceController::class, 'detailsProduct'])->name('details.product');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    //    ----------- BackEnd ------------    //
    //    ----------- Admin Controller ------------    //

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    //    ----------- Product Controller ------------    //

    Route::get('/add-product', [ProductController::class, 'addProduct'])->name('add.product');
    Route::get('/manage-product', [ProductController::class, 'manageProduct'])->name('manage.product');
    Route::post('/new-product', [ProductController::class, 'saveProduct'])->name('new.product');
    Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('edit.product');
    Route::post('/update-product', [ProductController::class, 'updateProduct'])->name('update.product');
    Route::post('/delete-product', [ProductController::class, 'deleteProduct'])->name('delete.product');
    Route::get('/status/{id}', [ProductController::class, 'status'])->name('status');

    //    ----------- User Controller ------------    //
    Route::get('/manage-user', [UserController::class, 'manageUser'])->name('manage.user');
    Route::get('/edit-user/{id}', [UserController::class, 'editUser'])->name('edit.user');
    Route::post('/update-user', [UserController::class, 'updateUser'])->name('update.user');
    Route::post('/delete-user', [UserController::class, 'deleteUser'])->name('delete.user');
});