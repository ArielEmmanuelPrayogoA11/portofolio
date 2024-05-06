@extends('layouts.master')

@section('title', 'History')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h4 class="float-right">Order History</h4>
                    <a href="{{ "orders" }}" class="btn btn-warning float-end">New Orders</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Ordered at</th>
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
                            </tbody>
                            @endforeach
                            <a href="{{ url('admin/delete-order/'.$item->id) }}" class="mb-4 btn btn-danger">Clear History</a>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
