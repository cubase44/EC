<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FrontController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// user関連のルーティング
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

//  product関連のルーティング
Route::get('/product', [ProductController::class, 'index']);
Route::get('/produc/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/produc/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/produc/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/produc/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('/produc/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');

//  contact関連のルーティング
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/contact/edit/{id}', [ContactController::class, 'edit'])->name('contact.edit');
Route::post('/contact/update/{id}', [ContactController::class, 'update'])->name('contact.update');
Route::get('/contact/delete/{id}', [ContactController::class, 'delete'])->name('contact.delete');

//  order関連のルーティング
Route::get('/order', [OrderController::class, 'index']);
Route::get('/order/show/{id}', [OrderController::class, 'show'])->name('order.show');
Route::get('/order/delete/{id}', [OrderController::class, 'delete'])->name('order.delete');

//  front関連のルーティング
Route::get('/front', [FrontController::class, 'index']);
