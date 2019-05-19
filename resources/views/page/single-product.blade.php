@extends('page.trangchu')
@section('content')
<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			@foreach($single_product as $sp)
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_product_img">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" src="source/img/product/feature-product/images/{{$sp->image}}" alt="First slide">
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3>{{$sp->name}}</h3>
						<h2>{{$sp->unit_price}}</h2>
						<ul class="list">
							<!-- <li>
								<a class="active" href="#">
									<span>Category</span> : Household</a>
							</li> -->
							<li>
								<a href="#">
									<span>Availibility</span> : In Stock</a>
							</li>
						</ul>
						<p>{{$sp->description}}</p>
						<div class="product_count">
							<label for="qty">Quantity:</label>
							<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
							 class="increase items-count" type="button">
								<i class="lnr lnr-chevron-up"></i>
							</button>
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
							 class="reduced items-count" type="button">
								<i class="lnr lnr-chevron-down"></i>
							</button>
						</div>
						<div class="card_area">
							<a class="main_btn" href="add-cart/{{$sp->id}}">Add to Cart</a>
							<a class="icon_btn" href="#">
								<i class="lnr lnr lnr-diamond"></i>
							</a>
							<a class="icon_btn" href="#">
								<i class="lnr lnr lnr-heart"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach 
		</div>
	</div>
	<!--================End Single Product Area =================-->
	@endsection