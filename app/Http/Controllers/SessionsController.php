<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['except'=>'logout']);
    }

    public function index(){
        return view('admin.index');
    }

    public function login(){
        if (!auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message'=>'Invalid username or password'
            ]);
        }

        return redirect('admin_church/home');
    }

    public function logout(){
        auth()->logout();

        return redirect('admin_church');
    }
}
