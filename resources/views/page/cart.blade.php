@extends('page.trangchu')
@section('content')
	<!--================Cart Area =================-->
	<section class="cart_area">
		<div class="container">
			<div class="cart_inner">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Các sản phảm</th>
								<th scope="col">Giá</th>
								<th scope="col">Số lượng</th>
								<th scope="col">Tùy chọn</th>
							</tr>
						</thead>
						<tbody>
							@if(Session::has('cart'))
							@foreach($product_cart as $product)
							<tr>
								<td>
									<div class="media">
										<div class="d-flex eidt-them">
											<img src="source/img/product/feature-product/images/{{$product['item']['image']}}" alt="" style="width: 100px; height: 100px;">
										</div>
										<div class="media-body">
											<p>{{$product['item']['name']}}</p>
										</div>
									</div>
								</td>
								<td>
									<h5>{{$product['item']['unit_price']}}</h5>
								</td>
								<td>
									<span>{{$product['qty']}}*<span>{{$product['item']['unit_price']}}</span></span>
								</td>
								<td>
									<a style="width: 80px; margin-bottom: 4px;" class="btn btn-info" href="del-cart/{{$product['item']['id']}}">Xóa 1</a>
									<a class="btn btn-info" href="del-all-cart/{{$product['item']['id']}}">Xóa hết</a>
								</td>
							
							@endforeach
							@endif

							<tr>
								<td>

								</td>
								<td>

								</td>
								<td>
									<h5>Tổng tiền</h5>
								</td>
								<td>
									<h5>{{Session('cart')->totalPrice}}</h5>
								</td>
							</tr>
							<tr class="bottom_button">
								<td>
									
								</td>
								<td>

								</td>
								<td>

								</td>
								<td>
									<div class="cupon_text">
									</div>
								</td>
							</tr>
							<form action="page/cart" method="POST" enctype="multipart/form-data>
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<tr class="shipping_area">
								<td>

								</td>
								<td>

								</td>
								
								<td>
									<h5>Phương thức chuyển hàng</h5>
								</td>
								<td>
									<div class="shipping_box">
										<ul class="list">
											<li>
												<a name="payment">Ship Cod</a>
											</li>
											<li>
												<a name="payment">Chuyển khoản</a>
											</li>
										</ul>
										<input name="name" type="text" placeholder="Họ Tên">
										<input name="address" type="text" placeholder="Địa Chỉ">
										<input name="phone_number" type="text" placeholder="Số Điện Thoại">
										<!-- <a class="gray_btn" href="#">Update Details</a> -->
									</div>
								</td>
								
							</tr>
							
							<tr class="out_button_area">
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>
									<div class="checkout_btn_inner">
										<a class="gray_btn" href="{{'index'}}">Tiếp tục mua hàng</a>
										<button type="submit" class="btn btn-info">Đặt Hàng</button>
									</div>
								</td>
							</tr>
							</form>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Cart Area =================-->
@endsection