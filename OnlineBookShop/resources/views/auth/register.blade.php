@extends('layouts.app')

@section('content')
    <!-- register area start -->
    <div class="login-area login-s2">
        <div class="container">
            <div class="login-box ptb--100">
                <form>
                    <div class="login-form-head">
                        <h4>Register</h4>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <input placeholder="Full Name" type="text" id="exampleInputName1">
                        </div>
                        <div class="form-gp">
                            <input placeholder="Email address" type="email" id="exampleInputEmail1">
                        </div>
                        <div class="form-gp">
                            <input placeholder="Password" type="password" id="exampleInputPassword1">
                        </div>
                        <div class="form-gp">
                            <input placeholder="Confirm Password" type="password" id="exampleInputPassword2">
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Do have an account? <a href="login.html">Log in</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- register area end -->
@endsection
