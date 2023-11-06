<div {{ $attributes->twMerge(['class' => $classes]) }}>
<pre>
@if ($blade)
<code>{!! $slot !!}</code>
@else
<code>{!! htmlentities($slot) !!}</code>
@endif
</pre>
</div>