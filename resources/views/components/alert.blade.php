<div {{ $attributes->twMerge(['class' => $classes]) }}>
    @isset($icon)
        {!! $icon !!}
    @endisset
    <div {{ $attributes->twMergeFor('content', $contentClasses) }}>
        @isset($title)
            <h3 {{ $attributes->twMergeFor('title', $titleClasses) }}>{{ $title }}</h3>
        @endisset
        @if($slot->isNotEmpty())
            <span>{{ $slot }}</span>
        @endif
    </div>
    @isset($dismissible)
        <button type="button" aria-label="{{ __('Dismiss alert') }}" {{ $attributes->twMergeFor('dismiss-button', 'tui-alert tui-dismissible '.$dismissButtonClasses) }}>
            <svg viewBox="0 0 10 10" {{ $attributes->twMergeFor('dismiss-icon', $dismissIconClasses) }}>
                <polygon points="10 2.5 7.5 0 5 2.5 2.5 0 0 2.5 2.5 5 0 7.5 2.5 10 5 7.5 7.5 10 10 7.5 7.5 5 10 2.5"/>
            </svg>
        </button>
    @endisset
</div>
