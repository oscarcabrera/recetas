<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'SICODI') }}</title>
    
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-base-100">
        <!-- Header with Navigation -->
        <header class="navbar bg-base-100 border-b border-base-200">
            <div class="navbar-start">
                <div class="flex-1">
                    <a class="btn btn-ghost text-xl">{{ config('app.name', 'SICODI') }}</a>
                </div>
            </div>
            
            <div class="navbar-end">
                @if (Route::has('login'))
                    <div class="flex gap-2">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-primary">
                                Panel de control
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-ghost">
                                Iniciar sesión
                            </a>
                            
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary">
                                    Registrarse
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </header>

        <!-- Main Content -->
        <main class="container mx-auto px-4 py-8">
            <div class="hero min-h-[80vh]">
                <div class="hero-content text-center">
                    <div class="max-w-md">
                        <h1 class="text-5xl font-bold mb-8">{{ config('app.name', 'SICODI') }}</h1>
                        <p class="text-lg text-base-content/70 mb-8">
                            Esta es una página en blanco lista para tu contenido.
                        </p>
                        
                        @guest
                            <div class="flex gap-4 justify-center">
                                <a href="{{ route('login') }}" class="btn btn-primary">
                                    Iniciar sesión
                                </a>
                                <a href="{{ route('register') }}" class="btn btn-outline">
                                    Registrarse
                                </a>
                            </div>
                        @else
                            <div class="flex gap-4 justify-center">
                                <a href="{{ url('/dashboard') }}" class="btn btn-primary">
                                    Ir al panel de control
                                </a>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
