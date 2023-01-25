@extends('layouts.app')

@section('title' , 'Reset Password')

@section('content')
<!-- Reset password area start -->
    <div class="login-area login-s2">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="{{ route('password.update') }}">
                @csrf
                    <div class="login-form-head">
                        <h4>Reset Password</h4>
                    </div>
                    <div class="login-form-body">
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-gp">
                                <input name="email" type="email" placeholder="Email address" value="{{ $email ?? old('email') }}" readonly>
                                @error('email')
                                    <span class="valid-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                            
                            </div>
                            <div class="form-gp">
                                <input name="password" type="password" placeholder="New Password">
                                @error('password')
                                    <span class="valid-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                            
                            </div>
                            <div class="form-gp">
                                <input name="password_confirmation" type="password" placeholder="Confirm Password">                       
                            </div>
                            <div class="submit-btn-area">
                                <button type="submit">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!--Reset password area end -->
@endsection
