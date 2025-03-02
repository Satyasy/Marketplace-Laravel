<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniMarket Online</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light min-h-screen flex flex-col">
    <!-- Navbar -->
    @include('components.navbar')
    
    <!-- Content -->
    <main class="flex-grow container mx-auto px-4 py-6">
        @yield('content')
    </main>
    
    <!-- Footer -->
    @include('components.footer')
</body>
</html>
