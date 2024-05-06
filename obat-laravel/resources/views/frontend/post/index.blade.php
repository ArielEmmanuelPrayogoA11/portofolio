@extends('layouts.app')

@section('title', "$category->meta_title")
@section('meta_description', "$category->meta_description")
@section('meta_keyword', "$category->meta_keyword")

@section('content')
    <div class="py-1 bg-dark text-white">
        <div class="container">
            <div class="text-center p-3">

                <h4>Produk {{ $category->name }}</h4>

            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
    
                @forelse ($post as $postitem)
                    <div class="col-md-4">
                        <div class="card card-shadow mt-4">
                            <div class="card-body">
                                <a href="{{ url('category/' . $category->slug . '/' . $postitem->slug) }}"
                                    class="text-decoration-none">
                                    <h2 class="post-heading"><strong>{{ $postitem->name }}</strong></h2>
                                </a>
    
                                <h6>Harga: IDR {{ number_format($postitem->harga, 0, '.', '.') }},-</h6>
                                <div class="underline"></div>
                                <small>Satuan: {{ $postitem->satuan }}</small>
                                <br>
                                <small>Listed On: {{ $postitem->created_at->format('d-m-Y') }}</small>
    
                                {{-- Tombol Start --}}
                                <div class="my-2">
                                    <form action="/cart/store" method="POST">
                                        @csrf
                                        <div class="py-4">
                                            <input type="hidden" value="{{ $postitem->id }}" name="product_id">
                                            <div class="form-group mb-2">
                                                <label for="qty">Jumlah:</label>
                                                <input type="number" class="form-control" id="qty" name="qty" value="1"
                                                    min="1">
                                            </div>
                                            <input type="submit" class="mt-4 btn btn-success" value="Add to Cart">
                                        </div>
                                    </form>
                                    <div class="btn btn-primary ">
                                        <a href="{{ url('category/' . $category->slug . '/' . $postitem->slug) }}"
                                            class="text-white text-decoration-none">
                                            View Detail
                                        </a>
                                    </div>
                                </div>
                                {{-- Tombol End --}}
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col">
                        <div class="card card-shadow mt-4">
                            <div class="card-body">
                                <h1>No Product Found</h1>
                            </div>
                        </div>
                    </div>
                @endforelse
    
                <div class="your-paginate pt-5">
                    {{ $post->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
