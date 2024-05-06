@extends('layouts.master')

@section('title', 'View Users')


@section('content')

    <div class="container px-4">
        <div class="card mt-4">


            <div class="card-header bg-gray text-white">
                <h4 class="waduh text-center">View Users</h4></div>
                <div class="card-body">

                     {{-- NOTIFIKASI BERHASIL --}}
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                     {{-- NOTIFIKASI BERHASIL --}}

                    <div class="table-responsive">
                        <table id="myDataTable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            @if($item->role_as == '1')
                                                Admin
                                            @elseif($item->role_as == '2')
                                                Dokter
                                            @elseif($item->role_as == '0')
                                                Pasien
                                            @else
                                                Role Tidak Dikenali
                                            @endif
                                        </td>
                                        
                                        <td>
                                            <a href="{{ url('admin/users/' . $item->id) }}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
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
