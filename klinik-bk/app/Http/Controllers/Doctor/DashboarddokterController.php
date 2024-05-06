<?php

namespace App\Http\Controllers\Doctor;

use App\Models\Poli;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboarddokterController extends Controller
{
    public function index()
    {

        $doctor = Doctor::where('user_id', Auth::id())->first();
        
        $poli = Poli::all();

        return view('doctor.dashboard', compact('doctor','poli'));
    }

    public function profil(Request $request)
    {
        $doctorlama = Doctor::where('user_id', Auth::id())->first();
    
        if ($doctorlama) {
            // Jika entitas sudah ada, update propertinya
            $doctorlama->update([
                'nama' => $request->input('nama'),
                'no_hp' => $request->input('no_hp'),
                'alamat' => $request->input('alamat'),
                'id_poli' => $request->input('id_poli'),
            ]);
    
            return redirect('/doctor/dashboard')->with('status', "Profile Updated Successfully");
        }
    
        // Jika entitas belum ada, buat yang baru
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);
    
        $doctor = new Doctor();
        $doctor->user_id = Auth::id();
        $doctor->nama = $request->input('nama');
        $doctor->no_hp = $request->input('no_hp');
        $doctor->alamat = $request->input('alamat');
        $doctor->id_poli = $request->input('id_poli');
    
        $doctor->save();
    
        return redirect('/doctor/dashboard')->with('status', "Profile Saved Successfully");
    }




    
}
