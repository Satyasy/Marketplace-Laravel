<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/category/{category}', function ($category) {
    // Logika untuk menampilkan produk berdasarkan kategori
    return view('category', ['category' => $category]);
});

Route::get('/search', function () {
    // Logika pencarian produk
    $query = request('query');
    return view('search', ['query' => $query]);
});

// Tambahkan route lain sesuai kebutuhan