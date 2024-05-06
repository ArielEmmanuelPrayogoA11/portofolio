<?php

namespace App\Http\Controllers\Doctor;

use App\Models\Obat;
use App\Models\Doctor;
use App\Models\Jadwal;
use App\Models\Periksa;
use App\Models\DaftarPoli;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PeriksaController extends Controller
{
    public function index()
    {

        $pending = DaftarPoli::where('status', '0')->get();

        //  Daftar_Poli yang memiliki id_jadwal dimana id_jadwal ini memiliki id_dokter yang sedang login


        // Mengambil dokter yang sedang login
        $dokter = Doctor::where('user_id', Auth::id())->first();

        if (!$dokter) {
            return redirect('/doctor/periksa')->with('status', "Harap lengkapi profil anda terlebih dahulu!");
        }

        // Mengambil id pada tabel Jadwal yang memiliki id_dokter yang sedang login ALIAS ngambil jadwal dokter
        $jadwalDokter = Jadwal::where('id_dokter', $dokter->id)->pluck('id')->toArray();

        // Mengambil DaftarPoli yang memiliki id_jadwal sesuai dengan jadwal dokter yang sedang login
        $dafpoli = DaftarPoli::whereIn('id_jadwal', $jadwalDokter)->get();



        return view('doctor.periksa', compact('dafpoli', 'dokter', 'pending'));
    }


    public function keloladafpol($dafpol_id)
    {
        $dafpol = DaftarPoli::find($dafpol_id);

        return view('doctor.keloladafpol', compact('dafpol'));
    }

    public function update(Request $request, $dafpol_id)
    {

        $dafpol = DaftarPoli::find($dafpol_id);
        if ($dafpol) {
            $dafpol->status = $request->status;
            $dafpol->update();
            return redirect('doctor/periksa')->with('status', 'Berhasil diupdate');
        }
        return redirect('doctor/periksa')->with('status', 'Gagal Update');
    }

    public function riwayatpasien()
    {

        $complete = DaftarPoli::where('status', '1')->get();


        //  Daftar_Poli yang memiliki id_jadwal dimana id_jadwal ini memiliki id_dokter yang sedang login


        // Mengambil dokter yang sedang login
        $dokter = Doctor::where('user_id', Auth::id())->first();

        if (!$dokter) {
            return redirect('/doctor/periksa')->with('status', "Harap lengkapi profil anda terlebih dahulu!");
        }

        // Mengambil id pada tabel Jadwal yang memiliki id_dokter yang sedang login ALIAS ngambil jadwal dokter
        $jadwalDokter = Jadwal::where('id_dokter', $dokter->id)->pluck('id')->toArray();

        // Mengambil DaftarPoli yang memiliki id_jadwal sesuai dengan jadwal dokter yang sedang login
        $dafpoli = DaftarPoli::whereIn('id_jadwal', $jadwalDokter)->get();

        return view('doctor.riwayat', compact('dafpoli', 'dokter', 'complete'));
    }



    public function periksadafpol($dafpol_id)
    {
        $obat = Obat::all();
        $dafpol = DaftarPoli::find($dafpol_id);
        $pemeriksaan = Periksa::where('id_daftar_poli', $dafpol_id)->first();

        return view('doctor.periksadafpol', compact('dafpol', 'obat','pemeriksaan'));
    }


    public function createperiksa(Request $request, $dafpol_id)
    {
        $data = $request->validate([
            'catatan' => 'required|string',
            'id_obat' => 'required|exists:obat,id',
        ]);

        $pemeriksaan = Periksa::where('id_daftar_poli', $dafpol_id)->first();
        if ($pemeriksaan) {
            // Jika entitas sudah ada, update propertinya
            $pemeriksaan->update([
                'catatan' => $data['catatan'],
                'tgl_periksa' => Carbon::now(),
                'biaya_periksa' => 150000 + Obat::find($data['id_obat'])->harga,
            ]);
        } else {
            // Jika entitas belum ada, buat entitas baru
            $pemeriksaan = new Periksa([
                'id_daftar_poli' => $dafpol_id,
                'catatan' => $data['catatan'],
                'tgl_periksa' => Carbon::now(),
                'biaya_periksa' => 150000 + Obat::find($data['id_obat'])->harga,
            ]);
            $pemeriksaan->save();
        }

      
        $id_periksa = $pemeriksaan->id;
        $pemeriksaan->detailsPeriksa()->updateOrCreate([
            'id_periksa' => $id_periksa,
            'id_obat' => $data['id_obat'],
            // Sesuaikan dengan kunci unik lain yang mungkin Anda miliki
        ]);

        return redirect('doctor/periksa')->with('status', 'Pemeriksaan berhasil ditambahkan');
    }
}
