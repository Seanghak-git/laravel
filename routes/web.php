<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('', function () {
    return view('welcome');
});

Route::get('layout/app' , function(){
    return view('layout.app');
});

Route::get('/auth/register',[AuthController::class, 'registerForm'])->name('auth.registerform');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/auth/login', [AuthController::class, 'loginForm'])->name('auth.login');

// Route::get('category/index' , function(){
//     return view('category.index');
// });

// Route::get('category/create' , function(){
//     return view('category.create');
// });

// Route::get('category/edit' , function(){
//     return view('category.edit');
// });

Route::get('/category/index',[CategoryController::class, 'index'])->name('category.index');

Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');

Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');

Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');

Route::get('/category/{category}/update', [CategoryController::class, 'update'])->name('category.update');

Route::get('/category/{category}/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');

//product route
Route::get('/product/index',[ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store',[ProductController::class, 'store'])->name('product.store');
Route::get('/product/{product}/edit',[ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}/update',[ProductController::class, 'update'])->name('product.update');
Route::get('/product/{product}/destroy',[ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/user/index', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');