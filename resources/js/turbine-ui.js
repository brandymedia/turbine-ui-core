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

    const burgers = document.querySelectorAll('.tui-burger');

    if (burgers.length) {
        burgers.forEach(burger => {
            const nav = burger.closest('nav') ?? burger.parentElement;
            const menu = nav ? nav.querySelector('.tui-menu') : null;
            const bars = burger.querySelectorAll('.tui-bar');

            if (!menu || bars.length < 3) {
                return;
            }

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
        });
    }

    document.addEventListener('click', e => {
        const button = e.target.closest('.tui-dropdown button');

        if (button) {
            e.stopPropagation();
            const dropdown = button.closest('.tui-dropdown');
            const content = dropdown ? dropdown.querySelector('.tui-dropdown-content') : null;

            if (content) {
                content.classList.toggle('hidden');
            }

            return;
        }

        document.querySelectorAll('.tui-dropdown .tui-dropdown-content').forEach(content => {
            content.classList.add('hidden');
        });
    });
}());
