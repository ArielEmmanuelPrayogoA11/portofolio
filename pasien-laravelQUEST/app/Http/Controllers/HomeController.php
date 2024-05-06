<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() {
        return view('home',[
            "title" => 'PENITENCE | Home',
            'dataspm' => Pasien::get()
        ]);
    }
}
