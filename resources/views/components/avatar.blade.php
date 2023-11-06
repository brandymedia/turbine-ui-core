@if ($label)
    <div {{ $attributes->twMerge(['class' => $classes]) }}>
        <div class="tui-label">
            {{ $label }}
        </div>
    </div>
@else
    <img {{ $attributes->twMerge(['class' => $classes]) }} src="{{ $img }}" alt="{{ $alt }}">
@endif