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

        <form action="{{ url('doctor/add-jadwal') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-white bg-gray">
                            <h3>Jadwal Praktek</h3>
                        </div>
                        <div class="card-body">

                            <small>Mohon lengkapi Jadwal Praktek anda!</small>
                            <hr>
                            <div class="row checkout-form">
                                <div class="mt-3">
                                    <label for="hari">Hari</label>
                                    <select class="form-control" name="hari">
                                        <option value="" disabled selected>Pilih hari</option>
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
                                    <input type="time" class="form-control" name="jam_mulai" placeholder="Jam Mulai">
                                </div>

                                <div class="mt-3">
                                    <label for="jam_selesai">Jam Selesai</label>
                                    <input type="time" class="form-control" name="jam_selesai" placeholder="Jam Selesai">
                                </div>

                                <div class="mt-3">
                                    <label for="aktif">Status</label>
                                    <select class="form-control" name="aktif">
                                        <option value="Y">Aktif</option>
                                        <option value="N">Tidak Aktif</option>
                                    </select>
                                </div>



                            </div>
                            <button type="submit" class="float-end mt-5 btn btn-success p-4 w-20"><i
                                    class="fas fa-edit"></i> Add</button>
                        </div>
        </form>

        <div class="bg-dark text-white container p-5">

            <h4>Jadwal anda:</h4>
            <div class="underline"></div>

            @foreach ($jadwal as $schedule)
                <p>
                    <a href="{{ url('doctor/edit-jadwal/' . $schedule->id) }}" class="kecil btn btn-primary btn-sm"><i
                            class="fas fa-edit fa-sm"></i></a>

                    {{ $schedule->hari }} : {{ $schedule->jam_mulai }} - {{ $schedule->jam_selesai }} -

                    @if ($schedule->aktif === 'Y')
                    <span class="text-success warna-aktif">Aktif</span>
                    @else
                        <span class="text-danger warna-mokad">Tidak Aktif</span>
                    @endif

                </p>
                <hr>
            @endforeach
        </div>
    </div>


@endsection
