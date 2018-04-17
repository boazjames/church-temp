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
        setTimeout(function () {
            $('.alert').fadeOut(2000);
        },2000)
    }

    function ajaxSuccess(form_ref,modal_add_selector,message) {
        form_ref[0].reset();
        $(modal_add_selector).modal('hide');
        $('#success_modal').modal('show');
        alertSuccess(message);
        setTimeout(function () {
            $('#success_modal').modal('hide');
            location.reload(true);
        }, 2000);
    }

    function ajaxSuccessReply(form_ref,message) {
        form_ref[0].reset();
        form_ref.hide();
        alertSuccess(message);
        setTimeout(function () {
            $('.reply').show();
        }, 4000);
    }

    function ajaxSuccessImage(form_ref,modal_add_selector,message) {
        form_ref[0].reset();
        $(modal_add_selector).modal('hide');
        $('#success_modal').modal('show');
        alertSuccess(message);
        setTimeout(function () {
            $('#success_modal').modal('hide');
            location.reload(true);
        }, 2000);
    }

    function ajaxDeleteSuccess(message) {
        $('#delete_confirm_modal').modal('hide');
        $('#delete_success_modal').modal('show');
        alertSuccess(message);
        setTimeout(function () {
            $('#delete_success_modal').modal('hide');
            location.reload(true);
        }, 2000);
    }

    function ajaxDeleteRequest(Url,form,message) {
        $.ajax({
            url: Url,
            method: "POST",
            data: form.serialize(),
            success: ajaxDeleteSuccess(message)
        });
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

    function ajaxRequestImage(Url,Data,form_ref,modal_add_selector,message) {
        $.ajax({
            url: Url,
            method: "POST",
            data: Data,
            contentType: false,
            cache: false,
            processData: false,
            success: ajaxSuccessImage(form_ref,modal_add_selector,message)
        });
    }

    function ajaxSendMessage(Url,Data,form_ref,message) {
        $.ajax({
            url: Url,
            method: "POST",
            data: Data,
            success: ajaxSuccessReply(form_ref,message)
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
            ajaxRequest('video',form_data,form,'#add-video','Video linked successfully.');

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

    $('#add-admin-form').on('submit',function (e) {
        e.preventDefault();
        var usernameInput=$('#username_input').val();
        var emailInput=$('#email_input').val();
        if(usernameInput=='' || emailInput==''){
            alertDanger('Please fill in all fields');
        }else {
            var form = $(this);
            var form_data = form.serialize();
            ajaxRequest('admin',form_data,form,'#add-admin','Admin added successfully.');

        }
    });

    $('.sermon-delete-btn').on('click',function () {
        $('#delete_confirm_modal').modal('show');
        $('.confirmation_message').html('Do you really want to delete this sermon?');
        var id = $(this).attr('data-id');
        var form=$('#delete-form');
        $('#id').val(id);
        $('#btn-delete-confirm').one('click',function (e) {
            e.preventDefault();
            ajaxDeleteRequest('delete-sermon',form,'Sermon deleted successfully');
        });
    });

    $('.video-delete-btn').on('click',function () {
        $('#delete_confirm_modal').modal('show');
        $('.confirmation_message').html('Do you really want to unlink this video?');
        var id = $(this).attr('data-id');
        var form=$('#delete-form');
        $('#id').val(id);
        $('#btn-delete-confirm').one('click',function (e) {
            e.preventDefault();
            ajaxDeleteRequest('delete-video',form,'Video unlinked successfully');
        });
    });

    $('.admin-delete-btn').on('click',function () {

        var id = $(this).attr('data-id');
        var level = $(this).attr('data-level');
        var authority=$(this).attr('auth-level');
        var form=$('#delete-form');
        $('#id').val(id);
        if(level==2 && authority==1){
            $('#delete_confirm_modal').modal('show');
            $('.confirmation_message').html('Do you really want to delete this admin?');
            $('#btn-delete-confirm').one('click',function (e) {
                e.preventDefault();
                ajaxDeleteRequest('delete-admin',form,'Admin deleted successfully');
            });
        }else{
            alert('Not allowed to delete this admin');

        }

    });

    $('.time-delete-btn').on('click',function () {
        $('#delete_confirm_modal').modal('show');
        $('.confirmation_message').html('Do you really want to unset this time?');
        var id = $(this).attr('data-id');
        var form=$('#delete-form');
        $('#id').val(id);
        $('#btn-delete-confirm').one('click',function (e) {
            e.preventDefault();
            ajaxDeleteRequest('delete-time',form,'Time unset successfully');
        });
    });


    $('#add-profile-photo-form').on('submit',function (e) {
        e.preventDefault();
        var form = $(this);
        var form_data = new FormData(form[0]);
        ajaxRequestImage('edit-profile-photo',form_data,form,'#add-profile-photo','Profile photo changed successfully');
    });

    $('#reply-form').on('submit',function (e) {
        e.preventDefault();
        var form = $(this);
        var form_data = form.serialize();
        ajaxSendMessage('send-message',form_data,form,'Message sent successfully.');
    });

});