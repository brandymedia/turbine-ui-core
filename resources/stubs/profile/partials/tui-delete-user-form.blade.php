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
            {{ __('Delete Account') }}
        </x-t-heading>
    </x-slot:header>
    <x-slot:body>
        @if ($errors->userDeletion->get('password')) 
            <x-turbine-ui-alert
                variant="danger"
                dismissible
                accent
                border="false"
                shadow
                class="mb-5"
            >
                <ul class="list-none">
                    <li>{{ $errors->userDeletion->get('password')[0] }}</li>
                </ul>
            </x-turbine-ui-alert>
        @endif
        <x-t-text size="sm" class="mb-0">{{ __("Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.") }}</x-t-text>
    </x-slot:body>
    <x-slot:footer>
        <x-t-modal size="xs" target="delete-account" dismissible>
            <x-slot:content>
                <form method="post" action="{{ route('profile.destroy') }}">
                    @csrf
                    @method('delete')
                    <x-t-card
                        border="false"
                        size="xl"
                    >
                        <x-slot:header>
                            <x-t-heading variant="light" level="3" size="sm" class="mb-0">{{ __('Are you sure you want to delete your account?') }}</x-t-heading>
                        </x-slot:header>
                        <x-slot:body>
                            <x-turbine-ui-alert
                                variant="warning"
                                accent
                                border="false"
                                shadow
                                class="mb-5"
                                >
                                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                            </x-turbine-ui-alert>
                            @if ($errors->userDeletion->get('password')) 
                                <x-turbine-ui-alert
                                    variant="danger"
                                    dismissible
                                    accent
                                    border="false"
                                    shadow
                                    class="mb-5"
                                >
                                    <ul class="list-none">
                                        <li>{{ $errors->userDeletion->get('password')[0] }}</li>
                                    </ul>
                                </x-turbine-ui-alert>
                            @endif
                            <x-t-input
                                variant="{{ $errors->userDeletion->get('password') ? 'danger' : '' }}"
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
                                    variant="danger"
                                    size="sm"
                                >
                                    {{ __('Delete Account') }}
                                </x-t-button>
                                <div class="flex justify-center items-center md:order-first">
                                    <x-t-link
                                        href="{{ route('profile.edit') }}"
                                        size="sm"
                                    >
                                        {{ __('Cancel') }}
                                    </x-t-link>
                                </div>
                            </x-t-grid>
                        </x-slot:footer>
                    </x-t-card>
                </form>
            </x-slot:content>
            <x-t-button
                type="submit"
                variant="danger"
                size="sm"
                class="tui-modal-trigger"
            >
                {{ __('Delete Account') }}
            </x-t-button>
        </x-t-modal>
    </x-slot:footer>
</x-t-card>