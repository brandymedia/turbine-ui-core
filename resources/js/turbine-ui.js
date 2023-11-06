(function()
{

    document.querySelectorAll('.turbine-ui-dismissible').forEach(item => {
        item.addEventListener('click', e => {
            e.currentTarget.parentNode.remove();
        })
    });

    const burger = document.querySelector('.turbine-ui-burger');
    const menu = document.querySelector('.turbine-ui-menu');
    const bars = document.querySelectorAll('.turbine-ui-bar');

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

}());