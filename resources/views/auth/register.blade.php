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

                            <p class="d-flex justify-content-center">Access thousands of online classes in design, business, and more!</p>


                    </div>

                    <div class="form-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="d-flex flex-column flex-lg-row align-items-stretch">

                                <div class="flex-md-grow-1 bg-primary-light">

                                    <div class="form-inner">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="row cols-2 gap-10">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Confirm password</label>
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                                </div>
                                            </div>
                                        </div>


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

                            <div class="d-flex flex-column flex-md-row mt-30 mt-lg-10">
                                <div class="flex-shrink-0">
                                    <button type="submit" class="btn btn-primary btn-wide mt-5">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                                <div class="pt-1 ml-0 ml-md-15 mt-15 mt-md-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="loginFormTabInModal-acceptTerm">
                                        <label class="custom-control-label line-145" for="loginFormTabInModal-acceptTerm">By clicking this, you are agree to to our <a href="#">terms of use</a> and <a href="#">privacy policy</a> including the use of cookies</label>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>

                    <div class="form-footer">
                        <p>Already a member? <a href="{{ route('login') }}" >Login </a>for free</p>
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
