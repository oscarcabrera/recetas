<section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Appearance')" :subheading=" __('Update the appearance settings for your account')">
        <div class="form-control">
            <label class="label">
                <span class="label-text font-semibold">{{ __('Theme') }}</span>
            </label>
            <div class="flex gap-4">
                <label class="label cursor-pointer">
                    <input type="radio" name="theme" value="light" class="radio radio-primary" onclick="document.documentElement.setAttribute('data-theme', 'light')" checked />
                    <span class="label-text ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        {{ __('Light') }}
                    </span>
                </label>
                <label class="label cursor-pointer">
                    <input type="radio" name="theme" value="dark" class="radio radio-primary" onclick="document.documentElement.setAttribute('data-theme', 'dark')" />
                    <span class="label-text ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                        {{ __('Dark') }}
                    </span>
                </label>
                <label class="label cursor-pointer">
                    <input type="radio" name="theme" value="system" class="radio radio-primary" onclick="setSystemTheme()" />
                    <span class="label-text ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        {{ __('System') }}
                    </span>
                </label>
            </div>
        </div>

        <script>
        function setSystemTheme() {
            const systemTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            document.documentElement.setAttribute('data-theme', systemTheme);
        }
        </script>
    </x-settings.layout>
</section>
