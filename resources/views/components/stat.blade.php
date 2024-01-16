<div {{ $attributes->twMerge(['class' => $classes]) }}>
    @isset($icon)
        <div {{ $attributes->twMergeFor('icon', 'tui-icon '.$iconClasses) }}>{!! $icon !!}</div>
    @endisset
    @isset($title)
        <div {{ $attributes->twMergeFor('title', 'tui-title '.$titleClasses.' '.$title->attributes['class']) }}>
            {{ $title }}
        </div>
    @endisset
    @isset($value)
        <div {{ $attributes->twMergeFor('value', 'tui-value '.$valueClasses.' '.$value->attributes['class']) }}>
            {{ $value }}
        </div>
    @endisset
    @isset($description)
        <div {{ $attributes->twMergeFor('description', 'tui-description '.$descriptionClasses.' '.$description->attributes['class']) }}>
            {{ $description }}
        </div>
    @endisset
</div>