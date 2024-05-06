<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorMiddleware
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
        if(Auth::check()){
            if(Auth::user()->role_as == '2') //2 = dokter
            {
                return $next($request);
            }else{
                return redirect('/home')->with('status','Akses Ditolak! Anda bukan Dokter!');
            }
        }else{
            return redirect('/home')->with('status','Tolong Login Terlebih dahulu');
        }
        
    }
}
