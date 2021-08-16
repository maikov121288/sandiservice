(function() {
    const menuBtn = document.querySelector('.moto-widget-menu-toggle-btn');
    const menu = document.querySelector('[data-widget-id = "wid_1588612322_wtumcwmbu"]');

    menuBtn.addEventListener('click', function (e) {
        menu.classList.toggle('moto-widget-menu-mobile-open');
        e.preventDefault();
    });
}());
