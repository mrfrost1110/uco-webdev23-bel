<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/products')->controller(ProductController::class)->group(function () {
    Route::get('/', 'index')->name('products.home');
    Route::get('/create', 'create')->name('products.create');
    Route::get('/edit', 'edit')->name('products.edit');
    Route::post('/store', 'store')->name('products.store');
    Route::post('/update/{id}', 'update')->name('products.update');
    Route::get('/show/{id}', 'show')->name('products.show');
});
