<table {{ $attributes->twMerge(['class' => $classes]) }}>
    @isset($thead)
        <thead {{ $attributes->twMergeFor('thead', 'tui-thead '.$theadClasses.' '.$thead->attributes['class']) }}>
            {{ $thead }}
        </thead>
    @endisset
    @isset($tbody)
        <tbody {{ $attributes->twMergeFor('tbody', 'tui-tbody '.$tbodyClasses.' '.$tbody->attributes['class']) }}>
            {{ $tbody }}
        </tbody>
    @endisset
    @isset($tfoot)
        <tfoot {{ $attributes->twMergeFor('tfoot', 'tui-tfoot '.$tfootClasses.' '.$tfoot->attributes['class']) }}>
            {{ $tfoot }}
        </tfoot>
    @endisset
    {{ $slot }}
</table>