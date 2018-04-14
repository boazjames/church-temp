<!-- Modal edit sermon-->
<div id="edit-sermon" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="title">Edit Sermon</h3>
            </div>
            <div class="modal-body">
                <form>
                    <div id="edit-value">
                        <label>Title</label>
                        <input type="text" class="form-control" placeholder="Title" id="sermon-body" name="sermon-title">
                        <br>
                        <label>Sermon Body</label>
                        <textarea class="form-control" placeholder="Sermon Body" name="sermon-body"></textarea>
                    </div>
                    <button id="edit-sermon" type="submit" class="btn btn-warning btn-lg">Edit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- end of modal edit sermon -->

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
                        <textarea class="form-control" placeholder="Sermon Body" name="body" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Sermon image</label>
                        <input type="file" class="hidden" name="image" id="image">
                        <br>
                        <label for="image" id="label-for-image"><i class="fa fa-upload"></i> <span>Choose an image file...</span> </label>
                        <img src="#" alt="" id="preview">
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
<!-- end of modal add sermon -->

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