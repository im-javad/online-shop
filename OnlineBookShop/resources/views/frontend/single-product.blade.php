@extends('layouts.app')

@section('title' , 'Show Product')

@inject('basketAtViews', 'App\Support\Basket\BasketAtViews')

@section('content')
<!-- Single product start -->
<section class="bg-sand padding-large">
	<div class="container">
		<div class="row">
			<div class="col-md-6" id="middle" style="padding-top: 30px;">
				<a class="product-image"><img id="product-show-zoom" src="/images/products/{{ $product->demo_url }}"></a>
			</div>
			<div class="col-md-6 pl-5">
				<div class="product-detail">
					<h1>{{ $product->title }}</h1>
					<h3 id="custom-gray">{{ $product->author }}</h3>
					<h4 id="custom-gray"">{{ $product->category->title }}</h4>
					<h2 id="custom-orange">${{ $product->price }}</h2>
					<p>
						{{ $product->description }}
					</p>
					@if($basketAtViews->hasQuantity($product->id))
						<div>
							<a href="{{ route('shop.basket.add' , $product->id)}}" class="increase" id="increase-s">+</a>
							<span class="quantity" id="quantity-s">{{ $basketAtViews->getQuantity($product->id) }}</span>
							<a href="{{ route('shop.basket.remove' , $product->id) }}" class="decrease" id="decrease-s">-</a>
						</div>	
					@else
						<a href="{{ route('shop.basket.add' , $product->id) }}"><button type="submit" name="add-to-cart" value="27545" class="button">Add to cart</button></a>
					@endif 
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Single product end -->
@endsection

