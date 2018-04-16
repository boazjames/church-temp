@extends('admin.layouts.index')

@section('content')

    <div class="sermon">
        <div class="panel bg-white">
            <div class="panel-heading white-color text-bold bg-blue-dark">Edit Sermon</div>

            <form class="edit" id="edit-video-form" method="post" action="edit-video">

                {{csrf_field()}}

                <input type="text" class="hidden" name="id" value="{{$video->id}}">

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Title" id="video-title" name="title" value="{{$video->title}}" autofocus required>
                </div>
                <div class="form-group">
                    <label>Code</label>
                    <input class="form-control" type="text" placeholder="Code" id="video-code" name="code" value="{{$video->code}}" required>
                </div>
                <div class="form-group">
                    <button id="add-video" type="submit" class="btn btn-warning btn-lg">Edit</button>
                </div>
            </form>
            <br>
            <div class="alert alert-danger"></div>

        </div>

    </div>

@endsection