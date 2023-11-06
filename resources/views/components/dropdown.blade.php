<div class="turbine-ui-dropdown-{{ $target }}">
    {{ $slot }}
    <div id="{{ $target }}" {{ $attributes->twMerge(['class' => $classes]) }}>
        {{ $content }}
    </div>
    <script>
        let thisDropdownContainer{{ Str::studly($target) }} = document.querySelector('.turbine-ui-dropdown-{{ $target }}');
        let thisDropdown{{ Str::studly($target) }} = document.querySelector('#{{ $target }}');
        let thisDropdownButton{{ Str::studly($target) }} = thisDropdownContainer{{ Str::studly($target) }}.querySelector('button');

        function closeDropdown{{ Str::studly($target) }}() {
            thisDropdown{{ Str::studly($target) }}.classList.add('hidden');
            thisDropdown{{ Str::studly($target) }}.classList.remove('absolute');
            thisDropdownContainer{{ Str::studly($target) }}.classList.remove('opened');
        }

        thisDropdownButton{{ Str::studly($target) }}.addEventListener('click', (e) => {
            thisDropdown{{ Str::studly($target) }}.classList.toggle('hidden');
            thisDropdown{{ Str::studly($target) }}.classList.toggle('absolute');
            thisDropdownContainer{{ Str::studly($target) }}.classList.toggle('opened');
            e.stopPropagation();
        });

        document.addEventListener('click', (e) => {
            if (!thisDropdownContainer{{ Str::studly($target) }}.contains(e.target)) {
                closeDropdown{{ Str::studly($target) }}();
            }
        });
    </script>
</div>