@extends('layouts.app')

@section('title', "$post->meta_title")
@section('meta_description', "$post->meta_description")
@section('meta_keyword', "$post->meta_keyword")


@section('content')
  
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">
                <a class="text-black text-decoration-none"
                    href="{{ url('category/' . $category->slug) }}">{{ $post->category->name }}</a> / {{ $post->name }}
            </h6>
        </div>
    </div>


    <div class="container paddingbanyakbawah">
        <div class="card shadow">
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <img src="{{ asset('uploads/category/' . $post->category->image) }}" alt="image"
                            style="width: 100%; max-height: 400px; object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {!! $post->name !!}
                            <label style="font-size: 16px;" class="float-end badge bg-red trending_tag">{{ $post->category->name }}</label>
                        </h2>
                        <hr>
                        <label class="me-3">Harga :<h2 class=" mt-2"><strong class="p-2">IDR {{ number_format($post->harga, 0, '.', '.') }},-</strong></h2></label>
                        <p class="mt-3">
                            Deskripsi :
                            {!! $post->description !!}
                        </p>
                        <p class="mt-3">
                            Kondisi :
                            {!! $post->kondisi !!}
                        </p>

                        <hr>
                        <form action="/cart/store" method="POST">
                            @csrf

                            <div class="row mt-2">
                                <div class="col-md-2">
                                    <label for="Quantity">Quantity</label>
                                    <div class="input-group text-center mb-3">

                                        <input type="hidden" value="{{ $post->id }}" name="product_id">
                                        <input type="number" class="form-control" id="qty" name="qty"
                                            value="1" min="1">

                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <br />
                                    <input type="submit" class="btn btn-success me-3 float-start" value="Add to Cart">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
































  {{-- <div class="py-1 bg-dark text-white">
    <div class="container">
        <div class="text-center p-3">

            <h4>PRODUCT DETAIL</h4>

        </div>
    </div>
</div>


    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h6 class="my-5 ">
                        <a class="text-black text-decoration-none" href="{{ url('category/'.$category->slug) }}">{{ $post->category->name }}</a> / {{ $post->name }} 
                    </h6>
                    <div class="category-heading">
                        <h4 class="mb-0">{!! $post->name !!}</h4>
                    </div>

                    <div class="card card-shadow mt-4 border">
                        <div class="card-body">
                            <div class="product-image mb-5">
                                <img src="{{ asset('uploads/category/' . $post->category->image) }}" alt="image" style="width: 100%; max-height: 400px; object-fit: cover;">
                            </div>
                            
                    
                            <div class="description">
                                <h4>Deskripsi:</h4>
                                {!! $post->description !!}
                            </div>
                    
                            <div class="condition">
                                <h4>Kondisi Produk:</h4>
                                {!! $post->kondisi !!}
                            </div>
                    
                            <div class="price text-end">
                                <hr>
                                
                                <small>*Harga sudah termasuk PPN</small>
                                <h2 class="text-white mt-2"><strong class="bg-crimson p-2"> IDR {{ number_format($post->harga, 0, '.', '.') }},-</strong></h2>
                            </div>
                        </div>
                    </div>
                </div>


                

            </div>
            <div class="py-4">
                <form action="/cart/store" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $post->id }}" name="product_id">
                    
                    <div class="form-group mb-2">
                        <label for="qty">Jumlah:</label>
                        <input type="number" class="form-control" id="qty" name="qty" value="1" min="1">
                    </div>
            
                    <input type="submit" class="btn btn-success" value="Add to Cart">
                </form>
            </div>
        </div>
    </div> --}}


    {{-- sssssssssssssssssssssssssssssssss --}}
