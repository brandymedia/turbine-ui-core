<div class="tui-dropdown relative">
    {{ $slot }}
    <div {{ $attributes->twMerge(['class' => 'tui-dropdown-content ' . $classes]) }}>
        {{ $content }}
    </div>
</div>