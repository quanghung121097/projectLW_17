@extends('frontend.layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="/frontend/styles/bootstrap4/bootstrap.min.css">
<link href="/frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="/frontend/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="/frontend/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="/frontend/styles/shop_styles.css">
<link rel="stylesheet" type="text/css" href="/frontend/styles/shop_responsive.css">
@endsection
@section('content')
<div class="home">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="/frontend/images/shop_background.jpg"></div>
	<div class="home_overlay"></div>
	<div class="home_content d-flex flex-column align-items-center justify-content-center">
		<h2 class="home_title">{{$category->name}}</h2>
	</div>
</div>

<!-- Shop -->

<div class="shop">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">

				<!-- Shop Sidebar -->
				<div class="shop_sidebar">
					
					<div class="sidebar_section">
						<div class="sidebar_title">Danh mục</div>
						<ul class="sidebar_categories">
							@foreach($categories as $value)
							@if($value->parent_id==0)
							<li><a href="{{route('frontend.shop',$value->id)}}">{{$value->name}}</a></li>
							@endif
							@endforeach
						</ul>
					</div>
					{{-- <div class="sidebar_section filter_by_section">
						<div class="sidebar_title">Filter By</div>
						<div class="sidebar_subtitle">Price</div>
						<div class="filter_price">
							<div id="slider-range" class="slider_range"></div>
							<p>Range: </p>
							<p><input type="text" id="amount" class="amount" readonly style="border:0; font-weight:bold;"></p>
						</div>
					</div>
					<div class="sidebar_section">
						<div class="sidebar_subtitle color_subtitle">Color</div>
						<ul class="colors_list">
							<li class="color"><a href="#" style="background: #b19c83;"></a></li>
							<li class="color"><a href="#" style="background: #000000;"></a></li>
							<li class="color"><a href="#" style="background: #999999;"></a></li>
							<li class="color"><a href="#" style="background: #0e8ce4;"></a></li>
							<li class="color"><a href="#" style="background: #df3b3b;"></a></li>
							<li class="color"><a href="#" style="background: #ffffff; border: solid 1px #e1e1e1;"></a></li>
						</ul>
					</div> --}}
					@if(count($brands)>0)
					<div class="sidebar_section">
						<div class="sidebar_subtitle brands_subtitle">Nhãn hiệu</div>
						<ul class="brands_list">
							@foreach($brands as $brand)
							<li class="brand"><a href="{{route('frontend.shop',$brand->id)}}">{{$brand->name}}</a></li>
							@endforeach
						</ul>
					</div>
					@endif
				</div>

			</div>

			<div class="col-lg-9">

				<!-- Shop Content -->

				<div class="shop_content">
					<div class="shop_bar clearfix">
						<div class="shop_product_count"><span>Có {{count($products)}} sản phẩm tìm thấy</span></div>
						<div class="shop_sorting">
							<span>Sắp xếp:</span>
							<ul>
								<li>
									<span class="sorting_text">highest rated<i class="fas fa-chevron-down"></span></i>
									<ul>
										<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest rated</li>
										<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>Tên</li>
										<li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>Giá</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>

					<div class="product_grid">
						<div class="product_grid_border"></div>

						<!-- Product Item -->
						


						<!-- Product Item -->
						{{-- <div class="product_item">
							<div class="product_border"></div>
							<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/frontend/images/featured_2.png" alt=""></div>
							<div class="product_content">
								<div class="product_price">$379</div>
								<div class="product_name"><div><a href="#" tabindex="0">Apple iPod shuffle</a></div></div>
							</div>
							<div class="product_fav"><i class="fas fa-heart"></i></div>
							<ul class="product_marks">
								<li class="product_mark product_discount">-25%</li>
								<li class="product_mark product_new">new</li>
							</ul>
						</div>
						<!-- Product Item -->
						<div class="product_item is_new">
							<div class="product_border"></div>
							<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/frontend/images/featured_4.png" alt=""></div>
							<div class="product_content">
								<div class="product_price">$379</div>
								<div class="product_name"><div><a href="#" tabindex="0">LUNA Smartphone</a></div></div>
							</div>
							<div class="product_fav"><i class="fas fa-heart"></i></div>
							<ul class="product_marks">
								<li class="product_mark product_discount">-25%</li>
								<li class="product_mark product_new">new</li>
							</ul>
						</div>
						<!-- Product Item -->
						<div class="product_item discount">
							<div class="product_border"></div>
							<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/frontend/images/featured_1.png" alt=""></div>
							<div class="product_content">
								<div class="product_price">$225<span>$300</span></div>
								<div class="product_name"><div><a href="#" tabindex="0">Huawei MediaPad...</a></div></div>
							</div>
							<div class="product_fav"><i class="fas fa-heart"></i></div>
							<ul class="product_marks">
								<li class="product_mark product_discount">-25%</li>
								<li class="product_mark product_new">new</li>
							</ul>
						</div> --}}

						<!-- Product Item -->
						<!-- Product Item -->
						<!-- Product Item -->
						@php 
						function limit_text($text, $limit) {
							if (str_word_count($text, 0) > $limit) {
								$words = str_word_count($text, 2);
								$pos = array_keys($words);
								$text = substr($text, 0, $pos[$limit]) . '...';
							}
							return $text;
						}

						@endphp
						@foreach($products as $product)
						@if($product->origin_price == $product->sale_price)
						<div class="product_item">
							<div class="product_border"></div>
							@if(count($product->images)>0)
							<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/{{$product->images[0]->path}}" alt="" width="100px" height="90px"></div>
							@endif
							<div class="product_content">
								<div class="product_price discount">{{number_format($product->sale_price)}} đ</div>
								<div class="product_name"><div><a href="{{route('frontend.product',$product->id)}}" tabindex="0">{{limit_text($product->name,4)}}</a></div></div>
							</div>
							<a href="{{route('frontend.cart.add',$product->id)}}" >
								<i class="fas fa-shopping-cart" style="font-size: 20px"></i>
							</a>
							<ul class="product_marks">
								
								<li class="product_mark product_new">new</li>
							</ul>
						</div>
						@endif
						@if($product->origin_price > $product->sale_price)
						<div class="product_item discount">
							<div class="product_border"></div>
							@if(count($product->images)>0)
							<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/{{$product->images[0]->path}}" alt="" width="100px" height="90px"></div>
							@endif
							<div class="product_content">
								<div class="product_price" style="font-size: 14px">{{number_format($product->sale_price)}} đ<span style="font-size: 9px">{{number_format($product->origin_price)}} đ</span></div>
								<div class="product_name"><div><a href="{{route('frontend.product',$product->id)}}" tabindex="0">{{limit_text($product->name,4)}}</a></div></div>

							</div>
							<a href="{{route('frontend.cart.add',$product->id)}}">
								<i class="fas fa-shopping-cart" style="font-size: 20px"></i>
							</a>
							<ul class="product_marks">
								<li class="product_mark product_discount">{{ceil(100-($product->sale_price/$product->origin_price*100))}} %</li>
								<li class="product_mark product_new">new</li>
							</ul>
						</div>
						@endif
						@endforeach

					</div>

					<!-- Shop Page Navigation -->

					<div class="shop_page_nav d-flex flex-row">
						
						{{-- <ul class="page_nav d-flex flex-row">
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">21</a></li>
						</ul> --}}
						<center>
							{!! $products->links() !!}
						</center>
						
					</div>

				</div>

			</div>
		</div>
	</div>
</div>

<!-- Recently Viewed -->
@php 
function limit($text, $limit) {
	if (str_word_count($text, 0) > $limit) {
		$words = str_word_count($text, 2);
		$pos = array_keys($words);
		$text = substr($text, 0, $pos[$limit]) . '...';
	}
	return $text;
}

@endphp
<div class="viewed">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="viewed_title_container">
					<h3 class="viewed_title">Recently Viewed</h3>
					<div class="viewed_nav_container">
						<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
						<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
					</div>
				</div>

				<div class="viewed_slider_container">

					<!-- Recently Viewed Slider -->
					

					<div class="owl-carousel owl-theme viewed_slider">
						@foreach($product_randoms as $product)
						@if($product->origin_price > $product->sale_price)
						<!-- Recently Viewed Item -->
						<div class="owl-item">
							<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
								@if(count($product->images) >0)
								<a href=" {{route('frontend.product',$product->id)}}">
									<div class="viewed_image"><img src="/{{$product->images[0]->path}}" alt=""></div>
								</a>
								@endif
								<div class="viewed_content text-center">
									<div class="viewed_price" style="font-size: 14px">{{number_format($product->sale_price)}} đ<span><{{number_format($product->origin_price)}} đ</span></div>
									<div class="viewed_name"><a href=" {{route('frontend.product',$product->id)}}">{{limit($product->name,4)}}</a></div>
								</div>
								<ul class="item_marks">
									<li class="item_mark item_discount">{{ceil(100-($product->sale_price/$product->origin_price*100))}} %</li>
									<li class="item_mark item_new">new</li>
								</ul>
							</div>
						</div>
						@else
						<div class="owl-item">
							<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
								@if(count($product->images) >0)
								<a href=" {{route('frontend.product',$product->id)}}">
									<div class="viewed_image"><img src="/{{$product->images[0]->path}}" alt=""></div>
								</a>
								@endif
								<div class="viewed_content text-center">
									<div class="viewed_price" style="font-size: 14px">{{number_format($product->sale_price)}} đ</div>
									<div class="viewed_name"><a href=" {{route('frontend.product',$product->id)}}">{{limit($product->name,4)}}</a></div>
								</div>
								<ul class="item_marks">
									
									<li class="item_mark item_new">new</li>
								</ul>
							</div>
						</div>
						@endif
						@endforeach

						<!-- Recently Viewed Item -->

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Brands -->

<div class="brands">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="brands_slider_container">

					<!-- Brands Slider -->

					<div class="owl-carousel owl-theme brands_slider">

						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="/frontend/images/brands_1.jpg" alt=""></div></div>
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="/frontend/images/brands_2.jpg" alt=""></div></div>
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="/frontend/images/brands_3.jpg" alt=""></div></div>
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="/frontend/images/brands_4.jpg" alt=""></div></div>
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="/frontend/images/brands_5.jpg" alt=""></div></div>
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="/frontend/images/brands_6.jpg" alt=""></div></div>
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="/frontend/images/brands_7.jpg" alt=""></div></div>
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="/frontend/images/brands_8.jpg" alt=""></div></div>

					</div>

					<!-- Brands Slider Navigation -->
					<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
					<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

				</div>
			</div>
		</div>
	</div>
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
<script src="/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="/frontend/plugins/easing/easing.js"></script>
<script src="/frontend/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="/frontend/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="/frontend/plugins/parallax-js-master/parallax.min.js"></script>
<script src="/frontend/js/shop_custom.js"></script>
@endsection