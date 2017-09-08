<?php
/**
 * Created by PhpStorm.
 * User: kjkas
 * Date: 07.09.2017
 * Time: 10:57
 */

namespace App\Http\Controllers\Manage;

use App\Model\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
    }

    public function getLogin()
    {
        if (Auth::guard('admin')->user())
            return redirect()->route('manage.index');
        {
            return view('manage.login');
        }
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ])){
            return redirect()->intended(route('manage.index'));
        }

        return redirect()->back();
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('shop.index');
    }
}