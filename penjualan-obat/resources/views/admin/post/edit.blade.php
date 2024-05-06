@extends('layouts.master')

@section('title', 'View Post')


@section('content')

    <div class="container-fluid px-4">
        <div class="card mt-4">

            <div class="card-header">
                <h4>Edit Products
                    <a href="{{ url('admin/posts') }}" class="btn btn-danger float-end">Return</a>
                </h4>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ url('admin/update-post/' . $post->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="">Category</label>
                            <select name="category_id" required class="form-control">
                                <option value="">-- Select Category --</option>
                                @foreach ($category as $cateitem)
                                    <option value="{{ $cateitem->id }}"
                                        {{ $post->category_id == $cateitem->id ? 'selected' : '' }}>
                                        {{ $cateitem->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Nama Produk</label>
                            <input type="text" name="name" value='{{ $post->name }}' class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">Slug</label>
                            <input type="text" name="slug" value='{{ $post->slug }}' class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" rows="4">{!! $post->description !!}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">Kondisi</label>
                            <textarea name="kondisi" class="form-control" rows="4">{!! $post->kondisi !!}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">Harga</label>
                            <input type="text" name="harga" value='{{ $post->harga }}' class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">Satuan</label>
                            <input type="text" name="satuan" value='{{ $post->satuan }}' class="form-control" />
                        </div>
                        

                        <h4>SEO Tags</h4>
                        <div class="mb-3">
                            <label for="">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control" value='{{ $post->meta_title }}' />
                        </div>
                        <div class="mb-3">
                            <label for="">Meta Description</label>
                            <textarea name="meta_description" class="form-control" rows="4">{!! $post->meta_description !!}</textarea>
                        </div>

                        
                        <div class="mb-3">
                            <label for="">Meta Keyword</label>
                            <input type="text" name="meta_keyword" class="form-control" value='{{ $post->meta_keyword }}' />
                        </div>


                        <h4>Status (Check = Hidden)</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="">Status</label>
                                    <input type="checkbox" name="status" />
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary float-end">Update Post</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
