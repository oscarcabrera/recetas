<section class="mt-10 space-y-6">
    <div class="relative mb-5">
        <h3 class="text-xl font-bold text-base-content mb-2">{{ __('Delete account') }}</h3>
        <p class="text-base-content/70">{{ __('Delete your account and all of its resources') }}</p>
    </div>

    <button class="btn btn-error" onclick="delete_account_modal.showModal()">
        {{ __('Delete account') }}
    </button>

    <dialog id="delete_account_modal" class="modal">
        <div class="modal-box">
            <form wire:submit="deleteUser" class="space-y-6">
                <div>
                    <h3 class="font-bold text-lg">{{ __('Are you sure you want to delete your account?') }}</h3>
                    <p class="py-4 text-base-content/70">
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                    </p>
                </div>

                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text font-semibold">{{ __('Password') }}</span>
                    </label>
                    <input 
                        wire:model="password"
                        type="password"
                        class="input input-bordered input-primary focus:input-primary w-full"
                        required
                    />
                    @error('password')
                        <div class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </div>
                    @enderror
                </div>

                <div class="modal-action">
                    <button type="button" class="btn" onclick="delete_account_modal.close()">
                        {{ __('Cancel') }}
                    </button>
                    <button type="submit" class="btn btn-error">
                        {{ __('Delete account') }}
                    </button>
                </div>
            </form>
        </div>
    </dialog>
</section>
