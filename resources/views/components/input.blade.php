@aware(['combine'])

@php
if ($combine) {
    $classes = $classes . ' m-0 border-none rounded-none';
}
@endphp

@if($type === 'range')
    @if ($label)
    <div {{ $attributes->twMergeFor('input-range-wrapper', 'tui-input-range-wrapper '.$inputRangeWrapperClasses) }}>
        <x-turbine-ui-label for="{{ $attributes['name'] }}" variant="{{ $variant }}" {{ $attributes->twMergeFor('input-range-label', 'tui-input-range-label '.$inputRangeLabelClasses) }}>{{ $label }}</x-turbine-ui-label>
    @endif
        <input {{ $attributes->twMergeFor('input-range', ['class' => $classes.' tui-input-range '.$inputRangeClasses]) }} type="{{ $type }}" {{ $attributes->except('class') }}>
    @if ($label)
    </div>
    @endif
@elseif($type === 'color')
    @if ($label)
    <div {{ $attributes->twMergeFor('input-wrapper', 'tui-input-wrapper '.$inputWrapperClasses) }}>
        <x-turbine-ui-label for="{{ $attributes['name'] }}" variant="{{ $variant }}">{{ $label }}</x-turbine-ui-label>
    @endif
        <input {{ $attributes->twMerge(['class' => $classes]) }} type="{{ $type }}">
    @if ($label)
    </div>
    @endif
@elseif($type === 'checkbox')
    <div {{ $attributes->twMergeFor('input-checkbox-wrapper', 'tui-input-checkbox-wrapper '.$inputCheckboxWrapperClasses) }}>
        <input {{ $attributes->twMergeFor('input-checkbox', ['class' => $classes.' tui-input-checkbox '.$inputCheckboxClasses]) }} type="{{ $type }}" {{ $attributes->except('class') }}>
        @if ($label)
            <x-turbine-ui-label for="{{ $attributes['name'] }}" variant="{{ $variant }}" {{ $attributes->twMergeFor('input-checkbox-label', 'tui-input-checkbox-label '.$inputCheckboxLabelClasses) }}>
                {{ $label }}
            </x-turbine-ui-label>
        @endif
    </div>
@elseif($type === 'radio')
    <div {{ $attributes->twMergeFor('input-radio-wrapper', 'tui-input-radio-wrapper '.$inputRadioWrapperClasses) }}>
        <input {{ $attributes->twMergeFor('input-radio', ['class' => $classes.' tui-input-radio '.$inputRadioClasses]) }} type="{{ $type }}" {{ $attributes->except('class') }}>
        @if ($label)
            <x-turbine-ui-label for="{{ $attributes['id'] }}" variant="{{ $variant }}" {{ $attributes->twMergeFor('input-radio-label', 'tui-input-radio-label '.$inputRadioLabelClasses) }}>
                {{ $label }}
            </x-turbine-ui-label>
        @endif
    </div>
@elseif($type === 'hidden')
    <input {{ $attributes->merge() }} type="{{ $type }}">
@elseif($type === 'file')
    @if ($label)
    <div {{ $attributes->twMergeFor('input-wrapper', 'tui-input-wrapper '.$inputWrapperClasses) }}>
        <x-turbine-ui-label for="{{ $attributes['name'] }}" variant="{{ $variant }}" {{ $attributes->twMergeFor('label', 'tui-label '.$labelClasses) }}>{{ $label }}</x-turbine-ui-label>
    @endif
        <div {{ $attributes->only('class')->twMerge(['class' => $classes]) }}>
            @if ($prefix)
                <div {{ $attributes->twMergeFor('prefix', 'tui-prefix '.$prefixClasses) }}>{!! $prefix !!}</i></div>
            @endif
                <input {{ $attributes->except('class') }} type="{{ $type }}" {{ $attributes->twMergeFor('input', 'tui-input file:hidden cursor-pointer pl-3 '.$inputClasses) }}>
            @if ($suffix)
                <div {{ $attributes->twMergeFor('suffix', 'tui-suffix '.$suffixClasses) }}>{!! $suffix !!}</i></div>
            @endif
        </div>
    @if ($label)
    </div>
    @endif
@else
    @if ($label)
    <div {{ $attributes->twMergeFor('input-wrapper', 'tui-input-wrapper '.$inputWrapperClasses) }}>
        <x-turbine-ui-label for="{{ $attributes['name'] }}" variant="{{ $variant }}" {{ $attributes->twMergeFor('label', 'tui-label '.$labelClasses) }}>{{ $label }}</x-turbine-ui-label>
    @endif
        <div {{ $attributes->only('class')->twMerge(['class' => $classes]) }}>
            @if ($prefix)
                <div {{ $attributes->twMergeFor('prefix', 'tui-prefix '.$prefixClasses) }}>{!! $prefix !!}</i></div>
            @endif
                <input {{ $attributes->except('class') }} type="{{ $type ?? 'text' }}" {{ $attributes->twMergeFor('input', 'tui-input '.$inputClasses) }}>
            @if ($suffix)
                <div {{ $attributes->twMergeFor('suffix', 'tui-suffix '.$suffixClasses) }}>{!! $suffix !!}</i></div>
            @endif
        </div>
    @if ($label)
    </div>
    @endif
@endif