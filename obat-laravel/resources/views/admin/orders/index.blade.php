@extends('layouts.master')

@section('title', 'New Order')


@section('content')
 {{-- NOTIFIKASI BERHASIL --}}
 {{-- pake swal di master layout --}}
  {{-- NOTIFIKASI BERHASIL --}}


  
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h4 class="float-right">New Orders</h4>
                    <a href="{{ "history-order" }}" class="btn btn-warning float-end">Order History</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Order at</th>
                                <th>Tracking Number</th>
                             
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                                <tr>
                                    <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                                    <td>{{ $item->tracking_no }}</td>
                                   
                                    <td>{{ $item->status == '0' ? 'Pending' : 'Completed' }}</td>
                                    
                                    
                                    <td>
                                        <a href="{{ url('admin/view-order/'.$item->id) }}" class="btn btn-primary">View</a>
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
