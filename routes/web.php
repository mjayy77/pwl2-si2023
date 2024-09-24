<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//route resources for products
Route::resource('/products', \App\Http\Controllers\ProductController::class);
Route::resource('/suppliers', \App\Http\Controllers\SupplierController::class);
Route::resource('/transaksipenjualan', \App\Http\Controllers\TransaksiPenjualanController::class);
