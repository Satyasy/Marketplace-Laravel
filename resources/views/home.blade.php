@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="bg-primary text-light rounded-lg p-6 mb-8">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">Selamat Datang di MiniMarket Online</h1>
            <p class="text-lg mb-6">Belanja kebutuhan sehari-hari dengan mudah dan cepat</p>
            <a href="/products" class="inline-block bg-secondary hover:bg-opacity-90 text-light font-bold py-2 px-6 rounded-full">
                Mulai Belanja
            </a>
        </div>
    </div>
    
    <!-- Featured Categories -->
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-dark mb-4">Kategori Populer</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <a href="/category/makanan" class="bg-light border border-secondary rounded-lg p-4 text-center hover:shadow-md transition">
                <div class="bg-secondary text-light rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-utensils text-2xl"></i>
                </div>
                <h3 class="font-semibold text-primary">Makanan</h3>
            </a>
            <a href="/category/minuman" class="bg-light border border-secondary rounded-lg p-4 text-center hover:shadow-md transition">
                <div class="bg-secondary text-light rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-coffee text-2xl"></i>
                </div>
                <h3 class="font-semibold text-primary">Minuman</h3>
            </a>
            <a href="/category/sayuran" class="bg-light border border-secondary rounded-lg p-4 text-center hover:shadow-md transition">
                <div class="bg-secondary text-light rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-carrot text-2xl"></i>
                </div>
                <h3 class="font-semibold text-primary">Sayuran</h3>
            </a>
            <a href="/category/snack" class="bg-light border border-secondary rounded-lg p-4 text-center hover:shadow-md transition">
                <div class="bg-secondary text-light rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-cookie text-2xl"></i>
                </div>
                <h3 class="font-semibold text-primary">Snack</h3>
            </a>
        </div>
    </div>
    
    <!-- Featured Products -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold text-dark">Produk Unggulan</h2>
            <a href="/products" class="text-primary hover:text-secondary">Lihat Semua</a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <!-- Product Card (Contoh) -->
            @for ($i = 1; $i <= 8; $i++)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <img src="https://via.placeholder.com/300x200" alt="Product" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-dark mb-1">Produk {{ $i }}</h3>
                    <p class="text-gray-600 text-sm mb-2">Kategori</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-primary">Rp {{ number_format(rand(5000, 50000), 0, ',', '.') }}</span>
                        <button class="bg-secondary text-light p-2 rounded-full hover:bg-opacity-90">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
    
    <!-- Promo Banner -->
    <div class="bg-secondary text-light rounded-lg p-6 mb-8">
        <div class="md:flex items-center justify-between">
            <div class="mb-4 md:mb-0">
                <h2 class="text-2xl font-bold mb-2">Diskon Spesial Minggu Ini!</h2>
                <p class="mb-4">Dapatkan potongan harga hingga 50% untuk berbagai produk pilihan</p>
                <a href="/promos" class="inline-block bg-light text-primary font-bold py-2 px-6 rounded-full hover:bg-opacity-90">
                    Lihat Promo
                </a>
            </div>
            <div class="text-5xl font-bold">
                50% OFF
            </div>
        </div>
    </div>
@endsection
