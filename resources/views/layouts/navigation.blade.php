<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('img/LOGO UNIMA.png') }}" alt="Logo Unima" class="block h-9 w-auto">
                    </a>
                    <h2 class="ml-5 text-white text-lg font-semibold hidden sm:block">
                        PERPUSTAKAAN UNIMA
                    </h2>
                </div>

                <!-- Navigation Links (Desktop) -->
                <div class="hidden space-x-8 sm:ml-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('visi-misi')" :active="request()->routeIs('visi-misi')">
                        {{ __('Visi Misi') }}
                    </x-nav-link>
                    <x-nav-link :href="route('struktur')" :active="request()->routeIs('struktur')">
                        {{ __('Struktur') }}
                    </x-nav-link>
                    <x-nav-link :href="route('pegawai')" :active="request()->routeIs('pegawai')">
                        {{ __('Pegawai') }}
                    </x-nav-link>
                    <x-nav-link :href="route('galeri')" :active="request()->routeIs('galeri')">
                        {{ __('Galeri') }}
                    </x-nav-link>
                    <x-nav-link :href="route('kontak')" :active="request()->routeIs('kontak')">
                        {{ __('Kontak') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown (Desktop) -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 text-sm rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300">
                            <div>{{ Auth::user()->name }}</div>
                            <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger (Mobile) -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = !open"
                    class="p-2 rounded-md text-gray-400 hover:text-gray-500 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'block': !open }" class="block" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'block': open, 'hidden': !open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('visi-misi')" :active="request()->routeIs('visi-misi')">
                {{ __('Visi Misi') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('struktur')" :active="request()->routeIs('struktur')">
                {{ __('Struktur') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('pegawai')" :active="request()->routeIs('pegawai')">
                {{ __('Pegawai') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('galeri')" :active="request()->routeIs('galeri')">
                {{ __('Galeri') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('kontak')" :active="request()->routeIs('kontak')">
                {{ __('Kontak') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-2 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
