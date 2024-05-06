@extends('layouts.master')

@section('title', 'Edit Data Dokter')


@section('content')




    <div class="container px-4">
        <div class="card mt-4">

            <div class="card-header text-center bg-gray">
                <h4 class="waduh text-white">Edit {{ $dokter->user->name }}</h4>
                <a href="{{ url('admin/users') }}" class="btn float-end custom-btn">
                    <i class="fas fa-arrow-left"></i> Return
                </a>
            </div>

            <div class="card-body">

                <form action="{{ url('admin/update-dokter/' . $dokter->id) }}" method="post">
                    @csrf
                    @method('put')



                    <div class="mb-3">
                        <label for="">Full Name</label>
                        <input type="text" class="form-control" value="{{ $dokter->nama }}" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" value="{{ $dokter->alamat }}" name="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="">No HP</label>
                        <input type="text" class="form-control" value="{{ $dokter->no_hp }}" name="no_hp">
                    </div>
                    <div class="mb-3">
                        <label for="">Poli</label>
                        <select name="id_poli" class="form-control">
                            <option value="" selected disabled>Pilih Poli</option>
                            @foreach ($poli as $poliitem)
                                <option value="{{ $poliitem->id }}">{{ $poliitem->nama_poli }}</option>
                            @endforeach
                        </select>
                    </div>

                    <hr>
                    <div class="mb-3">
                        <button class="btn btn-primary">Update dokter</button>
                    </div>
                </form>
            </div>


        </div>


    </div>


@endsection
