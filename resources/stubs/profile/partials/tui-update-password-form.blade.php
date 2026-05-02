@if (session('status') === 'password-updated')
    <div
        x-data="{ show: true }"
        x-show="show"
        x-transition
        x-init="setTimeout(() => show = false, 2000)"
    >
        <x-t-toast
            variant="success"
        >
            {{ __('Saved.') }}
        </x-t-toast>
    </div>
@endif
<form method="post" action="{{ route('password.update') }}">
    @csrf
    @method('put')
    <x-t-card
        border="false"
        size="xl"
        class="-m-4 md:-m-6"
    >
        <x-slot:header>
            <x-t-heading
                variant="light"
                level="3"
                size="sm"
                class="mb-0"
            >
                {{ __('Update Password') }}
            </x-t-heading>
        </x-slot:header>
        <x-slot:body>
            <x-t-text size="sm">{{ __("Ensure your account is using a long, random password to stay secure.") }}</x-t-text>
            <x-t-input
                type="password"
                label="{{__('Current Password')}}"
                name="current_password"
                size="sm"
                variant="{{ $errors->updatePassword->get('current_password') ? 'danger' : '' }}"
                autocomplete="current_password"
            />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mb-2" />
            <x-t-input
                type="password"
                label="{{__('New Password')}}"
                name="password"
                size="sm"
                variant="{{ $errors->updatePassword->get('password') ? 'danger' : '' }}"
                autocomplete="new-password"
            />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mb-2" />
            <x-t-input
                type="password"
                label="{{__('Confirm Password')}}"
                name="password_confirmation"
                size="sm"
                variant="{{ $errors->updatePassword->get('password_confirmation') ? 'danger' : '' }}"
                autocomplete="new-password"
            />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mb-2" />
        </x-slot:body>
        <x-slot:footer>
            <x-t-button
                type="submit"
                variant="success"
                size="sm"
            >
                {{ __('Save') }}
            </x-t-button>
        </x-slot:footer>
    </x-t-card>
</form>