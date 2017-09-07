<?php

namespace App\Http\Controllers\Abstracts;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    use AuthenticatesUsers, DispatchesJobs, ValidatesRequests;

    public function getUser()
    {
        if( Auth::guard()->check() )
        {
            return Auth::guard()->user();
        }

        return NULL;
    }
}