@extends('layouts.app')
@section('title', 'Dua Putera Perkasa Farma')
@section('meta_description', 'Dua Putera Perkasa Farma')
@section('meta_keyword', 'Dua Putera Perkasa Farma')

@section('content')

    <div class="container paddingbanyak">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-crimson">
                        <h4 class="text-white">Order View
                            <a href="{{ url('my-orders') }}" class="float-end btn btn-warning text-white">Return</a>
                        </h4>
                       
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-details">
                                <h4>Detail Pengiriman</h4>
                                <hr>
                                <label for="">Nama Lengkap</label>
                                <div class="border p-2">{{ $orders->namalengkap }}</div>
                                <label for="">Email</label>
                                <div class="border p-2">{{ $orders->email }}</div>
                                <label for="">No Telpon</label>
                                <div class="border p-2">{{ $orders->phone }}</div>
                               
                                <label for="">Alamat Pengiriman</label>
                                <div class="border p-2">
                                    {{ $orders->alamat }},
                                    {{ $orders->provinsi }},
                                    {{ $orders->kota }},
                                    {{ $orders->kecamatan }},
                                   
                                </div>
                                <label for="">Kode Pos</label>
                                <div class="border p-2"> {{ $orders->kodepos }}</div>
                            </div>
                            <div class="col-md-6">
                                <h4>Order Details</h4>
                                <hr>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>

                                            <th>Tgl Pesanan</th>
                                            <th>Nama Produk</th>
                                            <th>Qty</th>
                                            <th>Harga</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders->orderitems as $item)
                                            <tr>
                                                <td style="white-space: nowrap;">{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                                                <td>{{ $item->products->name }}</td>
                                                <td>{{ $item->qty }}</td>
                                                <td>{{ $item->harga }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <h4 class="px-2">Grand Total: <span class="float-end">IDR {{ number_format($orders->total_price, 0, '.', '.') }},-</span></h4>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
