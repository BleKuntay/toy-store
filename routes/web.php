<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ToyController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Route::get('/', [ToyController::class, 'index'])->name('dashboard');
Route::get('/toys/{toy}', [ToyController::class, 'show'])->name('toys.show');

Route::get('/login', [LoginController::class, 'index'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [RegisterController::class, 'index'])->name('register.form');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware([Authenticate::class])->group(function () {
    Route::get('/', [ToyController::class, 'index'])->name('dashboard');
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::post('/cart/add/{toy}', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/remove/{cartItem}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/cart/update/{cartItem}', [CartController::class, 'update'])->name('cart.update');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices.index');
    Route::get('/invoices/{invoiceHeader}', [InvoiceController::class, 'show'])->name('invoices.show');
});


Route::middleware([Authenticate::class, AdminMiddleware::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/toys', [AdminController::class, 'toys'])->name('admin.toys.index');
    Route::get('/admin/toys/create', [AdminController::class, 'createToy'])->name('admin.toys.create');
    Route::post('/admin/toys', [AdminController::class, 'storeToy'])->name('admin.toys.store');
    Route::get('/admin/toys/{toy}/edit', [AdminController::class, 'editToy'])->name('admin.toys.edit');
    Route::put('/admin/toys/{toy}', [AdminController::class, 'updateToy'])->name('admin.toys.update');
    Route::delete('/admin/toys/{toy}', [AdminController::class, 'deleteToy'])->name('admin.toys.delete');

    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users.index');
    Route::get('/admin/users/{user}/edit', [AdminController::class, 'editUser'])->name('admin.users.edit');
    Route::put('/admin/users/{user}', [AdminController::class, 'updateUser'])->name('admin.users.update');
    Route::delete('/admin/users/{user}', [AdminController::class, 'deleteUser'])->name('admin.users.delete');
});
