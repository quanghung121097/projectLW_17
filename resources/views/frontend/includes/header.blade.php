<header class="header">

	<!-- Top Bar -->

	<div class="top_bar">
		<div class="container">
			<div class="row">
				<div class="col d-flex flex-row">
					<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/phone.png" alt=""></div>+84 788337682</div>
					<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/mail.png" alt=""></div><a href="mailto:fastsales@gmail.com">quanghung121097@gmail.com</a></div>
					<div class="top_bar_content ml-auto">
						<div class="top_bar_menu">
							<ul class="standard_dropdown top_bar_dropdown">
								<li>
									<a href="#">English<i class="fas fa-chevron-down"></i></a>
									<ul>
										<li><a href="#">Vietnamese</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="top_bar_user">
							@if(isset($user))
							<div >{{\Illuminate\Support\Facades\Auth::user()->name}}</div>
							@else
							
							<div><a href="http://127.0.0.1:8000/register">Đăng ký</a></div>
							<div><a href="http://127.0.0.1:8000/login">Đăng nhập</a></div>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Header Main -->

	<div class="header_main">
		<div class="container">
			<div class="row">

				<!-- Logo -->
				<div class="col-lg-2 col-sm-3 col-3 order-1">
					<div class="logo_container">
						<div class="logo"><a href="http://127.0.0.1:8000/">OneTech</a></div>
					</div>
				</div>

				<!-- Search -->
				<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
					<div class="header_search">
						<div class="header_search_content">
							<div class="header_search_form_container">



								<form action="{{route('frontend.search')}}" method="post" class="header_search_form clearfix">
									@csrf
									<input type="text" required="required" class="header_search_input" placeholder="Tìm kiếm sản phẩm..." name="search_key">
									<div class="custom_dropdown">
										<div class="custom_dropdown_list">
											<span class="custom_dropdown_placeholder clc">Danh mục</span>
											<i class="fas fa-chevron-down"></i>
											<ul class="custom_list clc">
												<li><a class="clc" href="#">Tất cả</a></li>
												@foreach($categories as $category)
												@if($category->parent_id==0)
												<li><a class="clc" href="{{route('frontend.shop',$category->id)}}">{{$category->name}}</a></li>
												@endif
												@endforeach
											</ul>
										</div>
									</div>
									<button type="submit" class="header_search_button trans_300" value="Submit"></button>
								</form>




							</div>
						</div>
					</div>
				</div>

				<!-- Wishlist -->
				<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
					<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
						<!-- Cart -->
						<div class="cart">
							<div class="cart_container d-flex flex-row align-items-center justify-content-end">
								<div class="cart_icon">
									<img src="images/cart.png" alt="">
									<div class="cart_count"><span>{{Cart::count()}}</span></div>
								</div>
								<div class="cart_content">
									<div class="cart_text"><a href="http://127.0.0.1:8000/cart">Giỏ hàng</a></div>
									<div class="cart_price">{{Cart::total()}}</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Main Navigation -->

	<nav class="main_nav">
		<div class="container">
			<div class="row">
				<div class="col">

					<div class="main_nav_content d-flex flex-row">

						<!-- Categories Menu -->

						<div class="cat_menu_container">
							<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
								<div class="cat_burger"><span></span><span></span><span></span></div>
								<div class="cat_menu_text">Danh mục</div>
							</div>

							<ul class="cat_menu">
								@foreach($categories as $category)
								@if($category->parent_id==0)
								<li><a href="{{route('frontend.shop',$category->id)}}"> {{$category->name}} <i class="fas fa-chevron-right ml-auto"></i></a></li>
								@endif
								@endforeach


							</ul>
						</div>

						<!-- Main Nav Menu -->

						<div class="main_nav_menu ml-auto">
							<ul class="standard_dropdown main_nav_dropdown">
								<li><a href="http://127.0.0.1:8000/">Trang chủ<i class="fas fa-chevron-down"></i></a></li>
								<li class="hassubs">
									<a href="#">Danh mục<i class="fas fa-chevron-down"></i></a>
									<ul>
										@foreach($categories as $category)
										@if($category->parent_id==0)
										<li>
											<a href="{{route('frontend.shop',$category->id)}}">{{$category->name}}<i class="fas fa-chevron-down"></i></a>
											<ul>
												@foreach($categories as $cate)
												@if($cate->parent_id==$category->id)
												<li><a href="{{route('frontend.shop',$cate->id)}}">{{$cate->name}}<i class="fas fa-chevron-down"></i></a></li>
												@endif
												@endforeach
											</ul>
										</li>
										@endif
										@endforeach
										
									</ul>
								</li>
								{{-- <li class="hassubs">
									<a href="#">Featured Brands<i class="fas fa-chevron-down"></i></a>
									<ul>
										<li>
											<a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
											<ul>
												<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											</ul>
										</li>
										<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
									</ul>
								</li>
								<li class="hassubs">
									<a href="#">Pages<i class="fas fa-chevron-down"></i></a>
									<ul>
										<li><a href="shop.html">Shop<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="product.html">Product<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="blog_single.html">Blog Post<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="regular.html">Regular Post<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="cart.html">Cart<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
									</ul>
								</li> --}}
								<li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
								<li><a href="contact.html"> Liên hệ<i class="fas fa-chevron-down"></i></a></li>
							</ul>
						</div>

						<!-- Menu Trigger -->

						<div class="menu_trigger_container ml-auto">
							<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
								<div class="menu_burger">
									<div class="menu_trigger_text">menu</div>
									<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</nav>

	<!-- Menu -->

	<div class="page_menu">
		<div class="container">
			<div class="row">
				<div class="col">

					<div class="page_menu_content">

						<div class="page_menu_search">
							<form action="#">
								<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
							</form>
						</div>
						<ul class="page_menu_nav">
							<li class="page_menu_item has-children">
								<a href="#">Language<i class="fa fa-angle-down"></i></a>
								<ul class="page_menu_selection">
									<li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
								</ul>
							</li>
							<li class="page_menu_item has-children">
								<a href="#">Currency<i class="fa fa-angle-down"></i></a>
								<ul class="page_menu_selection">
									<li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
								</ul>
							</li>
							<li class="page_menu_item">
								<a href="#">Home<i class="fa fa-angle-down"></i></a>
							</li>
							<li class="page_menu_item has-children">
								<a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
								<ul class="page_menu_selection">
									<li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
									<li class="page_menu_item has-children">
										<a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
										<ul class="page_menu_selection">
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										</ul>
									</li>
									<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
								</ul>
							</li>
							<li class="page_menu_item has-children">
								<a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
								<ul class="page_menu_selection">
									<li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
								</ul>
							</li>
							<li class="page_menu_item has-children">
								<a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
								<ul class="page_menu_selection">
									<li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
								</ul>
							</li>
							<li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
						</ul>

						<div class="menu_contact">
							<div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+38 068 005 3570</div>
							<div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</header>