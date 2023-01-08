@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/cart.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!-- Checkout start -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h6 class="checkout__title">Final information</h6>
                    <div class="col-lg-6">
                        <div class="checkout__input">
                            <p>Fist Name<span>*</span></p>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout__input">
                            <p>Last Name<span>*</span></p>
                            <textarea class="form-control" cols="10" rows="3"></textarea>
                        </div>
                    </div>
                </div>
			@include('summary')	
            </div>
        </div>
    </section>
<!-- Checkout start -->
@endsection