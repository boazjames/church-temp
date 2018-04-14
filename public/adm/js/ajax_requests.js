$(document).ready(function () {

    function alertDanger(message) {
        $('.alert-danger').show();
        $('.alert-danger').html(message);
        setTimeout(function () {
            $('.alert').fadeOut(2000);
        },3000)
    }

    function alertSuccess(message) {
        $('.alert-success').show();
        $('.alert-success').html(message);
    }

    function ajaxSuccess(form_ref,modal_add_selector,message) {
        form_ref[0].reset();
        $(modal_add_selector).modal('hide');
        $('#success_modal').modal('show');
        alertSuccess(message);
        setTimeout(function () {
            $('#success_modal').modal('hide');
        }, 3000);
    }

    function ajaxRequest(Url,Data,form_ref,modal_add_selector,message) {
        $.ajax({
            url: Url,
            method: "POST",
            data: Data,
            success: ajaxSuccess(form_ref,modal_add_selector,message)
        });
    }

    function ajaxRequestFile(Url,Data,form_ref,modal_add_selector,message) {
        $.ajax({
            url: Url,
            method: "POST",
            data: Data,
            contentType: false,
            cache: false,
            processData: false,
            success: ajaxSuccess(form_ref,modal_add_selector,message)
        });
    }



    $('#add-sermon-form').on('submit',function (e) {
        e.preventDefault();
        var inputVal=$('#image').val();
        if(inputVal==''){
            alertDanger('Please choose an image');
        }else {
            var form = $(this);
            var form_data = new FormData(form[0]);
            ajaxRequestFile('post',form_data,form,'#add-sermon','Sermon added successfully.');

        }
    });

    $('#add-video-form').on('submit',function (e) {
        e.preventDefault();
        var inputTitle=$('#video-title').val(),
            inputCode=$('#video-code').val();
        if(inputTitle=='' || inputCode==''){
            alertDanger('Please fill all fields');
        }else {
            var form = $(this);
            var form_data = form.serialize();
            ajaxRequest('video',form_data,form,'#add-video','Video added successfully.');

        }
    });

    $('#set-time-form').on('submit',function (e) {
        e.preventDefault();
        var inputTime=$('#time-input').val();
        if(inputTime==''){
            alertDanger('Please provide date');
        }else {
            var form = $(this);
            var form_data = form.serialize();
            ajaxRequest('time',form_data,form,'#set-time','Time set successfully.');

        }
    });

});