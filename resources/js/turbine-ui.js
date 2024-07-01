(function()
{

    document.querySelectorAll('.tui-dismissible').forEach(item => {
        item.addEventListener('click', e => {
            let toast = e.currentTarget.classList.contains('tui-toast');
            if (toast) {
                e.currentTarget.parentNode.parentNode.remove();
            }
            e.currentTarget.parentNode.remove();
        })
    });

    const burger = document.querySelector('.tui-burger');
    const menu = document.querySelector('.tui-menu');
    const bars = document.querySelectorAll('.tui-bar');

    if (burger) {
        burger.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            bars[0].classList.toggle('transform');
            bars[0].classList.toggle('translate-y-1.5'); 
            bars[0].classList.toggle('-rotate-45');
            bars[1].classList.toggle('hidden');
            bars[2].classList.toggle('transform');
            bars[2].classList.toggle('-translate-y-1');        
            bars[2].classList.toggle('rotate-45');
        });
    }

    const dropdowns = document.querySelectorAll('.tui-dropdown');

    if (dropdowns) {
        dropdowns.forEach(dropdown => {
            const button = dropdown.querySelector('button');
            const content = dropdown.querySelector('.tui-dropdown-content');

            button.addEventListener('click', e => {
                e.stopPropagation();
                content.classList.toggle('hidden');
            });
        });

        document.addEventListener('click', e => {
            dropdowns.forEach(dropdown => {
                const content = dropdown.querySelector('.tui-dropdown-content');
                content.classList.add('hidden');
            });
        });
    }
}());