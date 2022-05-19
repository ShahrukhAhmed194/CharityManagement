<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class adminAuthorization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('name')){
        return $next($request);
        }
        else{
            $request->session()->flash('fail', "You Need To Sign In First." );
            return redirect()->route('signin');
        }
    }
}
