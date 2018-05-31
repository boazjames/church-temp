<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Sermon;
use App\Video;
use App\User;
use App\Time;
use App\Auth;
use Carbon\Carbon;
use App\Mail\WelcomeAgain;
use App\Message;

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
        $sermon=new Sermon;
        $videos=new Video;
        $users=new User;
        $sermon_count=count($sermon->all());
        $videos_count=count($videos->all());
        $users_count=count($users->all());
        $count_array=['sermons'=>$sermon_count,'videos'=>$videos_count,'users'=>$users_count];
        return view('admin.panel',compact('count_array' ));
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

    public function deleteVideo(){
        $videos=new Video;

        $id=request('id');

        $videos->destroy($id);
    }

    public function videoValue($id){
        $video=new Video;

        $video=$video->find($id);

        return view('admin.edit-video',compact('video'));

    }

    public function editVideo(){
        $video=new Video;

        $this->validate(request(),[
            'title'=>'required',
            'code'=>'required'
        ]);

        $updated_at=Carbon::now('Africa/Nairobi');
        $id=request('id');

        $video=$video->find($id);
        $video->title=request('title');
        $video->code=request('code');
        $video->updated_at=$updated_at;

        $video->save();

        return redirect('admin_church/video')->with('success', 'video edited successfully');
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

    public function unsetTime(){
        $time=new Time;

        $id=request('id');

        $time->destroy($id);
    }

    public function timeValue($id){
        $time=new Time;

        $time=$time->find($id);

        return view('admin.edit-time',compact('time'));

    }

    public function editTime(){
        $time=new Time;

        $this->validate(request(),[
            'time'=>'required'
        ]);

        $updated_at=Carbon::now('Africa/Nairobi');
        $id=request('id');

        $time=$time->find($id);
        $time->time=request('time');
        $time->updated_at=$updated_at;

        $time->save();

        return redirect('admin_church/time')->with('success', 'time edited successfully');
    }

    public function addAdmin(){
        $user=new User;

        $this->validate(request(),[
            'salutation'=>'required',
            'username'=>'required|unique:users,username',
            'email'=>'required|email|unique:users,email'
        ]);

        $create_at=Carbon::now('Africa/Nairobi');
        $random_password=str_random(8);
        $hashed_random_password = Hash::make($random_password);

        $user->salutation=request('salutation');
        $user->username=request('username');
        $user->email=request('email');
        $user->password=$hashed_random_password;
        $user->level=2;
        $user->created_at=$create_at;
        $user->who_added_id=auth()->id();

        $user->save();

        \Mail::to($user)->send(new WelcomeAgain($user,$random_password));
    }

    public function deleteAdmin(){
        $user=new User;
        $id=request('id');
        $auth_id=auth()->id();

        $auth_level=$user->find($auth_id)->level;
        $user_level=$user->find($id)->level;

        if($auth_level==1 && $user_level==2){}
        $user->destroy($id);

    }

    public function filtAdmin(){
        $user=new User;
        $this->validate(request(),[
            'username'=>'required'
        ]);

        $username=request('username');

        $admins=$user->where('username','like','%'.$username.'%')->paginate(5);

        return view('admin.admin-view',compact('admins'));
    }

    public function adminDetails(){
        $user=new User;
        $id=auth()->id();
        $user=$user->find($id);
        return view('admin.edit-profile',compact('user'));
    }

    public function editAdmin(){
        $user=new User;
        $this->validate(request(),[
            'salutation'=>'required',
            'description'=>'required'
        ]);

        $updated_at=Carbon::now('Africa/Nairobi');
        $id=auth()->id();

        $user=$user->find($id);
        $user->salutation=request('salutation');
        $user->description=request('description');
        $user->updated_at=$updated_at;

        $user->save();

        return redirect('admin_church/home')->with('success', 'admin edited successfully');
    }

    public function editPhoto(){
        $user=new User;

        $this->validate(request(),[
            'image'=>'required|image'
        ]);
        $updated_at=Carbon::now('Africa/Nairobi');
        $file = request('image');
        $id=auth()->id();

        $path = $file->store('user-images', 'public');

        $user=$user->find($id);
        $user->image=$file->hashName();
        $user->updated_at=$updated_at;

        $user->save();
    }

}
