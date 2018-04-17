@extends('admin.layouts.index')

@section('content')

    <div class="admin">
        <div class="panel bg-white">
            <div class="panel-heading white-color text-bold bg-blue-dark">Messages</div>
            @if($message)
                <div class="message">
                    <div class="email"><span class="text-bold">Email:</span> <span class="color-light">&lt;{{$message->email}}&gt;</span></div>
                    <div class="message-body">{{$message->message}}</div>
                    <button class="btn btn-primary reply"><i class="fa fa-reply"></i> Reply</button>
                    <form method="post" action="send-message" id="reply-form">
                        {{csrf_field()}}
                        <input type="text" class="hidden" name="email" value="{{$message->email}}">
                        <textarea name="message" id="reply-body" class="form-control" placeholder="write your message here"></textarea>
                        <button class="btn btn-primary">Send</button>
                    </form>
                    <div class="alert alert-success"></div>
                </div>
            @endif
        </div>

    </div>

@endsection


