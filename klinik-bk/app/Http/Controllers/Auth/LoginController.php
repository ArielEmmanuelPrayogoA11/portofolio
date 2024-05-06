<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function authenticated(){
        if(Auth::user()->role_as == '1') // 1 = admin
        {
            return redirect('/home')->with('status','Logged in as Admin');
        }else if(Auth::user()->role_as == '0') // 0 = pasien
        {
            return redirect('/home')->with('status','Logged in as Pasien');
        }else if(Auth::user()->role_as == '2') // 2 = doctor
        {
            return redirect('/home')->with('status','Logged in as Dokter');
        }
        
        else{
            return redirect('/');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}