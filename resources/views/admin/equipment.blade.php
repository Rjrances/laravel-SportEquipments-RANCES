<x-app-layout>
    <!-- Header Section -->
    <div class="mb-8">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Sports Equipment</h1>
                <p class="mt-2 text-gray-600">Manage your sports equipment inventory</p>
            </div>
            <button class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition-colors duration-200 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Add Equipment
            </button>
        </div>
    </div>

    <!-- Search and Filter Section -->
    <div class="bg-white shadow rounded-lg p-6 mb-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Search Input -->
            <div class="md:col-span-2">
                <label for="search" class="block text-sm font-medium text-gray-700 mb-2">Search Equipment</label>
                <div class="relative">
                    <input type="text" id="search" placeholder="Search by name, category, or ID..." 
                           class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:border-red-600 focus:ring-red-600">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>
            
            <!-- Category Filter -->
            <div>
                <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                <select id="category" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:border-red-600 focus:ring-red-600">
                    <option value="">All Categories</option>
                    <option value="football">Football</option>
                    <option value="basketball">Basketball</option>
                    <option value="soccer">Soccer</option>
                    <option value="tennis">Tennis</option>
                    <option value="volleyball">Volleyball</option>
                    <option value="baseball">Baseball</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Equipment Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Equipment Card 1 -->
        <div class="bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-200">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-lg font-semibold text-gray-900">Soccer Ball</h3>
                            <p class="text-sm text-gray-500">ID: SB-001</p>
                        </div>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        Available
                    </span>
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Category:</span>
                        <span class="text-gray-900">Soccer</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Brand:</span>
                        <span class="text-gray-900">Nike</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Condition:</span>
                        <span class="text-gray-900">Excellent</span>
                    </div>
                </div>
                <div class="mt-4 flex space-x-2">
                    <button class="flex-1 bg-red-600 text-white px-3 py-2 rounded-md text-sm hover:bg-red-700 transition-colors duration-200">
                        Edit
                    </button>
                    <button class="flex-1 bg-gray-200 text-gray-700 px-3 py-2 rounded-md text-sm hover:bg-gray-300 transition-colors duration-200">
                        View
                    </button>
                </div>
            </div>
        </div>

        <!-- Equipment Card 2 -->
        <div class="bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-200">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-lg font-semibold text-gray-900">Basketball</h3>
                            <p class="text-sm text-gray-500">ID: BB-045</p>
                        </div>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        Available
                    </span>
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Category:</span>
                        <span class="text-gray-900">Basketball</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Brand:</span>
                        <span class="text-gray-900">Spalding</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Condition:</span>
                        <span class="text-gray-900">Good</span>
                    </div>
                </div>
                <div class="mt-4 flex space-x-2">
                    <button class="flex-1 bg-red-600 text-white px-3 py-2 rounded-md text-sm hover:bg-red-700 transition-colors duration-200">
                        Edit
                    </button>
                    <button class="flex-1 bg-gray-200 text-gray-700 px-3 py-2 rounded-md text-sm hover:bg-gray-300 transition-colors duration-200">
                        View
                    </button>
                </div>
            </div>
        </div>

        <!-- Equipment Card 3 -->
        <div class="bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-200">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-lg font-semibold text-gray-900">Tennis Racket</h3>
                            <p class="text-sm text-gray-500">ID: TR-012</p>
                        </div>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                        In Use
                    </span>
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Category:</span>
                        <span class="text-gray-900">Tennis</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Brand:</span>
                        <span class="text-gray-900">Wilson</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Condition:</span>
                        <span class="text-gray-900">Good</span>
                    </div>
                </div>
                <div class="mt-4 flex space-x-2">
                    <button class="flex-1 bg-red-600 text-white px-3 py-2 rounded-md text-sm hover:bg-red-700 transition-colors duration-200">
                        Edit
                    </button>
                    <button class="flex-1 bg-gray-200 text-gray-700 px-3 py-2 rounded-md text-sm hover:bg-gray-300 transition-colors duration-200">
                        View
                    </button>
                </div>
            </div>
        </div>

        <!-- Equipment Card 4 -->
        <div class="bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-200">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-lg font-semibold text-gray-900">Volleyball</h3>
                            <p class="text-sm text-gray-500">ID: VB-078</p>
                        </div>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        Available
                    </span>
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Category:</span>
                        <span class="text-gray-900">Volleyball</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Brand:</span>
                        <span class="text-gray-900">Mikasa</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Condition:</span>
                        <span class="text-gray-900">Excellent</span>
                    </div>
                </div>
                <div class="mt-4 flex space-x-2">
                    <button class="flex-1 bg-red-600 text-white px-3 py-2 rounded-md text-sm hover:bg-red-700 transition-colors duration-200">
                        Edit
                    </button>
                    <button class="flex-1 bg-gray-200 text-gray-700 px-3 py-2 rounded-md text-sm hover:bg-gray-300 transition-colors duration-200">
                        View
                    </button>
                </div>
            </div>
        </div>

        <!-- Equipment Card 5 -->
        <div class="bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-200">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-lg font-semibold text-gray-900">Football</h3>
                            <p class="text-sm text-gray-500">ID: FB-023</p>
                        </div>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        Available
                    </span>
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Category:</span>
                        <span class="text-gray-900">Football</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Brand:</span>
                        <span class="text-gray-900">Nike</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Condition:</span>
                        <span class="text-gray-900">Good</span>
                    </div>
                </div>
                <div class="mt-4 flex space-x-2">
                    <button class="flex-1 bg-red-600 text-white px-3 py-2 rounded-md text-sm hover:bg-red-700 transition-colors duration-200">
                        Edit
                    </button>
                    <button class="flex-1 bg-gray-200 text-gray-700 px-3 py-2 rounded-md text-sm hover:bg-gray-300 transition-colors duration-200">
                        View
                    </button>
                </div>
            </div>
        </div>

        <!-- Equipment Card 6 -->
        <div class="bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-200">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-lg font-semibold text-gray-900">Baseball Bat</h3>
                            <p class="text-sm text-gray-500">ID: BB-056</p>
                        </div>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        Available
                    </span>
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Category:</span>
                        <span class="text-gray-900">Baseball</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Brand:</span>
                        <span class="text-gray-900">Louisville Slugger</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Condition:</span>
                        <span class="text-gray-900">Excellent</span>
                    </div>
                </div>
                <div class="mt-4 flex space-x-2">
                    <button class="flex-1 bg-red-600 text-white px-3 py-2 rounded-md text-sm hover:bg-red-700 transition-colors duration-200">
                        Edit
                    </button>
                    <button class="flex-1 bg-gray-200 text-gray-700 px-3 py-2 rounded-md text-sm hover:bg-gray-300 transition-colors duration-200">
                        View
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-8 flex items-center justify-between">
        <div class="text-sm text-gray-700">
            Showing <span class="font-medium">1</span> to <span class="font-medium">6</span> of <span class="font-medium">127</span> results
        </div>
        <div class="flex space-x-2">
            <button class="px-3 py-2 border border-gray-300 rounded-md text-sm text-gray-500 bg-white hover:bg-gray-50">
                Previous
            </button>
            <button class="px-3 py-2 border border-red-600 bg-red-600 text-white rounded-md text-sm">
                1
            </button>
            <button class="px-3 py-2 border border-gray-300 rounded-md text-sm text-gray-700 bg-white hover:bg-gray-50">
                2
            </button>
            <button class="px-3 py-2 border border-gray-300 rounded-md text-sm text-gray-700 bg-white hover:bg-gray-50">
                3
            </button>
            <button class="px-3 py-2 border border-gray-300 rounded-md text-sm text-gray-700 bg-white hover:bg-gray-50">
                Next
            </button>
        </div>
    </div>
</x-app-layout>
