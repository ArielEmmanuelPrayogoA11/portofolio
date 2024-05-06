@extends('layouts.master')

@section('title','Obat')
    

@section('content')
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

   
</div>
    <div class="container px-4">
        


        <div class="mt-4 card">
            <div class="card-header bg-gray">
                <h4 class="text-center waduh text-white">Tambahkan Obat </h4>
                <a href="{{ url('admin/obat') }}" class="btn btn float-end custom-btn"><i class="fas fa-arrow-left"></i> Return</a>
                
            </div>

            <div class="card-body">

                @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
                @endif



                <form action="{{ url('admin/add-obat') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="">Nama Obat</label>
                        <input type="text" name="nama_obat" class="form-control" placeholder="Masukkan Nama Obat">
                    </div>
                    <div class="mb-3">
                        <label for="">Kemasan</label>
                        <input type="text" name="kemasan" class="form-control" placeholder="Masukkan Kemasan Obat">
                    </div>
                    <div class="mb-3">
                        <label for="">Harga</label>
                        <input type="text" name="harga" class="form-control" placeholder="Masukkan Nama Biaya Obat">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    
@endsection
