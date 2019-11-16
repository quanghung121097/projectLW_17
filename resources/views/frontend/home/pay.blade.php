@extends('frontend.layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="/frontend/styles/bootstrap4/bootstrap.min.css">
<link href="/frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/frontend/styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="/frontend/styles/contact_responsive.css">
@endsection
@section('content')
<div class="contact_info">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="contact_form_title">Thông tin đơn hàng</div>
				<div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

					<!-- Contact Item -->
					<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
						<div class="contact_info_image"><img src="/frontend/images/contact_1.png" alt=""></div>
						<div class="contact_info_content">
							<div class="contact_info_title">Phone</div>
							<div class="contact_info_text">+38 068 005 3570</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- Contact Form -->

<div class="contact_form">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="contact_form_container">
					<div class="contact_form_title">Thông tin khách hàng</div>

					<form method="post" action="{{route('frontend.makepay')}}">
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Họ tên</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="customer_name" @if(isset($user)) value="{{$user->name}}" @endif >
							</div>
						</div>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Số điện thoại</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" id="inputEmail3" placeholder="Số điện thoại" name="customer_phone" @if(isset($user)) value="{{$user->phone}}" @endif>
							</div>
						</div>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="customer_email" @if(isset($user)) value="{{$user->email}}" @endif>
							</div>
						</div>
						<div class="form-group row">
							<label for="inputPassword3" class="col-sm-2 col-form-label">Địa chỉ giao hàng</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputPassword3" placeholder="Địa chỉ" name="customer_address">
							</div>
						</div>

						
						<div class="form-group row">
							<div class="col-sm-10">
								<button type="submit" class="btn btn-danger">Đặt hàng</button>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
	<div class="panel"></div>
</div>

<!-- Map -->

	{{-- <div class="contact_map">
		<div id="google_map" class="google_map">
			<div class="map_container">
				<div id="map"></div>
			</div>
		</div>
	</div> --}}

	<!-- Newsletter -->

	{{-- <div class="newsletter">
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
	</div> --}}
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
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
	<script src="/frontend/js/contact_custom.js"></script>
	@endsection