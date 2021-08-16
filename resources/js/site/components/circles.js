(function() {
    const circulars = document.querySelectorAll('.moto-widget-completion_bar_circular__svg');

    window.addEventListener('scroll', function () {
        for (let i = 0; i < circulars.length; i++) {
            come(circulars[i]);
        }
    });
}());
