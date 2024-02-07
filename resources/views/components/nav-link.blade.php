<a href="{{ $href }}" {{ $attributes->twMerge(['class' => $classes]) }}>
    @isset($prefix)
        <span {{ $attributes->twMergeFor('prefix', 'tui-prefix '.$prefixClasses) }}>{!! $prefix !!}</span>
    @endisset
        <span {{ $attributes->twMergeFor('content', 'tui-content '.$contentClasses) }}>{{ $slot }}</span>
    @isset($suffix)
        <span {{ $attributes->twMergeFor('suffix', 'tui-suffix '.$suffixClasses) }}>{!! $suffix !!}</span>
    @endisset
</a>