<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use App\Models\Doctor;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $poli = Poli::all();
        $dokter = Doctor::orderBy('nama')->get();
        return view('frontend.index', compact('poli', 'dokter'));
    }
}
