//to Top
const toTopBtn = document.querySelector('[data-moto-back-to-top-button]');
const circulars = document.querySelectorAll('.moto-widget-completion_bar_circular__svg');

toTopBtn.addEventListener('click',function (e) {
    e.preventDefault();
    $("html, body").animate({
        scrollTop:0
    },1000);
});

function come(elem) {
    var docViewTop = $(window).scrollTop(),
        docViewBottom = docViewTop + $(window).height(),
        elemTop = window.pageYOffset + elem.getBoundingClientRect().top;
        //elemBottom = elemTop + $(elem).height();

    if ((elemTop <= docViewBottom) && (elemTop >= docViewTop)){
        elem.classList.add('moto-widget-completion_bar_circular__svg-animated');
    };
}

window.addEventListener('scroll', function() {
    if (window.pageYOffset >= 400){
        toTopBtn.classList.add('moto-back-to-top-button_visible');
    } else toTopBtn.classList.remove('moto-back-to-top-button_visible');

    for(let i = 0; i < circulars.length; i++){
        come(circulars[i]);
    }
});

// links

$(function(){
    $('[data-anchor]').click(function(){
        var target = `[name = ${$(this).attr('data-anchor')}]`;
        $('html, body').animate({scrollTop: $(target).offset().top}, 1000);
        return false;
    });
});

//menu

const menuBtn = document.querySelector('.moto-widget-menu-toggle-btn');
const menu = document.querySelector('[data-widget-id = "wid_1588612322_wtumcwmbu"]');

menuBtn.addEventListener('click', function(e){
    menu.classList.toggle('moto-widget-menu-mobile-open');
    e.preventDefault();
});
