@php
    $background = $classes['background'] ?? null;
@endphp
<div {{ $attributes->twMerge(['class' => 'tui-burger '.$classes['base']]) }}>
    <div {{ $attributes->twMergeFor('bar', 'tui-bar '.$barClasses.' '.$background) }}></div>
    <div {{ $attributes->twMergeFor('bar', 'tui-bar '.$barClasses.' '.$background) }}></div>
    <div {{ $attributes->twMergeFor('bar', 'tui-bar '.$barClasses.' '.$background) }}></div>
</div>
