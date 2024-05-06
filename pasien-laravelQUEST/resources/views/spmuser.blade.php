@extends('layouts.main')
@include('partial.navbar')

@section('container')

    <a href="/spm" class="btn btn-primary mt-3 mb-5">Return</a>

    @foreach ($dataspm as $data)
        
    <div class="card bg-dark alert alert-warning text-white">
        <div class="card-header">
            <h3>SPM Pasien</h3>
            <small>SPM id : {{ $data->id }}</small>
            <hr>
        </div>
        <div class="card-body">
            <p>Nama : {{ $data->nama }}</p>
            <p>Alamat : {{ $data->almt }}</p>
            <p>Jenis Kelamin : {{ $data->jk }}</p>
            <p>Usia : {{ $data->usia }}</p>
            <p>Tglbuat : {{ $data->tglbuat }}</p>
        </div>
        <a href="/spm/{{ $data->nama }}/{{ $data->id }}" class="btn btn-outline-light mt-3">Check Detail</a>
    </div>

    
    @endforeach
    
    
@endsection
