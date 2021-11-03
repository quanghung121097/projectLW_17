@extends('frontend.layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="/frontend/styles/bootstrap4/bootstrap.min.css">
<link href="/frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="/frontend/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="/frontend/plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="/frontend/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="/frontend/styles/responsive.css">
@endsection
@section('content')
<div class="banner">
    <div class="banner_background" style="background-image:url(/frontend/images/banner_background.jpg)"></div>
    <div class="container fill_height">
        <div class="row fill_height">
            <div class="banner_product_image"><img src="/frontend/images/banner_product.png" alt=""></div>
            <div class="col-lg-5 offset-lg-4 fill_height">
                <div class="banner_content">
                    <h1 class="banner_text">Kỷ nguyên mới của điện thoại</h1>
                    <div class="banner_price"><span>20,500,000 đ</span>10,460,000 đ</div>
                    <div class="banner_product_name">Apple Iphone 11</div>
                    <div class="button banner_button"><a href="#">Mua ngay</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Characteristics -->

<div class="characteristics">
    <div class="container">
        <div class="row">

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="/frontend/images/char_1.png" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Miễn phí vận chuyển</div>
                        <div class="char_subtitle">Từ 3 triệu</div>
                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="/frontend/images/char_2.png" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Miễn phí đổi trả</div>
                        <div class="char_subtitle">Từ 1 triệu</div>
                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="/frontend/images/char_3.png" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Thanh toán online</div>
                        <div class="char_subtitle">from $50</div>
                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="/frontend/images/char_4.png" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Free Delivery</div>
                        <div class="char_subtitle">from $50</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Deals of the week -->

<div class="deals_featured">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

                <!-- Deals -->

                <div class="deals">
                    <div class="deals_title">Giảm giá trong tuần</div>
                    <div class="deals_slider_container">

                        <!-- Deals Slider -->
                        <div class="owl-carousel owl-theme deals_slider">
                            @foreach($product_sales as $product)
                            @if($product->origin_price > $product->sale_price)
                            <!-- Deals Item -->
                            <div class="owl-item deals_item">
                                @if(count($product->images) >0)
                                <div class="deals_image"><img src="/{{$product->images[0]->path ?? '' ?? ''}}" alt=""></div>
                                @endif
                                <div class="deals_content">
                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_category"><a href="#">{{$product->category->name}}</a></div>
                                        <div class="deals_item_price_a ml-auto">{{number_format($product->origin_price)}}đ</div>
                                    </div>
                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <a href="{{route('frontend.product',$product->id)}}">
                                            <div class="deals_item_name">{{$product->name}}</div>
                                        </a>
                                        
                                        <div class="deals_item_price ml-auto">{{number_format($product->sale_price)}}đ</div>
                                    </div>
                                    <div class="available">
                                        {{-- <div class="available_line d-flex flex-row justify-content-start">
                                            <div class="available_title">Còn: <span>6</span></div>
                                            <div class="sold_title ml-auto">Đã bán: <span>28</span></div>
                                        </div> --}}
                                        <div class="available_bar"><span style="width:17%"></span></div>
                                    </div>
                                    <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                        <div class="deals_timer_title_container">
                                            <div class="deals_timer_title">Nhanh tay</div>
                                            <div class="deals_timer_subtitle">Ưu đãi kết thúc sau:</div>
                                        </div>
                                        <div class="deals_timer_content ml-auto">
                                            <div class="deals_timer_box clearfix" data-target-time="">
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer1_hr" class="deals_timer_hr"></div>
                                                    <span>Giờ</span>
                                                </div>
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer1_min" class="deals_timer_min"></div>
                                                    <span>Phút</span>
                                                </div>
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer1_sec" class="deals_timer_sec"></div>
                                                    <span>Giây</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            

                        </div>

                    </div>

                    <div class="deals_slider_nav_container">
                        <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
                        <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
                    </div>
                </div>

                <!-- Featured -->
                <div class="featured">
                    <div class="tabbed_container">
                        <div class="tabs">
                            <ul class="clearfix">
                                <li class="active">Xem nhiều</li>
                                <li>Giảm giá</li>
                                <li>Bán chạy</li>
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>
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
                        <!-- Product Panel -->
                        <div class="product_panel panel active">
                            <div class="featured_slider slider">
                                @foreach($products as $product)
                                @if($product->origin_price > $product->sale_price)
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        @if(isset($product->images))
                                        <a href="{{route('frontend.product',$product->id)}}">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/{{$product->images[0]->path ?? ''}}" alt="" width="100px" height="100px"></div>
                                        </a>
                                        @endif
                                        <div class="product_content">
                                            <div class="product_price discount" style="font-size: 14px">{{number_format($product->sale_price)}} đ<span style="font-size: 9px"><strike>{{number_format($product->origin_price)}} đ</strike></span></div>
                                            <div class="product_name"><div><a href="{{route('frontend.product',$product->id)}}">{{limit( $product->name,4) }}</a></div></div>
                                            <div class="product_extras">
                                                <a href="{{route('frontend.cart.add',$product->id)}}">
                                                    <button class="product_cart_button">Add to Cart
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="product_marks">
                                            <li class="product_mark product_discount">{{ceil(100-($product->sale_price/$product->origin_price*100))}} %</li>
                                            <li class="product_mark product_new">new</li>
                                        </ul>
                                    </div>
                                </div>
                                @else
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        @if(isset($product->images))
                                        <a href="{{route('frontend.product',$product->id)}}">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/{{$product->images[0]->path ?? ''}}" alt="" width="100px" height="100px"></div>
                                        </a>
                                        @endif
                                        <div class="product_content">
                                            <div class="product_price discount">{{number_format($product->sale_price) }} đ</div>
                                            <div class="product_name"><div><a href="{{route('frontend.product',$product->id)}}">{{limit( $product->name,4) }}</a></div></div>
                                            <div class="product_extras">
                                                <a href="{{route('frontend.cart.add',$product->id)}}">
                                                    <button class="product_cart_button">Add to Cart
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="product_marks">

                                            <li class="product_mark product_new">new</li>
                                        </ul>
                                    </div>
                                </div>
                                @endif

                                @endforeach

                                <!-- Slider Item -->




                            </div>
                            <div class="featured_slider_dots_cover"></div>
                        </div>

                        <!-- Product Panel -->
                        

                        <div class="product_panel panel">
                            <div class="featured_slider slider">
                                @foreach($product_sales as $product)
                                @if($product->origin_price > $product->sale_price)
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        @if(isset($product->images))
                                        <a href="{{route('frontend.product',$product->id)}}">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/{{$product->images[0]->path ?? ''}}" alt="" width="100px" height="100px"></div>
                                        </a>
                                        @endif
                                        <div class="product_content">
                                            <div class="product_price discount">{{number_format($product->sale_price) }}</div>
                                            <div class="product_name"><div><a href="{{route('frontend.product',$product->id)}}">{{ limit($product->name,4) }}</a></div></div>
                                            <div class="product_extras">
                                                <a href="{{route('frontend.cart.add',$product->id)}}">
                                                    <button class="product_cart_button">Add to Cart
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="product_marks">
                                            <li class="product_mark product_discount">{{ceil(100-($product->sale_price/$product->origin_price*100))}} %</li>
                                            <li class="product_mark product_new">new</li>
                                        </ul>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            <div class="featured_slider_dots_cover"></div>
                        </div>

                        <!-- Product Panel -->

                        <div class="product_panel panel">
                            <div class="featured_slider slider">
                                @foreach($orders as $order)
                                <!-- Slider Item -->
                                @if($order->product->origin_price > $order->product->sale_price)
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        @if(count($order->product->images)>0)
                                        <a href="{{route('frontend.product',$order->product->id)}}">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/{{$order->product->images[0]->path}}" width="100px" height="100px" alt=""></div>
                                        </a>
                                        @endif
                                        <div class="product_content">
                                            <div class="product_price discount" style="font-size: 14px">{{number_format($order->product->sale_price)}} đ<span style="font-size: 9px"><strike>{{number_format($order->product->origin_price)}} đ</strike></span></div>
                                            <div class="product_name"><div><a href="{{route('frontend.product',$order->product->id)}}">{{limit($order->product->name,4)}}</a></div></div>
                                            <div class="product_extras">
                                                <a href="{{route('frontend.cart.add',$order->product->id)}}">
                                                 <button class="product_cart_button">Add to Cart</button>
                                             </a>

                                         </div>
                                     </div>
                                     <div class="product_fav"><i class="fas fa-heart"></i></div>
                                     <ul class="product_marks">
                                        <li class="product_mark product_discount">{{ceil(100-($order->product->sale_price/$order->product->origin_price*100))}} %</li>
                                        <li class="product_mark product_new">new</li>
                                    </ul>
                                </div>
                            </div>
                            @else
                            <div class="featured_slider_item">
                                <div class="border_active"></div>
                                <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    @if(count($order->product->images)>0)
                                    <a href="{{route('frontend.product',$order->product->id)}}">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/{{$order->product->images[0]->path}}" width="100px" height="100px" alt=""></div>
                                    </a>
                                    @endif
                                    <div class="product_content">
                                        <div class="product_price discount" style="font-size: 14px">{{number_format($order->product->sale_price)}} đ</div>
                                        <div class="product_name"><div><a href="{{route('frontend.product',$order->product->id)}}">{{limit($order->product->name,4)}}</a></div></div>
                                        <div class="product_extras">
                                            <a href="{{route('frontend.cart.add',$order->product->id)}}">
                                             <button class="product_cart_button">Add to Cart</button>
                                         </a>

                                     </div>
                                 </div>
                                 <div class="product_fav"><i class="fas fa-heart"></i></div>
                                 <ul class="product_marks">

                                 </ul>
                             </div>
                         </div>
                         @endif
                         @endforeach

                     </div>
                     <div class="featured_slider_dots_cover"></div>
                 </div>

             </div>
         </div>

     </div>
 </div>
</div>
</div>

<!-- Popular Categories -->

<div class="popular_categories">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="popular_categories_content">
                    <div class="popular_categories_title">Danh mục phổ biến</div>
                    <div class="popular_categories_slider_nav">
                        <div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                        <div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                    </div>
                    <div class="popular_categories_link"><a href="#">Xem tất cả</a></div>
                </div>
            </div>

            <!-- Popular Categories Slider -->

            <div class="col-lg-9">
                <div class="popular_categories_slider_container">
                    <div class="owl-carousel owl-theme popular_categories_slider">
                        @foreach($categories as $cate)

                        @if($cate->parent_id!=0)
                        <a href="{{route('frontend.shop',$cate->id)}}">
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="/{{$cate->logo}}" alt="" width="60px" height="60px"></div>
                                    <div class="popular_category_text">{{$cate->name}}</div>
                                </div>
                            </div>
                        </a>
                        @endif
                        @endforeach
                        <!-- Popular Categories Item -->
                            {{-- <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="/frontend/images/popular_1.png" alt=""></div>
                                    <div class="popular_category_text">Smartphones & Tablets</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="/frontend/images/popular_2.png" alt=""></div>
                                    <div class="popular_category_text">Computers & Laptops</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="/frontend/images/popular_3.png" alt=""></div>
                                    <div class="popular_category_text">Gadgets</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="/frontend/images/popular_4.png" alt=""></div>
                                    <div class="popular_category_text">Video Games & Consoles</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="/frontend/images/popular_5.png" alt=""></div>
                                    <div class="popular_category_text">Accessories</div>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner -->

    <div class="banner_2">
        <div class="banner_2_background" style="background-image:url(/frontend/images/banner_2_background.jpg)"></div>
        <div class="banner_2_container">
            <div class="banner_2_dots"></div>
            <!-- Banner 2 Slider -->

            <div class="owl-carousel owl-theme banner_2_slider">

                <!-- Banner 2 Slider Item -->
                <div class="owl-item">
                    <div class="banner_2_item">
                        <div class="container fill_height">
                            <div class="row fill_height">
                                <div class="col-lg-4 col-md-6 fill_height">
                                    <div class="banner_2_content">
                                        <div class="banner_2_category">Laptops</div>
                                        <div class="banner_2_title">MacBook Air 13</div>
                                        <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                                        <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="button banner_2_button"><a href="#">Explore</a></div>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-8 col-md-6 fill_height">
                                    <div class="banner_2_image_container">
                                        <div class="banner_2_image"><img src="/frontend/images/banner_2_product.png" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                    </div>
                </div>

                <!-- Banner 2 Slider Item -->
                <div class="owl-item">
                    <div class="banner_2_item">
                        <div class="container fill_height">
                            <div class="row fill_height">
                                <div class="col-lg-4 col-md-6 fill_height">
                                    <div class="banner_2_content">
                                        <div class="banner_2_category">Laptops</div>
                                        <div class="banner_2_title">MacBook Air 13</div>
                                        <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                                        <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="button banner_2_button"><a href="#">Explore</a></div>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-8 col-md-6 fill_height">
                                    <div class="banner_2_image_container">
                                        <div class="banner_2_image"><img src="/frontend/images/banner_2_product.png" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                    </div>
                </div>

                <!-- Banner 2 Slider Item -->
                <div class="owl-item">
                    <div class="banner_2_item">
                        <div class="container fill_height">
                            <div class="row fill_height">
                                <div class="col-lg-4 col-md-6 fill_height">
                                    <div class="banner_2_content">
                                        <div class="banner_2_category">Laptops</div>
                                        <div class="banner_2_title">MacBook Air 13</div>
                                        <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                                        <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="button banner_2_button"><a href="#">Explore</a></div>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-8 col-md-6 fill_height">
                                    <div class="banner_2_image_container">
                                        <div class="banner_2_image"><img src="/frontend/images/banner_2_product.png" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Hot New Arrivals -->

    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">Hot New Arrivals</div>
                            <ul class="clearfix">
                                <li class="active">Mới</li>
                                <li>Điện Thoại</li>
                                <li>Máy tính</li>
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9" style="z-index:1;">

                                <!-- Product Panel -->
                                <div class="product_panel panel active">
                                    <div class="arrivals_slider slider">
                                        @foreach($product_news as $product_new)
                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                @if(count($product_new->images)>0)
                                                <a href="{{route('frontend.product',$product_new->id)}}
                                                    ">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/{{$product_new->images[0]->path}}" alt="" width="100px" height="100px"></div>
                                                </a>
                                                @endif
                                                <div class="product_content">
                                                    <div class="product_price">{{number_format($product_new->sale_price)}} đ</div>
                                                    <div class="product_name"><div><a href="{{route('frontend.product',$product_new->id)}}">{{limit($product_new->name,4)}}</a></div></div>
                                                    <div class="product_extras">
                                                        <a href="{{route('frontend.cart.add',$product_new->id)}}">
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </a>
                                                        
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        @endforeach

                                    </div>
                                    <div class="arrivals_slider_dots_cover"></div>
                                </div>

                                <!-- Product Panel -->
                                <div class="product_panel panel">
                                    <div class="arrivals_slider slider">

                                        <!-- Slider Item -->
                                        @foreach($product_phones as $product_new)
                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                @if(count($product_new->images)>0)
                                                <a href="{{route('frontend.product',$product_new->id)}}
                                                    ">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/{{$product_new->images[0]->path}}" alt="" width="100px" height="100px"></div>
                                                </a>
                                                @endif
                                                <div class="product_content">
                                                    <div class="product_price">{{number_format($product_new->sale_price)}} đ</div>
                                                    <div class="product_name"><div><a href="{{route('frontend.product',$product_new->id)}}">{{limit($product_new->name,4)}}</a></div></div>
                                                    <div class="product_extras">
                                                        <a href="{{route('frontend.cart.add',$product_new->id)}}">
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </a>
                                                        
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        @endforeach
                                    </div>
                                    <div class="arrivals_slider_dots_cover"></div>
                                </div>

                                <!-- Product Panel -->
                                <div class="product_panel panel">
                                    <div class="arrivals_slider slider">

                                        <!-- Slider Item -->
                                        @foreach($product_computers as $product_new)
                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                @if(count($product_new->images)>0)
                                                <a href="{{route('frontend.product',$product_new->id)}}
                                                    ">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/{{$product_new->images[0]->path ?? ''}}" alt="" width="100px" height="100px"></div>
                                                </a>
                                                @endif
                                                <div class="product_content">
                                                    <div class="product_price">{{number_format($product_new->sale_price)}} đ</div>
                                                    <div class="product_name"><div><a href="{{route('frontend.product',$product_new->id)}}">{{limit($product_new->name,4)}}</a></div></div>
                                                    <div class="product_extras">
                                                        <a href="{{route('frontend.cart.add',$product_new->id)}}">
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </a>
                                                        
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        @endforeach
                                    </div>
                                    <div class="arrivals_slider_dots_cover"></div>
                                </div>

                            </div>

                            <div class="col-lg-3">
                                <div class="arrivals_single clearfix">
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <div class="arrivals_single_image"><img src="/frontend/images/new_single.png" alt=""></div>
                                        <div class="arrivals_single_content">
                                            <div class="arrivals_single_category"><a href="#">Smartphones</a></div>
                                            <div class="arrivals_single_name_container clearfix">
                                                <div class="arrivals_single_name"><a href="#">LUNA Smartphone</a></div>
                                                <div class="arrivals_single_price text-right">$379</div>
                                            </div>
                                            <div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <form action="#"><button class="arrivals_single_button">Add to Cart</button></form>
                                        </div>
                                        <div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
                                        <ul class="arrivals_single_marks product_marks">
                                            <li class="arrivals_single_mark product_mark product_new">new</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>      
    </div>

    <!-- Best Sellers -->

    <div class="best_sellers">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">Hot Best Sellers</div>
                            <ul class="clearfix">
                                <li class="active">Top</li>
                                <li>Điện thoại</li>
                                <li>Laptops</li>
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>

                        <div class="bestsellers_panel panel active">

                            <!-- Best Sellers Slider -->

                            <div class="bestsellers_slider slider">
                                @foreach($orders as $order)
                                <!-- Best Sellers Item -->
                                @if($order->product->origin_price > $order->product->sale_price)
                                <div class="bestsellers_item discount">
                                    <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        @if(count($order->product->images)>0)
                                        <a href="">
                                            <div class="bestsellers_image"><img src="/{{$order->product->images[0]->path}}" alt="" width="80px" height="80px"></div>
                                        </a>
                                        @endif
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">{{$order->product->category->name}}</a></div>
                                            <div class="bestsellers_name"><a href="{{route('frontend.product',$order->product->id)}}">{{limit($order->product->name,2)}}</a></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount" style="font-size: 14px">{{number_format($order->product->sale_price)}} đ<span style="font-size: 9px">{{number_format($order->product->origin_price)}} đ</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">{{ceil(100-($order->product->sale_price/$order->product->origin_price*100))}} %</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>
                                @else
                                <div class="bestsellers_item discount">
                                    <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        @if(count($order->product->images)>0)
                                        <a href="">
                                            <div class="bestsellers_image"><img src="/{{$order->product->images[0]->path}}" alt="" width="80px" height="80px"></div>
                                        </a>
                                        @endif
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">{{$order->product->category->name}}</a></div>
                                            <div class="bestsellers_name"><a href="{{route('frontend.product',$order->product->id)}}">{{limit($order->product->name,2)}}</a></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount" style="font-size: 14px">{{number_format($order->product->sale_price)}} đ</div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">

                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>
                                @endif
                                <!-- Best Sellers Item -->
                                @endforeach
                                <!-- Best Sellers Item -->
                                {{-- <div class="bestsellers_item">
                                    <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="/frontend/images/best_6.png" alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div> --}}

                            </div>
                        </div>

                        <div class="bestsellers_panel panel">

                            <!-- Best Sellers Slider -->

                            <div class="bestsellers_slider slider">

                                <!-- Best Sellers Item -->
                                @foreach($orders as $order)
                                <!-- Best Sellers Item -->
                                @if($order->product->category->id==2||$order->product->category->parent_id==2)
                                @if($order->product->origin_price > $order->product->sale_price)
                                <div class="bestsellers_item discount">
                                    <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        @if(count($order->product->images)>0)
                                        <a href="">
                                            <div class="bestsellers_image"><img src="/{{$order->product->images[0]->path}}" alt="" width="80px" height="80px"></div>
                                        </a>
                                        @endif
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">{{$order->product->category->name}}</a></div>
                                            <div class="bestsellers_name"><a href="{{route('frontend.product',$order->product->id)}}">{{limit($order->product->name,2)}}</a></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount" style="font-size: 14px">{{number_format($order->product->sale_price)}} đ<span style="font-size: 9px">{{number_format($order->product->origin_price)}} đ</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">{{ceil(100-($order->product->sale_price/$order->product->origin_price*100))}} %</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>
                                @else
                                <div class="bestsellers_item discount">
                                    <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        @if(count($order->product->images)>0)
                                        <a href="">
                                            <div class="bestsellers_image"><img src="/{{$order->product->images[0]->path}}" alt="" width="80px" height="80px"></div>
                                        </a>
                                        @endif
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">{{$order->product->category->name}}</a></div>
                                            <div class="bestsellers_name"><a href="{{route('frontend.product',$order->product->id)}}">{{limit($order->product->name,2)}}</a></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount" style="font-size: 14px">{{number_format($order->product->sale_price)}} đ</div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">

                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>
                                @endif
                                @endif
                                @endforeach

                            </div>
                        </div>

                        <div class="bestsellers_panel panel">

                            <!-- Best Sellers Slider -->

                            <div class="bestsellers_slider slider">

                             <!-- Best Sellers Item -->
                             @foreach($orders as $order)
                             <!-- Best Sellers Item -->
                             @if($order->product->category->id==1||$order->product->category->parent_id==1)
                             @if($order->product->origin_price > $order->product->sale_price)
                             <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    @if(count($order->product->images)>0)
                                    <a href="">
                                        <div class="bestsellers_image"><img src="/{{$order->product->images[0]->path}}" alt="" width="80px" height="80px"></div>
                                    </a>
                                    @endif
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">{{$order->product->category->name}}</a></div>
                                        <div class="bestsellers_name"><a href="{{route('frontend.product',$order->product->id)}}">{{limit($order->product->name,2)}}</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount" style="font-size: 14px">{{number_format($order->product->sale_price)}} đ<span style="font-size: 9px">{{number_format($order->product->origin_price)}} đ</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">{{ceil(100-($order->product->sale_price/$order->product->origin_price*100))}} %</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>
                            @else
                            <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    @if(count($order->product->images)>0)
                                    <a href="">
                                        <div class="bestsellers_image"><img src="/{{$order->product->images[0]->path}}" alt="" width="80px" height="80px"></div>
                                    </a>
                                    @endif
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">{{$order->product->category->name}}</a></div>
                                        <div class="bestsellers_name"><a href="{{route('frontend.product',$order->product->id)}}">{{limit($order->product->name,2)}}</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount" style="font-size: 14px">{{number_format($order->product->sale_price)}} đ</div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">

                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>
                            @endif
                            @endif
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Adverts -->

<div class="adverts">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 advert_col">

                <!-- Advert Item -->

                <div class="advert d-flex flex-row align-items-center justify-content-start">
                    <div class="advert_content">
                        <div class="advert_title"><a href="#">Trends 2018</a></div>
                        <div class="advert_text">Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</div>
                    </div>
                    <div class="ml-auto"><div class="advert_image"><img src="/frontend/images/adv_1.png" alt=""></div></div>
                </div>
            </div>

            <div class="col-lg-4 advert_col">

                <!-- Advert Item -->

                <div class="advert d-flex flex-row align-items-center justify-content-start">
                    <div class="advert_content">
                        <div class="advert_subtitle">Trends 2018</div>
                        <div class="advert_title_2"><a href="#">Sale -45%</a></div>
                        <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
                    </div>
                    <div class="ml-auto"><div class="advert_image"><img src="/frontend/images/adv_2.png" alt=""></div></div>
                </div>
            </div>

            <div class="col-lg-4 advert_col">

                <!-- Advert Item -->

                <div class="advert d-flex flex-row align-items-center justify-content-start">
                    <div class="advert_content">
                        <div class="advert_title"><a href="#">Trends 2018</a></div>
                        <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
                    </div>
                    <div class="ml-auto"><div class="advert_image"><img src="/frontend/images/adv_3.png" alt=""></div></div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Trends -->

<div class="trends">
    <div class="trends_background" style="background-image:url(/frontend/images/trends_background.jpg)"></div>
    <div class="trends_overlay"></div>
        {{-- <div class="container">
            <div class="row">

                <!-- Trends Content -->
                <div class="col-lg-3">
                    <div class="trends_container">
                        <h2 class="trends_title">Trends 2018</h2>
                        <div class="trends_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p></div>
                        <div class="trends_slider_nav">
                            <div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                            <div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Trends Slider -->
                <div class="col-lg-9">
                    <div class="trends_slider_container">

                        <!-- Trends Slider -->

                        <div class="owl-carousel owl-theme trends_slider">

                            <!-- Trends Slider Item -->
                            <div class="owl-item">
                                <div class="trends_item is_new">
                                    <div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="/frontend/images/trends_1.jpg" alt=""></div>
                                    <div class="trends_content">
                                        <div class="trends_category"><a href="#">Smartphones</a></div>
                                        <div class="trends_info clearfix">
                                            <div class="trends_name"><a href="product.html">Jump White</a></div>
                                            <div class="trends_price">$379</div>
                                        </div>
                                    </div>
                                    <ul class="trends_marks">
                                        <li class="trends_mark trends_discount">-25%</li>
                                        <li class="trends_mark trends_new">new</li>
                                    </ul>
                                    <div class="trends_fav"><i class="fas fa-heart"></i></div>
                                </div>
                            </div>

                            <!-- Trends Slider Item -->
                            <div class="owl-item">
                                <div class="trends_item">
                                    <div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="/frontend/images/trends_2.jpg" alt=""></div>
                                    <div class="trends_content">
                                        <div class="trends_category"><a href="#">Smartphones</a></div>
                                        <div class="trends_info clearfix">
                                            <div class="trends_name"><a href="product.html">Samsung Charm...</a></div>
                                            <div class="trends_price">$379</div>
                                        </div>
                                    </div>
                                    <ul class="trends_marks">
                                        <li class="trends_mark trends_discount">-25%</li>
                                        <li class="trends_mark trends_new">new</li>
                                    </ul>
                                    <div class="trends_fav"><i class="fas fa-heart"></i></div>
                                </div>
                            </div>

                            <!-- Trends Slider Item -->
                            <div class="owl-item">
                                <div class="trends_item is_new">
                                    <div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="/frontend/images/trends_3.jpg" alt=""></div>
                                    <div class="trends_content">
                                        <div class="trends_category"><a href="#">Smartphones</a></div>
                                        <div class="trends_info clearfix">
                                            <div class="trends_name"><a href="product.html">DJI Phantom 3...</a></div>
                                            <div class="trends_price">$379</div>
                                        </div>
                                    </div>
                                    <ul class="trends_marks">
                                        <li class="trends_mark trends_discount">-25%</li>
                                        <li class="trends_mark trends_new">new</li>
                                    </ul>
                                    <div class="trends_fav"><i class="fas fa-heart"></i></div>
                                </div>
                            </div>

                            Trends Slider Item
                            <div class="owl-item">
                                <div class="trends_item is_new">
                                    <div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="/frontend/images/trends_1.jpg" alt=""></div>
                                    <div class="trends_content">
                                        <div class="trends_category"><a href="#">Smartphones</a></div>
                                        <div class="trends_info clearfix">
                                            <div class="trends_name"><a href="product.html">Jump White</a></div>
                                            <div class="trends_price">$379</div>
                                        </div>
                                    </div>
                                    <ul class="trends_marks">
                                        <li class="trends_mark trends_discount">-25%</li>
                                        <li class="trends_mark trends_new">new</li>
                                    </ul>
                                    <div class="trends_fav"><i class="fas fa-heart"></i></div>
                                </div>
                            </div>

                            <!-- Trends Slider Item -->
                            <div class="owl-item">
                                <div class="trends_item">
                                    <div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="/frontend/images/trends_2.jpg" alt=""></div>
                                    <div class="trends_content">
                                        <div class="trends_category"><a href="#">Smartphones</a></div>
                                        <div class="trends_info clearfix">
                                            <div class="trends_name"><a href="product.html">Jump White</a></div>
                                            <div class="trends_price">$379</div>
                                        </div>
                                    </div>
                                    <ul class="trends_marks">
                                        <li class="trends_mark trends_discount">-25%</li>
                                        <li class="trends_mark trends_new">new</li>
                                    </ul>
                                    <div class="trends_fav"><i class="fas fa-heart"></i></div>
                                </div>
                            </div>

                            <!-- Trends Slider Item -->
                            <div class="owl-item">
                                <div class="trends_item is_new">
                                    <div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="/frontend/images/trends_3.jpg" alt=""></div>
                                    <div class="trends_content">
                                        <div class="trends_category"><a href="#">Smartphones</a></div>
                                        <div class="trends_info clearfix">
                                            <div class="trends_name"><a href="product.html">Jump White</a></div>
                                            <div class="trends_price">$379</div>
                                        </div>
                                    </div>
                                    <ul class="trends_marks">
                                        <li class="trends_mark trends_discount">-25%</li>
                                        <li class="trends_mark trends_new">new</li>
                                    </ul>
                                    <div class="trends_fav"><i class="fas fa-heart"></i></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div> --}}
    </div>

    <!-- Reviews -->

    <div class="reviews">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="reviews_title_container">
                        <h3 class="reviews_title">Latest Reviews</h3>
                        <div class="reviews_all ml-auto"><a href="#">view all <span>reviews</span></a></div>
                    </div>

                    <div class="reviews_slider_container">

                        <!-- Reviews Slider -->
                        <div class="owl-carousel owl-theme reviews_slider">

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="review_image"><img src="/frontend/images/review_1.jpg" alt=""></div></div>
                                    <div class="review_content">
                                        <div class="review_name">Roberto Sanchez</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="review_image"><img src="/frontend/images/review_2.jpg" alt=""></div></div>
                                    <div class="review_content">
                                        <div class="review_name">Brandon Flowers</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="review_image"><img src="/frontend/images/review_3.jpg" alt=""></div></div>
                                    <div class="review_content">
                                        <div class="review_name">Emilia Clarke</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="review_image"><img src="/frontend/images/review_1.jpg" alt=""></div></div>
                                    <div class="review_content">
                                        <div class="review_name">Roberto Sanchez</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="review_image"><img src="/frontend/images/review_2.jpg" alt=""></div></div>
                                    <div class="review_content">
                                        <div class="review_name">Brandon Flowers</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="review_image"><img src="/frontend/images/review_3.jpg" alt=""></div></div>
                                    <div class="review_content">
                                        <div class="review_name">Emilia Clarke</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="reviews_dots"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recently Viewed -->

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
                                        <div class="viewed_image"><img src="/{{$product->images[0]->path ?? ''}}" alt=""></div>
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
                                        <div class="viewed_image"><img src="/{{$product->images[0]->path ?? ''}}" alt=""></div>
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
    <script src="/frontend/plugins/slick-1.8.0/slick.js"></script>
    <script src="/frontend/plugins/easing/easing.js"></script>
    <script src="/frontend/js/custom.js"></script>
    @endsection
