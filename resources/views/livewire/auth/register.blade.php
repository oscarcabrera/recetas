<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="register" class="flex flex-col gap-6">
        <!-- Name -->
        <div class="form-control w-full">
            <label class="label">
                <span class="label-text font-semibold">{{ __('Name') }}</span>
            </label>
            <input 
                wire:model="name"
                type="text"
                class="input input-bordered input-primary focus:input-primary w-full"
                required
                autofocus
                autocomplete="name"
                placeholder="{{ __('Full name') }}"
            />
            @error('name')
                <div class="label">
                    <span class="label-text-alt text-error">{{ $message }}</span>
                </div>
            @enderror
        </div>

        <!-- Email Address -->
        <div class="form-control w-full">
            <label class="label">
                <span class="label-text font-semibold">{{ __('Email address') }}</span>
            </label>
            <input 
                wire:model="email"
                type="email"
                class="input input-bordered input-primary focus:input-primary w-full"
                required
                autocomplete="email"
                placeholder="email@example.com"
            />
            @error('email')
                <div class="label">
                    <span class="label-text-alt text-error">{{ $message }}</span>
                </div>
            @enderror
        </div>

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

        <!-- Confirm Password -->
        <div class="form-control w-full">
            <label class="label">
                <span class="label-text font-semibold">{{ __('Confirm password') }}</span>
            </label>
            <div class="relative">
                <input 
                    wire:model="password_confirmation"
                    type="password"
                    class="input input-bordered input-primary focus:input-primary w-full pr-12"
                    required
                    autocomplete="new-password"
                    placeholder="{{ __('Confirm password') }}"
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

        <div class="form-control w-full mt-2">
            <button type="submit" class="btn btn-primary btn-block">
                {{ __('Create account') }}
            </button>
        </div>
    </form>

    <div class="text-center">
        <span class="text-sm text-base-content/70">{{ __('Already have an account?') }}</span>
        <a href="{{ route('login') }}" wire:navigate class="link link-primary font-semibold">
            {{ __('Log in') }}
        </a>
    </div>
</div>

<script>
function togglePassword(inputId) {
    const input = document.getElementById(inputId);
    const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
    input.setAttribute('type', type);
}
</script>
