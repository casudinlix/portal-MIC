<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class Status
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        if (Auth::check() && Auth::user()->status != '1') {
            Auth::logout();

            $request->session()->flash('alert-danger', 'Akun Suspend!.');

            return redirect('/login')->with('erro_login', 'Akun Suspend');
        }

        return $response;
    }
}
