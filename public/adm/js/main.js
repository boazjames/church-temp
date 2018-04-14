//toggle navbar
var width=screen.availWidth;
$(document).ready(function () {

    $('#preview').hide();

    var nav=$('#nav-collapsed');
    var navSm=$('#nav-collapsed-sm');
    $('button.toggle').on('click',function (e) {
        e.preventDefault();
        nav.css({'margin-left':'0'});
        navSm.css({'margin-left':'-70px','-moz-transition': 'all 0.6s ease-in-out','-webkit-transition': 'all 0.6s ease-in-out','-o-transition': 'all 0.6s ease-in-out','transition': 'all 0.6s ease-in-out'});
        if(width>767) {
            $('.overview').css({
                'margin-left': '220px',
                '-moz-transition': 'all 0.6s ease-in-out',
                '-webkit-transition': 'all 0.6s ease-in-out',
                '-o-transition': 'all 0.6s ease-in-out',
                'transition': 'all 0.6s ease-in-out'
            });
            $('.overview-item').css({
                'width': '25%',
                '-moz-transition': 'all 0.6s ease-in-out',
                '-webkit-transition': 'all 0.6s ease-in-out',
                '-o-transition': 'all 0.6s ease-in-out',
                'transition': 'all 0.6s ease-in-out'
            });
        }
        });

    $('button.toggle-lg').on('click',function (e) {
        e.preventDefault();
        nav.css({'margin-left':'-200px'});
        navSm.css({'margin-left':'0'});
        if(width>767) {
            $('.overview').css({
                'margin-left': '130px'
            });
            $('.overview-item').css({
                'width': '27%'
            });
        }
    });
        $('.side-nav ul li.item').on('mouseover', function (e) {
            e.preventDefault();
            var This = $(this);
            var Child = This.find('ul');
            if (Child.hasClass('hidden')) {
                Child.removeClass('hidden');
            }
            This.on('mouseout', function () {
                Child.addClass('hidden');
            });

        });


    $('.side-nav ul li.item a').on('click',function (e) {
        e.preventDefault();
    });

    $('button#messages').on('click',function () {
        var nextSibling=$(this).next();
        var notification=$('button#notifications').next();
        if(!notification.hasClass('hidden')){
            notification.addClass('hidden');
            $('button#notifications').css({'background':'inherit'});
        }
        if(nextSibling.hasClass('hidden')){
            nextSibling.removeClass('hidden');
            $(this).css({'background':'#021F4E'});
        }else{
            nextSibling.addClass('hidden');
            $(this).css({'background':'inherit'});
        }
    });

    $('button#notifications').on('click',function () {
        var nextSibling=$(this).next();
        var message=$('button#messages').next();
        if(!message.hasClass('hidden')){
            message.addClass('hidden');
            $('button#messages').css({'background':'inherit'});
        }
        if(nextSibling.hasClass('hidden')){
            nextSibling.removeClass('hidden');
            $(this).css({'background':'#021F4E'});
        }else{
            nextSibling.addClass('hidden');
            $(this).css({'background':'inherit'});
        }
    });
/*
    var dynamic=$('.dynamic');
    var overview=$('.overview');
    var sermon=$('.sermon');
    var video=$('.video');
    var service=$('.time');
    var admin=$('.admin');*/

    // dynamic.hide();
    // overview.show();

    $('.overview-link').on('click',function () {
        location.href='home';
    });

    $('.view-sermon').on('click',function () {
        location.href='sermon';

    });

    $('.view-video').on('click',function () {
        location.href='video';
    });

    $('.view-time').on('click',function () {
        location.href='time';
    });

    $('.view-admin').on('click',function () {
        location.href='admin';
    });

    $('.home-page').on('click',function () {
        var url='http://localhost/church/public/';
        window.open(url, '_blank', 'location=yes,height=700,width=1200,scrollbars=yes,status=yes,menubar=yes,toolbar=yes',false);
    });

    $('.sermons-page').on('click',function () {
        var url='http://localhost/church/public/sermons';
        window.open(url, '_blank', 'location=yes,height=700,width=1200,scrollbars=yes,status=yes,menubar=yes,toolbar=yes',false);
    });
var alert=$('.alert');

    $('.add-sermon-link').on('click',function () {
        $('#preview').attr('src','#');
        $('#preview').hide();
        $('#add-sermon').modal('show');
        alert.hide();
        $('#add-sermon-form')[0].reset();
        $('#label-for-image').find( 'span' ).html('Choose an image file...');
    });

    $('.add-video-link').on('click',function () {
        $('#add-video').modal('show');
        alert.hide();
        $('#add-video-form')[0].reset();
    });

    $('.set-time-link').on('click',function () {
        $('#set-time').modal('show');
        alert.hide();
        $('#set-time-form')[0].reset();
    });



    // file upload


    function verifyExtension(file_name,allowed_extension_array) {
        var extension=file_name.substr( (file_name.lastIndexOf('.') +1) );
        for(var i=0; i<allowed_extension_array.length; i++){
            if(allowed_extension_array[i]==extension){
                return true;
            }
        }
         return false;
    }


    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#preview').show();
                $('#preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

        var input	 = $('#image'),
            label	 = $('#label-for-image'),
            labelVal = label.html();

        input.on( 'change', function( e )
        {
            if(this.files[0].size/1024>2048){
                $('.alert').show();
                $('.alert').html('File size must not exceed 2MB');
                $(this).val('');
                setTimeout(function () {
                    $('.alert').fadeOut(2000);
                },3000)
            }else {
                $('#preview').hide();
                $('#label-for-image').find( 'span' ).html('Choose an image file...');

                var path=$(this).val().split('\\'),
                    fileName=path[path.length-1];
                if(verifyExtension(fileName,['png','jpeg','jpg'])==true){
                    readURL(this);
                    label.find( 'span' ).html( fileName );
                    // if( e.target.value ){
                    //
                    // }
                    //     fileName = e.target.value.split( '\\' ).pop();

                    if( fileName )
                        label.find( 'span' ).html( fileName );
                    else
                        label.html( labelVal );
                }else{
                    $('.alert').show();
                    $('.alert').html('File must be jgp, jpeg or png image type');
                    $(this).val('');
                    setTimeout(function () {
                        $('.alert').fadeOut(2000);
                    },3000)
                }


            }

        });

        // Firefox bug fix
        // input
        //     .on( 'focus', function(){ input.addClass( 'has-focus' ); })
        //     .on( 'blur', function(){ input.removeClass( 'has-focus' ); });

});

// Preloader
$(window).on('load', function() {
    $("#preloader").delay(600).fadeOut();
});

$(document).ready(function () {
    setTimeout(function () {
        $('#alert').fadeOut(2000);
    },3000);
});