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

        <form action="{{ url('pasien/add-profil') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-white bg-gray">
                            <h3>Profil Pasien</h3>
                        </div>
                        <div class="card-body">

                            <small class="text-danger">Mohon lengkapi profile anda sebelum menelusuri lebih lanjut!</small>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-6 mt-3">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" class="form-control" name='nama'
                                        value="{{ $pasien->nama ?? '' }}" placeholder="Nama Lengkap">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Nomor HP</label>
                                    <input type="text" class="form-control" name='no_hp'
                                        value="{{ $pasien->no_hp ?? '' }}" placeholder="Nomor HP">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="">Alamat</label>
                                    <input type="text" class="form-control" name='alamat'
                                        value="{{ $pasien->alamat ?? '' }}" placeholder="Alamat">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Nomer KTP </label>
                                    <input type="text" class="form-control" name='no_ktp'
                                        value="{{ $pasien->no_ktp ?? '' }}" placeholder="Nomer KTP">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Nomer Rekam Medis</label>
                                    <input type="text" class="form-control" name='no_rm'
                                        value="{{ $pasien->no_rm ?? '' }}" placeholder="Nomer Rekam Medis" disabled>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <p>*nomer RM akan didapat setelah melakukan pendaftaran</p>
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
