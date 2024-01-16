@php
    $base = $attributes->withoutTwMergeClasses()->twMerge(['class' => $classes]);
@endphp
<div {{ $attributes->twMergeFor('progress-wrapper', 'tui-progress-wrapper '.$progressWrapperClasses) }}>
    <div {{ $attributes->twMergeFor('text-wrapper', 'tui-text-wrapper '.$textWrapperClasses) }}>
        @if ($label)
            <x-turbine-ui-label for="{{ $attributes['id'] }}" variant="{{ $variant }}" {{ $attributes->twMergeFor('label', 'tui-label '.$labelClasses) }}>{{ $label }}</x-turbine-ui-label>
        @endif
        <span {{ $attributes->twMergeFor('percentage', 'tui-percentage '.$percentageClasses) }}>{{ $percentage ? $percentage : 0 }}%</span>
    </div>
    <div {{ $attributes->twMergeFor('bar', 'tui-bar '.$barClasses) }}>
        <div {{ $base }} style="width: {{ $percentage ? $percentage : 0 }}%"></div>
    </div>
</div>