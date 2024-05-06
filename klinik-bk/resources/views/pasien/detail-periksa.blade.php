@extends('layouts.masterpsn')

@section('title', 'Pasien Dashboard')


@section('content')
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>


    <div class="container pt-5">


        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header text-white bg-gray">
                        <h3>Detail Periksa</h3>
                    </div>
                    <div class="card-body">
                        <hr>
                        {{-- ------------------------- --}}
                        <form action="{{ url('pasien/add-nota/' . $detail->id) }}" method="POST">
                            @csrf

                            <div class="row checkout-form">
                                <div class="col-md-6 mt-3">
                                    <label for="tgl_periksa">Tanggal di periksa</label>
                                    <input type="date" class="form-control" name="tgl_periksa"
                                        value="{{ $detail->tgl_periksa}}" placeholder="Tanggal di periksa" disabled>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="catatan">Catatan</label>
                                    <textarea class="form-control" name="catatan" disabled>{{ $detail->catatan }}</textarea>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="obat">Obat yang disarankan Dokter</label>
                                    <input type="text" class="form-control" name="obat" value="{{ $periksadetail->first()->obat->nama_obat }} - IDR{{ number_format( $periksadetail->first()->obat->harga, 0, '.', ',') }},-" disabled>
                                </div>
                                                
                               

                                <div class="col-md-6 mt-3">
                                    <p>*Harga pemeriksaan 150.000 + Harga Obat</p>
                                </div>
                            </div>

                            <button type="submit" class="float-end mt-5 btn btn-success p-4">
                                <i class="fas fa-clipboard"></i> Bayar Sejumlah IDR {{ number_format( $periksadetail->first()->periksa->biaya_periksa, 0, '.', ',') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
