<div {{ $attributes->twMerge(['class' => $classes]) }}>
    {{ $slot }}
    @isset($header)
        <div {{ $attributes->twMergeFor('header', 'tui-header '.$headerClasses.' '.$header->attributes['class']) }}>
            {{ $header }}
        </div>
    @endisset
    @isset($body)
        <div {{ $attributes->twMergeFor('body', 'tui-body '.$bodyClasses.' '.$body->attributes['class']) }}>
            {{ $body }}
        </div>
    @endisset
    @isset($footer)
        <div {{ $attributes->twMergeFor('footer', 'tui-footer '.$footerClasses.' '.$footer->attributes['class']) }}>
            {{ $footer }}
        </div>
    @endisset
</div>