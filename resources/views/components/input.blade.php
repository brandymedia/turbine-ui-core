@if($type === 'checkbox' || $type === 'range' || $type === 'color')
    <input {{ $attributes->twMerge(['class' => $classes]) }} type="{{ $type }}">
@elseif($type === 'radio')
    <input {{ $attributes->twMerge(['class' => $classes.' rounded-full']) }} type="{{ $type }}">
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