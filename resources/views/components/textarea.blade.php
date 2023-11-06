<div>
    @if ($label)
        <x-turbine-ui-label for="{{ $attributes['name'] }}" variant="{{ $variant }}" size="{{ $size }}">{{ $label }}</x-turbine-ui-label>
    @endif
    <div {{ $attributes->only('class')->twMerge(['class' => $classes]) }}>
        @isset($header)
            <div {{ $header->attributes->class([]) }}>
                {{ $header }}
            </div>
        @endisset
        <textarea {{ $attributes->except('class') }}>{{ $slot }}</textarea>
        @isset($footer)
            <div {{ $footer->attributes->class([]) }}>
                {{ $footer }}
            </div>
        @endisset
    </div>
</div>