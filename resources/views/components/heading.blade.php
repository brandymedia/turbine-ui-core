@php
$heading = match ($level) {
    '1' => 'h1',
    '2' => 'h2',
    '3' => 'h3',
    '4' => 'h4',
    '5' => 'h5',
    '6' => 'h6',
    default => 'h3',
};
@endphp
<{{ $heading }} {{ $attributes->twMerge(['class' => $classes]) }}>{{ $slot }}</{{ $heading }}>