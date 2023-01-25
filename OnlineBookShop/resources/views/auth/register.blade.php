@extends('layouts.app')

@section('title' , 'Register')

@section('content')
<!-- register area start -->
    <div class="login-area login-s2">
        <div class="container">
            <div class="login-box ptb--100">
                <form action="{{ route('register') }}" method="POST">
                @csrf
                    <div class="login-form-head">
                        <h4>Register</h4>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <input name="name" placeholder="Full Name" type="text">
                            @error('name')
                                <span class="valid-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror  
                        </div>
                        <div class="form-gp">
                            <input name="email" placeholder="Email address" type="email">
                            @error('email')
                                <span class="valid-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror  
                        </div>
                        <div class="form-gp">
                            <input name="password" placeholder="Password" type="password">
                            @error('password')
                                <span class="valid-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror  
                        </div>
                        <div class="form-gp">
                            <input name="password_confirmation" placeholder="Confirm Password" type="password">
                        </div>
                        <div class="submit-btn-area">
                            <button type="submit">Submit</button>
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Do have an account? <a href="{{ route('login') }}">Log in</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- register area end -->
@endsection


