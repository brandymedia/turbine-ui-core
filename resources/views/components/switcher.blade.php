<label class="flex justify-between items-center gap-5">    
    {{ $label }} 
    <input type="checkbox" class="hidden peer" {{ $attributes->except('class') }} />
    <span {{ $attributes->only('class')->twMerge(['class' => $classes]) }}></span>
</label>