<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class PasswordController extends Controller
{
    public function edit(){
        return view ('auth.password' ,[
            'title' => 'PENITENCE | Reset Password'
        ]);
    }
    public function update(Request $request){
        $request->validate([
            'current_password'  => ['required'],
            'password' => ['required','min:8','confirmed']
          
        ]);

        if(Hash::check($request->current_password, auth()->user()->password)){
            auth()->user()->update(['password' => Hash::make($request->password)]);
            auth()->logout();
            return redirect('/login')->with('message', 'Password successfully changed. Please login again.');
        }
        
        throw ValidationException::withMessages([
            'current_password' => 'Your current password does not match with our record'
        ]);
    }
}
