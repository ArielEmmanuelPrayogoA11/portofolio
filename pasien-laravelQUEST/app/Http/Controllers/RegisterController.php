<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    
    public function create(){
        return view ('auth.register' ,[
            'title' => 'PENITENCE | Register'
        ]);
    }


    public function store(RegisterRequest $request){
        User::create($request->all());

        return redirect('/')->with('success' , 'Thank you , You are now Registered!');
    }
}
