<section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Profile')" :subheading="__('Update your name and email address')">
        <form wire:submit="updateProfileInformation" class="my-6 w-full space-y-6">
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
                />
                @error('name')
                    <div class="label">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror
            </div>

            <!-- Email -->
            <div class="form-control w-full">
                <label class="label">
                    <span class="label-text font-semibold">{{ __('Email') }}</span>
                </label>
                <input 
                    wire:model="email"
                    type="email"
                    class="input input-bordered input-primary focus:input-primary w-full"
                    required
                    autocomplete="email"
                />
                @error('email')
                    <div class="label">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror

                @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail &&! auth()->user()->hasVerifiedEmail())
                    <div class="mt-4">
                        <div class="alert alert-warning">
                            <x-lucide-alert-triangle class="stroke-current shrink-0 h-6 w-6" />
                            <div>
                                <span>{{ __('Your email address is unverified.') }}</span>
                                <a class="link link-primary text-sm cursor-pointer" wire:click.prevent="resendVerificationNotification">
                                    {{ __('Click here to re-send the verification email.') }}
                                </a>
                            </div>
                        </div>

                        @if (session('status') === 'verification-link-sent')
                            <div class="alert alert-success mt-2">
                                <x-lucide-check-circle class="stroke-current shrink-0 h-6 w-6" />
                                <span>{{ __('A new verification link has been sent to your email address.') }}</span>
                            </div>
                        @endif
                    </div>
                @endif
            </div>

            <div class="flex items-center gap-4">
                <div class="flex items-center justify-end">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Save') }}
                    </button>
                </div>

                <x-action-message class="me-3" on="profile-updated">
                    {{ __('Saved.') }}
                </x-action-message>
            </div>
        </form>

        <livewire:settings.delete-user-form />
    </x-settings.layout>
</section>
