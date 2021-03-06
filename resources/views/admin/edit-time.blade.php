@extends('admin.layouts.index')

@section('content')

    <div class="sermon">
        <div class="panel bg-white">
            <div class="panel-heading white-color text-bold bg-blue-dark">Edit Sermon</div>

            <form class="edit" method="post" action="edit-time">

                {{csrf_field()}}

                <input type="text" class="hidden" name="id" value="{{$time->id}}">

                <div class="form-group">
                    <label>Date example</label> <span>2018-01-30 12:00</span>
                    <input type="datetime-local" class="form-control" placeholder="2018-01-30 12:00" id="time-input" name="time" value="{{$time->time}}" autofocus required>
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