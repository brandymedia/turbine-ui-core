<details {{ $attributes->twMerge(['class' => $classes]) }}>
    @isset($question)
        <summary {{ $question->attributes->class([]) }}>
            <div>{{ $question }}</div>
            <svg viewBox="0 0 10 10">
                <polygon class="cls-1" points="10 2.5 7.5 0 5 2.5 2.5 0 0 2.5 2.5 5 0 7.5 2.5 10 5 7.5 7.5 10 10 7.5 7.5 5 10 2.5"/>
            </svg>
        </summary>
    @endisset
    @isset($answer)
        <div {{ $answer->attributes->class([]) }}>
            {{ $answer }}
        </div>
    @endisset
</details>