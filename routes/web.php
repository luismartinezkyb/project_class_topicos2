<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\JsonController;
use Illuminate\Http\Request;



Route::get('/', [SiteController::class, 'index'])->name('index');

Route::get('/shop', [SiteController::class, 'shop'])->name('shop');
Route::get('/register', [SiteController::class, 'register'])->name('register');
Route::get('/login', [SiteController::class, 'login'])->name('login');
Route::get('/product_details/{id}', [SiteController::class, 'product_details'])->name('product_details');


//ruta para mostrar productos
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
//ruta para crear productos
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

Route::post('/products', [ProductController::class, 'store'])->name('products.store');


//Ruta para eliminar productos
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');


Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');


Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');


//Commentarios
Route::post('/product_details/{id}', [CommentController::class, 'store'])->name('comments.store');

//JSON

Route::get('/json1', [JsonController::class, 'json1'])->name('json1');
Route::get('/json2', [JsonController::class, 'json2'])->name('json2');

Route::get('/json3', [JsonController::class, 'products'])->name('json.products');
Route::get('/product_list', [JsonController::class, 'product_list'])->name('product_list');

Route::get('/prueba', [HelloController::class, 'prueba'])->name('prueba');

//.pluck('name', 'id');


//Route::get('/product_details/{id}', [CommentController::class, 'index'])->name('comments.index');

