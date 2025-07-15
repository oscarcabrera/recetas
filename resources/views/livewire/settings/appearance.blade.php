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
                        <x-lucide-sun class="h-4 w-4 mr-1 inline" />
                        {{ __('Light') }}
                    </span>
                </label>
                <label class="label cursor-pointer">
                    <input type="radio" name="theme" value="dark" class="radio radio-primary" onclick="document.documentElement.setAttribute('data-theme', 'dark')" />
                    <span class="label-text ml-2">
                        <x-lucide-moon class="h-4 w-4 mr-1 inline" />
                        {{ __('Dark') }}
                    </span>
                </label>
                <label class="label cursor-pointer">
                    <input type="radio" name="theme" value="system" class="radio radio-primary" onclick="setSystemTheme()" />
                    <span class="label-text ml-2">
                        <x-lucide-monitor class="h-4 w-4 mr-1 inline" />
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
