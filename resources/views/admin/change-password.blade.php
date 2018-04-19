@extends('admin.layouts.index')

@section('content')

    <div class="sermon">
        <div class="panel bg-white">
            <div class="panel-heading white-color text-bold bg-blue-dark">Change Password</div>

            <form class="edit" id="edit-video-form" method="post" action="change-password">

                {{csrf_field()}}

                <div class="form-group">
                    <label>Current Password:</label>
                    <input type="password" class="form-control" placeholder="current password" name="current_password" autofocus required>
                </div>

                <div class="form-group">
                    <label>New Password:</label>
                    <input type="password" class="form-control" placeholder="new password" name="password" required>
                </div>

                <div class="form-group">
                    <label>Confirm New Password:</label>
                    <input type="password" class="form-control" placeholder="confirm new password" name="password_confirmation" required>
                </div>

                <div class="form-group">
                    <button id="add-video" type="submit" class="btn btn-warning btn-lg">Change Password</button>
                </div>
            </form>
            @if(count($errors))
            <div class="alert-custom" id="alert">
                @foreach($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
            @endif

        </div>

    </div>

@endsection