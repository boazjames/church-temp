$(document).ready(function () {

    $('iframe').attr("width","800");
    $('iframe').attr("height","365");
    var width=screen.availWidth;
    if(width<=767){
        $('iframe').attr("width","315");
        $('iframe').attr("height","150");
    }
    $(window).on('scroll', function() {

/* fixed nav */
        var wScroll = $(this).scrollTop();
        var nav=$('#main-nav');
        if(wScroll>1){

            if(nav.hasClass('nav-transparent')){
                nav.removeClass('nav-transparent');
            }

        }

        if(wScroll<1){
            if(!nav.hasClass('nav-transparent')){
                nav.addClass('nav-transparent');
            }

        }
       /* if(width<=767){
            if(wScroll>220){
                $('#main-nav').removeClass('hidden');
            }else{
                $('#main-nav').addClass('hidden');
            }
        }else{
            if(wScroll>700){
                $('#main-nav').removeClass('hidden');
            }else{
                $('#main-nav').addClass('hidden');
            }

        }*/
/* end of fixed nav */

if(wScroll>1){
    $('#down').hide();
}else{
    $('#down').show();
}

        // Back To Top
        wScroll > 700 ? $('#back-to-top').fadeIn() : $('#back-to-top').fadeOut();
    });

    // Smooth scroll
    $("nav .nav li a[href^='#']").on('click', function(e) {
        e.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 600);
    });

    $('#back-to-top').on('click', function(){
        $('body,html').animate({
            scrollTop: 0
        }, 600);
    });

    $("#down").on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('#about').offset().top
        }, 600);
    });



//add active class to vavigation
    $('body').scrollspy({ target: '#nav-inner' });

});


// Preloader
$(window).on('load', function() {
    $("#preloader").delay(600).fadeOut();



});