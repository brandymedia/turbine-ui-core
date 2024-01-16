<aside {{ $attributes->twMerge(['class' => $classes]) }}>
    @isset($dismissible)
        <button {{ $attributes->twMergeFor('dismiss-button', 'tui-sidebar tui-sidebar-dismissible '.$dismissButtonClasses) }}>
            <svg viewBox="0 0 10 10" {{ $attributes->twMergeFor('dismiss-icon', $dismissIconClasses) }}>
                <polygon points="10 2.5 7.5 0 5 2.5 2.5 0 0 2.5 2.5 5 0 7.5 2.5 10 5 7.5 7.5 10 10 7.5 7.5 5 10 2.5"/>
            </svg>
        </button>
    @endisset
    {{ $slot }}
</aside>

@isset($dismissible)
<script>
    document.querySelectorAll('.tui-sidebar.tui-sidebar-dismissible').forEach(item => {
        item.addEventListener('click', e => {
            e.currentTarget.parentNode.remove();
        })
    })
</script>
@endisset