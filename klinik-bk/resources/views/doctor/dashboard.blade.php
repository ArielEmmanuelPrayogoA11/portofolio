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

        <form action="{{ url('doctor/add-profil') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-white bg-gray">
                            <h3>Profil Dokter</h3>
                        </div>
                        <div class="card-body">

                            <small>Mohon lengkapi profile anda!</small>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-6 mt-3">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" class="form-control" name='nama'
                                        value="{{ $doctor->nama ?? '' }}" placeholder="Nama Lengkap">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Nomor HP</label>
                                    <input type="text" class="form-control" name='no_hp'
                                        value="{{ $doctor->no_hp ?? '' }}" placeholder="Nomor HP">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="">Alamat</label>
                                    <input type="text" class="form-control" name='alamat'
                                        value="{{ $doctor->alamat ?? '' }}" placeholder="Alamat">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Poli</label>
                                    <select name="id_poli" class="form-control">

                                        <option value="" selected disabled> {{ $doctor->poli->nama_poli ?? 'Pilih Poli' }}</option>
                                        @foreach ($poli as $poliitem)
                                            <option value="{{ $poliitem->id }}">{{ $poliitem->nama_poli }}</option>
                                        @endforeach
                                    </select>
                                    @if ($doctor)
                                        <label for="">Anda sekarang terdaftar sebagai Dokter Poli
                                            <strong>{{ $doctor->poli->nama_poli }}</strong></label>
                                    @else
                                        <label for="">Anda belum memilih Poli</label>
                                    @endif
                                </div>

                            </div>
                            <button type="submit" class="float-end mt-5 btn btn-success p-4 w-20"><i
                                    class="fas fa-edit"></i> Update</button>
                        </div>
                    </div>
                </div>


        </form>
    </div>

@endsection
