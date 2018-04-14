$(document).ready(function () {
    $('.nav li').on('click',function () {
        var actionType=$(this).attr('action');
        $('.nav li').removeClass('nav-active');
    });
    var width=screen.availWidth;
    $(window).on('scroll', function() {
        /* fixed nav */
        var wScroll = $(this).scrollTop();
        if(width<=767){
            if(wScroll>220){
                $('#back-to-top').fadeIn();
            }else{
                $('#back-to-top').fadeOut();
            }
        }else{
            if(wScroll>700){
                // Back To Top Appear
                $('#back-to-top').fadeIn();
            }else{
                $('#back-to-top').fadeOut();
            }

        }
        /* end of fixed nav */
    });
});

//preloader
$(window).on('load', function() {
    $("#preloader").delay(600).fadeOut();
});