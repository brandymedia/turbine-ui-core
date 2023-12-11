@aware(['combine'])

@php
if ($combine) {
    $classes = $classes . ' m-0 border-none rounded-none';
}
@endphp

@isset ($href)
    <a
        href="{{ $href }}"
        {{ $attributes->twMerge(['class' => $classes]) }}
    >
    @isset($prefix)
        <span class="tui-prefix">{!! $prefix !!}</span>
    @endisset
    <span class="tui-content">{{ $slot }}</span>
    @isset($suffix)
        <span class="tui-suffix">{!! $suffix !!}</span>
    @endisset
    </a>
@else
    <button
        type="{{ $type }}"
        {{ $attributes->twMerge(['class' => $classes]) }}
    >
    @isset($prefix)
        <span class="tui-prefix">{!! $prefix !!}</span>
    @endisset
    <span class="tui-content">{{ $slot }}</span>
    @isset($suffix)
        <span class="tui-suffix">{!! $suffix !!}</span>
    @endisset
    </button>
@endisset