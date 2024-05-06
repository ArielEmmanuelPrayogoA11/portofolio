<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('spm' , [
            'title' => 'PENITENCE | Surat',
            'dataspm' => Pasien::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pasien::insert([
            'nama' => $request->nama,
            'almt' => $request->almt,
            'tglhr' => $request->tglhr,
            'jk' => $request->jk,
        ]);

        return redirect('/spm')->with('success', 'Data berhasil disimpan.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien , $nama)
    {
        return view ('spmuser',[
            'title' => 'PENITENCE | Surat User',
            'dataspm' => Pasien::where('nama', $nama)->get()
        ]);
    }
    
    public function detail(Pasien $pasien , $nama , $id)
    {
        return view ('spmdetail',[
            'title' => 'PENITENCE | Detailed',
            'dataspm' => Pasien::where('nama', $nama)->where('id', $id)->get()
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasien $pasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasien $pasien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasien $pasien)
    {
        //
    }
}
