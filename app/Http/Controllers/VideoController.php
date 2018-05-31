<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    public function index(){
        $videos = Video::orderBy('id', 'desc')->paginate(8);
        return view("videos", compact('videos'));
    }

    public function single($id){
        $video = Video::find($id);
        return view('single-video', compact('video'));
    }

    public function search(){
        $this->validate(request(),[
            'title'=>'required|min:3'
        ]);

        $title=request('title');

        $videos=Video::where('title','like','%'.$title.'%')->paginate(8);
        return view("videos", compact('videos'));

    }
}
