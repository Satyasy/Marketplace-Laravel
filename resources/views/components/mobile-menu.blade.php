<div id="mobile-menu" class="fixed inset-0 bg-dark bg-opacity-80 z-50 hidden">
    <div class="bg-white h-full w-3/4 max-w-sm overflow-y-auto">
        <div class="flex justify-between items-center p-4 border-b">
            <a href="/" class="flex items-center">
                <span class="text-primary font-bold text-2xl">Mini<span class="text-secondary">Market</span></span>
            </a>
            <button id="close-mobile-menu" class="text-gray-700 hover:text-primary">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>
        
        <div class="p-4">
            <h3 class="font-semibold text-lg mb-2">Kategori</h3>
            <ul class="space-y-2">
                <li><a href="/category/makanan" class="block py-2 px-3 rounded-lg hover:bg-light">Makanan</a></li>
                <li><a href="/category/minuman" class="block py-2 px-3 rounded-lg hover:bg-light">Minuman</a></li>
                <li><a href="/category/sayuran" class="block py-2 px-3 rounded-lg hover:bg-light">Sayuran</a></li>
                <li><a href="/category/buah" class="block py-2 px-3 rounded-lg hover:bg-light">Buah-buahan</a></li>
                <li><a href="/category/snack" class="block py-2 px-3 rounded-lg hover:bg-light">Snack</a></li>
                <li><a href="/category/daging" class="block py-2 px-3 rounded-lg hover:bg-light">Daging</a></li>
                <li><a href="/category/seafood" class="block py-2 px-3 rounded-lg hover:bg-light">Seafood</a></li>
                <li><a href="/category/bumbu" class="block py-2 px-3 rounded-lg hover:bg-light">Bumbu Dapur</a></li>
            </ul>
        </div>
        
        <div class="border-t p-4">
            <h3 class="font-semibold text-lg mb-2">Akun Saya</h3>
            <ul class="space-y-2">
                <li><a href="/account" class="block py-2 px-3 rounded-lg hover:bg-light">Profil</a></li>
                <li><a href="/orders" class="block py-2 px-3 rounded-lg hover:bg-light">Pesanan Saya</a></li>
                <li><a href="/wishlist" class="block py-2 px-3 rounded-lg hover:bg-light">Wishlist</a></li>
                <li><a href="/addresses" class="block py-2 px-3 rounded-lg hover:bg-light">Alamat</a></li>
                <li><a href="/logout" class="block py-2 px-3 rounded-lg hover:bg-light text-red-500">Keluar</a></li>
            </ul>
        </div>
    </div>
</div>

<script>
    document.getElementById('close-mobile-menu').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.add('hidden');
    });
</script>
