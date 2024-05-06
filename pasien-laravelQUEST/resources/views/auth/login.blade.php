@extends('layouts.main')

@include('partial.navbar')


@section('container')
    <div class="container mt-5">
        @if (session()->has('message'))
        <div class="alert alert-success" role="alert">

            {{ session()->get('message') }}
        </div>
        @endif
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header alert alert-warning text-center ">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="/login" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror" required placeholder="Email" value="{{ old('email') }}">
                                    
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required
                                    placeholder="Password" value="{{ old('password') }}">
                                    @error('password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
