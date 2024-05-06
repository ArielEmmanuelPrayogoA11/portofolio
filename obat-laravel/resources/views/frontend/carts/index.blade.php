@extends('layouts.app')
@section('title', 'Dua Putera Perkasa Farma')
@section('meta_description', 'Dua Putera Perkasa Farma')
@section('meta_keyword', 'Dua Putera Perkasa Farma')

@section('content')
    <div class="py-1 bg-dark text-white">
        <div class="container">
            <div class="text-center p-3">

                <h4>CART</h4>

            </div>
        </div>
    </div>

    <div class="py-5 paddingbanyak">
        <div class="container">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            

            <p class="text-end">*Harga sudah termasuk PPN</p>
            <div class="table-responsive">



                <table class="table table-bordered text-center" id="myDataTable">
                    <thead>
                        <tr>
                            
                            <th>Product name</th>
                            <th>QTY</th>
                            <th>Harga</th>
                            <th>Satuan</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $subtotal = 0; // Inisialisasi subtotal
                        @endphp
                    
                        @forelse ($carts as $cartitem)
                            <tr>
                                <td>{{ $cartitem->posts->name }}</td>
                                <td>{{ $cartitem->qty }} {{ $cartitem->posts->satuan }}</td>
                                <td>IDR {{ number_format($cartitem->qty * $cartitem->posts->harga, 0, '.', '.') }},-</td>

                                <td>{{ $cartitem->posts->satuan }}</td>
                                <td>
                                    <a href="{{ url('cart/' . $cartitem->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                    
                            @php
                                $subtotal += $cartitem->qty * $cartitem->posts->harga; // Menambahkan total harga item ke subtotal
                            @endphp
                        @empty
                        <div class="card card-shadow mt-4 bg-crimson text-white text-center">
                            <div class="card-body">
                                <h1>Cart Anda Kosong!!</h1>
                            </div>
                        </div>
                        @endforelse
                    </tbody>
                    
                    </table>
                    
                    </div>
                    
                    <h4 class="text-end">Subtotal: IDR {{ number_format($subtotal, 0, '.', '.') }},- 
                    <br>

                    <a href="{{ url('checkout') }}" class="mt-4 btn btn-success ">Checkout</a>
                    
                    <a class="btn btn-primary text-decoration-none text-white mt-4" href="{{ url('/#xproduk') }}">Add more</a>
                    
                
                    </h4> <!-- Menampilkan subtotal -->
                    
                    
            
        </div>
    </div>
@endsection
