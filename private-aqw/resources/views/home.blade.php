@extends('layouts.app')

@section('content')
    <div class="container paddingbanyak paddingbanyakfooter">

        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card ">
                    <div class="card-header py-5 hometext  text-white text-center bg-home"><i
                            class="fas fa-check-circle fa-2x "></i></div>

                    <div class="card-body">

                        <div class="text-center waduh">
                            Success!
                        </div>

                        @if (session('status'))
                            <div class="text-center" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif




                        <div class="row justify-content-center pt-3">
                            <div class="col-md-8 text-center">
                                <!-- Menambahkan kelas "text-center" untuk penataan tengah -->
                                <div>
                                    <a href="{{ url('/') }}" class="btn btn-primary text-center">Direct to Home</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
