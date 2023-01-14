@extends('layouts.app')

@section('content')
<!-- Shop page start -->
<section class="padding-large">
	<ul class="tabs">
		<li data-tab-target="#all" class="active tab">All</li>
		<li data-tab-target="#historical" class="tab">Historical</li>
		<li data-tab-target="#psychology" class="tab">Psychology</li>
		<li data-tab-target="#business" class="tab">Business</li>
		<li data-tab-target="#biography" class="tab">Biography</li>
		<li data-tab-target="#war" class="tab">War</li>
	  </ul>
	<div class="container">
		<div id="all" data-tab-content class="active">
			<div class="row">
				<div class="products-grid grid">
					@foreach ($products as $product)
						<figure class="product-style">
							<img src="images/products/{{ $product->demo_url }}" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3><a href="{{ route('shop.products.show' , $product->id ) }}">{{ $product->title }}</a></h3>
								<p>{{ $product->author }}</p>
								<div class="item-price">${{ $product->price }}</div>
							</figcaption>
						</figure>
					@endforeach
				</div>
			</div>
		</div>

		<div id="historical" data-tab-content>
			<div class="row">
				<div class="products-grid grid">
					@foreach ($products->where('category_id' , 7) as $product)
						<figure class="product-style">
							<img src="images/products/{{ $product->demo_url }}" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3><a href="{{ route('shop.products.show' , $product->id ) }}">{{ $product->title }}</a></h3>
								<p>{{ $product->author }}</p>
								<div class="item-price">${{ $product->price }}</div>
							</figcaption>
						</figure>
					@endforeach
				</div>
			</div>
		</div>

		<div id="Psychology" data-tab-content>
			<div class="row">
				<div class="products-grid grid">
					@foreach ($products->where('category_id' , '#') as $product)
						<figure class="product-style">
							<img src="images/products/{{ $product->demo_url }}" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3><a href="{{ route('shop.products.show' , $product->id ) }}">{{ $product->title }}</a></h3>
								<p>{{ $product->author }}</p>
								<div class="item-price">${{ $product->price }}</div>
							</figcaption>
						</figure>
					@endforeach
				</div>
			</div>
		</div>

		<div id="business" data-tab-content>
			<div class="row">
				<div class="products-grid grid">
					@foreach ($products->where('category_id' , 8) as $product)
						<figure class="product-style">
							<img src="images/products/{{ $product->demo_url }}" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3><a href="{{ route('shop.products.show' , $product->id ) }}">{{ $product->title }}</a></h3>
								<p>{{ $product->author }}</p>
								<div class="item-price">${{ $product->price }}</div>
							</figcaption>
						</figure>
					@endforeach
				</div>
			</div>
		</div>

		<div id="biography" data-tab-content>
			<div class="row">
				<div class="products-grid grid">
					@foreach ($products->where('category_id' , '#') as $product)
						<figure class="product-style">
							<img src="images/products/{{ $product->demo_url }}" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3><a href="{{ route('shop.products.show' , $product->id ) }}">{{ $product->title }}</a></h3>
								<p>{{ $product->author }}</p>
								<div class="item-price">${{ $product->price }}</div>
							</figcaption>
						</figure>
					@endforeach
				</div>
			</div>
		</div>
		
		<div id="war" data-tab-content>
			<div class="row">
				<div class="products-grid grid">
					@foreach ($products->where('category_id' , 9) as $product)
						<figure class="product-style">
							<img src="images/products/{{ $product->demo_url }}" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3><a href="{{ route('shop.products.show' , $product->id ) }}">{{ $product->title }}</a></h3>
								<p>{{ $product->author }}</p>
								<div class="item-price">${{ $product->price }}</div>
							</figcaption>
						</figure>
					@endforeach
				</div>
			</div>
		</div>

	</div>
</section>
<!-- Shop page end -->
@endsection