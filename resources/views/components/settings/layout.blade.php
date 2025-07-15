<div class="flex items-start max-md:flex-col">
    <div class="me-10 w-full pb-4 md:w-[220px]">
        <ul class="menu bg-base-200 rounded-box">
            <li>
                <a href="{{ route('settings.profile') }}" wire:navigate 
                   class="{{ request()->routeIs('settings.profile') ? 'active' : '' }}">
                    <x-lucide-user class="h-5 w-5" />
                    {{ __('Profile') }}
                </a>
            </li>
            <li>
                <a href="{{ route('settings.password') }}" wire:navigate 
                   class="{{ request()->routeIs('settings.password') ? 'active' : '' }}">
                    <x-lucide-key class="h-5 w-5" />
                    {{ __('Password') }}
                </a>
            </li>
            <li>
                <a href="{{ route('settings.appearance') }}" wire:navigate 
                   class="{{ request()->routeIs('settings.appearance') ? 'active' : '' }}">
                    <x-lucide-monitor class="h-5 w-5" />
                    {{ __('Appearance') }}
                </a>
            </li>
        </ul>
    </div>

    <div class="divider divider-horizontal md:hidden"></div>

    <div class="flex-1 self-stretch max-md:pt-6">
        <h2 class="text-2xl font-bold text-base-content mb-2">{{ $heading ?? '' }}</h2>
        <p class="text-base-content/70 text-lg mb-5">{{ $subheading ?? '' }}</p>

        <div class="mt-5 w-full max-w-lg">
            {{ $slot }}
        </div>
    </div>
</div>
