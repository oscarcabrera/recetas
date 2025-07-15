<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen">
        <div class="drawer lg:drawer-open">
            <!-- Drawer toggle -->
            <input id="drawer-toggle" type="checkbox" class="drawer-toggle" />
            
            <!-- Page content -->
            <div class="drawer-content flex flex-col">
                <!-- Navbar for mobile -->
                <div class="navbar bg-base-100 border-b border-base-300 lg:hidden">
                    <div class="flex-none">
                        <label for="drawer-toggle" class="btn btn-square btn-ghost">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                            </svg>
                        </label>
                    </div>
                    <div class="flex-1">
                        <a href="{{ route('dashboard') }}" class="btn btn-ghost normal-case text-xl" wire:navigate>
                            <x-app-logo />
                        </a>
                    </div>
                    <div class="flex-none">
                        <!-- Mobile user menu -->
                        <div class="dropdown dropdown-end">
                            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                                <div class="w-10 rounded-full bg-primary/10 flex items-center justify-center">
                                    <span class="text-primary font-semibold">{{ auth()->user()->initials() }}</span>
                                </div>
                            </div>
                            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                                <li class="menu-title">
                                    <div class="flex items-center gap-2 p-2">
                                        <div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center">
                                            <span class="text-primary font-semibold text-sm">{{ auth()->user()->initials() }}</span>
                                        </div>
                                        <div>
                                            <div class="font-semibold text-sm">{{ auth()->user()->name }}</div>
                                            <div class="text-xs text-base-content/70">{{ auth()->user()->email }}</div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{ route('settings.profile') }}" wire:navigate>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    {{ __('Settings') }}
                                </a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                                        @csrf
                                        <button type="submit" class="w-full text-left flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                            </svg>
                                            {{ __('Log Out') }}
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Main content -->
                <main class="flex-1 p-4 lg:p-6">
                    {{ $slot }}
                </main>
            </div>
            
            <!-- Sidebar -->
            <div class="drawer-side">
                <label for="drawer-toggle" class="drawer-overlay"></label>
                <aside class="min-h-full w-64 bg-base-200 text-base-content">
                    <!-- Sidebar header -->
                    <div class="p-4 border-b border-base-300">
                        <a href="{{ route('dashboard') }}" class="flex items-center gap-2 text-xl font-bold" wire:navigate>
                            <x-app-logo />
                        </a>
                    </div>

                    <!-- Navigation -->
                    <nav class="p-4">
                        <div class="space-y-2">
                            <div class="text-xs font-semibold text-base-content/70 uppercase tracking-wide mb-3">
                                {{ __('Platform') }}
                            </div>
                            
                            <a href="{{ route('dashboard') }}" 
                               class="flex items-center gap-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('dashboard') ? 'bg-primary text-primary-content' : 'hover:bg-base-300' }}"
                               wire:navigate>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                {{ __('Dashboard') }}
                            </a>
                        </div>
                    </nav>

                    <!-- External links -->
                    <div class="p-4 border-t border-base-300 mt-auto">
                        <div class="space-y-2">
                        </div>
                    </div>

                    <!-- Desktop User Menu -->
                    <div class="p-4 border-t border-base-300 hidden lg:block">
                        <div class="dropdown dropdown-top dropdown-end w-full">
                            <div tabindex="0" role="button" class="btn btn-ghost w-full justify-start p-2">
                                <div class="flex items-center gap-3 w-full">
                                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                        <span class="text-primary font-semibold">{{ auth()->user()->initials() }}</span>
                                    </div>
                                    <div class="flex-1 text-left">
                                        <div class="font-semibold text-sm">{{ auth()->user()->name }}</div>
                                        <div class="text-xs text-base-content/70">{{ auth()->user()->email }}</div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                    </svg>
                                </div>
                            </div>
                            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-full mb-2">
                                <li><a href="{{ route('settings.profile') }}" wire:navigate>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    {{ __('Settings') }}
                                </a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                                        @csrf
                                        <button type="submit" class="w-full text-left flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                            </svg>
                                            {{ __('Log Out') }}
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>

        <script>
            // Auto-close drawer on mobile when clicking nav items
            document.addEventListener('DOMContentLoaded', function() {
                const drawerToggle = document.getElementById('drawer-toggle');
                const navLinks = document.querySelectorAll('aside a[wire\\:navigate]');
                
                navLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        if (window.innerWidth < 1024) {
                            drawerToggle.checked = false;
                        }
                    });
                });
            });
        </script>
    </body>
</html>
