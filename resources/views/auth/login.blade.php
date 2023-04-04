@extends('auth.layout')

@section('content')
<section class="vh-100" style="background-color: #ffe9dd">
<div class="container  h-100" >
    <div class="row d-flex justify-content-center align-items-center ">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 py-5">
            <div class="card shadow-2-strong my-5"  style="border-radius: 1rem;">


                <div class="card-body py-5 text-center" >
                    <h3 class="mb-5">Sign in</h3>

                    <form method="POST" action="{{ url("login") }}">
                        @csrf

                        <div class=" row form-outline mb-4">


                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Email Address" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-outline mb-4">


                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                                <button type="submit" class="  w-100 btn btn-secondary btn-lg btn-block ">
                                    {{ __('Sign in') }}
                                </button>
                                <a class="btn btn-link" href="register" style="text-decoration: none">
                                    {{ __('Create an account?') }}
                                </a>


                    </form>
                </div>
            </div>
            <div class="link">
                <a href="/" class="back-button"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
