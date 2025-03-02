@extends('layouts.app')

@section('content')
    <div class="mb-6">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="/" class="text-gray-700 hover:text-primary">
                        <i class="fas fa-home mr-2"></i>
                        Beranda
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2 text-xs"></i>
                        <span class="text-gray-500">Kategori</span>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2 text-xs"></i>
                        <span class="text-primary font-medium">{{ ucfirst($category) }}</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    <div class="flex flex-col md:flex-row gap-6">
        <!-- Sidebar Filters -->
        <div class="w-full md:w-1/4 bg-white rounded-xl p-4 shadow-sm h-fit">
            <h3 class="font-semibold text-lg mb-4">Filter</h3>
            
            <!-- Price Range -->
            <div class="mb-6">
                <h4 class="font-medium mb-2">Rentang Harga</h4>
                <div class="space-y-2">
                    <div class="flex items-center">
                        <input type="checkbox" id="price-1" class="form-checkbox mr-2">
                        <label for="price-1">Dibawah Rp 25.000</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="price-2" class="form-checkbox mr-2">
                        <label for="price-2">Rp 25.000 - Rp 50.000</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="price-3" class="form-checkbox mr-2">
                        <label for="price-3">Rp 50.000 - Rp 100.000</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="price-4" class="form-checkbox mr-2">
                        <label for="price-4">Diatas Rp 100.000</label>
                    </div>
                </div>
            </div>
            
            <!-- Brands -->
            <div class="mb-6">
                <h4 class="font-medium mb-2">Merek</h4>
                <div class="space-y-2">
                    <div class="flex items-center">
                        <input type="checkbox" id="brand-1" class="form-checkbox mr-2">
                        <label for="brand-1">Fresh Harvest</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="brand-2" class="form-checkbox mr-2">
                        <label for="brand-2">Nature's Best</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="brand-3" class="form-checkbox mr-2">
                        <label for="brand-3">Organica</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="brand-4" class="form-checkbox mr-2">
                        <label for="brand-4">Green Garden</label>
                    </div>
                </div>
            </div>
            
            <!-- Rating -->
            <div>
                <h4 class="font-medium mb-2">Rating</h4>
                <div class="space-y-2">
                    <div class="flex items-center">
                        <input type="checkbox" id="rating-5" class="form-checkbox mr-2">
                        <label for="rating-5" class="flex">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="rating-4" class="form-checkbox mr-2">
                        <label for="rating-4" class="flex">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="text-gray-300">
                                <i class="fas fa-star"></i>
                            </div>
                        </label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="rating-3" class="form-checkbox mr-2">
                        <label for="rating-3" class="flex">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="text-gray-300">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            
            <button class="btn-primary w-full mt-6">Terapkan Filter</button>
        </div>
        
        <!-- Product Listing -->
        <div class="w-full md:w-3/4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">{{ ucfirst($category) }}</h2>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600">Urutkan:</span>
                    <select class="form-input py-2 text-sm">
                        <option>Terbaru</option>
                        <option>Harga: Rendah ke Tinggi</option>
                        <option>Harga: Tinggi ke Rendah</option>
                        <option>Rating Tertinggi</option>
                    </select>
                </div>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Dynamic product listing would go here -->
                @for ($i = 1; $i <= 9; $i++)
                <div class="card group">
                    <div class="relative overflow-hidden">
                        <img src="https://source.unsplash.com/random/300x200?{{ $category }}&sig={{ $i }}" 
                             alt="Product {{ $i }}" 
                             class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                        @if($i % 3 == 0)
                        <div class="badge badge-discount">
                            -{{ rand(10, 30) }}%
                        </div>
                        @endif
                    </div>
                    <div class="p-4">
                        <p class="text-xs text-secondary font-medium mb-1">{{ ucfirst($category) }}</p>
                        <h3 class="font-semibold text-dark mb-1 text-lg">Product {{ $i }}</h3>
                        <div class="flex text-yellow-400 text-sm mb-2">
                            @for ($j = 1; $j <= 5; $j++)
                                @if($j <= rand(3, 5))
                                    <i class="fas fa-star"></i>
                                @else
                                    <i class="far fa-star"></i>
                                @endif
                            @endfor
                            <span class="text-gray-400 ml-1">({{ rand(10, 50) }})</span>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <div>
                                @if($i % 3 == 0)
                                    <span class="font-bold text-primary text-lg">Rp {{ number_format(rand(20000, 50000), 0, ',', '.') }}</span>
                                    <span class="text-gray-400 text-xs line-through ml-1">Rp {{ number_format(rand(60000, 80000), 0, ',', '.') }}</span>
                                @else
                                    <span class="font-bold text-primary text-lg">Rp {{ number_format(rand(20000, 80000), 0, ',', '.') }}</span>
                                @endif
                            </div>
                            <button class="bg-primary text-light p-2 rounded-full hover:bg-opacity-90 transition-all add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            
            <!-- Pagination -->
            <div class="mt-8 flex justify-center">
                <nav class="flex items-center">
                    <a href="#" class="px-3 py-2 rounded-l-lg border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-primary text-white">1</a>
                    <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-700 hover:bg-gray-50">2</a>
                    <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-700 hover:bg-gray-50">3</a>
                    <a href="#" class="px-3 py-2 rounded-r-lg border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </nav>
            </div>
        </div>
    </div>
@endsection
