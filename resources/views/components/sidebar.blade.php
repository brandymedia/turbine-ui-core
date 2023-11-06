<aside {{ $attributes->twMerge(['class' => $classes]) }}>
    @isset($dismissible)
        <button class="turbine-ui-alert turbine-ui-dismissible">
            <span class="hover:opacity-75">&#10006;</span>
        </button>
    @endisset
    {{ $slot }}
</aside>

@isset($dismissible)
<script>
    document.querySelectorAll('.turbine-ui-sidebar.turbine-ui-dismissible').forEach(item => {
        item.addEventListener('click', e => {
            e.currentTarget.parentNode.remove();
        })
    })
</script>
@endisset