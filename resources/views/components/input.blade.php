@aware(['combine'])

@php
if ($combine) {
    $classes = $classes . ' m-0 border-none rounded-none';
}
@endphp

@if($type === 'range')
    <div class="flex-1">
        @if ($label)
            <x-turbine-ui-label for="{{ $attributes['name'] }}" variant="{{ $variant }}" size="{{ $size }}">{{ $label }}</x-turbine-ui-label>
        @endif
        <input {{ $attributes->twMerge(['class' => $classes. ' appearance-none cursor-pointer rounded-full']) }} type="{{ $type }}">
    </div>
@elseif($type === 'color')
    <div class="flex-1">
        @if ($label)
            <x-turbine-ui-label for="{{ $attributes['name'] }}" variant="{{ $variant }}" size="{{ $size }}">{{ $label }}</x-turbine-ui-label>
        @endif
        <input {{ $attributes->twMerge(['class' => $classes]) }} type="{{ $type }}">
    </div>
@elseif($type === 'checkbox')
    <div class="flex items-center gap-1">
        <input {{ $attributes->twMerge(['class' => $classes.' inline-block mb-0']) }} type="{{ $type }}">
        @if ($label)
            <x-turbine-ui-label for="{{ $attributes['name'] }}" variant="{{ $variant }}" size="{{ $size }}" class="mb-0 inline">
                {{ $label }}
            </x-turbine-ui-label>
        @endif
    </div>
@elseif($type === 'radio')
    <div class="flex items-center gap-1">
        <input {{ $attributes->twMerge(['class' => $classes.' rounded-full inline-block mb-0']) }} type="{{ $type }}">
        @if ($label)
            <x-turbine-ui-label for="{{ $attributes['id'] }}" variant="{{ $variant }}" size="{{ $size }}" class="mb-0 inline">
                {{ $label }}
            </x-turbine-ui-label>
        @endif
    </div>
@elseif($type === 'hidden')
    <input {{ $attributes->merge() }} type="{{ $type }}">
@elseif($type === 'file')
    <div class="flex-1">
        @if ($label)
            <x-turbine-ui-label for="{{ $attributes['name'] }}" variant="{{ $variant }}" size="{{ $size }}">{{ $label }}</x-turbine-ui-label>
        @endif

        <div {{ $attributes->only('class')->twMerge(['class' => $classes]) }}>
            @if ($prefix)
                <div class="tui-prefix z-0">{!! $prefix !!}</i></div>
            @endif
            <div class="flex-1 grow z-10">
                <input {{ $attributes->except('class') }} type="{{ $type }}" class="tui-input focus:border-inherit focus:ring-0 file:hidden cursor-pointer pl-3">
            </div>
            @if ($suffix)
                <div class="tui-suffix z-0">{!! $suffix !!}</i></div>
            @endif
        </div>
    </div>
@else
    <div class="flex-1">
        @if ($label)
            <x-turbine-ui-label for="{{ $attributes['name'] }}" variant="{{ $variant }}" size="{{ $size }}">{{ $label }}</x-turbine-ui-label>
        @endif

        <div {{ $attributes->only('class')->twMerge(['class' => $classes]) }}>
            @if ($prefix)
                <div class="tui-prefix z-0">{!! $prefix !!}</i></div>
            @endif
            <div class="flex-1 grow z-10">
                <input {{ $attributes->except('class') }} type="{{ $type }}" class="tui-input focus:border-inherit focus:ring-0">
            </div>
            @if ($suffix)
                <div class="tui-suffix z-0">{!! $suffix !!}</i></div>
            @endif
        </div>
    </div>
@endif