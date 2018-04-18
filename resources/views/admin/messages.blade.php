@extends('admin.layouts.index')

@section('content')

    <div class="admin">
        <div class="panel bg-white">
            <div class="panel-heading white-color text-bold bg-blue-dark">Messages</div>
            <div class="filter-message">
                <a href="messages"><button class="btn btn-default text-bold" id="all"><i class="fa fa-envelope blue-color"></i> All</button></a>
                <a href="messages-unread"><button class="btn btn-default text-bold" id="unread"><i class="fa fa-envelope-square blue-color"></i> Unread</button></a>
                    <a href="messages-read"><button class="btn btn-default text-bold" id="read"><i class="fa fa-envelope-open blue-color"></i> Read</button></a>
            </div>
            @if($messages)
            @foreach($messages as $message)
            @if($message->is_read==0)
                        <a href="http://localhost/church/public/admin_church/{{$message->id}}message"><div class="message-jumbotron text-bold"><div class="message-email inline">{{$message->email}}</div> <p class="inline">{{str_limit($message->message, $limit = 100, $end = '...')}}</p></div></a>
                    @else
                        <a href="http://localhost/church/public/admin_church/{{$message->id}}message"><div class="message-jumbotron-read text-bold"><div class="message-email inline">{{$message->email}}</div> <p class="inline">{{str_limit($message->message, $limit = 100, $end = '...')}}</p></div></a>
                @endif
                @endforeach

                <div class="message-links text-center">{{$messages->links()}}</div>

                @endif
        </div>

    </div>

@endsection


