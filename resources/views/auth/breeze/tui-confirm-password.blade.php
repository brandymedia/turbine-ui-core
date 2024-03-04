<x-guest-layout>
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
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
                    {{ __('Confirm password') }}
                </x-t-heading>
            </x-slot:header>
            <x-slot:body>
                @if ($errors->any()) 
                    <x-turbine-ui-alert
                        variant="danger"
                        dismissible
                        accent
                        border="false"
                        shadow
                        class="mb-5"
                    >
                        <ul class="list-none">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </x-turbine-ui-alert>
                @endif
                <x-turbine-ui-alert
                    variant="warning"
                    accent
                    border="false"
                    shadow
                    class="mb-5"
                >
                    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                </x-turbine-ui-alert>
                <x-t-input
                    variant="{{ $errors->get('password') ? 'danger' : '' }}"
                    type="password"
                    name="password"
                    id="password"
                    label="{{ __('Password') }}"
                    size="sm"
                    autocomplete="current-password"
                    required
                />
            </x-slot:body>
            <x-slot:footer>
                <x-t-grid cols="2" gap="sm">
                    <x-t-button
                        type="submit"
                        variant="success"
                        size="sm"
                    >
                        {{ __('Confirm') }}
                    </x-t-button>
                    @if (Route::has('password.request'))
                        <div class="flex justify-center items-center md:order-first">
                            <x-t-link
                                href="{{ route('password.request') }}"
                                size="sm"
                            >
                                {{ __('Forgot your password?') }}
                            </x-t-link>
                        </div>
                    @endif
                </x-t-grid>
            </x-slot:footer>
        </x-t-card>
    </form>
</x-guest-layout>