<div class="tui-modal-{{ $target }}">
    <div id="{{ $target }}" {{ $attributes->twMergeFor('backdrop', 'tui-backdrop '.$backdropClasses) }}>
        <div {{ $attributes->twMergeFor('content', 'tui-content '.$contentClasses) }}>
            {{ $content }}
        </div>
        @isset($dismissible)
            <button type="button" aria-label="{{ __('Close modal') }}" {{ $attributes->twMergeFor('dismiss-button', 'tui-modal tui-modal-dismissible '.$dismissButtonClasses) }}>
                <svg viewBox="0 0 10 10" {{ $attributes->twMergeFor('dismiss-icon', $dismissIconClasses) }}>
                    <polygon points="10 2.5 7.5 0 5 2.5 2.5 0 0 2.5 2.5 5 0 7.5 2.5 10 5 7.5 7.5 10 10 7.5 7.5 5 10 2.5"/>
                </svg>
            </button>
        @endisset
    </div>
    {{ $slot }}
</div>

<script>
    let thisModalContainer{{ Str::studly($target) }} = document.querySelector('.tui-modal-{{ $target }}');
    let thisModal{{ Str::studly($target) }} = document.querySelector('#{{ $target }}');
    let thisModalButton{{ Str::studly($target) }} = thisModalContainer{{ Str::studly($target) }}.querySelector('.tui-modal-trigger');
    
    thisModalButton{{ Str::studly($target) }}.addEventListener('click', (e) => {
        thisModal{{ Str::studly($target) }}.classList.toggle('hidden');
        thisModal{{ Str::studly($target) }}.classList.toggle('flex');
        thisModalContainer{{ Str::studly($target) }}.classList.toggle('opened');
    });

    thisModal{{ Str::studly($target) }}.addEventListener('click', (e) => {
        thisModal{{ Str::studly($target) }}.classList.toggle('hidden');
        thisModal{{ Str::studly($target) }}.classList.toggle('flex');
        thisModalContainer{{ Str::studly($target) }}.classList.toggle('opened');
    });

    thisModal{{ Str::studly($target) }}.firstElementChild.addEventListener('click', (e) => {
        e.stopPropagation();
    });
</script>
