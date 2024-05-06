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

        <form action="{{ url('doctor/update-dafpol/'. $dafpol->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-white bg-gray">
                            <h3>Kelola Pemeriksaan</h3>
                        </div>
                        <div class="card-body">

                            <div class="mt-3">
                                <label for="nama">Nama Pasien</label>
                                <input type="text" class="form-control" disabled name="nama" value="{{ $dafpol->pasien->nama }}">
                            </div>

                            <div class="mt-3">
                                <label for="keluhan">Keluhan</label>
                                <textarea class="form-control" name="keluhan" placeholder="Keluhan" disabled>{{ $dafpol->keluhan }}</textarea>

                            </div>

                            
                            <div class="row checkout-form">
                                <div class="mb-3">
                                    <label for="">Status</label><br>
                                    <small class="text-danger">*ubah status dibawah menjadi COMPLETED jika anda rasa sudah muak dengan pasien ini</small>
                                    <select name="status" class="form-control">
                                        <option value="0" {{ $dafpol->status == '0' ? 'selected' : '' }}>PENDING</option>
                                        <option value="1" {{ $dafpol->status == '1' ? 'selected' : '' }}>COMPLETED</option>
                                      </select>
                                </div>

                            </div>
                            <button type="submit" class="float-end mt-5 btn btn-success p-4 w-20"><i
                                    class="fas fa-edit"></i> Update</button>
                        </div>
        </form>

    </div>
   

@endsection
