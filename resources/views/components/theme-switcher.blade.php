@php
    $lightIcon = config('turbine.components.theme-switcher.icons.light') ?? "<svg class='w-5 h-5 fill-current' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' data-slot='icon'><path stroke-linecap='round' stroke-linejoin='round' d='M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z' /></svg>";
    $darkIcon = config('turbine.components.theme-switcher.icons.dark') ?? "<svg class='w-5 h-5 fill-current' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' data-slot='icon'><path stroke-linecap='round' stroke-linejoin='round' d='M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z' /></svg>";
    $systemIcon = config('turbine.components.theme-switcher.icons.system') ?? "<svg class='w-5 h-5 fill-current' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' data-slot='icon'><path fill-rule='evenodd' d='M2.25 5.25a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3V15a3 3 0 0 1-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 0 1-.53 1.28h-9a.75.75 0 0 1-.53-1.28l.621-.622a2.25 2.25 0 0 0 .659-1.59V18h-3a3 3 0 0 1-3-3V5.25Zm1.5 0v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5Z' clip-rule='evenodd' /></svg>";
@endphp
<x-t-dropdown variant="{{ $variant }}" size="{{ $size }}" target="theme" {{ $attributes->twMerge('tui-theme-switcher ' . $classes) }}>
    <x-t-button variant="{{ $variant }}" size="{{ $size }}" {{ $attributes->twMergeFor('switch-button', 'tui-theme-switcher-button '.$switchButtonClasses) }}></x-t-button>
    <x-slot:content>
        <x-t-list-group variant="{{ $variant }}" size="{{ $size }}" {{ $attributes->twMergeFor('list-group', $listGroupClasses) }}>
            @if (config('turbine.components.theme-switcher.options.light') !== false)
                <x-t-button variant="{{ $variant }}" size="{{ $size }}" rounded="false" prefix="{!! $lightIcon !!}" data-theme="light" {{ $attributes->twMergeFor('light-button', 'tui-theme-switcher-option '.$lightButtonClasses) }}>
                    {{ config('turbine.components.theme-switcher.text.light') ?? __('Light') }}
                </x-t-button>
            @endif
            @if (config('turbine.components.theme-switcher.options.dark') !== false)
                <x-t-button variant="{{ $variant }}" size="{{ $size }}" rounded="false" prefix="{!! $darkIcon !!}" data-theme="dark" {{ $attributes->twMergeFor('dark-button', 'tui-theme-switcher-option '.$darkButtonClasses) }}>
                    {{ config('turbine.components.theme-switcher.text.dark') ?? __('Dark') }}
                </x-t-button>
            @endif
            @if (config('turbine.components.theme-switcher.options.system') !== false)            
                <x-t-button variant="{{ $variant }}" size="{{ $size }}" rounded="false" prefix="{!! $systemIcon !!}" data-theme="system" {{ $attributes->twMergeFor('system-button', 'tui-theme-switcher-option '.$systemButtonClasses) }}>
                    {{ config('turbine.components.theme-switcher.text.system') ?? __('System') }}
                </x-t-button>
            @endif
        </x-t-list-group>
    </x-slot:content>
</x-t-dropdown>

<script>
    let themeSwitcher = document.querySelector('.tui-theme-switcher');
    let themeSwitcherButton = document.querySelector('.tui-theme-switcher-button');
    let themeSwitcherOptions = document.querySelectorAll('.tui-theme-switcher-option');
    let lightIcon = "{!! $lightIcon !!} {{ config('turbine.components.theme-switcher.text.button') ?? '' }}";
    let darkIcon = "{!! $darkIcon !!} {{ config('turbine.components.theme-switcher.text.button') ?? '' }}";
    let systemIcon = "{!! $systemIcon !!} {{ config('turbine.components.theme-switcher.text.button') ?? '' }}";

    function toggleTheme()
    {
        if (localStorage.getItem('color-theme') === 'dark') {
            document.documentElement.classList.add('dark');
            themeSwitcherButton.innerHTML = darkIcon;
        } else if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.remove('dark');
            themeSwitcherButton.innerHTML = lightIcon;
        } if (!localStorage.getItem('color-theme')) {
            themeSwitcherButton.innerHTML = systemIcon;
            if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        }
    }

    themeSwitcherOptions.forEach(function (option) {
        option.addEventListener('click', function (e) {
            let theme = this.getAttribute('data-theme');
            if (theme === 'dark') {
                localStorage.setItem('color-theme', 'dark');
            } else if (theme === 'light') {
                localStorage.setItem('color-theme', 'light');
            } else {
                localStorage.removeItem('color-theme');
            }
            toggleTheme();
            themeSwitcher.classList.toggle('hidden');
            themeSwitcher.classList.toggle('absolute');
        });
    });

    toggleTheme();
</script>