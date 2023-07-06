<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;

//products
Route::get('/',[ProjectController::class,'index'])->name('home');

Route::get('/single_product/{id}',[ProjectController::class,'single_product'])->name('single_product');
Route::get('/single_product', function () {
    return redirect('/');
});


Route::get('/products',[ProjectController::class,'products'])->name('products');

Route::get('/about', function () {
    return view('about');
});

//cart
Route::get('/cart',[CartController::class,'cart'])->name('cart');
Route::get('/pricing',[CartController::class,'pricing'])->name('pricing');

Route::get('/aboutshop',[CartController::class,'aboutshop'])->name('aboutshop');

Route::post('/add_to_cart',[CartController::class,'add_to_cart'])->name('add_to_cart');
Route::get('/add_to_cart', function () {
    return redirect('/');
});

Route::post('/remove_from_cart',[CartController::class,'remove_from_cart'])->name('remove_from_cart');
Route::get('/remove_from_cart', function () {
    return redirect('/');
});

Route::post('/edit_product_quantity',[CartController::class,'edit_product_quantity'])->name('edit_product_quantity');
Route::get('/edit_product_quantity', function () {
    return redirect('/');
});

Route::get('/checkout',[CartController::class,'checkout'])->name('checkout');
Route::post('/place_order',[CartController::class,'place_order'])->name('place_order');

Route::get('/payment',[PaymentController::class,'payment'])->name('payment');

Route::get('/verify_payment/{transaction_id}',[PaymentController::class,'verify_payment'])->name('verify_payment');
Route::get('/complete_payment',[PaymentController::class,'complete_payment'])->name('complete_payment');

Route::get('/thank_you',[PaymentController::class,'thank_you'])->name('thank_you');











Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
