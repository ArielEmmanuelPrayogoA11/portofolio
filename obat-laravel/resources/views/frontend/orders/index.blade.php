@extends('layouts.app')
@section('title', 'Dua Putera Perkasa Farma')
@section('meta_description', 'Dua Putera Perkasa Farma')
@section('meta_keyword', 'Dua Putera Perkasa Farma')

@section('content')

    <div class="container paddingbanyak">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>My Orders</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Order at</th>
                                    <th>Tracking Number</th>
                                    <th>Total Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $item)
                                    <tr>
                                        <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                                        <td>{{ $item->tracking_no }}</td>
                                        <td>IDR {{ number_format($item->total_price, 0, '.', '.') }},-</td>
                                        <td>{{ $item->status == '0' ? 'Pending' : 'Completed' }}</td>
                                        
                                        
                                        <td>
                                            <a href="{{ url('view-order/'.$item->id) }}" class="btn btn-primary">View</a>
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
