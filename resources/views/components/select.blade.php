@php
    $base = $attributes->only('class')->withoutTwMergeClasses()->twMerge(['class' => $classes]);
@endphp

@if ($label)
<div {{ $attributes->twMergeFor('select-wrapper', 'tui-select-wrapper '.$selectWrapperClasses) }}>
    <x-turbine-ui-label for="{{ $attributes['name'] }}" variant="{{ $variant }}" {{ $attributes->twMergeFor('label', 'tui-label '.$labelClasses) }}>{{ $label }}<span {{ $attributes->twMergeFor('hint', 'tui-hint '.$hintClasses) }}>{{ $hint }}</span></x-turbine-ui-label>
@endif
    <div {{ $base }}>
        @if ($prefix)
            <div {{ $attributes->twMergeFor('prefix', 'tui-prefix '.$prefixClasses) }}>{!! $prefix !!}</i></div>
        @endif
            <select {{ $attributes->except('class') }} {{ $attributes->twMergeFor('select', 'tui-select '.$selectClasses) }}>
                {{ $slot }}
            </select>
        @if ($suffix)
            <div {{ $attributes->twMergeFor('suffix', 'tui-suffix '.$suffixClasses) }}>{!! $suffix !!}</i></div>
        @endif
    </div>
@if ($label)
</div>
@endif