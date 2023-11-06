<div class="flex-1">
    @if ($label)
        <x-turbine-ui-label for="{{ $attributes['name'] }}" variant="{{ $variant }}" size="{{ $size }}">{{ $label }}</x-turbine-ui-label>
    @endif

    <div {{ $attributes->only('class')->twMerge(['class' => $classes]) }}>
        @if ($prefix)
            <div class="tui-prefix z-0">{!! $prefix !!}</i></div>
        @endif
        <div class="flex-1 grow z-10">
            <select  {{ $attributes->except('class') }} class="tui-select focus:border-inherit focus:ring-0">
                {{ $slot }}
            </select>
        </div>
        @if ($suffix)
            <div class="tui-suffix z-0">{!! $suffix !!}</i></div>
        @endif
    </div>
</div>