<div class="turbine-ui-modal-{{ $target }}">
    <div id="{{ $target }}" class="hidden bg-slate-700/80 p-10 fixed top-0 left-0 w-full h-full justify-center items-center z-50">
        <div class="max-w-full max-h-full relative top-0 overflow-scroll">
            {{ $content }}
        </div>
    </div>
    {{ $slot }}
</div>

<script>
    let thisModalContainer{{ Str::studly($target) }} = document.querySelector('.turbine-ui-modal-{{ $target }}');
    let thisModal{{ Str::studly($target) }} = document.querySelector('#{{ $target }}');
    let thisModalButton{{ Str::studly($target) }} = thisModalContainer{{ Str::studly($target) }}.querySelector('button');
    
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