<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-base-200 antialiased">
        <div class="relative grid h-screen flex-col items-center justify-center px-8 sm:px-0 lg:max-w-none lg:grid-cols-2 lg:px-0">
            <div class="bg-neutral relative hidden h-full flex-col p-10 text-neutral-content lg:flex">
                <div class="absolute inset-0 bg-gradient-to-br from-primary to-secondary"></div>
                <a href="{{ route('home') }}" class="relative z-20 flex items-center text-lg font-medium text-primary-content" wire:navigate>
                    <span class="flex h-10 w-10 items-center justify-center rounded-md">
                        <x-app-logo-icon class="me-2 h-7 fill-current text-primary-content" />
                    </span>
                    {{ config('app.name', 'SICODI') }}
                </a>

                @php
                    [$message, $author] = str(Illuminate\Foundation\Inspiring::quotes()->random())->explode('-');
                @endphp

                <div class="relative z-20 mt-auto">
                    <blockquote class="space-y-2">
                        <p class="text-lg font-semibold text-primary-content">&ldquo;{{ trim($message) }}&rdquo;</p>
                        <footer>
                            <p class="font-medium text-primary-content/80">{{ trim($author) }}</p>
                        </footer>
                    </blockquote>
                </div>
            </div>
            <div class="w-full lg:p-8">
                <div class="mx-auto flex w-full flex-col justify-center space-y-6 sm:w-[350px]">
                    <a href="{{ route('home') }}" class="z-20 flex flex-col items-center gap-2 font-medium lg:hidden" wire:navigate>
                        <span class="flex h-9 w-9 items-center justify-center rounded-md">
                            <x-app-logo-icon class="size-9 fill-current text-base-content" />
                        </span>

                        <span class="sr-only">{{ config('app.name', 'SICODI') }}</span>
                    </a>
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
