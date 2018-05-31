$(document).ready(function () {

    $('iframe').attr("width","800");
    $('iframe').attr("height","365");
    var width=screen.availWidth;
    if(width<=767){
        $('iframe').attr("width","315");
        $('iframe').attr("height","150");
    }

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

    $('.search-result').on('click',function () {
        var id=$(this).attr('data-id');
        location.href="http://localhost/church/public/sermons/"+id;
    });

});

//preloader
$(window).on('load', function() {
    $("#preloader").delay(600).fadeOut();
});