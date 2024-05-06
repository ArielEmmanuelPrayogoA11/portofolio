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
                <h4>Riwayat Pemeriksaan</h4>
            </div>
            <div class="card-body">
                <h4>Pasien yang sudah diperiksa</h4>
                {{-- <small>Alangkah baiknya tidak diremove , karena nanti pasien tidak bisa melihat riwayat. Harusnya dibuat tabel tersendiri</small> --}}
                <div class="underline"></div>

                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>No. Antrian</th>
                            <th>No RM</th>
                            <th>Nama Pasien</th>
                            <th>Status</th>
                            {{-- <th>Remove</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Note utk dirisendiri : 
                            Periksa itu berarti ngisi detail_periksa , 
                            Kelola itu ngubah status daftarpoli ke complete 
                        --}}

                        @foreach ($dafpoli as $daftarPoli)
                        {{-- Kondisi utk menampilkan yang Pending saja karena yang completed akan saya letakkan pada laman Riwayat --}}
                            @if ($daftarPoli->status == '1') 
                                <tr>
                                    <td>{{ $daftarPoli->no_antrian }}</td>
                                    <td>{{ $daftarPoli->pasien->no_rm }}</td>
                                    <td>{{ $daftarPoli->pasien->nama }}</td>
                                    <td>{{ $daftarPoli->status == '0' ? 'PENDING' : 'COMPLETED' }}</td>
                                    
                                    {{-- <td class="text-center"><a href="{{ url('doctor/delete-dafpol/'.$daftarPoli->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a></td> --}}
                                </tr>
                            
                            @endif
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>


    </div>




@endsection
