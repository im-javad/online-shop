@extends('layouts.app')

@section('title' , 'Forget Password')

@section('content')
<!-- Forget password (email) area start -->
    <div class="login-area login-s2">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="{{ route('password.email') }}">
                @csrf
                    <div class="login-form-head">
                        <h4>Forgot Password</h4>
                        <p>Hey! Forgot Password Your Password ? Reset Now</p>
                    </div> 
                    <div class="login-form-body">
                            <div class="form-gp">
                                <input name="email" type="email" placeholder="Email Address">
                                @error('email')
                                    <span class="valid-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                            
                            </div>
                            <div class="submit-btn-area">
                                <button type="submit">Send link</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!--Forget password (email) area end -->
@endsection
