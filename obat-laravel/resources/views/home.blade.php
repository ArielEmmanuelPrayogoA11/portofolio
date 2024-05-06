@extends('layouts.app')

@section('content')
    <div class="paddingbanyak">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="text-center py-5">
            <img src="{{ asset('assets/images/login.png') }}" style="width: 20%;" alt="Logo">

        </div>


        <div class="contxainer text-center ">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    {{-- <div class="card"> --}}
                    {{-- <div class="card-header"><strong>{{ __('Dashboard') }}</strong></div> --}}

                    {{-- <div class="card-body"> --}}


                    <h1>{{ __('You are now logged in!') }}</h1>
                    {{-- </div> --}}
                    {{-- </div> --}}
                </div>
            </div>
        </div>


        <div class="container pt-4 pb-5">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center"> <!-- Menambahkan kelas "text-center" untuk penataan tengah -->
                    <div>
                        <a class="btn btn-primary text-white text-decoration-none" href="{{ route('home1') }}">Go to
                            Home</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
