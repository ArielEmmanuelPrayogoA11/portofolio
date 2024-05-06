@extends('layouts.master')

@section('title','Poli')
    

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
                <h4 class="text-center waduh text-white">Tambahkan Poli </h4>
                <a href="{{ url('admin/poli') }}" class="btn btn float-end custom-btn"><i class="fas fa-arrow-left"></i> Return</a>
                
            </div>



            <div class="card-body">

                @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
                @endif



                <form action="{{ url('admin/add-poli') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="">Nama poli</label>
                        <input type="text" name="nama_poli" class="form-control" placeholder="Masukkan Nama Poli">
                    </div>
                    <div class="mb-3">
                        <label for="">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" placeholder="Masukkan Keterangan">
                    </div>
                   
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    
@endsection
