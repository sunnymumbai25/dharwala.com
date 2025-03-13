<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DeliveryAddressController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers;

// Routes without middleware
Route::get('/', fn() => view('index'))->name('home');
Route::get('/', fn() => view('index'))->name('home');

Route::get('/product-details', fn() => view('details'))->name('product-details');

// // Routes with 'auth' and 'verified' middleware
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/cart', fn() => view('cart'))->name('cart');
    Route::get('/account', fn() => view('account'))->name('account');
    Route::get('/add-address', fn() => view('add-address'))->name('add-address');
    Route::get('/checkout-1', fn() => view('checkout-a'))->name('checkout-1');
    Route::get('/checkout-2', fn() => view('checkout-b'))->name('checkout-2');
    Route::get('/checkout-3', fn() => view('checkout-c'))->name('checkout-3');
    Route::get('/checkout-4', fn() => view('checkout-d'))->name('checkout-4');
    Route::get('/checkout-5', fn() => view('checkout-e'))->name('checkout-5');
    // Route::get('/my-address', fn() => view('my-address'))->name('my-address');
    Route::get('/my-address', [DeliveryAddressController::class, 'my_address'])->name('my-address');

    Route::get('/order-list', fn() => view('order-list'))->name('order-list');
    Route::get('/order-status', fn() => view('order-status'))->name('order-status');
    Route::get('/wishlist', fn() => view('wishlist'))->name('wishlist');
    Route::get('/user-information', fn() => view('user-information'))->name('user-information');
    Route::post('/delivery-address/save', [DeliveryAddressController::class, 'store'])->name('delivery.address.save');
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
    Route::get('/address', [DeliveryAddressController::class, 'index'])->name('address');
    Route::post('/checkout/process', [CheckoutController::class, 'checkoutProcess'])->name('checkout.process');
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
    Route::get('/order/success', [OrderController::class, 'success'])->name('order.success');
    Route::get('/checkout', [DeliveryAddressController::class, 'index'])->name('address');

});

// // Profile routes with 'auth' middleware
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
// Product Routes
Route::middleware('auth')->group(function () {
    Route::get('/home', fn() => view('dashboard'))->name('dashboard');
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index'); // View cart
    Route::post('/cart/{id}/add', [CartController::class, 'addProductToCart'])->name('cart.add');
    // Route::post('/cart/{id}/add', [CartController::class, 'add'])->name('cart.add'); // Add product to cart
    Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update'); // Update cart quantities
    // Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

    Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    // Wishlist Routes
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index'); // View wishlist
    Route::post('/wishlist/{id}/add', [WishlistController::class, 'add'])->name('wishlist.add'); // Add product to wishlist
    Route::delete('/wishlist/{id}/remove', [WishlistController::class, 'remove'])->name('wishlist.remove'); // Remove item from wishlist
    Route::post('/wishlist/{id}/move-to-cart', [WishlistController::class, 'moveToCart'])->name('wishlist.moveToCart'); // Move item to cart

    // Order and Checkout Routes
    Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout'); // View checkout page
    Route::post('/order/place', [OrderController::class, 'placeOrder'])->name('order.place'); // Place an order
    Route::get('/order/confirmation/{orderId}', [OrderController::class, 'confirmation'])->name('order.confirmation'); // Order confirmation
    Route::get('/order/list', [OrderController::class, 'list'])->name('order.list'); // Order confirmation
    Route::get('/order/status/{orderId}', [OrderController::class, 'status'])->name('order.status'); // Order confirmation
    // Route::get('/checkout', [DeliveryAddressController::class, 'index'])->name('address');
});

require __DIR__.'/auth.php';
