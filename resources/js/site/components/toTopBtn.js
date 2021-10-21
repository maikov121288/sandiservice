(function() {
    const toTopBtn = document.querySelector('[data-moto-back-to-top-button]');

    toTopBtn.addEventListener('click', function (e) {
        e.preventDefault();
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
    });

    window.addEventListener('scroll', function () {
        if (window.pageYOffset >= 400) {
            toTopBtn.classList.add('moto-back-to-top-button_visible');
        } else toTopBtn.classList.remove('moto-back-to-top-button_visible');
    });
}());
