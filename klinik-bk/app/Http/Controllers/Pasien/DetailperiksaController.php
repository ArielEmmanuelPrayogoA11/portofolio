<?php

namespace App\Http\Controllers\Pasien;

use App\Models\Obat;
use App\Models\Periksa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DetailPeriksa;

class DetailperiksaController extends Controller
{
    public function index($id_daftar_poli)
{
    // Menampilkan data periksa yang id_daftar_poli nya sesuai dengan id_daftar_poli yang diklik, ada di URL
    $detail = Periksa::where('id_daftar_poli', $id_daftar_poli)->first();

    // Mengambil detail periksa berdasarkan id_periksa dari $detail
    $periksadetail = DetailPeriksa::where('id_periksa', $detail->id)->get();

    $obat = Obat::all();

    return view('pasien.detail-periksa', compact('detail', 'periksadetail', 'obat'));
}

    public function storenota()
    {
        //GAJADI TAK PAKE

        return redirect('https://qris.online/homepage/')->with('status', 'Detail berhasil ditambahkan');
    }
}
