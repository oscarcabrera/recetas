<section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Update password')" :subheading="__('Ensure your account is using a long, random password to stay secure')">
        <form wire:submit="updatePassword" class="mt-6 space-y-6">
            <!-- Current Password -->
            <div class="form-control w-full">
                <label class="label">
                    <span class="label-text font-semibold">{{ __('Current password') }}</span>
                </label>
                <div class="relative">
                    <input 
                        wire:model="current_password"
                        type="password"
                        class="input input-bordered input-primary focus:input-primary w-full pr-12"
                        required
                        autocomplete="current-password"
                        id="current_password"
                    />
                    <button 
                        type="button"
                        class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600"
                        onclick="togglePassword('current_password')"
                    >
                        <x-lucide-eye class="h-5 w-5" />
                    </button>
                </div>
                @error('current_password')
                    <div class="label">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror
            </div>

            <!-- New Password -->
            <div class="form-control w-full">
                <label class="label">
                    <span class="label-text font-semibold">{{ __('New password') }}</span>
                </label>
                <div class="relative">
                    <input 
                        wire:model="password"
                        type="password"
                        class="input input-bordered input-primary focus:input-primary w-full pr-12"
                        required
                        autocomplete="new-password"
                        id="password"
                    />
                    <button 
                        type="button"
                        class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600"
                        onclick="togglePassword('password')"
                    >
                        <x-lucide-eye class="h-5 w-5" />
                    </button>
                </div>
                @error('password')
                    <div class="label">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="form-control w-full">
                <label class="label">
                    <span class="label-text font-semibold">{{ __('Confirm Password') }}</span>
                </label>
                <div class="relative">
                    <input 
                        wire:model="password_confirmation"
                        type="password"
                        class="input input-bordered input-primary focus:input-primary w-full pr-12"
                        required
                        autocomplete="new-password"
                        id="password_confirmation"
                    />
                    <button 
                        type="button"
                        class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600"
                        onclick="togglePassword('password_confirmation')"
                    >
                        <x-lucide-eye class="h-5 w-5" />
                    </button>
                </div>
                @error('password_confirmation')
                    <div class="label">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror
            </div>

            <div class="flex items-center gap-4">
                <div class="flex items-center justify-end">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Save') }}
                    </button>
                </div>

                <x-action-message class="me-3" on="password-updated">
                    {{ __('Saved.') }}
                </x-action-message>
            </div>
        </form>
    </x-settings.layout>
</section>

<script>
function togglePassword(inputId) {
    const input = document.getElementById(inputId);
    const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
    input.setAttribute('type', type);
}
</script>
