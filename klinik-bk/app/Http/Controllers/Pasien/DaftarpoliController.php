<?php

namespace App\Http\Controllers\Pasien;

use App\Models\Poli;
use App\Models\Jadwal;
use App\Models\Pasien;
use App\Models\DaftarPoli;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DaftarpoliController extends Controller
{
    public function index(){

        $pasien = Pasien::where('user_id', Auth::id())->first();
        $poli = Poli::all(); 
        $jadwal = Jadwal::all(); 


        if (!$pasien) {
            return redirect('/pasien/dashboard')->with('status', "Harap lengkapi profil anda!");
        }


        $daftarpoli = DaftarPoli::where('id_pasien',$pasien->id)->get();

        return view('pasien.daftarpoli', compact('pasien', 'poli', 'jadwal','daftarpoli'));
      
    }

    public function createdaftar(Request $request){
         
        $pasien = Pasien::where('user_id', Auth::id())->first();
              
        
        $request->validate([
            'jadwal' => 'required',
            'keluhan' => 'required'
        ]);
    
        $dafpoli = new DaftarPoli;
        $dafpoli->id_pasien = $pasien->id;
        $dafpoli->id_jadwal = $request->input('jadwal');
        $dafpoli->keluhan = $request->input('keluhan');
        
        // ANTRIAN
        $lastQueueNumber = DaftarPoli::max('no_antrian');
        $nextQueueNumber = $lastQueueNumber + 1;
        $formattedQueueNumber = sprintf($nextQueueNumber);
        $dafpoli->no_antrian = $formattedQueueNumber;
        


        // $dafpoli->id_poli = $request->input('id_poli');
    
        $dafpoli->save();
    
        return redirect('/pasien/daftar-poli')->with('status', "Berhasil Terdaftar");
    }



    public function destroy($dafpoli_id){
        $dafpoli = DaftarPoli::find($dafpoli_id);
        $dafpoli->delete();

        return redirect('/pasien/daftar-poli')->with('status', "Pendaftaran berhasil dibatalkan");
    }
}
