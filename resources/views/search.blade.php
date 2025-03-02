@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-primary mb-6">Hasil Pencarian: "{{ $query }}"</h1>
        
        <!-- Filter dan Sorting -->
        <div class="bg-white p-4 rounded-lg shadow-md mb-6">
            <div class="flex flex-wrap items-center justify-between">
                <div class="mb-2 md:mb-0">
                    <span class="text-dark font-medium">Filter:</span>
                    <select class="ml-2 p-2 border rounded-md">
                        <option>Semua</option>
                        <option>Harga Terendah</option>
                        <option>Harga Tertinggi</option>
                        <option>Terbaru</option>
                        <option>Terlaris</option>
                    </select>
                </div>
                <div>
                    <span class="text-dark font-medium">Urutkan:</span>
                    <select class="ml-2 p-2 border rounded-md">
                        <option>Terbaru</option>
                        <option>Harga: Rendah ke Tinggi</option>
                        <option>Harga: Tinggi ke Rendah</option>
                        <option>Nama: A-Z</option>
                        <option>Nama: Z-A</option>
                    </select>
                </div>
            </div>
        </div>
        
        <!-- Produk -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @for ($i = 1; $i <= 8; $i++)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <img src="https://via.placeholder.com/300x200" alt="Product" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-dark mb-1">Produk Hasil Pencarian {{ $i }}</h3>
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
        
        <!-- Pagination -->
        <div class="mt-8 flex justify-center">
            <nav class="inline-flex rounded-md shadow">
                <a href="#" class="px-3 py-2 bg-white border border-gray-300 text-dark rounded-l-md hover:bg-gray-100">
                    &laquo; Prev
                </a>
                <a href="#" class="px-3 py-2 bg-primary text-light border border-primary">
                    1
                </a>
                <a href="#" class="px-3 py-2 bg-white border border-gray-300 text-dark hover:bg-gray-100">
                    2
                </a>
                <a href="#" class="px-3 py-2 bg-white border border-gray-300 text-dark hover:bg-gray-100">
                    3
                </a>
                <a href="#" class="px-3 py-2 bg-white border border-gray-300 text-dark rounded-r-md hover:bg-gray-100">
                    Next &raquo;
                </a>
            </nav>
        </div>
    </div>
@endsection
