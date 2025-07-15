<div class="flex flex-col gap-6">
    <x-auth-header
        :title="__('Confirm password')"
        :description="__('This is a secure area of the application. Please confirm your password before continuing.')"
    />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="confirmPassword" class="flex flex-col gap-6">
        <!-- Password -->
        <div class="form-control w-full">
            <label class="label">
                <span class="label-text font-semibold">{{ __('Password') }}</span>
            </label>
            <div class="relative">
                <input 
                    wire:model="password"
                    type="password"
                    class="input input-bordered input-primary focus:input-primary w-full pr-12"
                    required
                    autocomplete="new-password"
                    placeholder="{{ __('Password') }}"
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

        <div class="form-control w-full mt-2">
            <button type="submit" class="btn btn-primary btn-block">
                {{ __('Confirm') }}
            </button>
        </div>
    </form>
</div>

<script>
function togglePassword(inputId) {
    const input = document.getElementById(inputId);
    const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
    input.setAttribute('type', type);
}
</script>
