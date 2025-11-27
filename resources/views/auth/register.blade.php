<x-guest-layout>
    <div class="grid grid-cols-1 md:grid-cols-2 h-screen bg-white">
        <!-- Left hero panel -->
        <div class="hidden md:flex flex-col justify-between p-10 bg-gradient-to-br from-red-700 to-black text-white h-screen">
            <div class="flex items-center gap-3">
                <img src="{{ asset('pictures/Logo.png') }}" alt="EquipX" class="w-9 h-9 object-contain">
                <span class="text-xl font-semibold">EquipX</span>
            </div>
            <div>
                <div class="text-4xl font-extrabold leading-tight">Join<br>EquipX Staff</div>
                <p class="mt-4 text-white/85 max-w-md">Register for staff/admin access to manage equipment inventory.</p>
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
                <a href="{{ route('login') }}" class="inline-flex items-center text-gray-600 hover:text-red-600 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to Login
                </a>
            </div>
            
            <h2 class="text-2xl font-semibold text-gray-900">Staff Registration</h2>
            <p class="text-sm text-gray-500 mb-6">Register for staff/admin access. Have an account? <a href="{{ route('login') }}" class="text-red-600 hover:underline">Sign in</a></p>

            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf

                <div>
                    <label for="name" class="block text-xs font-medium text-gray-700">Name</label>
                    <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus autocomplete="name"
                           class="mt-1 block w-full rounded-lg border border-gray-300 focus:border-red-600 focus:ring-red-600 shadow-sm" />
                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-xs font-medium text-gray-700">E-mail</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="username"
                           class="mt-1 block w-full rounded-lg border border-gray-300 focus:border-red-600 focus:ring-red-600 shadow-sm" />
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-xs font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" required autocomplete="new-password"
                           class="mt-1 block w-full rounded-lg border border-gray-300 focus:border-red-600 focus:ring-red-600 shadow-sm" />
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block text-xs font-medium text-gray-700">Confirm Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password"
                           class="mt-1 block w-full rounded-lg border border-gray-300 focus:border-red-600 focus:ring-red-600 shadow-sm" />
                    @error('password_confirmation')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between"></div>

                <button type="submit" class="w-full inline-flex items-center justify-center px-4 py-3 bg-red-600 text-white rounded-lg hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-300">
                    Sign Up
                </button>
            </form>
            </div>
        </div>
        <div class="hidden md:block bg-[url('https://images.unsplash.com/photo-1549880338-65ddcdfd017b?q=80&w=1600&auto=format&fit=crop')] bg-cover bg-center"></div>
    </div>
</x-guest-layout>
