<!-- Modal add sermon-->
<div id="add-sermon" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="title">Add Sermon</h3>
            </div>
            <div class="modal-body">
                <form method="post" action="post" enctype="multipart/form-data" id="add-sermon-form">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" placeholder="Title" id="sermon-title" name="title" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Sermon Body</label>
                        <textarea class="form-control" placeholder="Sermon Body" name="body" rows="5" id="sermon-body" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Sermon image</label>
                        <input type="file" class="hidden" name="image" id="image" required>
                        <br>
                        <label for="image" id="label-for-image" class="label"><i class="fa fa-upload"></i> <span>Choose an image file...</span> </label>
                        <br>
                        <img src="#" alt="" id="preview" class="preview">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning btn-lg">Add</button>
                    </div>

                </form>
                <br>
                <div class="alert alert-danger alert-div"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- end of modal add sermon -->

<!-- Modal add video-->
<div id="add-video" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="title">Add Video</h3>
            </div>
            <div class="modal-body">
                <form id="add-video-form" method="post" action="video">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" placeholder="Title" id="video-title" name="title" autofocus required>
                    </div>
                    <div class="form-group">
                        <label>Code</label>
                        <input class="form-control" type="text" placeholder="Code" id="video-code" name="code" required>
                    </div>
                    <div class="form-group">
                        <button id="add-video" type="submit" class="btn btn-warning btn-lg">Add</button>
                    </div>
                </form>
                <br>
                <div class="alert alert-danger"></div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- end of modal add video -->

<!-- Modal set time-->
<div id="set-time" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="title">Set time</h3>
            </div>
            <div class="modal-body">
                <form id="set-time-form" method="post">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label>Date example</label> <span>2018-01-30 12:00</span>
                        <input type="datetime-local" class="form-control" placeholder="2018-01-30 12:00" id="time-input" name="time" autofocus required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning btn-lg">Set</button>
                    </div>
                </form>
                <br>
                <div class="alert alert-danger"></div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- end of modal set time -->

<!-- Modal add admin-->
<div id="add-admin" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="title">Add Admin</h3>
            </div>
            <div class="modal-body">
                <form method="post" id="add-admin-form">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label>Salutation</label>
                        <select class="form-control" name="salutation">
                            <option selected>Pastor</option>
                            <option>Bishop</option>
                            <option>Reverent</option>
                            <option>Evangelist</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" id="username_input" name="username" required autofocus>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="example@gmail.com" id="email_input" name="email" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-warning btn-lg">Add</button>
                    </div>

                </form>
                <br>
                <div class="alert alert-danger"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- end of modal add admin -->

<!-- Modal success-->
<div id="success_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success"></div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- end of modal success-->

<!-- Modal delete-->
<div id="delete_confirm_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="confirmation_message"></div>
                <br>
                <form id="delete-form">
                    {{csrf_field()}}
                    <input type="text" class="hidden" name="id" id="id">
                <div class="form-group">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger" id="btn-delete-confirm">Delete</button>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- end of modal delete-->

<!-- Modal delete success-->
<div id="delete_success_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success"></div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- end of modal delete success-->

<!-- Modal profile image-->
<div id="add-profile-photo" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" id="add-profile-photo-form">
                    {{csrf_field()}}
                    
                    <div class="form-group">
                        <input type="file" class="hidden" name="image" class="image" id="photo">
                        <br>
                        <label for="photo" class="label" id="label-for-photo"><i class="fa fa-upload"></i> <span>Choose an image file...</span> </label>
                        <br>
                        <img src="#" alt="" class="preview" id="preview-photo">
                        <br>
                        <button type="submit" class="btn bg-blue text-bold white-color" id="upload">Upload</button>
                    </div>

                </form>
                <br>
                <div class="alert alert-danger alert-div-photo"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- end of modal profile image -->
