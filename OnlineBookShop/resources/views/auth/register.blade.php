@extends('layouts.app')

@section('title' , 'Register')

@section('content')
    <!-- register area start -->
    <div class="login-area login-s2">
        <div class="container">
            <div class="login-box ptb--100">
                <form accept="{{ route('register') }}" method="POST">
                @csrf
                    <div class="login-form-head">
                        <h4>Register</h4>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <input name="name" placeholder="Full Name" type="text">
                            @if($errors->has('name')) <span class="valid-danger">.{{ $errors->first('name') }}</span> @endif
                        </div>

                        <div class="form-gp">
                            <input name="email" placeholder="Email address" type="email">
                            @if($errors->has('email')) <span class="valid-danger">.{{ $errors->first('email') }}</span> @endif
                        </div>
                        <div class="form-gp">
                            <input name="password" placeholder="Password" type="password">
                            @if($errors->has('password')) <span class="valid-danger">.{{ $errors->first('password') }}</span> @endif
                        </div>
                        <div class="form-gp">
                            <input name="password_confirmation" placeholder="Confirm Password" type="password">
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit</button>
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
