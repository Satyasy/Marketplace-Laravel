<!-- resources/views/components/navbar.blade.php -->
<nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <span class="text-primary font-bold text-2xl">Mini<span class="text-secondary">Market</span></span>
                </a>
            </div>
            
            <!-- Search Bar -->
            <div class="hidden md:block flex-grow mx-10">
                <form action="/search" method="GET" class="relative">
                    <input type="text" name="q" placeholder="Cari produk..." class="w-full px-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
                    <button type="submit" class="absolute right-0 top-0 h-full px-4 text-gray-500 hover:text-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            
            <!-- Navigation Links -->
            <div class="flex items-center space-x-4">
                <a href="/cart" class="text-gray-700 hover:text-primary relative">
                    <i class="fas fa-shopping-cart text-xl"></i>
                    <span class="absolute -top-2 -right-2 bg-accent text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                </a>
                <a href="/account" class="text-gray-700 hover:text-primary">
                    <i class="fas fa-user text-xl"></i>
                </a>
                <button class="md:hidden text-gray-700 hover:text-primary" id="mobile-menu-button">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Search (visible only on mobile) -->
        <div class="md:hidden pb-4">
            <form action="/search" method="GET" class="relative">
                <input type="text" name="q" placeholder="Cari produk..." class="w-full px-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
                <button type="submit" class="absolute right-0 top-0 h-full px-4 text-gray-500 hover:text-primary">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>
    
    <!-- Category Navigation -->
    <div class="bg-light">
        <div class="container mx-auto px-4">
            <div class="flex overflow-x-auto py-2 space-x-4 no-scrollbar">
                <a href="/category/makanan" class="whitespace-nowrap px-4 py-2 rounded-full hover:bg-primary hover:text-white transition-all">Makanan</a>
                <a href="/category/minuman" class="whitespace-nowrap px-4 py-2 rounded-full hover:bg-primary hover:text-white transition-all">Minuman</a>
                <a href="/category/sayuran" class="whitespace-nowrap px-4 py-2 rounded-full hover:bg-primary hover:text-white transition-all">Sayuran</a>
                <a href="/category/buah" class="whitespace-nowrap px-4 py-2 rounded-full hover:bg-primary hover:text-white transition-all">Buah-buahan</a>
                <a href="/category/snack" class="whitespace-nowrap px-4 py-2 rounded-full hover:bg-primary hover:text-white transition-all">Snack</a>
                <a href="/category/daging" class="whitespace-nowrap px-4 py-2 rounded-full hover:bg-primary hover:text-white transition-all">Daging</a>
                <a href="/category/seafood" class="whitespace-nowrap px-4 py-2 rounded-full hover:bg-primary hover:text-white transition-all">Seafood</a>
                <a href="/category/bumbu" class="whitespace-nowrap px-4 py-2 rounded-full hover:bg-primary hover:text-white transition-all">Bumbu Dapur</a>
            </div>
        </div>
    </div>
</nav>
