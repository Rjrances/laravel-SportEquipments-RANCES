<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Access Denied - EquipX</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased bg-gray-50">
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="max-w-md w-full text-center">
            <!-- Error Icon -->
            <div class="mb-6">
                <div class="mx-auto w-24 h-24 bg-red-100 rounded-full flex items-center justify-center">
                    <svg class="w-12 h-12 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                </div>
            </div>
            
            <!-- Error Message -->
            <h1 class="text-4xl font-bold text-gray-900 mb-4">403</h1>
            <h2 class="text-2xl font-semibold text-gray-800 mb-2">Access Denied</h2>
            <p class="text-gray-600 mb-8">
                You don't have permission to access this page. This area is restricted to administrators only.
            </p>
            
            <!-- Action Buttons -->
            <div class="space-y-3">
                <a href="{{ route('home') }}" class="inline-block w-full bg-red-600 text-white px-6 py-3 rounded-md hover:bg-red-700 transition-colors duration-200 font-medium">
                    Go to Homepage
                </a>
                @auth
                    <a href="{{ route('dashboard') }}" class="inline-block w-full bg-gray-200 text-gray-700 px-6 py-3 rounded-md hover:bg-gray-300 transition-colors duration-200 font-medium">
                        Back to Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="inline-block w-full bg-gray-200 text-gray-700 px-6 py-3 rounded-md hover:bg-gray-300 transition-colors duration-200 font-medium">
                        Login
                    </a>
                @endauth
            </div>
            
            <!-- Help Text -->
            <p class="mt-8 text-sm text-gray-500">
                If you believe this is an error, please contact your administrator.
            </p>
        </div>
    </div>
</body>
</html>

