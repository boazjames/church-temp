<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function email(){
        return view('auth.passwords.email');
    }
    public function reset(){
        return view('auth.passwords.reset');
    }

    public function change(){
        return view('admin.change-password');
    }

    public function changePassword(){
        $this->validate(request(),[
           'current_password'=>'required',
            'password'=>'required|confirmed|min:8'
        ]);
$current_pwd=request('current_password');

        $id=auth()->id();

        $user=User::find($id);

        $password=$user->password;

        if (Hash::check($current_pwd, $password)) {
            $hashed_pwd=Hash::make(request('password'));
            $user->password=$hashed_pwd;
            $user->save();
            return redirect('admin_church/home');
        }
        else{
            return back()->withErrors([
                'message'=>'Wrong current password'
            ]);
        }
    }
}
