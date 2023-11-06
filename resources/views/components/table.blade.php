<div {{ $attributes->twMerge(['class' => $classes]) }}>
    <table>
        @isset($thead)
            <thead {{ $thead->attributes->class([]) }}>
                {{ $thead }}
            </thead>
        @endisset
        @isset($tbody)
            <tbody {{ $tbody->attributes->class([]) }}>
                {{ $tbody }}
            </tbody>
        @endisset
        @isset($tfoot)
            <tfoot {{ $tfoot->attributes->class([]) }}>
                {{ $tfoot }}
            </tfoot>
        @endisset
        {{ $slot }}
    </table>
</div>