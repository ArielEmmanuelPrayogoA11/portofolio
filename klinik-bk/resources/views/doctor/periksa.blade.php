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




        <div class="card">
            <div class="card-header bg-gray waduh text-center text-white">
                <h4>Pemeriksaan</h4>
            </div>
            <div class="card-body">
                <h4>Pasien yang minta diperiksa</h4>
                <div class="underline"></div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>No. Antrian</th>
                            <th>Nama Pasien</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Note utk dirisendiri : 
                            Periksa itu berarti ngisi detail_periksa , 
                            Kelola itu berarti ngasi harga, tgl, catatan periksa + ngubah status daftarpoli ke complete 
                        --}}

                        @foreach ($dafpoli as $daftarPoli)
                        {{-- Kondisi utk menampilkan yang Pending saja karena yang completed akan saya letakkan pada laman Riwayat --}}
                            @if ($daftarPoli->status == '0') 
                                <tr>
                                    <td>{{ $daftarPoli->no_antrian }}</td>
                                    <td>{{ $daftarPoli->pasien->nama }}</td>
                                    <td>{{ $daftarPoli->status == '0' ? 'PENDING' : 'COMPLETED' }}</td>
                                    <td>
                                        <a href="{{ url('doctor/periksa-dafpol/' . $daftarPoli->id) }}" class="btn btn-success">Periksa</a>
                                        <a href="{{ url('doctor/kelola-dafpol/' . $daftarPoli->id) }}" class="btn btn-primary">Kelola</a>
                                        
                                    </td>
                                </tr>
                            @endif
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>


    </div>




@endsection
