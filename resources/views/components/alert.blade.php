<div {{ $attributes->twMerge(['class' => $classes]) }}>
    @isset($icon)
        {!! $icon !!}
    @endisset
    <div class="flex flex-col flex-1">
        @isset($title)
            <h3 class="title">{{ $title }}</h3>
        @endisset
        @if($slot->isNotEmpty())
            <span class="{{ isset($title) ? 'mt-1' : ''}}">{{ $slot }}</span>
        @endif
    </div>
    @isset($dismissible)
        <button class="turbine-ui-alert turbine-ui-dismissible">
            <svg viewBox="0 0 10 10">
                <polygon points="10 2.5 7.5 0 5 2.5 2.5 0 0 2.5 2.5 5 0 7.5 2.5 10 5 7.5 7.5 10 10 7.5 7.5 5 10 2.5"/>
            </svg>
        </button>
    @endisset
</div>