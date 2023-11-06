<label {{ $attributes->twMerge(['class' => $classes]) }}>
    @isset($icon)
        {!! $icon !!}
    @endisset
    {{ $slot }}
</label>