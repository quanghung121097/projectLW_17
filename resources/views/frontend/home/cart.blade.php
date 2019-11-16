@extends('frontend.layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="/frontend/styles/bootstrap4/bootstrap.min.css">
<link href="/frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/frontend/styles/cart_styles.css">
<link rel="stylesheet" type="text/css" href="/frontend/styles/cart_responsive.css">
@endsection
@section('content')
<div class="cart_section">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="cart_container">
					<div class="cart_title">Shopping Cart</div>
					<div class="cart_items">
						<ul class="cart_list">
								{{-- <li class="cart_item clearfix">
									<div class="cart_item_image"><img src="/frontend/images/shopping_cart.jpg" alt=""></div>
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Name</div>
											<div class="cart_item_text">MacBook Air 13</div>
										</div>
										<div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Color</div>
											<div class="cart_item_text"><span style="background-color:#999999;"></span>Silver</div>
										</div>
										<div class="cart_item_quantity cart_info_col">
											<div class="cart_item_title">Quantity</div>
											<div class="cart_item_text">1</div>
										</div>
										<div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Price</div>
											<div class="cart_item_text">$2000</div>
										</div>
										<div class="cart_item_total cart_info_col">
											<div class="cart_item_title">Total</div>
											<div class="cart_item_text">$2000</div>
										</div>
									</div>
								</li> --}}
								@php
								$thanhtien=0;
								@endphp
								@foreach($items as $item)
								<li class="cart_item clearfix">
									<div class="cart_item_image">
										@if(count($item->options) > 0)
										<img src="/{{$item->options->image}}" alt="" width="80px" height="100px">
										@endif
									</div>
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Name</div>
											<div class="cart_item_text">{{$item->name}}</div>
										</div>
										{{-- <div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Color</div>
											<div class="cart_item_text"><span style="background-color:#999999;"></span>Silver</div>
										</div> --}}
										<div class="cart_item_quantity cart_info_col">
											<div class="cart_item_title">Quantity</div>
											<div class="cart_item_text">{{$item->qty}}</div>
										</div>
										<div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Price</div>
											<div class="cart_item_text">{{$item->price}}</div>
										</div>
										@php
										$tong=$item->qty*$item->price;
										$thanhtien += $tong;
										@endphp

									</div>
								</li>
								@endforeach
							</ul>
						</div>

						<!-- Order Total -->
						<div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title">Order Total:</div>
								<div class="order_total_amount">{{Cart::total()}}</div>
							</div>
						</div>

						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="contact_form">
		<div class="container">
			<div class="row">

				<div class="col-lg-10 offset-lg-1">
					<div class="contact_form_container">
						<form method="post" action="{{route('frontend.makepay')}}">
							@csrf
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-2 col-form-label">Họ tên</label>
								<input type="hidden" value="{{$thanhtien + ($thanhtien*0.1)}}" name="total">
								<div class="col-sm-10">
									<input type="text" class="form-control" id="inputEmail3" placeholder="Name" name="customer_name" @if(isset($user)) value="{{$user->name}}" @endif >
									@error('customer_name')
									<br><div class="" style="color: red;">* {{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-2 col-form-label">Số điện thoại</label>
								<div class="col-sm-10">
									<input type="number" class="form-control" id="inputEmail3" placeholder="Số điện thoại" name="customer_phone" @if(isset($user)) value="{{$user->phone}}" @endif>
									@error('customer_phone')
									<br><div class="" style="color: red;">* {{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="customer_email" @if(isset($user)) value="{{$user->email}}" @endif>
									@error('customer_email')
									<br><div class="" style="color: red;">* {{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword3" class="col-sm-2 col-form-label">Địa chỉ giao hàng</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="inputPassword3" placeholder="Địa chỉ" name="customer_address">
									@error('customer_address')
									<br><div class="" style="color: red;">* {{ $message }}</div>
									@enderror
								</div>
							</div>


							<center>
								<div class="form-group row">
									<div class="col-sm-10">
										<div class="cart_buttons">
											<button type="button" class="button cart_button_clear">Xóa</button>
											<button type="submit" class="button cart_button_checkout">Đặt hàng</button>
										</div>
									</div>
								</div>

							</center>
						</form>

					</div>
				</div>
			</div>
		</div>
		<div class="panel"></div>
	</div>
	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="/frontend/images/send.png" alt=""></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
								<button class="newsletter_button">Subscribe</button>
							</form>
							<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
	@section('js')
	<script src="/frontend/js/jquery-3.3.1.min.js"></script>
	<script src="/frontend/styles/bootstrap4/popper.js"></script>
	<script src="/frontend/styles/bootstrap4/bootstrap.min.js"></script>
	<script src="/frontend/plugins/greensock/TweenMax.min.js"></script>
	<script src="/frontend/plugins/greensock/TimelineMax.min.js"></script>
	<script src="/frontend/plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="/frontend/plugins/greensock/animation.gsap.min.js"></script>
	<script src="/frontend/plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="/frontend/plugins/easing/easing.js"></script>
	<script src="/frontend/js/cart_custom.js"></script>
	@endsection