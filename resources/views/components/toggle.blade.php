<label {{ $attributes->twMergeFor('label', 'tui-label '.$labelClasses) }}>    
    {{ $label }} 
    <input type="checkbox" {{ $attributes->withoutTwMergeClasses()->twMergeFor('input', 'tui-input '.$inputClasses) }} {{ $attributes->except('class') }} />
    <span {{ $attributes->only('class')->twMerge(['class' => $classes]) }}></span>
</label>