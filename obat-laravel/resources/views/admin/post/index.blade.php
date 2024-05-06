@extends('layouts.master')

@section('title', 'View Post')


@section('content')

    <div class="container-fluid px-4">
        <div class="card mt-4">


            <div class="card-header">
                <h4>View Products
                    <a href="{{ url('admin/add-post') }}" class="btn btn-primary float-end">Tambahkan Produk</a>
                </h4>
                <div class="card-body">

                    {{-- NOTIFIKASI BERHASIL --}}
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                     {{-- NOTIFIKASI BERHASIL --}}

                    <div class="table-responsive">



                        <table class="table table-bordered" id="myDataTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Product name</th>
                                    <th>Satuan</th>
                                    <th>Harga</th>
                                    <th>Kondisi</th>
                                    <th>State</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        {{-- Manggil fungsi category habis diforeign lewat model --}}
                                        <td>{{ $item->category->name }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->satuan }}</td>
                                        <td>Rp.{{ $item->harga }}</td>
                                        <td>{{ $item->kondisi }}</td>
                                        <td>{{ $item->status == '1' ? 'Hidden' : 'Visible' }}</td>
                                        <td>
                                            <a href="{{ url('admin/edit-post/' . $item->id) }}"
                                                class="btn btn-success">Edit</a>
                                            <a href="{{ url('admin/delete-post/' . $item->id) }}"
                                                class="btn btn-danger">Delete</a>
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
