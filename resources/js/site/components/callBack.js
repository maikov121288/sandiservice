(function() {
    const callBack = document.querySelector('[data-moto-widget-callback');
    const callBackOpen = callBack.querySelector('.moto-widget-callback__open-button');
    const callBackBody = callBack.querySelector('.moto-widget-callback__body');
    const callBackClose = callBack.querySelector('.moto-widget-callback__close-button');

    callBackOpen.addEventListener('click', function () {
        callBack.classList.remove('moto-widget-callback_closed');
        callBack.classList.add('moto-wdget-callback_opened');

        this.style.display = "none";
        callBackBody.style.display = 'block';
    });

    callBackClose.addEventListener('click', function () {
        callBack.classList.remove('moto-wdget-callback_opened');
        callBack.classList.add('moto-widget-callback_closed');

        callBackOpen.style.display = 'block';
        callBackBody.style.display = "none";
    });
}());

