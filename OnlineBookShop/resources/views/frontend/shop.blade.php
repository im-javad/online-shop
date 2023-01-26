@extends('layouts.app')

@section('title' , 'Shop')

@inject('basketAtViews', 'App\Support\Basket\BasketAtViews')

@section('content')
<!-- Shop page start -->
<section class="padding-large">
	<div class="container h-100" id="h-100-p">
		<div class="searchbar">
			<form action="{{ route('shop.products.index') }}" method="GET">
				<input name="search" class="search_input" id="prepare-search" value="{{ app('request')->input('search') }}" type="text" placeholder="Search...">
				<button hidden type="submit"></button>
			</form>
		</div>
	</div>
	<ul class="tabs">
		@foreach ($all as $categoryName => $products)
			<li data-tab-target="#{{$categoryName}}" class="{{($categoryName == 'All') ? 'active tab' : 'tab'}}">{{$categoryName}}</li>
		@endforeach
	</ul>
	<div class="container">
	  @foreach ($all as $categoryName => $products)
		<div id="{{$categoryName}}" data-tab-content class="{{ ($categoryName == 'All') ? 'active' : ''}}">
			<div class="row">
				<div class="products-grid grid">
					@foreach ($products as $product)
						<figure class="product-style">
							<img src="images/products/{{ $product->demo_url }}" alt="Books" class="product-item">
							<a href="{{ route('shop.basket.add' , $product->id) }}"><button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button></a>
							<figcaption>
								<h3><a href="{{ route('shop.products.show' , $product->id ) }}">{{ $product->title }}</a></h3>
								<p>{{ $product->author }}</p>
								<div class="item-price">${{ $product->price }}</div>
								@if($basketAtViews->hasQuantity($product->id))
									<div>
										<a href="{{ route('shop.basket.add' , $product->id)}}" class="increase">+</a>
										<span class="quantity">{{ $basketAtViews->getQuantity($product->id) }}</span>
										<a href="{{ route('shop.basket.remove' , $product->id) }}" class="decrease">-</a>
									</div>	
								@endif 
							</figcaption>
						</figure>
					@endforeach
				</div>
			</div>
		</div>
	  @endforeach
	</div>
</section>
<!-- Shop page end -->
@endsection