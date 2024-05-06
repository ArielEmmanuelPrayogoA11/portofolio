<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DatapasienController extends Controller
{
    public function index()
    {

        $pasien = Pasien::all();
        return view('admin.pasien.index', compact('pasien'));
    }

    public function edit($pasien_id)
    {
        $pasien = Pasien::find($pasien_id);
        return view('admin.pasien.edit', compact('pasien'));
    }

    public function update(Request $request, $pasien_id)
    {
        $data = $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required|string',
        ]);

        $pasien = Pasien::find($pasien_id);

        if (!$pasien) {
            return redirect('admin/data-pasien')->with('status', 'Pasien tidak ditemukan');
        }

        $pasien->nama = $data['nama'];
        $pasien->alamat = $data['alamat'];
        $pasien->no_hp = $data['no_hp'];
        $pasien->update();

        return redirect('admin/data-pasien')->with('status', 'Pasien Berhasil diupdate');
    }
}
