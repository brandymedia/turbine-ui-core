<div {{ $attributes->twMerge(['class' => $classes]) }}>
    {{ $slot }}
    @isset($header)
        <div {{ $header->attributes->class([]) }}>
            {{ $header }}
        </div>
    @endisset
    @isset($body)
        <div {{ $body->attributes->class([]) }}>
            {{ $body }}
        </div>
    @endisset
    @isset($footer)
        <div {{ $footer->attributes->class([]) }}>
            {{ $footer }}
        </div>
    @endisset
</div>