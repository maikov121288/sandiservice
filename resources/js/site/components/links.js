$(function(){
    $('[data-anchor]').click(function(){
        var target = `[name = ${$(this).attr('data-anchor')}]`;
        $('html, body').animate({scrollTop: $(target).offset().top}, 1000);
        return false;
    });
});
