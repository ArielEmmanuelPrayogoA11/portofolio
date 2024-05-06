<?php

namespace App\Http\Controllers\Admin;

use App\Models\Obat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ObatFormRequest;

class ObatController extends Controller
{
    public function index(){
        $obat = Obat::all();
        return view ('admin.obat.index', compact('obat'));
    }

    public function create(){

        return view ('admin.obat.create');
    }

    public function store(ObatFormRequest $request)
    {
        $data = $request->validated();

        $obat = new Obat;
        $obat->nama_obat = $data['nama_obat'];
        $obat->kemasan = $data['kemasan'];
        $obat->harga = $data['harga'];
        $obat->save();

        return redirect('admin/obat')->with('status','Obat berhasil ditambahkan');

    }

    public function edit($obat_id)
    {
        $obat = Obat::find($obat_id);
        return view ('admin.obat.edit' , compact('obat'));
    }

    public function update(ObatFormRequest $request, $obat_id)
    {
        $data = $request->validated();

        $obat = Obat::find($obat_id);
        $obat->nama_obat = $data['nama_obat'];
        $obat->kemasan = $data['kemasan'];
        $obat->harga = $data['harga'];
        $obat->update();

        return redirect('admin/obat')->with('status','Obat Berhasil diupdate');
    }


    public function destroy($obat_id)
    {
        $obat = Obat::find($obat_id);
        if($obat)
        {
            $obat->delete();
            return redirect('admin/obat')->with('status','Obat Berhasil dihapus');
        }else{
            return redirect('admin/obat')->with('status','Obat Tidak ditemukan');
        }
    }
}
