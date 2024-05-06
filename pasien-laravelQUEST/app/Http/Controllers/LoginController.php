<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    
    public function create(){

        return view ('auth.login' , [
            'title' => 'PENITENCE | Login',
        ]);

    }



    public function store(Request $request){


        $attributes = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);


        if(Auth::attempt($attributes)){
            return redirect('/')->with('success' , 'Successfully logged in');
        }

        //PESAN ERROR
        throw ValidationException::withMessages([
            'email' => 'Your provide credentials does not match our records',
        ]);
        
        
        
        // //Ambil variabel dulu nampung ADA GAK USERNYA
        // $user = User::whereEmail($request->email)->first();
        // //KONDISI DAN REDIRECT
        // if ($user){
        //     if (Hash::check($request->password , $user->password))
        //     {
        //         Auth::login($user);
        //         return redirect('/')->with('success' , 'Successfully logged in');
        //     }
        // }
    }
}
