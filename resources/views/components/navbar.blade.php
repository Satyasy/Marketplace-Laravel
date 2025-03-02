<nav class="bg-primary text-light shadow-md">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <!-- Logo dan Nama -->
            <div class="flex items-center space-x-2">
                <a href="/" class="text-2xl font-bold">MiniMarket</a>
            </div>
            
            <!-- Search Bar -->
            <div class="hidden md:block flex-grow mx-10">
                <form action="/search" method="GET" class="flex">
                    <input type="text" name="query" placeholder="Cari produk..." 
                           class="w-full px-4 py-2 rounded-l-lg text-dark focus:outline-none">
                    <button type="submit" class="bg-secondary px-4 py-2 rounded-r-lg hover:bg-opacity-90">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            
            <!-- Menu -->
            <div class="flex items-center space-x-6">
                <a href="/cart" class="hover:text-secondary">
                    <i class="fas fa-shopping-cart text-xl"></i>
                </a>
                <a href="/profile" class="hover:text-secondary">
                    <i class="fas fa-user text-xl"></i>
                </a>
                <div class="relative group">
                    <button class="hover:text-secondary">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 hidden group-hover:block">
                        <a href="/category/makanan" class="block px-4 py-2 text-dark hover:bg-secondary hover:text-light">Makanan</a>
                        <a href="/category/minuman" class="block px-4 py-2 text-dark hover:bg-secondary hover:text-light">Minuman</a>
                        <a href="/category/sayuran" class="block px-4 py-2 text-dark hover:bg-secondary hover:text-light">Sayuran</a>
                        <a href="/category/snack" class="block px-4 py-2 text-dark hover:bg-secondary hover:text-light">Snack</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Mobile Search (visible on small screens) -->
        <div class="md:hidden pb-4">
            <form action="/search" method="GET" class="flex">
                <input type="text" name="query" placeholder="Cari produk..." 
                       class="w-full px-4 py-2 rounded-l-lg text-dark focus:outline-none">
                <button type="submit" class="bg-secondary px-4 py-2 rounded-r-lg hover:bg-opacity-90">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
        
        <!-- Category Navigation -->
        <div class="flex overflow-x-auto pb-2 space-x-4 text-sm">
            <a href="/category/makanan" class="whitespace-nowrap px-3 py-2 rounded-full bg-secondary hover:bg-opacity-80">Makanan</a>
            <a href="/category/minuman" class="whitespace-nowrap px-3 py-2 rounded-full bg-secondary hover:bg-opacity-80">Minuman</a>
            <a href="/category/sayuran" class="whitespace-nowrap px-3 py-2 rounded-full bg-secondary hover:bg-opacity-80">Sayuran</a>
            <a href="/category/snack" class="whitespace-nowrap px-3 py-2 rounded-full bg-secondary hover:bg-opacity-80">Snack</a>
        </div>
    </div>
</nav>
