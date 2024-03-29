@if ($label)
    <div {{ $attributes->twMerge(['class' => $classes]) }}>
        <div {{ $attributes->twMergeFor('label', 'tui-label '.$labelClasses) }}>
            {{ $label }}
        </div>
    </div>
@else
    <img {{ $attributes->twMerge(['class' => $classes]) }} src="{{ $img }}" alt="{{ $alt }}">
@endif