@extends('layouts.app')

@section('content')
    <style>
        .login-bg {
            background-image:
                linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),

                url('{{ asset('assets/login.png') }}');

            background-size: cover;
            background-position: center;
            height: auto;

        }
    </style>
    <div class="container-fluid login-bg">
        <div class="container">
            <div class="row justify-content-center paddingbanyak paddingbanyakfooter">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center"><span class="waduhai"><i
                                    class="fas fa-user"></i>
                                Phedra</span><span class="waduh">GON</span><br></div>

                        <div class="card-body py-5">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">Username</label>

                                    <div class="col-md-6">
                                        <input placeholder="Enter Username" id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input placeholder="Enter Email" id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>





                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input placeholder="Enter Password" id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input placeholder="Enter Password Confirmation" id="password-confirm"
                                            type="password" class="form-control" name="password_confirmation" required
                                            autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="role_as"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>

                                    <div class="col-md-6">
                                        <select id="role_as" class="form-select @error('role_as') is-invalid @enderror"
                                            name="role_as" required>
                                            <option value="0" {{ old('role_as') == 0 ? 'selected' : '' }}>Adventurer
                                            </option>

                                            <option value="1" {{ old('role_as') == 1 ? 'selected' : '' }} disabled>
                                                Phedra
                                            </option>
                                        </select>

                                        @error('role_as')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-dark">
                                            {{ __('Register') }}
                                        </button>

                                        <a class="btn btn-link" href="{{ route('login') }}">
                                            {{ __('I have an account already') }}
                                        </a>


                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
