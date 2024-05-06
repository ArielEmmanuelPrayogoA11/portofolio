@extends('layouts.master')

@section('title', 'Data Dokter')


@section('content')

    <div class="container px-4">
        <div class="card mt-4">


            <div class="card-header bg-gray text-white">
                <h4 class="waduh text-center">View Data Dokter</h4></div>
                <div class="card-body">

                     {{-- NOTIFIKASI BERHASIL --}}
                    @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
                     {{-- NOTIFIKASI BERHASIL --}}

                    <div class="table-responsive">
                        <table id="myDataTable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Nama</th>
                                    <th>No HP</th>
                                    <th>Poli</th>
                                    <th>Action</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dokter as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->no_hp }}</td>
                                        <td>{{ $item->poli->nama_poli }}</td>
                                        
                                        
                                        <td>
                                            <a href="{{ url('admin/edit-dokter/' . $item->id) }}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            
        </div>


    </div>


@endsection
