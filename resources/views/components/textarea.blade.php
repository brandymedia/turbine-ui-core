@php
    $base = $attributes->withoutTwMergeClasses()->twMerge(['class' => $classes]);
@endphp
@if ($label)
<div {{ $attributes->twMergeFor('textarea-wrapper', 'tui-textarea-wrapper '.$textareaWrapperClasses) }}>
    <x-turbine-ui-label for="{{ $attributes['name'] }}" variant="{{ $variant }}" {{ $attributes->twMergeFor('label', 'tui-label '.$labelClasses) }}>{{ $label }}</x-turbine-ui-label>
@endif
    <div {{ $base }}>
        @isset($header)
            <div {{ $attributes->twMergeFor('header', 'tui-header '.$headerClasses.' '.$header->attributes['class']) }}>
                {{ $header }}
            </div>
        @endisset
        <textarea {{ $attributes->except('class') }} {{ $attributes->twMergeFor('textarea', 'tui-textarea '.$textareaClasses) }}>{{ $slot }}</textarea>
        @isset($footer)
            <div {{ $attributes->twMergeFor('footer', 'tui-footer '.$footerClasses.' '.$footer->attributes['class']) }}>
                {{ $footer }}
            </div>
        @endisset
    </div>
@if ($label)
</div>
@endif