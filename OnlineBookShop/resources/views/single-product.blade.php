@extends('layouts.app')

@section('content')
<!-- Single product start -->
<section class="bg-sand padding-large">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<a href="#" class="product-image"><img src="images/main-banner2.jpg"></a>
			</div>
			<div class="col-md-6 pl-5">
				<div class="product-detail">
					<h1>Birds Gonna Be Happy</h1>
					<p>Fiction</p>
					<span class="price colored">$45.00</span>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. 
					</p>
					<p>
						Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<button type="submit" name="add-to-cart" value="27545" class="button">Add to cart</button>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Single product end -->
@endsection


