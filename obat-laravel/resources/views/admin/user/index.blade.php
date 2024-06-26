@extends('layouts.master')

@section('title', 'View Users')


@section('content')

    <div class="container-fluid px-4">
        <div class="card mt-4">


            <div class="card-header">
                <h4>View Users</h4>
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
                                        <td>{{ $item->role_as == '1' ? 'Admin' : 'User' }}</td>
                                        <td>
                                            <a href="{{ url('admin/users/' . $item->id) }}" class="btn btn-success">Edit</a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>


    </div>


@endsection
