<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/tailwind-test', function () {
    return view('tailwind-test');
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

use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);



// Tambahkan route lain sesuai kebutuhan