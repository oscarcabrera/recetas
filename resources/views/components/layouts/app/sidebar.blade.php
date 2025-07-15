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
                            <x-lucide-menu class="h-6 w-6" />
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
                                    <x-lucide-settings class="h-4 w-4" />
                                    {{ __('Settings') }}
                                </a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                                        @csrf
                                        <button type="submit" class="w-full text-left flex items-center gap-2">
                                            <x-lucide-log-out class="h-4 w-4" />
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
                                <x-lucide-home class="h-5 w-5" />
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
                                    <x-lucide-chevron-up class="h-4 w-4" />
                                </div>
                            </div>
                            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-full mb-2">
                                <li><a href="{{ route('settings.profile') }}" wire:navigate>
                                    <x-lucide-settings class="h-4 w-4" />
                                    {{ __('Settings') }}
                                </a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                                        @csrf
                                        <button type="submit" class="w-full text-left flex items-center gap-2">
                                            <x-lucide-log-out class="h-4 w-4" />
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
