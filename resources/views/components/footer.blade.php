<!-- resources/views/components/footer.blade.php -->
<footer class="bg-dark text-light pt-12 pb-6">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <!-- About -->
            <div>
                <h3 class="text-xl font-bold mb-4">Mini<span class="text-secondary">Market</span></h3>
                <p class="mb-4 text-gray-300">Belanja kebutuhan sehari-hari dengan mudah dan cepat. Kami menyediakan produk berkualitas dengan harga terbaik.</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-300 hover:text-secondary">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-secondary">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-secondary">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-secondary">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Tautan Cepat</h4>
                <ul class="space-y-2">
                    <li><a href="/about" class="text-gray-300 hover:text-secondary">Tentang Kami</a></li>
                    <li><a href="/products" class="text-gray-300 hover:text-secondary">Produk</a></li>
                    <li><a href="/promos" class="text-gray-300 hover:text-secondary">Promo</a></li>
                    <li><a href="/blog" class="text-gray-300 hover:text-secondary">Blog</a></li>
                    <li><a href="/contact" class="text-gray-300 hover:text-secondary">Kontak</a></li>
                </ul>
            </div>
            
            <!-- Categories -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Kategori</h4>
                <ul class="space-y-2">
                    <li><a href="/category/makanan" class="text-gray-300 hover:text-secondary">Makanan</a></li>
                    <li><a href="/category/minuman" class="text-gray-300 hover:text-secondary">Minuman</a></li>
                    <li><a href="/category/sayuran" class="text-gray-300 hover:text-secondary">Sayuran</a></li>
                    <li><a href="/category/buah" class="text-gray-300 hover:text-secondary">Buah-buahan</a></li>
                    <li><a href="/category/snack" class="text-gray-300 hover:text-secondary">Snack</a></li>
                </ul>
            </div>
            
            <!-- Contact -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Kontak Kami</h4>
                <ul class="space-y-2">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt mt-1 mr-3 text-secondary"></i>
                        <span class="text-gray-300">Jl. Raya Pasar Minggu No. 100, Jakarta Selatan</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-phone mt-1 mr-3 text-secondary"></i>
                        <span class="text-gray-300">+62 812 3456 7890</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-envelope mt-1 mr-3 text-secondary"></i>
                        <span class="text-gray-300">info@minimarket.com</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="border-t border-gray-700 pt-6 mt-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm mb-4 md:mb-0">&copy; 2025 MiniMarket. Hak Cipta Dilindungi.</p>
                <div class="flex space-x-4">
                    <a href="/terms" class="text-gray-400 text-sm hover:text-secondary">Syarat & Ketentuan</a>
                    <a href="/privacy" class="text-gray-400 text-sm hover:text-secondary">Kebijakan Privasi</a>
                    <a href="/faq" class="text-gray-400 text-sm hover:text-secondary">FAQ</a>
                </div>
            </div>
        </div>
    </div>
</footer>

