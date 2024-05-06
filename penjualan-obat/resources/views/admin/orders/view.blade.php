@extends('layouts.app')
@section('title', 'Dua Putera Perkasa Farma')
@section('meta_description', 'Dua Putera Perkasa Farma')
@section('meta_keyword', 'Dua Putera Perkasa Farma')

@section('content')

    <div class="container paddingbanyak">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header bg-crimson">
                        <h4 class="text-white">Order View
                            <a href="{{ url('admin/orders') }}" class="float-end btn btn-warning text-white">Return</a>
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
                                         @php
                                            $subtotal = 0; // Inisialisasi subtotal
                                        @endphp
                                        
                                        @foreach ($orders->orderitems as $item)
                                        @php
                                                $subtotal += $item->qty * $item->harga; // Menambahkan total harga item ke subtotal
                                            @endphp
                                            <tr>
                                                <td style="white-space: nowrap;">
                                                    {{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                                                <td>{{ $item->products->name }}</td>
                                                <td>{{ $item->qty }}</td>
                                                <td>{{ number_format($item->harga, 0, '.', '.') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <h4 class="px-2">Grand Total: <span class="float-end">IDR
                                        {{ number_format($subtotal, 0, '.', '.') }},-</span></h4>

                                <div class="mt-5 px-2"></div>
                                {{-- Bootstrap Select --}}
                                <label for="floatingSelect">Order Status</label>
                                <div class="form-floating">
                                    <form action="{{ url('admin/update-order/'.$orders->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                    <select class="form-select" name="order_status">

                                        <option {{ $orders->status == '0' ? 'selected' : '' }} value="0">Pending</option>
                                        <option {{ $orders->status == '1' ? 'selected' : '' }} value="1">Completed</option>
                                        {{-- <option value="3">Three</option> --}}
                                    </select>
                                    <button type="submit" class="mt-3 float-end btn btn-primary">Update</button>
                                </form>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
