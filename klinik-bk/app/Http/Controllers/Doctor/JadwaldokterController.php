<?php

namespace App\Http\Controllers\Doctor;

use App\Models\Doctor;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JadwaldokterController extends Controller
{
   
    public function index()
    {
        $dokter = Doctor::where('user_id', Auth::id())->first(); //ambil satu satunya dokter yang dimiliki user id
        if (!$dokter) {
            return redirect('/doctor/dashboard')->with('status', "Harap lengkapi profil anda terlebih dahulu!");
        }

        $jadwal = Jadwal::where('id_dokter', $dokter->id)->get(); //ambil semua jadwal yang dimiliki dokter id

        return view('doctor.jadwal', compact('jadwal'));
    }

    public function tambahjadwal(Request $request)
    {

        $dokter = Doctor::where('user_id', Auth::id())->first();
        if (!$dokter) {
            return redirect('/doctor/dashboard')->with('status', "Harap lengkapi profil anda terlebih dahulu!");
        }
        
    
        $request->validate([
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);
    
        $jadwal = new Jadwal();
        $jadwal->id_dokter = $dokter->id; 
        $jadwal->hari = $request->input('hari');
        $jadwal->jam_mulai = $request->input('jam_mulai');
        $jadwal->jam_selesai = $request->input('jam_selesai');
        $jadwal->aktif = $request->input('aktif');
    
        $jadwal->save();
    
        return redirect('/doctor/jadwal')->with('status', "Jadwal Saved Successfully");
    }


    public function edit($jadwal_id){
        $jadwal = Jadwal::find($jadwal_id);

        return view ('doctor.editjadwal',compact('jadwal'));
    }


    public function update(Request $request, $jadwal_id)
    {
        $data = $request->validate([
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'aktif' => 'required',
        ]);

        $jadwal = Jadwal::find($jadwal_id);
        $jadwal->update($data);

        return redirect('/doctor/jadwal')->with('status','Jadwal Berhasil diupdate');
    }

    
    
}
