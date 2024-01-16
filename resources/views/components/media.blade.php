<div {{ $attributes->twMerge(['class' => $classes]) }}>
    {{ $slot }}
    @isset($thumbnail)
        <div {{ $attributes->twMergeFor('thumbnail', 'tui-thumbnail '.$thumbnailClasses.' '.$thumbnail->attributes['class']) }}>
            {{ $thumbnail }}
        </div>
    @endisset    
    <div {{ $attributes->twMergeFor('body', 'tui-body '.$bodyClasses) }}>
        @isset($title)
            <div {{ $attributes->twMergeFor('title', 'tui-title '.$titleClasses.' '.$title->attributes['class']) }}>
                {{ $title }}
            </div>
        @endisset
        @isset($description)
            <div {{ $attributes->twMergeFor('description', 'tui-description '.$descriptionClasses.' '.$description->attributes['class']) }}>
                {{ $description }}
            </div>
        @endisset
    </div>
</div>