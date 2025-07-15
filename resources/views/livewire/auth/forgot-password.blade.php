<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Forgot password')" :description="__('Enter your email to receive a password reset link')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="sendPasswordResetLink" class="flex flex-col gap-6">
        <!-- Email Address -->
        <div class="form-control w-full">
            <label class="label">
                <span class="label-text font-semibold">{{ __('Email Address') }}</span>
            </label>
            <input 
                wire:model="email"
                type="email"
                class="input input-bordered input-primary focus:input-primary w-full"
                required
                autofocus
                placeholder="email@example.com"
            />
            @error('email')
                <div class="label">
                    <span class="label-text-alt text-error">{{ $message }}</span>
                </div>
            @enderror
        </div>

        <div class="form-control w-full">
            <button type="submit" class="btn btn-primary btn-block">
                {{ __('Email password reset link') }}
            </button>
        </div>
    </form>

    <div class="text-center">
        <span class="text-sm text-base-content/70">{{ __('Or, return to') }}</span>
        <a href="{{ route('login') }}" wire:navigate class="link link-primary font-semibold">
            {{ __('log in') }}
        </a>
    </div>
</div>
