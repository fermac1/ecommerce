<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\WishlistController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('login', [AuthController::class, 'createLogin']);
Route::post('login-account', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'createRegister']);
Route::post('register-account', [AuthController::class, 'register']);

Route::get('/', [ProductController::class, 'latest']);
// Route::get('product', [ProductController::class, 'index']);
Route::get('product/{slug}', [ProductController::class, 'show']);
// Route::get('index/{id}', [CategoryController::class, 'show']);
Route::get('view-category/{id}', [ProductController::class, 'viewCategory']);
Route::post('add-to-cart', [CartController::class, 'addToCart']);
Route::get('cart', [CartController::class, 'index']);
Route::patch('update-cart', [CartController::class, 'updateCart']);
// Route::put('update-cart', [CartController::class, 'updateCart']);
Route::delete('remove-from-cart', [CartController::class, 'removeCart']);


    Route::get('checkout', [CheckoutController::class, 'index']);
    Route::post('place-order', [CheckoutController::class, 'placeOrder']);

    Route::get('order_info/{id}', [CheckoutController::class, 'showOrder']);
    Route::get('order_history', [CheckoutController::class, 'listOrder']);

    Route::get('wishlist', [WishlistController::class, 'index']);
    Route::post('add-to-wishlist', [WishlistController::class, 'add']);
    Route::delete('remove-wishlist', [WishlistController::class, 'remove']);
