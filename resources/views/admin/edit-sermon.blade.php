@extends('admin.layouts.index')

@section('content')

    <div class="sermon">
        <div class="panel bg-white">
            <div class="panel-heading white-color text-bold bg-blue-dark">Edit Sermon</div>

            <form method="post" action="edit-sermon" id="edit-sermon-form">
                {{csrf_field()}}

                <input type="text" class="hidden" name="id" value="{{$sermon_edit->id}}">

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Title" id="sermon-title" name="title" value="{{$sermon_edit->title}}" required autofocus>
                </div>
                <div class="form-group">
                    <label>Sermon Body</label>
                    <textarea class="form-control" placeholder="Sermon Body" rows="10" name="body" required>{{$sermon_edit->body}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-warning btn-lg">Edit</button>
                </div>

            </form>
            <br>
            <div class="alert alert-danger"></div>

        </div>

    </div>

    @endsection