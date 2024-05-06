@extends('layouts.app')
@section('title', 'Dua Putera Perkasa Farma')
@section('meta_description', 'Dua Putera Perkasa Farma')
@section('meta_keyword', 'Dua Putera Perkasa Farma')

@section('content')

    <div class="container paddingbanyak">
        <form action="{{ url('place-order') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h6>Basic Details</h6>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-6 mt-3">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" class="form-control" name='namalengkap'
                                        value="{{ Auth::user()->namalengkap }}" placeholder="Nama Lengkap">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Nomor Telepon</label>
                                    <input type="text" class="form-control" name='phone'
                                        value="{{ Auth::user()->phone }}" placeholder="Nomor Telepon">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" name='email'
                                        value="{{ Auth::user()->email }}" placeholder="Email">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Alamat</label>
                                    <input type="text" class="form-control" name='alamat'
                                        value="{{ Auth::user()->alamat }}" placeholder="Alamat">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Provinsi </label>
                                    <input type="text" class="form-control" name='provinsi'
                                        value="{{ Auth::user()->provinsi }}" placeholder="Provinsi">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Kota</label>
                                    <input type="text" class="form-control" name='kota'
                                        value="{{ Auth::user()->kota }}" placeholder="Kota">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Kecamatan</label>
                                    <input type="text" class="form-control" name='kecamatan'
                                        value="{{ Auth::user()->kecamatan }}" placeholder="Kecamatan">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Kode Pos</label>
                                    <input type="text" class="form-control" name='kodepos'
                                        value="{{ Auth::user()->kodepos }}" placeholder="Kode Pos">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            @if (count($cartitems) > 0)
                                <h6>Order Details</h6>
                                <hr>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Qty</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $subtotal = 0; // Inisialisasi subtotal
                                        @endphp
                                        @foreach ($cartitems as $item)
                                            <tr>
                                                <td>{{ $item->posts->name }}</td>
                                                <td>{{ $item->qty }}</td>
                                                <td>IDR {{ number_format($item->posts->harga, 0, '.', '.') }}</td>
                                            </tr>
                                            @php
                                                $subtotal += $item->qty * $item->posts->harga; // Menambahkan total harga item ke subtotal
                                            @endphp
                                        @endforeach


                                    </tbody>
                                </table>
                                <hr>
                                <h4 class="text-end">Subtotal: IDR {{ number_format($subtotal, 0, '.', '.') }},- </h4>
                                <button type="submit" class="btn btn-primary w-100">Place Order | Cash On Delivery</button>
                            @else
                                <p>Your cart is empty.</p>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>

@endsection
