<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Perpustakaan UNIMA') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="font-sans antialiased flex flex-col min-h-screen bg-white">
    <!-- Kontainer Utama untuk Konten dan Navigasi -->
    <div class="flex-1 flex flex-col">
        @include('layouts.navigation')

        <!-- Konten Utama -->
        <main class="flex-grow">
            {{ $slot }}
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p class="text-sm">&copy; 2024 Laura Ivo Perangin-angin, Anak Pak Bolon. Semua hak cipta dilindungi.</p>
        </div>
    </footer>
</body>

</html>