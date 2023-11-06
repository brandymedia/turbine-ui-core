<a href="{{ $href }}" {{ $attributes->twMerge(['class' => $classes]) }}>
    @isset($prefix)
        <span class="tui-prefix">{!! $prefix !!}</span>
    @endisset
    <span class="tui-content">{{ $slot }}</span>
    @isset($suffix)
        <span class="tui-suffix">{!! $suffix !!}</span>
    @endisset
</a>