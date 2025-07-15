<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Log in to your account')" :description="__('Enter your email and password below to log in')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="login" class="flex flex-col gap-6">
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
                autofocus
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
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" wire:navigate class="label-text-alt link link-primary">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </label>
            <div class="relative">
                <input 
                    wire:model="password"
                    type="password"
                    class="input input-bordered input-primary focus:input-primary w-full pr-12"
                    required
                    autocomplete="current-password"
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

        <!-- Remember Me -->
        <div class="form-control w-full">
            <label class="cursor-pointer label justify-start gap-3">
                <input 
                    wire:model="remember"
                    type="checkbox"
                    class="checkbox checkbox-primary"
                />
                <span class="label-text">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="form-control w-full mt-2">
            <button type="submit" class="btn btn-primary btn-block">
                {{ __('Log in') }}
            </button>
        </div>
    </form>

    @if (Route::has('register'))
        <div class="text-center">
            <span class="text-sm text-base-content/70">{{ __('Don\'t have an account?') }}</span>
            <a href="{{ route('register') }}" wire:navigate class="link link-primary font-semibold">
                {{ __('Sign up') }}
            </a>
        </div>
    @endif
</div>

<script>
function togglePassword(inputId) {
    const input = document.getElementById(inputId);
    const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
    input.setAttribute('type', type);
}
</script>
