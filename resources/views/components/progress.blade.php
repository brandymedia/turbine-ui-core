<div>
    <div class="flex flex-wrap justify-between mb-1 text-slate-700 dark:text-slate-200">
        <span class="title">{{ $title }}</span>
        <span>{{ $percentage ? $percentage : 0 }}%</span>
    </div>
    <div class="bg-white dark:bg-slate-800 [&:has(.rounded)]:rounded [&:has(.rounded-md)]:rounded-md [&:has(.rounded-lg)]:rounded-lg [&:has(.rounded-full)]:rounded-full">
        <div {{ $attributes->twMerge(['class' => $classes]) }} style="width: {{ $percentage ? $percentage : 0 }}%"></div>
    </div>
</div>