<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sermon;
use App\Video;
use App\User;
use App\Time;
use App\Auth;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.panel');
    }
    public function sermon(){
        $sermons=Sermon::orderBy('id', 'desc')->paginate(5);
        return view('admin.sermon-view',compact('sermons'));
    }

    public function video(){
        $videos=Video::orderBy('id', 'desc')->paginate(5);
        return view('admin.video-view',compact('videos'));
    }

    public function time(){
        $times=Time::limit(3)->latest()->get();
        return view('admin.time-view',compact('times'));
    }

    public function admin(){
        $admins=User::orderBy('id', 'desc')->paginate(5);
        return view('admin.admin-view',compact('admins'));
    }

    public function storeVideo(){
        $video=new Video;

        $this->validate(request(),[
            'title'=>'required',
            'code'=>'required|min:10'
        ]);

        $create_at=Carbon::now('Africa/Nairobi');

        $video->title=request('title');
        $video->code=request('code');
        $video->created_at=$create_at;
        $video->user_id=auth()->id();

        $video->save();
    }

    public function setTime(){
        $time=new Time;

        $this->validate(request(),['time'=>'required']);

        $create_at=Carbon::now('Africa/Nairobi');

        $time->time=request('time');
        $time->created_at=$create_at;
        $time->user_id=auth()->id();

        $time->save();

    }
}
