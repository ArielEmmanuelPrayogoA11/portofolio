<?php

namespace App\Http\Controllers\Admin;

use App\Models\Poli;
use App\Models\Doctor;
use PhpParser\Comment\Doc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DatadokterController extends Controller
{
    public function index(){
        
        $dokter = Doctor::all();

        return view ('admin.doctor.index',compact('dokter'));
    }

    public function edit($dokter_id)
    {
        $poli = Poli::all();
        $dokter = Doctor::find($dokter_id);
        return view('admin.doctor.edit', compact('dokter','poli'));
    }

    public function update(Request $request, $dokter_id)
    {
        $data = $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required|string',
            'id_poli' => 'required'
        ]);

        $dokter = Doctor::find($dokter_id);

        if (!$dokter) {
            return redirect('admin/data-dokter')->with('status', 'Dokter tidak ditemukan');
        }

        $dokter->nama = $data['nama'];
        $dokter->alamat = $data['alamat'];
        $dokter->no_hp = $data['no_hp'];
        $dokter->id_poli = $data['id_poli'];
        $dokter->update();

        return redirect('admin/data-dokter')->with('status', 'Dokter Berhasil diupdate');
    }

    

}

