
@extends('auth.layout')

@section('content')
<section class="vh-100" style="background-color: #ffe9dd">
<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 py-5">
            <div class="card shadow-2-strong my-5" style="border-radius: 1rem;">


                <div class="card-body p-5 text-center">
                    <h3 class="mb-4">Sign up</h3>

                    <form method="POST" action="{{ url("handleRegister") }}">
                        @csrf

                        <div class="row form-outline mb-4">


                            <div class="col-md-12">
                                <input id="name" type="text" placeholder="Name" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">

                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Email Address" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-4 ">
                            <div class="col-md-12 ">
                                <button type="submit" class=" w-100 btn btn-secondary btn-lg btn-block">
                                    {{ __('Sign up') }}
                                </button>
                                <a class="btn btn-link" href="login" style="text-decoration: none">
                                    {{ __('Already have an account?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
