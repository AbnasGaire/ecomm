<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function login(Request $req){
        $user =User::where('email',$req->email)->first();
        if(Hash::check($req->password,$user->password)){
            $req->session()->put('user',$user);
            return redirect('dashboard');
        }
        else{
            $req->session()->put('err','Email or Password incorrect!Please Enter valid Email or password');
            return redirect('/');
        }
    }


    public function register(Request $req){

        $req->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required|min:5'
        ]);

        $data=new User();
        $data->name=$req->username;
        $data->email=$req->email;
        $data->password=Hash::make($req->password);
        $data->save();
        session()->put('success',"Successfully registered");
        return redirect('login');

    }
}
