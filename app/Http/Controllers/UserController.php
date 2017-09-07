<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\Order;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function getSignup()
    {
        return view('shop.profile.register');
    }

    public function getProfile(){
        $orders = Auth::user()->orders;

        $orders->transform(function ($order, $key){
            $order->basket = unserialize($order->basket);
            return $order;
        });
//        dd($orders);
        return view('shop.profile.index', ['orders' => $orders]);
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('shop.index');
    }

    public function getLogin(){
        return view('shop.profile.login');
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
           'password'  => bcrypt($request->input('password')),
           'firstname' => $request->input('firstname'),
           'lastname'  => $request->input('lastname'),
           'phone'     => $request->input('phone')
        ]);

        Auth::login($user);

        $user->save();

        return redirect()->route('user.profile');
    }

    public function Login(Request $request)
    {
        $this->validate($request,[
            'email'     => 'required',
            'password'  => 'required'
        ]);

        if (Auth::attempt([
            'email'    => $request->input('email'),
            'password' => $request->input('password')
        ]))
        {
            return redirect()->route('user.profile');
        }

        return redirect()->route('shop.index');
    }
}