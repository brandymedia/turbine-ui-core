<div {{ $attributes->twMerge(['class' => $classes]) }}>
    {{ $slot }}
    @isset($thumbnail)
        <div {{ $thumbnail->attributes->class(['tui-media-thumbnail shrink-0']) }}>
            {{ $thumbnail }}
        </div>
    @endisset
    <div class="tui-media-body">
        @isset($title)
            <div {{ $title->attributes->class(['tui-media-title']) }}>
                {{ $title }}
            </div>
        @endisset
        @isset($description)
            <div {{ $description->attributes->class(['tui-media-description']) }}>
                {{ $description }}
            </div>
        @endisset
    </div>
</div>