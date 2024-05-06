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
                <h4 class="text-center waduh text-white">Data Obat </h4>
                <a href="{{ url('admin/add-obat') }}" class="btn btn float-end custom-btn"><i class="fas fa-add"></i></a>
            </div>
            <div class="card-body">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Obat</th>
                            <th>Kemasan</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($obat as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama_obat }}</td>
                                <td>{{ $item->kemasan }}</td>
                                <td>IDR {{ number_format($item->harga, 0, '.', '.') }},- </td>
                                <td>
                                    <a href="{{ url('admin/edit-obat/'.$item->id) }}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                                    <a href="{{ url('admin/delete-obat/'.$item->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                                
                                
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>


       
    </div>
    
@endsection
