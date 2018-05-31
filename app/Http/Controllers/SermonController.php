<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sermon;
use App\User;
use App\Auth;
use App\Time;
use Carbon\Carbon;
use App\Video;

class SermonController extends Controller
{
    public function limit3()
    {
        $video = Video::limit(4)->latest()->get();
        $sermons = Sermon::limit(3)->latest()->get();
        $times = Time::limit(3)->latest()->get();
        $arr = ['times' => $times, 'video' => $video];
        return view('index', compact('sermons'), compact('arr'));
    }

    public function index()
    {
        $sermons = Sermon::orderBy('id', 'desc')->paginate(5);
        return view('sermon.sermons', compact('sermons'));
    }

    public function show($id)
    {
        $sermon = Sermon::find($id);

        return view('sermon.sermon', compact('sermon'));
    }

    public function store()
    {
        $sermon = new Sermon;

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|image'
        ]);

        $create_at = Carbon::now('Africa/Nairobi');
        $file = request('image');

        $path = $file->store('sermon-images', 'public');

        $sermon->title = request('title');
        $sermon->body = request('body');
        $sermon->created_at = $create_at;
        $sermon->image = $file->hashName();
        $sermon->user_id = auth()->id();

        $sermon->save();

        return redirect('admin_church/sermon')->with('success', 'sermon added successfully');

    }

    public function addSermon()
    {
        return view('admin.add-sermon');
    }

    public function delete()
    {
        $sermon = new Sermon;

        $id = request('id');

        $sermon->destroy($id);
    }

    public function value($id)
    {
        $sermons = new Sermon;
        $sermon_edit = $sermons->find($id);

        return view('admin.edit-sermon', compact('sermon_edit'));

    }

    public function edit()
    {
        $sermon = new Sermon;
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        $updated_at = Carbon::now('Africa/Nairobi');
        $id = request('id');

        $sermon = $sermon->find($id);
        $sermon->title = request('title');
        $sermon->body = request('body');
        $sermon->updated_at = $updated_at;

        $sermon->save();

        return redirect('admin_church/sermon')->with('success', 'sermon edited successfully');

    }

    public function filter()
    {
        $sermon = new Sermon;
        $this->validate(request(), [
            'title' => 'required'
        ]);

        $title = request('title');

        $sermons = $sermon->where('title', 'like', '%' . $title . '%')->paginate(5);

        return view('admin.sermon-view', compact('sermons'));
    }

    public function search()
    {
        $sermon = new Sermon;

        $this->validate(request(), [
            'title' => 'required|min:3'
        ]);

        $title = request('title');

        $sermons = $sermon->where('title', 'like', '%' . $title . '%')->paginate(10);

        return view('sermon.search-results', compact('sermons'));
    }

}
