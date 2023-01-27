@extends('layouts.app')

@section('title' , 'Farvahar Book')

@inject('basketAtViews', 'App\Support\Basket\BasketAtViews')

@section('content')
<!-- Papular categories start -->
<section id="popular-categories" class="bookshelf">
	<div class="section-header align-center" id="popular-c">
		<div class="title">
			<span>It might be interesting</span>
		</div>
		<h2 class="section-title" id="margin-0">Popular Categories</h2>
	</div>
	<div class="container">
		<div class="row">
			<ul class="tabs">
			  @foreach ($popularCategories as $key => $category)
				<li data-tab-target="#{{$category}}" class="{{ ($key == 0) ? 'active tab' : 'tab'}}">{{ $category }}</li>
			  @endforeach
			</ul>
			<div class="tab-content">
			@foreach ($popularCategories as $key => $category)
			  <div id="{{$category}}" data-tab-content class="{{ ($key == 0) ? 'active' : '' }}">
			  	<div class="row">
					@foreach ($all[$category]->take(4) as $product)
				  	<div class="col-md-3">
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
										<a href="{{ route('shop.basket.remove' , $product->id )}}" class="decrease">-</a>
									</div>	
								@endif 	
							</figcaption>
						</figure>
					</div>
					@endforeach
				</div>
			  </div>
			@endforeach
			</div>
		</div>
	</div>
</section>
<!-- Papular books end -->

<!-- Offer books start -->
<section id="special-offer" class="bookshelf">
	<div class="section-header align-center">
		<div class="title">
			<span>Grab your opportunity</span>
		</div>
		<h2 class="section-title">Discounted Books</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="inner-content">	
				<div class="product-list" data-aos="fade-up">
					<div class="grid product-grid">			
						@foreach ($discountedBooks as $book)
							<figure class="product-style">
								<img src="images/products/{{ $book->demo_url }}" alt="Books" class="product-item">
								<a href="{{ route('shop.basket.add' , $book->id) }}"><button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button></a>
								<figcaption>	
									<h3><a href="{{ route('shop.products.show' , $book->id ) }}">{{ $book->title }}</a></h3>
									<p>{{ $book->author }}</p>
									<div class="item-price">
									<span class="prev-price">${{number_format($basketAtViews->beforeDiscount($book->id)) }}</span>${{ $book->price }}</div>
									@if($basketAtViews->hasQuantity($book->id))
										<div>
											<a href="{{ route('shop.basket.add' , $book->id)}}" class="increase">+</a>
											<span class="quantity">{{ $basketAtViews->getQuantity($book->id) }}</span>
											<a href="{{ route('shop.basket.remove' , $book->id )}}" class="decrease">-</a>
										</div>	
									@endif 	
								</figcaption>
							</figure>			
						@endforeach	
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Offer books end -->

<!-- quote of the day start -->
<section id="quotation" class="align-center">
	<div class="inner-content" id="margin-t-200">
		<h2 class="section-title divider">Quote of the day</h2>
		<blockquote data-aos="fade-up">
			<q>“The more that you read, the more things you will know. The more that you learn, the more places you’ll go.”</q>
			<div class="author-name">Dr. Seuss</div>			
		</blockquote>
	</div>		
</section>
<!-- quote of the day end -->

@endsection