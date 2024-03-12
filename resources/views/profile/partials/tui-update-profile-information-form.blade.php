@if (session('status') === 'profile-updated')
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
<form id="send-verification" method="post" action="{{ route('verification.send') }}">
    @csrf
</form>
<form method="post" action="{{ route('profile.update') }}">
    @csrf
    @method('patch')
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
                    {{ __('Profile Information') }}
            </x-t-heading>
        </x-slot:header>
        <x-slot:body>
            <x-t-text size="sm">{{ __("Update your account's profile information and email address.") }}</x-t-text>
            <x-t-input
                type="text"
                label="{{__('Name')}}"
                name="name"
                size="sm"
                :value="old('name', $user->name)"
                variant="{{ $errors->get('name') ? 'danger' : '' }}"
                required
                autofocus
                autocomplete="name"
            />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            <x-t-input
                type="text"
                label="{{__('Email')}}"
                name="email"
                size="sm"
                :value="old('email', $user->email)"
                variant="{{ $errors->get('email') ? 'danger' : '' }}"
                required
                autocomplete="username"
                class="mb-0"
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <x-turbine-ui-alert
                    variant="warning"
                    accent
                    border="false"
                    shadow
                    class="my-5"
                >
                    <x-t-grid cols="2" gap="sm" class="md:items-center">
                        <x-t-text variant="warning" class="mb-0">{{ __('Your email address is unverified.') }}</x-t-text>
                        <x-t-button
                            type=""
                            form="send-verification"
                            variant="success"
                            size="sm"
                        >
                            {{ __('Resend Verification Email') }}
                        </x-t-button>
                    </x-t-grid>
                </x-turbine-ui-alert>
                @if (session('status') === 'verification-link-sent')
                    <x-turbine-ui-alert
                        variant="success"
                        accent
                        border="false"
                        shadow
                        class="my-5"
                    >
                        <x-t-text variant="success" class="mb-0">{{ __('A new verification link has been sent to your email address.') }}</x-t-text>
                    </x-turbine-ui-alert>
                @endif    
            @endif
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