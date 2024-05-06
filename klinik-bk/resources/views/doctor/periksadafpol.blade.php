@extends('layouts.masterdoc')

@section('title', 'Doctor Dashboard')


@section('content')
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
      
        @endif


    </div>


    <div class="container pt-5">

        <form action="{{ url('doctor/add-periksa/'. $dafpol->id) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-white bg-gray">
                            <h3>Pemeriksaan</h3>
                        </div>
                        <div class="card-body">

                            <div class="mt-3">
                                <label for="nama">Nama Pasien</label>
                                <input type="text" class="form-control" disabled name="nama" value="{{ $dafpol->pasien->nama }}">
                            </div>

                            <div class="mt-3 mb-3">
                                <label for="keluhan">Keluhan</label>
                                <textarea class="form-control" name="keluhan" placeholder="Keluhan" disabled>{{ $dafpol->keluhan }}</textarea>
                            </div>

                         

                            <div class="row checkout-form">
                              
                                <div class="mb-3 mt-3">
                                    <label for="catatan">Catatan</label>
                                    <textarea class="form-control" name="catatan" placeholder="Berikan catatan kepada pasien (Catatan lama akan ditimpa dengan catatan baru)"></textarea>
                                </div>
                                
                                
                                <div class="mb-3">
                                    <label for="tgl_periksa">Tanggal Periksa</label>
                                    <input type="date" class="form-control" name="tgl_periksa" placeholder="Tanggal Periksa" disabled value="{{ now()->format('Y-m-d') }}">
                                </div>


                                <div class="col-md-6 mb-3">
                                    <label for="id_obat">Pilih Obat yang dianjurkan</label>
                                    <select class="form-control" name="id_obat">
                                        <option value="" selected disabled>Pilih Obat</option>
                                        @foreach ($obat as $obatitem)
                                        <option value="{{ $obatitem->id }}" data-harga="{{ $obatitem->harga }}">
                                            {{ $obatitem->nama_obat }} - IDR {{ number_format($obatitem->harga, 0, '.', ',') }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>  
                                
                                <div class="mb-3">
                                    <label for="biaya_periksa">Biaya Periksa <small> *(IDR 150.000 + Biaya Obat)</small></label>
                                    <input type="text" class="form-control" name="biaya_periksa" value="IDR {{ number_format($pemeriksaan->biaya_periksa ?? 150000, 0, '.', ',') }}" disabled>

                                </div>
                                

                               
                                


                            </div>
                            <button type="submit" class="float-end mt-5 btn btn-success p-4 w-20"><i
                                    class="fas fa-edit"></i> Update</button>
                        </div>
        </form>

    </div>
   

@endsection
