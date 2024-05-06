<?php

namespace App\Http\Controllers\Admin;

use App\Models\Obat;
use App\Models\Poli;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $pasien = User::where('role_as','0')->count();
        $admins = User::where('role_as','1')->count();
        $doctor = User::where('role_as','2')->count();
        $poli = Poli::count();
        $obat = Obat::count();
        
        return view ('admin.dashboard',compact('pasien','admins','doctor','poli','obat'));
    }
}
