<?php

namespace App\Http\Controllers\Pasien;

use App\Models\User;
use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardpasienController extends Controller
{
    public function index()
    {

        $pasien = $pasien = Pasien::where('user_id', Auth::id())->first();

        return view('pasien.dashboard', compact('pasien'));
    }

    public function profil(Request $request)
    {
        $pasienlama = Pasien::where('user_id', Auth::id())->first();

        if ($pasienlama) {
            // Jika entitas sudah ada, update propertinya
            $pasienlama->update([
                'nama' => $request->input('nama'),
                'no_hp' => $request->input('no_hp'),
                'alamat' => $request->input('alamat'),
                'no_ktp' => $request->input('no_ktp'),
            ]);

            return redirect('/pasien/dashboard')->with('status', "Profile Updated Successfully");
        }

        // Jika entitas belum ada, buat yang baru
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'no_ktp' => 'required',
        ]);

        $pasien = new Pasien();
        $pasien->user_id = Auth::id();
        $pasien->nama = $request->input('nama');
        $pasien->no_hp = $request->input('no_hp');
        $pasien->alamat = $request->input('alamat');
        $pasien->no_ktp = $request->input('no_ktp');

        // Jadi begini caranya membuat NO RM , berdasarkan tanggal dibuatnya dan nomer pasien
        $jumlah_pasien = Pasien::count();
        $no_rm_baru = now()->format('Ym') . '-' . ($jumlah_pasien + 1);

        $pasien->no_rm = $no_rm_baru;

        $pasien->save();

        return redirect('/pasien/dashboard')->with('status', "Profile Saved Successfully");
    }
}
