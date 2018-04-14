<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sermon;
use App\User;
use App\Auth;
use App\Time;
use Carbon\Carbon;

class SermonController extends Controller
{
    public function limit3(){
        $sermons=Sermon::limit(3)->latest()->get();
        $times=Time::limit(3)->latest()->get();
        return view('index',compact('sermons'),compact('times'));
    }
    public function index(){
        $sermons=Sermon::orderBy('id', 'desc')->paginate(5);
        return view('sermon.sermons',compact('sermons'));
    }

    public function  show($id){
        $sermon=Sermon::find($id);

        return view('sermon.sermon',compact('sermon'));
    }

    public function store(){
        $sermon=new Sermon;

        $this->validate(request(),[
            'title'=>'required',
            'body'=>'required',
            'image'=>'required|image'
        ]);
        $create_at=Carbon::now('Africa/Nairobi');
        $file = request('image');

        $path = $file->store('sermon-images', 'public');

        $sermon->title=request('title');
        $sermon->body=request('body');
        $sermon->created_at=$create_at;
        $sermon->image=$file->hashName();
        $sermon->user_id=auth()->id();

        $sermon->save();


    }

}
