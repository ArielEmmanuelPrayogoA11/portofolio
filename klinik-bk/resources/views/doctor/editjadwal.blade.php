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

        <form action="{{ url('doctor/update-jadwal/' .$jadwal->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-white bg-gray">
                            <h3>Edit Jadwal Praktek</h3>
                        </div>
                        <div class="card-body">

                            <small>Edit Jadwal</small>
                            <hr>
                            <div class="row checkout-form">
                                <div class="mt-3">
                                    <label for="hari">Hari</label>
                                    <select class="form-control" name="hari">
                                        <option class="bg-primary text-white" value="{{ $jadwal->hari }}" selected>{{ $jadwal->hari }} (Current)</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jumat">Jumat</option>
                                        <option value="Sabtu">Sabtu</option>
                                        <option value="Minggu">Minggu</option>
                                    </select>
                                </div>
                                <div class="mt-3">
                                    <label for="jam_mulai">Jam Mulai</label>
                                    <input type="time" class="form-control" name="jam_mulai" placeholder="Jam Mulai"
                                        value="{{ $jadwal->jam_mulai }}" >
                                </div>

                                <div class="mt-3">
                                    <label for="jam_selesai">Jam Selesai</label>
                                    <input type="time" class="form-control" name="jam_selesai" placeholder="Jam Selesai"
                                        value="{{ $jadwal->jam_selesai }}" >
                                </div>

                                <div class="mt-3">
                                    <label for="aktif">Status</label>
                                    <select class="form-control" name="aktif">
                                        <option value="Y" {{ $jadwal->aktif === 'Y' ? 'selected' : '' }}>Aktif</option>
                                        <option value="N" {{ $jadwal->aktif === 'N' ? 'selected' : '' }}>Tidak Aktif</option>
                                    </select>
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
