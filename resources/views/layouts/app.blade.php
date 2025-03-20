<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cover Letter Generator')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>


    <!-- SwiperJS for Carousel -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Google Font: Hind Siliguri -->
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;600;700&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Hind Siliguri', sans-serif !important;
    }
</style>


</head>
<body class="bg-gray-900 text-white font-mono">

    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-purple-700 to-indigo-900 p-4 shadow-lg flex justify-between items-center">
        <a href="/" class="text-2xl font-bold text-white">🎮 CoverLetter Pro</a>
        <ul class="flex space-x-6">
            <li><a href="/" class="hover:text-yellow-300">Home</a></li>
            <li><a href="#" class="hover:text-yellow-300">Tools</a></li>
            <li><a href="#" class="hover:text-yellow-300">About</a></li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div class="p-6">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-purple-700 to-indigo-900 p-4 text-center text-gray-300">
        © 2025 CoverLetter Pro - Built for you, by Lskit. 🚀
    </footer>

</body>
</html>
