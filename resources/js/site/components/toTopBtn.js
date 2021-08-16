(function() {
    const toTopBtn = document.querySelector('[data-moto-back-to-top-button]');

    toTopBtn.addEventListener('click', function (e) {
        e.preventDefault();
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
    });

    function come(elem) {
        var docViewTop = $(window).scrollTop(),
            docViewBottom = docViewTop + $(window).height(),
            elemTop = window.pageYOffset + elem.getBoundingClientRect().top;
        //elemBottom = elemTop + $(elem).height();

        if ((elemTop <= docViewBottom) && (elemTop >= docViewTop)) {
            elem.classList.add('moto-widget-completion_bar_circular__svg-animated');
        }
        ;
    }

    window.addEventListener('scroll', function () {
        if (window.pageYOffset >= 400) {
            toTopBtn.classList.add('moto-back-to-top-button_visible');
        } else toTopBtn.classList.remove('moto-back-to-top-button_visible');
    });
}());
