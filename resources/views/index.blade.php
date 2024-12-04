<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased bg-gray-900">
    <div class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0">
        <div class="w-full flex flex-col justify-center items-center text-center">
            <!-- Logo -->
            <div class="w-20 h-20 fill-current">
                <a href="/">
                    <img src="{{ asset('img/LOGO UNIMA.png') }}" class="w-20 h-20">
                </a>
            </div>

            <!-- Title -->
            <div class="text-white font-sans text-center text-2xl mt-5">
                <h2>PORTAL PERPUSTAKAAN <br> UNIVERSITAS NEGERI MANADO</h2>
            </div>

            <!-- Login and Register Buttons -->
            <div class="flex flex-col sm:flex-row sm:space-x-4 space-y-4 sm:space-y-0 items-center mt-6">
                <a href="{{ route('login') }}">
                    <button
                        class="w-full sm:w-48 px-6 py-2 text-xs sm:text-sm font-medium text-gray-900 bg-white rounded-md shadow-sm hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Log in') }}
                    </button>
                </a>
                <a href="{{ route('register') }}">
                    <button
                        class="w-full sm:w-48 px-6 py-2 text-xs sm:text-sm font-medium text-gray-900 bg-white rounded-md shadow-sm hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Register') }}
                    </button>
                </a>
            </div>
        </div>
    </div>
</body>

</html>