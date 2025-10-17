<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Captrack Sports Equipment') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased bg-gray-50">
    <div class="min-h-screen">
        <!-- Navigation -->
        <nav class="bg-white shadow-lg border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <!-- Captrack Logo -->
                        <div class="flex-shrink-0 flex items-center">
                            <img class="h-8 w-auto" src="{{ asset('pictures/Logo.png') }}" alt="Captrack">
                            <span class="ml-3 text-xl font-bold text-red-800">Captrack</span>
                        </div>
                        
                        <!-- Navigation Links -->
                        <div class="hidden md:ml-8 md:flex md:space-x-8">
                            <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-red-600 px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('dashboard') ? 'text-red-600 border-b-2 border-red-600' : '' }}">
                                Dashboard
                            </a>
                            <a href="{{ route('equipment') }}" class="text-gray-700 hover:text-red-600 px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('equipment') ? 'text-red-600 border-b-2 border-red-600' : '' }}">
                                Equipment
                            </a>
                            <a href="#" class="text-gray-700 hover:text-red-600 px-3 py-2 text-sm font-medium transition-colors duration-200">
                                Checkout
                            </a>
                            <a href="#" class="text-gray-700 hover:text-red-600 px-3 py-2 text-sm font-medium transition-colors duration-200">
                                Reports
                            </a>
                        </div>
                    </div>

                    <!-- User Menu -->
                    <div class="flex items-center space-x-4">
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">
                                <span class="sr-only">Open user menu</span>
                                <div class="h-8 w-8 rounded-full bg-red-500 flex items-center justify-center">
                                    <span class="text-white font-medium text-sm">{{ substr(Auth::user()->name, 0, 1) }}</span>
                                </div>
                                <span class="ml-2 text-gray-700 font-medium">{{ Auth::user()->name }}</span>
                            </button>

                            <!-- Dropdown menu -->
                            <div x-show="open" @click.away="open = false" 
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="transform opacity-0 scale-95"
                                 x-transition:enter-end="transform opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75"
                                 x-transition:leave-start="transform opacity-100 scale-100"
                                 x-transition:leave-end="transform opacity-0 scale-95"
                                 class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50">
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        Sign out
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-red-600 block px-3 py-2 text-base font-medium">Dashboard</a>
                    <a href="{{ route('equipment') }}" class="text-gray-700 hover:text-red-600 block px-3 py-2 text-base font-medium">Equipment</a>
                    <a href="#" class="text-gray-700 hover:text-red-600 block px-3 py-2 text-base font-medium">Checkout</a>
                    <a href="#" class="text-gray-700 hover:text-red-600 block px-3 py-2 text-base font-medium">Reports</a>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
