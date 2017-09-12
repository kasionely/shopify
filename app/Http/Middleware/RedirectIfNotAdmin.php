<?php
/**
 * Created by PhpStorm.
 * User: kjkas
 * Date: 07.09.2017
 * Time: 14:28
 */

namespace App\Http\Middleware;

Use Closure;
use Illuminate\Support\Facades\Auth;


class RedirectIfNotAdmin
{
    public function handle($request, Closure $next, $guard = 'admin')
    {
        if (!Auth::guard($guard)->check()){
            return redirect()->route('Manage.login');
        }

        return $next($request);
    }
}