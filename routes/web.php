<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiswaController;
use App\Http\Middleware\isAdmin;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EcommerceController;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/testing', function () {
    return view('layouts.admin');
});
Route::get('/latihan-js', function () {
    return view('latihan-js');
});

Route::Group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth', isAdmin::class]
], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('product', ProductController::class);
    Route::resource('category', CategoryController::class);
});

Route::get('/', [EcommerceController::class, 'index'])->name('home');
// Route::group(['prefix' => 'user', 'as' => 'user.', 'middleware' => ['auth']], function () {});

Route::group([
    'middleware' => ['auth']
], function () {
    Route::post('/order', [EcommerceController::class, 'createOrder'])->name('order.create');
    Route::post('/checkout', [EcommerceController::class, 'checkOut'])->name('checkout');
    Route::get('/my-orders', [EcommerceController::class, 'myOrders'])->name('orders.my');
    Route::get('/my-order/{id}', [EcommerceController::class, 'orderDetail'])->name('orders.detail');
    Route::post('/order/update-quantity', [EcommerceController::class, 'updateQuantity'])->name('order.update-quantity');
    Route::post('/order/remove-product/{id}', [EcommerceController::class, 'removeProduct'])->name('order.remove-product');
    Route::get('/order', [EcommerceController::class, 'orderIndex'])->name('order.index');
});
