<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sermon;
use App\User;
use App\Time;
use App\Message;
use Carbon\Carbon;
use App\Mail\Reply;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(){
        $message=new Message;

        $this->validate(request(),[
            'email'=>'required|email',
            'message'=>'required|min:10'
        ]);

        $created_at=Carbon::now('Africa/Nairobi');

        $message->message=request('message');
        $message->email=request('email');
        $message->created_at=$created_at;

        $message->save();
    }

    public function index(){
        $message=new Message;
        $messages=$message->orderBy('is_read','asc')->latest()->paginate(7);
        return view('admin.messages',compact('messages'));
    }

    public function showUnread(){
        $message=new Message;
        $messages=$message->where('is_read','=','0')->latest()->paginate(7);
        return view('admin.messages',compact('messages'));
    }

    public function showRead(){
        $message=new Message;
        $messages=$message->where('is_read','=','1')->latest()->paginate(7);
        return view('admin.messages',compact('messages'));
    }

    public function showMessage($id){
        $message=new Message;
        $message=$message->find($id);
        return view('admin.message',compact('message'));
    }

    public function sendMessage(){
        $this->validate(request(),['message'=>'required']);

        $email=request('email');
        $message=request('message');

        Mail::to($email)->send(new Reply($message));
    }
}
