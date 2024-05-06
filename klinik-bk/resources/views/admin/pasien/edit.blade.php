@extends('layouts.master')

@section('title', 'Edit Data Pasien')


@section('content')




    <div class="container px-4">
        <div class="card mt-4">

            <div class="card-header text-center bg-gray">
                <h4 class="waduh text-white">Edit {{ $pasien->userss->name }}</h4>
                <a href="{{ url('admin/users') }}" class="btn float-end custom-btn">
                    <i class="fas fa-arrow-left"></i> Return
                </a>
            </div>
            
                <div class="card-body">

                    <form action="{{ url('admin/update-pasien/'.$pasien->id) }}" method="post">
                        @csrf
                        @method('put')
                        
                        <div class="mb-3">
                            <label for="">No KTP</label>
                            <input type="text" class="form-control" disabled value="{{ $pasien->no_ktp }}" name="no_ktp">
                        </div>
                    
                        <div class="mb-3">
                            <label for="">Full Name</label>
                            <input type="text" class="form-control" value="{{ $pasien->nama }}" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" value="{{ $pasien->alamat }}" name="alamat">
                        </div>
                        <div class="mb-3">
                            <label for="">No HP</label>
                            <input type="text" class="form-control" value="{{ $pasien->no_hp }}" name="no_hp">
                        </div>
                        <div class="mb-3">
                            <label for="">No RM</label>
                            <input type="text" class="form-control" disabled value="{{ $pasien->no_rm }}" name="no_rm">
                        </div>
                        
                        <hr>
                        <div class="mb-3">
                            <button class="btn btn-primary">Update Pasien</button>
                        </div>
                    </form>
                   
                </div>

           
        </div>


    </div>


@endsection
