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
                        <h3>Daftar Poli</h3>
                    </div>
                    <div class="card-body">
                        <hr>
                        {{-- ------------------------- --}}
                        <form action="{{ url('pasien/add-daftarpoli') }}" method="POST">
                            @csrf

                            <div class="row checkout-form">
                                <div class="col-md-6 mt-3">
                                    <label for="no_rm">Nomer Rekam Medis</label>
                                    <input type="text" class="form-control" name="no_rm"
                                        value="{{ $pasien->no_rm ?? '' }}" placeholder="Nomer Rekam Medis" disabled>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="jadwal">Pilih Jadwal</label>
                                    <select class="form-control" name="jadwal">
                                        <option value="" selected disabled>Pilih Jadwal</option>
                                        @foreach ($jadwal as $schedule)
                                            @if ($schedule->aktif === 'Y')
                                                <option value="{{ $schedule->id }}">
                                                    {{ $schedule->hari }} - {{ $schedule->jam_mulai }} -
                                                    {{ $schedule->jam_selesai }} -
                                                    Dr. {{ $schedule->dokter->nama }} >>
                                                    {{ $schedule->dokter->poli->nama_poli }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>



                                <div class="col-md-6 mt-3">
                                    <label for="">Nomer Antrian</label>
                                    <input type="text" class="form-control" name='no_antrian' placeholder="Nomer Antrian"
                                        disabled>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="keluhan">Keluhan</label>
                                    <textarea class="form-control" name="keluhan" placeholder="Keluhan"></textarea>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <p>*nomer antrian akan didapat setelah melakukan pendaftaran</p>
                                </div>
                            </div>

                            <button type="submit" class="float-end mt-5 btn btn-success p-4"><i class="fas fa-edit"></i>
                                Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row justify-content-center">
            <div class="pt-5">
                <div class="card">
                    <div class="card-header text-white bg-gray">
                        <h3>Riwayat Daftar Poli</h3>
                    </div>
                    <div class="card-body">
                        @if (count($daftarpoli) > 0)
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Poli</th>
                                        <th>Dokter</th>
                                        <th>Hari</th>
                                        <th>Mulai</th>
                                        <th>Selesai</th>
                                        <th>Antrian</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($daftarpoli as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->jadwal->dokter->poli->nama_poli }}</td>
                                            <td>{{ $item->jadwal->dokter->nama }}</td>
                                            <td>{{ $item->jadwal->hari }}</td>
                                            <td>{{ $item->jadwal->jam_mulai }}</td>
                                            <td>{{ $item->jadwal->jam_selesai }}</td>
                                            <td>{{ $item->no_antrian }}</td>
                                            <td>{{ $item->status == '0' ? 'PENDING' : 'DIPERIKSA' }}</td>
                                            <td>
                                                @if ($item->status == '0')
                                                    <a href="{{ url('pasien/delete-daftarpoli/' . $item->id) }}"
                                                        class="btn btn-danger">Cancel</a>
                                                @else
                                                    <a href="{{ url('pasien/detail-periksa/' . $item->id) }}"
                                                        class="btn btn-primary">Detail</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <hr>
                        @else
                            <p>Tidak ada riwayat</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
