<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if($guard == 'web'){
                return redirect(RouteServiceProvider::HOME);
            }else if ($guard == 'teacher'){
                return redirect()->route('teacher.home');
            }else if($guard == 'student') {
                return redirect()->route('student.home');
            }
        }
        return $next($request);
    }
}
