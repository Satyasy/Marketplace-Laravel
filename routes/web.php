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

use App\Http\Controllers\CategoryController;

Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');


// Tambahkan route lain sesuai kebutuhan