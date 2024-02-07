<span {{ $attributes->twMerge(['class' => $classes]) }}>
    @isset($prefix)
        <span {{ $attributes->twMergeFor('prefix', 'tui-prefix '.$prefixClasses) }}>{!! $prefix !!}</span>
    @endisset
    @isset($icon)
        <span {{ $attributes->twMergeFor('icon', 'tui-icon '.$iconClasses) }}>{!! $icon !!}</span>
    @endisset
        <span {{ $attributes->twMergeFor('content', 'tui-content '.$contentClasses) }}>{{ $slot }}</span>
    @isset($suffix)
        <span {{ $attributes->twMergeFor('suffix', 'tui-suffix '.$suffixClasses) }}>{!! $suffix !!}</span>
    @endisset
</span>