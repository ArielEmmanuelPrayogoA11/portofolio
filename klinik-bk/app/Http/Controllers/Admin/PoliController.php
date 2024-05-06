<?php

namespace App\Http\Controllers\Admin;

use App\Models\Poli;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PoliFormRequest;

class PoliController extends Controller
{
    public function index()
    {
        $poli = Poli::all();
        return view ('admin.poli.index',compact('poli'));
    }


    public function create(){

        return view ('admin.poli.create');
    }

    public function store(PoliFormRequest $request)
    {
        $data = $request->validated();

        $poli = new Poli;
        $poli->nama_poli = $data['nama_poli'];
        $poli->keterangan = $data['keterangan'];
        $poli->save();

        return redirect('admin/poli')->with('status','Poli berhasil ditambahkan');

    }

    public function edit($poli_id)
    {
        $poli = Poli::find($poli_id);
        return view ('admin.poli.edit' , compact('poli'));
    }

    public function update(PoliFormRequest $request, $poli_id)
    {
        $data = $request->validated();

        $poli = Poli::find($poli_id);
        $poli->nama_poli = $data['nama_poli'];
        $poli->keterangan = $data['keterangan'];
        $poli->update();

        return redirect('admin/poli')->with('status','Poli Berhasil diupdate');
    }


    public function destroy($poli_id)
    {
        $poli = Poli::find($poli_id);
        if($poli)
        {
            $poli->delete();
            return redirect('admin/poli')->with('status','Poli Berhasil dihapus');
        }else{
            return redirect('admin/poli')->with('status','Poli Tidak ditemukan');
        }
    }
}
