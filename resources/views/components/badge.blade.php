<span {{ $attributes->twMerge(['class' => $classes]) }}>
    @isset($icon)
        {!! $icon !!}
    @endisset
    {{ $slot }}
</span>