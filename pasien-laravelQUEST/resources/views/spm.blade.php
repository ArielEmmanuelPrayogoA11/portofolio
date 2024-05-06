@extends('layouts.main')
@include('partial.navbar')

@section('container')

    {{-- START Container Form --}}
    <div class="container mb-5">
        <div class="card alert alert-warning ">
            <div class="card-header text-center">
                <h3>Tambah Data</h3>
            </div>
            <div class="card-body">
                <!-- Form untuk menambah data -->
                <form action="/spm" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama"
                            required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="almt" class="form-label">Alamat:</label>
                        <input type="text" class="form-control" id="almt" name="almt"
                            placeholder="Masukkan Alamat" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jk">Jenis Kelamin:</label>
                        <select class="form-select" id="jk" name="jk" required>
                            <option value="" disabled selected>Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="tglhr">Tanggal Lahir:</label>
                        <input type="date" class="form-control" id="tglhr" name="tglhr" required>
                    </div>
                    <div class="container text-center">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                    <div class="notif mt-3">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                    </div>

                </form>


            </div>
        </div>
    </div>
    {{--  END Container Form --}}

    {{-- DATA LOOP --}}
    <div class="row">
        @foreach ($dataspm as $dspm)
        <div class="col-md-4 mb-4">
            <div class="card bg-dark alert alert-warning text-white">
                <div class="card-header">
                    <h3>Data Pasien</h3>
                    <small>SPM id : {{ $dspm->id }}</small>
                    <hr>
                </div>
                <div class="card-body">
                    <p>Nama : <a href="/spm/{{ $dspm->nama }}" class="text-danger fs-5 namadatapasien">{{ $dspm->nama }}</a></p>
                    <p>Alamat : {{ $dspm->almt }}</p>
                    <p>Jenis Kelamin : {{ $dspm->jk }}</p>
                    <p>Usia : {{ $dspm->usia }}</p>
                    <p>Tglbuat : {{ $dspm->tglbuat }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
@endsection
