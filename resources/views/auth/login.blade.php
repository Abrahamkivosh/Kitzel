@extends('layouts.site')

@section('content')

<br>
<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="tab-content">

                <br>
                <br>

                <div class="form-login">

                    <div class="form-header center">


                            <div class="d-flex justify-content-center">
                                <div class="col-inner">
                                    <div class="main-logo">
                                        <a href="/"><img src="/images/logo.png" alt="images" /></a>
                                    </div>
                                </div>
                            </div>

                            <br>

                            <p class="d-flex justify-content-center">Sign in to your account to continue using Kitzel Tours</p>


                    </div>

                    <div class="form-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="d-flex flex-column flex-lg-row align-items-stretch">

                                <div class="flex-md-grow-1 bg-primary-light">

                                    <div class="form-inner">
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="d-flex flex-column flex-md-row mt-25">
                                            <div class="flex-shrink-0">

                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>

                                            </div>

                                            <div class="ml-0 ml-md-15 mt-15 mt-md-0">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                        <label class="custom-control-label" for="loginFormTabInModal-rememberMe">Remember me</label>

                                                </div>
                                            </div>
                                        </div>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif

                                    </div>

                                </div>

                                <div class="form-login-socials">
                                    <div class="login-socials-inner">
                                        <h5 class="mb-20">Or sign-up with your socials</h5>
                                        <button class="btn btn-login-with btn-facebook btn-block"><i class="fab fa-facebook"></i> facebook</button>
                                        <button class="btn btn-login-with btn-google btn-block"><i class="fab fa-google"></i> google</button>
                                        <button class="btn btn-login-with btn-twitter btn-block"><i class="fab fa-twitter"></i> google</button>
                                    </div>
                                </div>

                            </div>


                        </form>
                    </div>

                    <div class="form-footer">
                        <p>Not a member yet? <a href="{{ route('register') }}">Register </a> for free</p>
                    </div>

                    <br>
                    <br>
                    <br>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
