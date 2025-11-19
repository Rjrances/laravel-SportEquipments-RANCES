<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EquipX Sports Equipment') }} - Equipment Catalog</title>

    <!-- PWA Manifest -->
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <meta name="theme-color" content="#dc2626">

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
                        <!-- EquipX Logo -->
                        <div class="flex-shrink-0 flex items-center">
                            <img class="h-8 w-auto" src="{{ asset('pictures/Logo.png') }}" alt="EquipX">
                            <span class="ml-3 text-xl font-bold text-red-800">EquipX</span>
                        </div>
                        
                        <!-- Navigation Links -->
                        <div class="hidden md:ml-8 md:flex md:space-x-8">
                            <a href="#" class="text-red-600 px-3 py-2 text-sm font-medium border-b-2 border-red-600">
                                Browse Equipment
                            </a>
                            <a href="#" class="text-gray-700 hover:text-red-600 px-3 py-2 text-sm font-medium transition-colors duration-200">
                                About Us
                            </a>
                            <a href="#" class="text-gray-700 hover:text-red-600 px-3 py-2 text-sm font-medium transition-colors duration-200">
                                Contact
                            </a>
                        </div>
                    </div>

                    <!-- Login Button -->
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('login') }}" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition-colors duration-200">
                            Staff Login
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="bg-gradient-to-r from-red-700 to-black text-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl font-bold mb-4">Premium Sports Equipment Store</h1>
                <p class="text-xl text-white/90 max-w-2xl mx-auto">
                    Shop our wide selection of high-quality sports equipment for all your athletic needs
                </p>
            </div>
        </div>

        <!-- Main Content -->
        <main class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <!-- Search and Filter -->
            <div class="bg-white shadow rounded-lg p-6 mb-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="md:col-span-2">
                        <label for="search" class="block text-sm font-medium text-gray-700 mb-2">Search Products</label>
                        <div class="relative">
                            <input type="text" id="search" placeholder="Search by sport or product type..." 
                                   class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:border-red-600 focus:ring-red-600">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Sport Category</label>
                        <select id="category" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:border-red-600 focus:ring-red-600">
                            <option value="">All Sports</option>
                            <option value="football">Football</option>
                            <option value="basketball">Basketball</option>
                            <option value="soccer">Soccer</option>
                            <option value="tennis">Tennis</option>
                            <option value="volleyball">Volleyball</option>
                            <option value="baseball">Baseball</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Equipment Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Equipment Card 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-semibold text-gray-900">Professional Soccer Ball</h3>
                                    <p class="text-sm text-gray-500">Nike - Official Match Ball</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="space-y-3 mb-4">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Condition:</span>
                                <span class="font-medium text-green-600">Excellent</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Size:</span>
                                <span class="font-medium">Size 5 (Official)</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Material:</span>
                                <span class="font-medium">Synthetic Leather</span>
                            </div>
                        </div>

                        <div class="border-t pt-4">
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-2xl font-bold text-red-600">₱2,500</span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Available
                                </span>
                            </div>
                            <button class="w-full bg-red-600 text-white py-2 rounded-md hover:bg-red-700 transition-colors duration-200 font-medium">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Equipment Card 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div class="w-16 h-16 bg-orange-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-semibold text-gray-900">Professional Basketball</h3>
                                    <p class="text-sm text-gray-500">Spalding - NBA Official</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="space-y-3 mb-4">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Condition:</span>
                                <span class="font-medium text-green-600">Excellent</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Size:</span>
                                <span class="font-medium">Size 7 (Men's)</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Material:</span>
                                <span class="font-medium">Composite Leather</span>
                            </div>
                        </div>

                        <div class="border-t pt-4">
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-2xl font-bold text-red-600">₱1,800</span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Available
                                </span>
                            </div>
                            <button class="w-full bg-red-600 text-white py-2 rounded-md hover:bg-red-700 transition-colors duration-200 font-medium">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Equipment Card 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-semibold text-gray-900">Tennis Racket</h3>
                                    <p class="text-sm text-gray-500">Wilson - Pro Staff Series</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="space-y-3 mb-4">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Condition:</span>
                                <span class="font-medium text-green-600">Good</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Weight:</span>
                                <span class="font-medium">300g</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Grip Size:</span>
                                <span class="font-medium">4 3/8"</span>
                            </div>
                        </div>

                        <div class="border-t pt-4">
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-2xl font-bold text-red-600">₱4,500</span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    Out of Stock
                                </span>
                            </div>
                            <button class="w-full bg-gray-400 text-white py-2 rounded-md cursor-not-allowed font-medium">
                                Out of Stock
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Equipment Card 4 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-semibold text-gray-900">Volleyball</h3>
                                    <p class="text-sm text-gray-500">Mikasa - Competition Grade</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="space-y-3 mb-4">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Condition:</span>
                                <span class="font-medium text-green-600">Excellent</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Size:</span>
                                <span class="font-medium">Official Size</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Weight:</span>
                                <span class="font-medium">260-280g</span>
                            </div>
                        </div>

                        <div class="border-t pt-4">
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-2xl font-bold text-red-600">₱1,200</span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Available
                                </span>
                            </div>
                            <button class="w-full bg-red-600 text-white py-2 rounded-md hover:bg-red-700 transition-colors duration-200 font-medium">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Equipment Card 5 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div class="w-16 h-16 bg-red-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-semibold text-gray-900">Football</h3>
                                    <p class="text-sm text-gray-500">Nike - Vapor Untouchable</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="space-y-3 mb-4">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Condition:</span>
                                <span class="font-medium text-green-600">Good</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Size:</span>
                                <span class="font-medium">Official Size</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Material:</span>
                                <span class="font-medium">Synthetic Leather</span>
                            </div>
                        </div>

                        <div class="border-t pt-4">
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-2xl font-bold text-red-600">₱2,200</span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Available
                                </span>
                            </div>
                            <button class="w-full bg-red-600 text-white py-2 rounded-md hover:bg-red-700 transition-colors duration-200 font-medium">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Equipment Card 6 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div class="w-16 h-16 bg-indigo-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-semibold text-gray-900">Baseball Bat</h3>
                                    <p class="text-sm text-gray-500">Louisville Slugger - Maple Wood</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="space-y-3 mb-4">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Condition:</span>
                                <span class="font-medium text-green-600">Excellent</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Length:</span>
                                <span class="font-medium">33 inches</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Weight:</span>
                                <span class="font-medium">30 oz</span>
                            </div>
                        </div>

                        <div class="border-t pt-4">
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-2xl font-bold text-red-600">₱3,800</span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Available
                                </span>
                            </div>
                            <button class="w-full bg-red-600 text-white py-2 rounded-md hover:bg-red-700 transition-colors duration-200 font-medium">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white py-8 mt-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <div class="flex items-center justify-center mb-4">
                        <img class="h-8 w-auto" src="{{ asset('pictures/Logo.png') }}" alt="EquipX">
                        <span class="ml-3 text-xl font-bold">EquipX</span>
                    </div>
                    <p class="text-gray-400">© {{ date('Y') }} EquipX. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
