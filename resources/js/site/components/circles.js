(function() {
    const circulars = document.querySelectorAll('.moto-widget-completion_bar_circular__svg');

    const come = function (elem) {
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
        for (let i = 0; i < circulars.length; i++) {
            come(circulars[i]);
        }
    });
}());
