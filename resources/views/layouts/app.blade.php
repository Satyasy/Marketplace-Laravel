<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniMarket</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <!-- Styles -->
    @vite('resources/css/app.css')
    
    <!-- Scripts -->
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-50 font-sans">
    <!-- Navbar -->
    @include('components.navbar')
    
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>
    
    <!-- Footer -->
    @include('components.footer')
    
    <!-- Additional Scripts -->
    @stack('scripts')
    <script>
        // Initialize all tooltips
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });
        
        // Update cart count on add to cart
        document.querySelectorAll('.add-to-cart-btn, .bg-primary.text-light.p-2.rounded-full').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Get current cart count
                const cartCountElement = document.querySelector('.absolute.-top-2.-right-2');
                if (cartCountElement) {
                    let currentCount = parseInt(cartCountElement.textContent) || 0;
                    cartCountElement.textContent = currentCount + 1;
                }
            });
        });
    </script>
    
</body>
</html>
