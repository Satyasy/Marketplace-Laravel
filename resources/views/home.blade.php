@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="relative overflow-hidden rounded-2xl mb-12">
        <!-- Hero Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1604719312566-8912e9227c6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" 
                 alt="Fresh groceries" 
                 class="w-full h-full object-cover brightness-50">
        </div>
        
        <!-- Hero Content -->
        <div class="relative z-10 py-16 px-6 md:py-24 md:px-12">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white">Selamat Datang di MiniMarket Online</h1>
                <p class="text-xl mb-8 text-gray-100">Belanja kebutuhan sehari-hari dengan mudah dan cepat</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/products" class="btn-primary text-center">
                        Mulai Belanja
                    </a>
                    <a href="/promos" class="btn-secondary text-center">
                        Lihat Promo
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Featured Categories -->
    <div class="mb-12">
        <h2 class="section-title pb-2">Kategori Populer</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <a href="/category/makanan" class="category-card group">
                <div class="bg-primary/10 text-primary rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 group-hover:bg-primary group-hover:text-white transition-all">
                    <i class="fas fa-utensils text-2xl"></i>
                </div>
                <h3 class="font-semibold text-primary text-lg">Makanan</h3>
            </a>
            <a href="/category/minuman" class="category-card group">
                <div class="bg-primary/10 text-primary rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 group-hover:bg-primary group-hover:text-white transition-all">
                    <i class="fas fa-coffee text-2xl"></i>
                </div>
                <h3 class="font-semibold text-primary text-lg">Minuman</h3>
            </a>
            <a href="/category/sayuran" class="category-card group">
                <div class="bg-primary/10 text-primary rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 group-hover:bg-primary group-hover:text-white transition-all">
                    <i class="fas fa-carrot text-2xl"></i>
                </div>
                <h3 class="font-semibold text-primary text-lg">Sayuran</h3>
            </a>
            <a href="/category/snack" class="category-card group">
                <div class="bg-primary/10 text-primary rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 group-hover:bg-primary group-hover:text-white transition-all">
                    <i class="fas fa-cookie text-2xl"></i>
                </div>
                <h3 class="font-semibold text-primary text-lg">Snack</h3>
            </a>
        </div>
    </div>
    
    <!-- Featured Products -->
    <div class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="section-title pb-2">Produk Unggulan</h2>
            <a href="/products" class="text-primary hover:text-secondary font-medium flex items-center">
                Lihat Semua
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <!-- Product Cards with Real Images -->
            <div class="card group">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                         alt="Salad Segar" 
                         class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute top-2 right-2 bg-accent text-white text-xs font-bold px-2 py-1 rounded-full">
                        -15%
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-xs text-secondary font-medium mb-1">Sayuran</p>
                    <h3 class="font-semibold text-dark mb-1 text-lg">Salad Segar</h3>
                    <div class="flex justify-between items-center mt-2">
                        <div>
                            <span class="font-bold text-primary text-lg">Rp 25.000</span>
                            <span class="text-gray-400 text-xs line-through ml-1">Rp 29.500</span>
                        </div>
                        <button class="bg-primary text-light p-2 rounded-full hover:bg-opacity-90 transition-all">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="card group">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                         alt="Jus Buah" 
                         class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-4">
                    <p class="text-xs text-secondary font-medium mb-1">Minuman</p>
                    <h3 class="font-semibold text-dark mb-1 text-lg">Jus Buah Segar</h3>
                    <div class="flex justify-between items-center mt-2">
                        <div>
                            <span class="font-bold text-primary text-lg">Rp 18.000</span>
                        </div>
                        <button class="bg-primary text-light p-2 rounded-full hover:bg-opacity-90 transition-all">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="card group">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                         alt="Pancake" 
                         class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute top-2 right-2 bg-accent text-white text-xs font-bold px-2 py-1 rounded-full">
                        -20%
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-xs text-secondary font-medium mb-1">Makanan</p>
                    <h3 class="font-semibold text-dark mb-1 text-lg">Pancake Madu</h3>
                    <div class="flex justify-between items-center mt-2">
                        <div>
                            <span class="font-bold text-primary text-lg">Rp 32.000</span>
                            <span class="text-gray-400 text-xs line-through ml-1">Rp 40.000</span>
                        </div>
                        <button class="bg-primary text-light p-2 rounded-full hover:bg-opacity-90 transition-all">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="card group">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1599490659213-e2b9527bd087?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                         alt="Cookies" 
                         class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-4">
                    <p class="text-xs text-secondary font-medium mb-1">Snack</p>
                    <h3 class="font-semibold text-dark mb-1 text-lg">Cookies Coklat</h3>
                    <div class="flex justify-between items-center mt-2">
                        <div>
                            <span class="font-bold text-primary text-lg">Rp 15.000</span>
                        </div>
                        <button class="bg-primary text-light p-2 rounded-full hover:bg-opacity-90 transition-all">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Promo Banner -->
    <div class="rounded-2xl overflow-hidden mb-12 relative">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1607349913338-fca6f7fc42d0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" 
                 alt="Promo background" 
                 class="w-full h-full object-cover brightness-50">
        </div>
        <div class="relative z-10 p-8 md:p-12">
            <div class="md:flex items-center justify-between">
                <div class="mb-6 md:mb-0 md:w-2/3">
                    <h2 class="text-3xl font-bold mb-3 text-white">Diskon Spesial Minggu Ini!</h2>
                    <p class="mb-6 text-gray-100 text-lg">Dapatkan potongan harga hingga 50% untuk berbagai produk pilihan</p>
                    <a href="/promos" class="btn-secondary inline-block">
                        Lihat Promo
                    </a>
                </div>
                <div class="text-6xl font-bold text-white bg-accent/80 p-6 rounded-full flex items-center justify-center h-40 w-40 rotate-12 shadow-lg">
                    50% OFF
                </div>
            </div>
        </div>
    </div>
    
    <!-- Features Section -->
    <div class="mb-12">
        <h2 class="section-title pb-2">Mengapa Belanja di MiniMarket Online</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 text-center">
                <div class="bg-primary/10 text-primary rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-truck text-2xl"></i>
                </div>
                <h3 class="font-semibold text-dark text-lg mb-2">Pengiriman Cepat</h3>
                <p class="text-gray-600">Pesanan Anda akan dikirim dalam waktu 1-2 jam ke alamat tujuan</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 text-center">
                <div class="bg-primary/10 text-primary rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shield-alt text-2xl"></i>
                </div>
                <h3 class="font-semibold text-dark text-lg mb-2">Kualitas Terjamin</h3>
                <p class="text-gray-600">Semua produk kami dipilih dengan teliti untuk memastikan kualitas terbaik</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 text-center">
                <div class="bg-primary/10 text-primary rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-wallet text-2xl"></i>
                </div>
                <h3 class="font-semibold text-dark text-lg mb-2">Pembayaran Mudah</h3>
                <p class="text-gray-600">Berbagai metode pembayaran tersedia untuk kenyamanan Anda</p>
            </div>
        </div>
    </div>
    
    <!-- Newsletter Section -->
    <div class="bg-light rounded-xl p-8 mb-12">
        <div class="md:flex items-center justify-between">
            <div class="mb-6 md:mb-0 md:w-1/2">
                <h2 class="text-2xl font-bold text-primary mb-2">Dapatkan Info Promo Terbaru</h2>
                <p class="text-gray-700">Berlangganan newsletter kami untuk mendapatkan informasi tentang promo dan produk baru</p>
            </div>
            <div class="md:w-1/2">
                <form class="flex flex-col sm:flex-row gap-3">
                    <input type="email" placeholder="Alamat email Anda" class="flex-grow px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
                    <button type="submit" class="btn-primary whitespace-nowrap">
                        Berlangganan
                    </button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Testimonials -->
    <div class="mb-12">
        <h2 class="section-title pb-2">Apa Kata Pelanggan Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div class="flex items-center mb-4">
                    <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Customer" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold">Siti Rahayu</h4>
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Belanja di MiniMarket Online sangat praktis. Produk selalu segar dan pengiriman cepat. Sangat membantu untuk ibu rumah tangga seperti saya."</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div class="flex items-center mb-4">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Customer" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold">Budi Santoso</h4>
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Harga produk sangat bersaing dan sering ada promo menarik. Aplikasinya juga mudah digunakan. Rekomendasi untuk yang sibuk bekerja."</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div class="flex items-center mb-4">
                    <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Customer" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold">Dewi Lestari</h4>
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Saya sangat puas dengan layanan customer service yang responsif. Ketika ada masalah dengan pesanan, langsung ditangani dengan baik."</p>
            </div>
        </div>
    </div>
    
    <!-- Mobile App Promo -->
    <div class="bg-primary rounded-xl overflow-hidden mb-12">
        <div class="md:flex items-center">
            <div class="p-8 md:w-1/2">
                <h2 class="text-2xl font-bold text-white mb-3">Download Aplikasi MiniMarket</h2>
                <p class="text-gray-100 mb-6">Nikmati pengalaman belanja yang lebih baik dengan aplikasi mobile kami. Dapatkan notifikasi promo eksklusif dan lacak pesanan dengan mudah.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#" class="bg-black text-white px-4 py-2 rounded-lg flex items-center justify-center hover:bg-opacity-80 transition-all">
                        <i class="fab fa-apple text-2xl mr-2"></i>
                        <div>
                            <div class="text-xs">Download on the</div>
                            <div class="font-semibold">App Store</div>
                        </div>
                    </a>
                    <a href="#" class="bg-black text-white px-4 py-2 rounded-lg flex items-center justify-center hover:bg-opacity-80 transition-all">
                        <i class="fab fa-google-play text-2xl mr-2"></i>
                        <div>
                            <div class="text-xs">GET IT ON</div>
                            <div class="font-semibold">Google Play</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 p-8 flex justify-center">
                <img src="https://cdn.pixabay.com/photo/2017/02/04/12/25/man-2037255_960_720.png" alt="Mobile App" class="max-h-80">
            </div>
        </div>
    </div>
@endsection

