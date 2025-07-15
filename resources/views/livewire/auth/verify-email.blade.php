<div class="mt-4 flex flex-col gap-6">
    <div class="alert alert-info">
        <x-lucide-info class="stroke-current shrink-0 w-6 h-6" />
        <span>{{ __('Please verify your email address by clicking on the link we just emailed to you.') }}</span>
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="alert alert-success">
            <x-lucide-check-circle class="stroke-current shrink-0 h-6 w-6" />
            <span>{{ __('A new verification link has been sent to the email address you provided during registration.') }}</span>
        </div>
    @endif

    <div class="flex flex-col items-center justify-between space-y-3">
        <button wire:click="sendVerification" class="btn btn-primary btn-block">
            {{ __('Resend verification email') }}
        </button>

        <a class="link link-primary text-sm cursor-pointer" wire:click="logout">
            {{ __('Log out') }}
        </a>
    </div>
</div>
