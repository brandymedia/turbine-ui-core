<div {{ $attributes->twMerge(['class' => $classes]) }}>
    <nav {{ $attributes->twMergeFor('content', $contentClasses) }}>
        @isset($brand)
            <div {{ $attributes->twMergeFor('brand', $brandClasses) }}>
                {{ $brand }}
            </div>
        @endisset
        {{ $slot }}
    </nav>
</div>