@if ($label)
<div {{ $attributes->twMergeFor('select-wrapper', 'tui-select-wrapper '.$selectWrapperClasses) }}>
    <x-turbine-ui-label for="{{ $attributes['name'] }}" variant="{{ $variant }}" {{ $attributes->twMergeFor('label', 'tui-label '.$labelClasses) }}>{{ $label }}</x-turbine-ui-label>
@endif
    <div {{ $attributes->only('class')->twMerge(['class' => $classes]) }}>
        @if ($prefix)
            <div {{ $attributes->twMergeFor('prefix', 'tui-prefix '.$prefixClasses) }}>{!! $prefix !!}</i></div>
        @endif
            <div class="flex-1 grow z-10">
                <select {{ $attributes->except('class') }} {{ $attributes->twMergeFor('select', 'tui-select '.$selectClasses) }}>
                    {{ $slot }}
                </select>
            </div>
        @if ($suffix)
            <div {{ $attributes->twMergeFor('suffix', 'tui-suffix '.$suffixClasses) }}>{!! $suffix !!}</i></div>
        @endif
    </div>
@if ($label)
</div>
@endif