<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/produk', function () {
    return view('produk');
})->name('produk');

Route::get('/kategori', function () {
    return view('kategori');
})->name('kategori');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/keranjang', function () {
    return view('keranjang');
})->name('keranjang');
