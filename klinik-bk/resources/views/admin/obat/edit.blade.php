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
                <h4 class="text-center waduh text-white">Edit Obat </h4>
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



                <form action="{{ url('admin/update-obat/'.$obat->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="">Nama Obat</label>
                        <input type="text" name="nama_obat" class="form-control" value="{{ $obat->nama_obat }}">
                    </div>
                    <div class="mb-3">
                        <label for="">Kemasan</label>
                        <input type="text" name="kemasan" class="form-control" value="{{ $obat->kemasan }}">
                    </div>
                    <div class="mb-3">
                        <label for="">Harga</label>
                        <input type="text" name="harga" class="form-control" value="{{ $obat->harga }}">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    
@endsection
