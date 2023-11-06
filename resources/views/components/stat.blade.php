<div {{ $attributes->twMerge(['class' => $classes]) }}>
    @isset($icon)
        <div class="tui-stat-icon">{!! $icon !!}</div>
    @endisset
    @isset($title)
        <div {{ $title->attributes->class(['tui-stat-title']) }}>
            {{ $title }}
        </div>
    @endisset
    @isset($value)
        <div {{ $value->attributes->class(['tui-stat-value']) }}>
            {{ $value }}
        </div>
    @endisset
    @isset($description)
        <div {{ $description->attributes->class(['tui-stat-description']) }}>
            {{ $description }}
        </div>
    @endisset
</div>