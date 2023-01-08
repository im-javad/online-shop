@extends('layouts.app')

@section('content')
<!-- Billboard start -->
<section id="billboard">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<button class="prev slick-arrow">
					<i class="icon icon-arrow-left"></i>
				</button>
				<div class="main-slider pattern-overlay">
					<div class="slider-item">
						<div class="banner-content">
							<h2 class="banner-title">Life of the Wild</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis urna, a eu.</p>
							<div class="btn-wrap">
								<a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i class="icon icon-ns-arrow-right"></i></a>
							</div>
						</div>
						<img src="images/main-banner1.jpg" alt="banner" class="banner-image">
					</div>
					<div class="slider-item">
						<div class="banner-content">
							<h2 class="banner-title">Birds gonna be Happy</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis urna, a eu.</p>
							<div class="btn-wrap">
								<a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i class="icon icon-ns-arrow-right"></i></a>
							</div>
						</div>
						<img src="images/main-banner2.jpg" alt="banner" class="banner-image">
					</div>
				</div>
				<button class="next slick-arrow">
					<i class="icon icon-arrow-right"></i>
				</button>
			</div>
		</div>
	</div>
</section>
<!-- Billboard end -->
<!-- Papular books start -->
<section id="popular-books" class="bookshelf">
	<div class="container">
	<div class="row">
		<div class="col-md-12">

			<div class="section-header align-center">
				<div class="title">
					<span>Some quality items</span>
				</div>
				<h2 class="section-title">Popular Books</h2>
			</div>
   
			<ul class="tabs">
			  <li data-tab-target="#all-genre" class="active tab">All Genre</li>
			  <li data-tab-target="#business" class="tab">Business</li>
			  <li data-tab-target="#technology" class="tab">Technology</li>
			  <li data-tab-target="#romantic" class="tab">Romantic</li>
			  <li data-tab-target="#adventure" class="tab">Adventure</li>
			  <li data-tab-target="#fictional" class="tab">Fictional</li>
			</ul>

			<div class="tab-content">
			  <div id="all-genre" data-tab-content class="active">
			  	<div class="row">

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item1.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Portrait photography</h3>
								<p>Adam Silber</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item2.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Once upon a time</h3>
								<p>Klien Marry</p>
								<div class="item-price">$ 35.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item3.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Tips of simple lifestyle</h3>
								<p>Bratt Smith</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item4.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Just felt from outside</h3>
								<p>Nicole Wilson</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				</div>
				<div class="row">

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item5.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Peaceful Enlightment</h3>
								<p>Marmik Lama</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item6.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Great travel at desert</h3>
								<p>Sanchit Howdy</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item7.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Life among the pirates</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item8.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Simple way of piece life</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

		    	</div>

			  </div>
			  <div id="business" data-tab-content>
			  	<div class="row">
				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item2.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Peaceful Enlightment</h3>
								<p>Marmik Lama</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item4.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Great travel at desert</h3>
								<p>Sanchit Howdy</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item6.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Life among the pirates</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item8.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Simple way of piece life</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

		    	 </div>
			  </div>

			  <div id="technology" data-tab-content>
			  	<div class="row">
				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item1.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Peaceful Enlightment</h3>
								<p>Marmik Lama</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item3.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Great travel at desert</h3>
								<p>Sanchit Howdy</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item5.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Life among the pirates</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item7.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Simple way of piece life</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>
		    	 </div>
			  </div>

			  <div id="romantic" data-tab-content>
			  	<div class="row">
		    	  <div class="col-md-3">
			    	  <figure class="product-style">
							<img src="images/tab-item1.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Peaceful Enlightment</h3>
								<p>Marmik Lama</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item3.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Great travel at desert</h3>
								<p>Sanchit Howdy</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item5.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Life among the pirates</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item7.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Simple way of piece life</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>
		    	 </div>
			  </div>

			  <div id="adventure" data-tab-content>
			  	<div class="row">
				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item5.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Life among the pirates</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item7.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Simple way of piece life</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>
		    	 </div>
			  </div>

			  <div id="fictional" data-tab-content>
			  	<div class="row">
				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item5.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Life among the pirates</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item7.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Simple way of piece life</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>
					</div>
		    	 </div>
			  </div>

			</div>

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
		<h2 class="section-title">Books with offer</h2>
	</div>

	<div class="container">
		<div class="row">
			<div class="inner-content">	
				<div class="product-list" data-aos="fade-up">
					<div class="grid product-grid">				
						<figure class="product-style">
							<img src="images/product-item5.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Simple way of piece life</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">
								<span class="prev-price">$ 50.00</span>$ 40.00</div>
							</figcaption>
						</figure>
					
						<figure class="product-style">
							<img src="images/product-item6.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Great travel at desert</h3>
								<p>Sanchit Howdy</p>
								<div class="item-price">
								<span class="prev-price">$ 30.00</span>$ 38.00</div>
							</figcaption>
						</figure>
					
						<figure class="product-style">
							<img src="images/product-item7.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>The lady beauty Scarlett</h3>
								<p>Arthur Doyle</p>
								<div class="item-price">
								<span class="prev-price">$ 35.00</span>$ 45.00</div>
							</figcaption>
						</figure>
					
						<figure class="product-style">
							<img src="images/product-item8.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Once upon a time</h3>
								<p>Klien Marry</p>
								<div class="item-price">
								<span class="prev-price">$ 25.00</span>$ 35.00</div>
							</figcaption>
						</figure>

						<figure class="product-style">
							<img src="images/product-item2.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
							<figcaption>
								<h3>Simple way of piece life</h3>
								<p>Armor Ramsey</p>
								<div class="item-price">$ 40.00</div>
							</figcaption>
						</figure>					
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Offer books end -->
<!-- quote of the day start -->
<section id="quotation" class="align-center">
	<div class="inner-content">
		<h2 class="section-title divider">Quote of the day</h2>
		<blockquote data-aos="fade-up">
			<q>“The more that you read, the more things you will know. The more that you learn, the more places you’ll go.”</q>
			<div class="author-name">Dr. Seuss</div>			
		</blockquote>
	</div>		
</section>
<!-- quote of the day end -->

@endsection