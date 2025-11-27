<x-guest-layout>
    <div class="grid grid-cols-1 md:grid-cols-2 h-screen bg-white">
        <!-- Left hero panel -->
        <div class="hidden md:flex flex-col justify-between p-10 bg-gradient-to-br from-red-700 to-black text-white h-screen">
            <div class="flex items-center gap-3">
                <img src="{{ asset('pictures/Logo.png') }}" alt="EquipX" class="w-9 h-9 object-contain">
                <span class="text-xl font-semibold">EquipX</span>
            </div>
            <div>
                <div class="text-4xl font-extrabold leading-tight">Hello<br>EquipX Staff!</div>
                <p class="mt-4 text-white/85 max-w-md">Login to manage equipment inventory and access the admin dashboard.</p>
            </div>
            <div class="text-xs text-white/70">© {{ date('Y') }} EquipX. All rights reserved.</div>
        </div>
        <!-- Right form panel -->
        <div class="p-8 md:p-12 flex items-center h-screen">
            <div class="w-full">
            <div class="flex items-center gap-3 mb-6 md:hidden">
                <img src="{{ asset('pictures/Logo.png') }}" alt="EquipX" class="w-8 h-8 object-contain">
                <span class="text-lg font-semibold text-gray-900">EquipX</span>
            </div>
            
            <!-- Back Button -->
            <div class="mb-6">
                <a href="{{ route('home') }}" class="inline-flex items-center text-gray-600 hover:text-red-600 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to Store
                </a>
            </div>
            
            <h2 class="text-2xl font-semibold text-gray-900">Staff Login</h2>
            <p class="text-sm text-gray-500 mb-6">Login for staff/admin access. Don't have an account? <a href="{{ route('register') }}" class="text-red-600 hover:underline">Register</a></p>

            @if (session('status'))
                <div class="mb-4 text-sm text-green-700">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ url('/login') }}" class="space-y-4">
                @csrf

                <div>
                    <label for="email" class="block text-xs font-medium text-gray-700">E-mail</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                           class="mt-1 block w-full rounded-lg border border-gray-300 focus:border-red-600 focus:ring-red-600 shadow-sm" />
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-xs font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" required autocomplete="current-password"
                           class="mt-1 block w-full rounded-lg border border-gray-300 focus:border-red-600 focus:ring-red-600 shadow-sm" />
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" name="remember" type="checkbox" class="rounded border-emerald-300 text-emerald-700 focus:ring-emerald-500">
                        <span class="ms-2 text-sm text-gray-700">Remember me</span>
                    </label>
                    <a href="{{ route('register') }}" class="text-sm text-red-600 hover:underline">Create account</a>
                </div>

                <button type="submit" class="w-full inline-flex items-center justify-center px-4 py-3 bg-red-600 text-white rounded-lg hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-300">
                    Log In
                </button>
            </form>
            </div>
        </div>
        <div class="hidden md:block bg-[url('https://images.unsplash.com/photo-1521417531039-94f25851d96f?q=80&w=1600&auto=format&fit=crop')] bg-cover bg-center"></div>
    </div>
</x-guest-layout>
