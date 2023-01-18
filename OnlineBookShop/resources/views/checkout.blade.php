@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/cart.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<!-- Checkout start -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h6 class="checkout__title">COMPLETION OF INFORMATION</h6>
                    <form action="#" method="POST" id="checkout-form">
                        <div class="col-lg-6" id="zero-left">
                            <div class="checkout__input">
                                <p>Email:<span>*</span></p>
                                <input name="email" type="email">
                            </div>
                        </div>
                        <div class="col-lg-6" id="zero-right">
                            <div class="checkout__input">
                                <p>Phone Number<span>*</span></p>
                                <input name="phone_number" type="text">
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Address(full)<span>*</span></p>
                            <input name="address" type="text">
                        </div>

                        <h6 class="checkout__title">PAYMENT METHOD</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="method" id="online-payment">
                            <label class="form-check-label" for="online-payment">Online</label>
                        </div>
                        <select id="gateway" class="form-check form-check-inline">
                            <option value="paypal" selected>Pay Pal</option>
                            <option value="wepay">WePay</option>
                        </select>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="method" id="ofline-payment">
                            <label class="form-check-label" for="ofline-payment">Ofline</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="method" id="Installment-payment" disabled>
                            <label class="form-check-label" for="Installment-payment">Installment(Not available yet)</label>
                        </div>
                    </form>
                </div>
			@include('summary')	
            </div>
        </div>
    </section>
<!-- Checkout start -->
@endsection

