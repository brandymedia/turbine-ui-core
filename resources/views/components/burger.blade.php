<div {{ $attributes->twMerge(['class' => 'tui-burger '.$classes['base']]) }}>
    <div {{ $attributes->twMergeFor('bar', 'tui-bar '.$barClasses.' '.$classes['background']) }}></div>
    <div {{ $attributes->twMergeFor('bar', 'tui-bar '.$barClasses.' '.$classes['background']) }}></div>
    <div {{ $attributes->twMergeFor('bar', 'tui-bar '.$barClasses.' '.$classes['background']) }}"></div>
</div>