@extends('layouts.app')

@section('title' , 'Cart')

@inject('basketAtViews', 'App\Support\Basket\BasketAtViews')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="/css/cart.css">
<!-- Shopping Cart start-->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if($selectedProducts->isEmpty())
                        <p id="empty-basket">
                            @lang('basket.empty basket' , ['link' => route('shop.products.index')])
                        </p>
                    @else
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($selectedProducts as $product)
                                    <tr>
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__text">
                                                <h6>{{ $product->title }}</h6>
                                                <h5>${{ $product->price }}</h5>
                                            </div>
                                        </td>
                                        <form action="{{ route('shop.basket.update.quantity' , $product->id) }}" method="POST">
                                        @method('put')
                                        @csrf
                                        <td class="quantity__item">
                                            <div class="quantity">
                                                <div class="pro-qty-2">
                                                    <select name="new-quantity">
                                                        @for($i = 0; $i <= $product->stock; $i++)
                                                            <option {{ ($product->quantity === $i) ? 'selected' : '' }} value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart__price">${{ number_format($basketAtViews->productTotal($product)) }}</td>
                                        <td><button type="submit" id="edit-quantity">Edit</button></td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6" id="w-100">
                            <div class="continue__btn clear__btn" id="continue-sh">
                                <a href="{{ route('shop.basket.clear') }}"></i>Clearing the cart</a>
                            </div>
                        </div>
                    </div>
					<br><br>
                </div>
				@include('frontend.summary')
            </div>
            @endif
        </div>
    </section>
<!-- Shopping Cart End -->
@endsection
