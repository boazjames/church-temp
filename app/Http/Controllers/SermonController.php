<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sermon;
use App\User;

class SermonController extends Controller
{
    public function limit3(){
        $sermons=Sermon::limit(3)->latest()->get();
        return view('index',compact('sermons'));
    }
    public function index(){
        $sermons=Sermon::orderBy('id', 'desc')->paginate(2);
        return view('sermon.sermons',compact('sermons'));
    }

    public function  show($id){
        $sermon=Sermon::find($id);

        return view('sermon.sermon',compact('sermon'));
    }
}
