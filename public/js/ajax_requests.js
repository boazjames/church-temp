$(document).ready(function () {

    $('.alert').hide();

    function alertDanger(message) {
        $('.alert-danger').show();
        $('.alert-danger').html(message);
        setTimeout(function () {
            $('.alert').fadeOut(2000);
        },3000);
    }

    function alertSuccess(message) {
        $('.alert-success').show();
        $('.alert-success').html(message);
        setTimeout(function () {
            $('.alert').fadeOut(2000);
        },3000);
    }

    function ajaxSuccess(form_ref,message) {
        form_ref[0].reset();
        alertSuccess(message);
    }


    function ajaxRequest(Url,Data,form_ref,message) {
        $.ajax({
            url: Url,
            method: "POST",
            data: Data,
            success: ajaxSuccess(form_ref,message)
        });
    }

    $('#message-form').on('submit',function (e) {
        e.preventDefault();
        var form = $(this);
        var form_data = form.serialize();
        ajaxRequest('message',form_data,form,'Message sent successfully. You will get feedback through your email.');
    });

});