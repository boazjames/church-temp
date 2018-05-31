@extends('admin.layouts.index')

@section('content')

    <div class="sermon">
        <div class="panel bg-white">
            <div class="panel-heading white-color text-bold bg-blue-dark">Add Sermon</div>

                <form method="post" action="post" enctype="multipart/form-data" id="add-sermon-form" class="padding-20p">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" placeholder="Title" id="sermon-title" name="title"
                               required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Sermon Body</label>
                        <textarea class="form-control" placeholder="Sermon Body" name="body" rows="5" id="sermon-body"
                                  required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Sermon image</label>
                        <input type="file" class="hidden" name="image" id="image" required>
                        <br>
                        <label for="image" id="label-for-image" class="label"><i class="fa fa-upload"></i> <span>Choose an image file...</span>
                        </label>
                        <br>
                        <img src="#" alt="" id="preview" class="preview">
                    </div>
                    <div class="alert alert-danger"></div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-warning btn-lg">Add</button>
                    </div>

                </form>
                <br>

        </div>

    </div>

@endsection