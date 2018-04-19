@extends('admin.layouts.resets')

@section('content')
    <div class="panel-heading bg-blue-dark text-bold white-color" id="form-top">Reset Password</div>

    <form class="login-form"  method="POST" action="{{ route('password.email') }}">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        {{csrf_field()}}

        <div class="form-group">
            <label>Email:</label>
            <input type="email"  name="email" class="form-control" placeholder="example@gmail.com" required autofocus>

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary bg-blue-dark">Send password reset link</button>
        </div>


        @include('layouts.errors')

    </form>

@endsection
