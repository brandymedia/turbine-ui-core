<x-guest-layout>
    <x-t-card
        border="false"
        size="xl"
        class="-mx-6 -my-4"
    >
        <x-slot:header>
            <x-t-heading
                variant="light"
                level="3"
                size="sm"
                class="mb-0 text-center"
            >
                {{ __('Verify your email') }}
            </x-t-heading>
        </x-slot:header>
        <x-slot:body>
            @if (session('status') == 'verification-link-sent')
                <x-t-alert
                    variant="success"
                    dismissible
                    accent
                    border="false"
                    shadow
                    class="mb-5"
                >
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </x-t-alert>
            @endif
            <x-turbine-ui-alert
                variant="warning"
                accent
                border="false"
                shadow
                class="mb-5"
                >
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </x-turbine-ui-alert>
        </x-slot:body>
        <x-slot:footer>
            <x-t-grid cols="2" gap="sm">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <x-t-button
                        type="submit"
                        variant="success"
                        size="sm"
                        full
                    >
                        {{ __('Resend Verification Email') }}
                    </x-t-button>
                </form>
                <form method="POST" action="{{ route('logout') }}" class="md:order-first">
                    @csrf
                    <x-t-button
                        type="submit"
                        size="sm"
                        full
                        link
                        class="underline"
                    >
                        {{ __('Log Out') }}
                    </x-t-button>
                </form>
            </x-t-grid>
        </x-slot:footer>
    </x-t-card>
</x-guest-layout>