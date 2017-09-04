<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getSignup()
    {
        return view('shop.profile.signup');
    }

    public function getProfile(){
        return view('shop.profile.profile');
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->back();
    }

    public function getLogin(){
        return view('shop.profile.signin');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request,[
           'email'     => 'required|max:255|unique:users',
           'password'  => 'required|min:4',
           'firstname' => 'required|max:255',
           'lastname'  => 'required|max:255',
           'phone'     => 'required|min:6|max:22'
        ]);

        $user = new User([
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
            'firstname' => $request->input('firstname'),
            'lastname'  => $request->input('lastname'),
            'phone'     => $request->input('phone')
        ]);

        $user->save();

        return redirect()->route('shop.index');
    }

    public function Login(Request $request){

        $this->validate($request,[
            'email'     => 'required|max:255|unique:users',
            'password'  => 'required|min:4'
        ]);

        if (Auth::attempt([
            'email'    => $request->input('email'),
            'password' => $request->input('password')
        ]))
        {
            return redirect()->route('user.profile');
        }

        return redirect()->back();
    }
}