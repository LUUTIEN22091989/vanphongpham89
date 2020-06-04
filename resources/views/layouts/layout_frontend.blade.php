<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $title_page ?? 'Văn phòng phẩm'}}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
		
		<!-- FONTS
		============================================ -->	
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'> 
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
				
		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="/frontend/css/animate.css">		
		
		<!-- FANCYBOX CSS
		============================================ -->			
        <link rel="stylesheet" href="/frontend/css/jquery.fancybox.css">	
		
		<!-- BXSLIDER CSS
		============================================ -->			
        <link rel="stylesheet" href="/frontend/css/jquery.bxslider.css">			
				
		<!-- MEANMENU CSS
		============================================ -->			
        <link rel="stylesheet" href="/frontend/css/meanmenu.min.css">	
		
		<!-- JQUERY-UI-SLIDER CSS
		============================================ -->			
        <link rel="stylesheet" href="/frontend/css/jquery-ui-slider.css">		
		
		<!-- NIVO SLIDER CSS
		============================================ -->			
        <link rel="stylesheet" href="/frontend/css/nivo-slider.css">
		
		<!-- OWL CAROUSEL CSS 	
		============================================ -->	
        <link rel="stylesheet" href="/frontend/css/owl.carousel.css">
		
		<!-- OWL CAROUSEL THEME CSS 	
		============================================ -->	
         <link rel="stylesheet" href="/frontend/css/owl.theme.css">
		
		<!-- BOOTSTRAP CSS 
		============================================ -->	
        <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
		
		<!-- FONT AWESOME CSS 
		============================================ -->
        <link rel="stylesheet" href="/frontend/css/font-awesome.min.css">
		
		<!-- NORMALIZE CSS 
		============================================ -->
        <link rel="stylesheet" href="/frontend/css/normalize.css">
		
		<!-- MAIN CSS 
		============================================ -->
        <link rel="stylesheet" href="/frontend/css/main.css">
		
		<!-- STYLE CSS 
		============================================ -->
        <link rel="stylesheet" href="/frontend/style.css">
		
		<!-- RESPONSIVE CSS 
		============================================ -->
        <link rel="stylesheet" href="/frontend/css/responsive.css">
		
		<!-- IE CSS 
		============================================ -->
        <link rel="stylesheet" href="/frontend/css/ie.css">
		
		<!-- MODERNIZR JS 
		============================================ -->
        <script src="/frontend/js/vendor/modernizr-2.6.2.min.js"></script>

        @yield('css')

        <!-- thông báo -->
         @if (Session::has('alert'))
             <div role="alert" class="alert alert-success text-center" style="font-size: 20px; color: blue;margin-bottom: 0px;">{{Session::get('alert')}}</div>
        @endif

        <style type="text/css">
        	.menuarea .left-mega:nth-child(4n+1) {
			  	clear: both;
			  }
        </style>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		
		<!-- HEADER-TOP START -->
		<div class="header-top" style="background: #0000ffa3;">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
					<!-- HEADER-RIGHT-MENU START -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="header-right-menu">
							<nav>
								<ul class="list-inline">
									<li><a href="{{ route('get.shopping.list') }}">Giỏ hàng của bạn</a></li>
									@if( Session::get('user_id'))
										<li><a href="{{ route('get.login')}}">Xin chào: {{ Session::get('user_name')}}</a></li>
										<li><a href="{{ route('get.user.index') }}">Quản lý tài khoản</a></li>
										<li><a href="{{ route('get.logout')}}">Đăng xuất</a></li>
									@else
										<li><a href="{{ route('get.login')}}">Đăng nhập</a></li>
										<li><a href="{{ route('get.register') }}">Đăng ký</a></li>
									@endif
								</ul>									
							</nav>
						</div>
					</div>
					<!-- HEADER-RIGHT-MENU END -->
				</div>
			</div>
		</div>
		<!-- HEADER-TOP END -->
		<!-- HEADER-MIDDLE START -->
		<section class="header-middle" style="background: #6ca3ff">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<!-- LOGO START -->
						<div class="logo">
							<a href="index.html"><img style="width: 223px;height: 90px;" src="{{ asset($setting->logo) }}" alt="bstore logo" /></a>
						</div>
						<!-- LOGO END -->
						<!-- HEADER-RIGHT-CALLUS START -->
						<div class="header-right-callus">
							<h3>Hotline tư vấn</h3>
							<span>0942 005 988</span>
						</div>
						<!-- HEADER-RIGHT-CALLUS END -->
						<!-- CATEGORYS-PRODUCT-SEARCH START -->
						<div class="categorys-product-search">
							<form action="{{ route('search.product') }}" method="" class="search-form-cat">
								<div class="search-product form-group">
									<input style="width: 100%;" type="text" class="form-control search-form" name="key" placeholder="Nhập tên sản phẩm ... " />
									<button class="search-button" value="Search" name="" type="submit">
										<i class="fa fa-search"></i>
									</button>									 
								</div>
							</form>
						</div>
						<!-- CATEGORYS-PRODUCT-SEARCH END -->
					</div>
				</div>
			</div>
		</section>
		<!-- HEADER-MIDDLE END -->
		<!-- MAIN-MENU-AREA START -->
		<header class="main-menu-area" style="background: #0562fd">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 no-padding-right menuarea">
						<div class="mainmenu" style="background: #0562fd;">
							<nav>
								<ul class="list-inline mega-menu">
									<li class=""><a href="{{ route('frontend.home')}}">Trang chủ</a>
									</li>
									@if( isset($categories) )
										@foreach( $categories as $category)
										<li>
											<a href="{{ route('get.productByCategory', $category->c_slug.'-'.$category->id)}}">{{ $category->c_name }}</a>
											<!-- DRODOWN-MEGA-MENU START -->
											<div class="drodown-mega-menu" style="width: 100%; display: flex;">
												@foreach( $_categories as $child )
												@if( $category->id == $child->c_parent_id)
													<div class="left-mega" style="width: 25%;padding: 5px;">
														<div class="mega-menu-list">
															<a class="mega-menu-title" href="{{ route('get.productByCategory', $child->c_slug.'-'.$child->id)}}" style="font-size: 15px;">{{ $child->c_name }}</a>
															<ul>
																@foreach( $_categories as $item )
																	@if( $item->c_parent_id == $child->id )
																	<li><a href="{{ route('get.productByCategory', $item->c_slug.'-'.$item->id)}}">{{ $item->c_name }}</a></li>
																	@endif
																@endforeach
															</ul>
														</div>
													</div>	
												@endif
												@endforeach									
											</div>
											<!-- DRODOWN-MEGA-MENU END -->
										</li>
										@endforeach
									@endif
									    <li><a href="{{ route('get.news.list') }}">Tin tức</a></li>
									    <li><a href="{{ route('get.contact') }}">Liên hệ</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<!-- MAINMENU END -->
				</div>
				<div class="row">
					<!-- MOBILE MENU START -->
					<div class="col-sm-12 mobile-menu-area">
						<div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
							<span class="mobile-menu-title">MENU</span>
							<nav>
								<ul>
									<li><a href="index.html">Home</a>
										<ul>
											<li><a href="index.html">Home variation 1</a></li>
											<li><a href="index-2.html">Home variation 2</a></li>
										</ul>														
									</li>								
									<li><a href="shop-gird.html">Women</a>
										<ul>
											<li><a href="shop-gird.html">Tops</a>
												<ul>
													<li><a href="shop-gird.html">T-Shirts</a></li>
													<li><a href="shop-gird.html">Blouses</a></li>
												</ul>													
											</li>
											<li><a href="shop-gird.html">Dresses</a>
												<ul>
													<li><a href="shop-gird.html">Casual Dresses</a></li>
													<li><a href="shop-gird.html">Summer Dresses</a></li>
													<li><a href="shop-gird.html">Evening Dresses</a></li>	
												</ul>	
											</li>

										</ul>
									</li>
									<li><a href="shop-gird.html">men</a>
										<ul>											
											<li><a href="shop-gird.html">Tops</a>
												<ul>
													<li><a href="shop-gird.html">Sports</a></li>
													<li><a href="shop-gird.html">Day</a></li>
													<li><a href="shop-gird.html">Evening</a></li>
												</ul>														
											</li>
											<li><a href="shop-gird.html">Blouses</a>
												<ul>
													<li><a href="shop-gird.html">Handbag</a></li>
													<li><a href="shop-gird.html">Headphone</a></li>
													<li><a href="shop-gird.html">Houseware</a></li>
												</ul>														
											</li>
											<li><a href="shop-gird.html">Accessories</a>
												<ul>
													<li><a href="shop-gird.html">Houseware</a></li>
													<li><a href="shop-gird.html">Home</a></li>
													<li><a href="shop-gird.html">Health & Beauty</a></li>
												</ul>														
											</li>
										</ul>										
									</li>
									<li><a href="shop-gird.html">clothing</a></li>
									<li><a href="shop-gird.html">tops</a></li>
									<li><a href="shop-gird.html">T-shirts</a></li>
									<li><a href="#">Delivery</a></li>
									<li><a href="about-us.html">About us</a></li>
								</ul>
							</nav>
						</div>						
					</div>
					<!-- MOBILE MENU END -->
				</div>
			</div>
		</header>
		<!-- MAIN-MENU-AREA END -->

		 @yield('content')

		<!-- FOOTER-TOP-AREA START -->
		<section class="footer-top-area">
			<div class="container">
				<div class="footer-top-container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
							<!-- FOOTER-TOP-LEFT START -->
							<div class="footer-top-left">
								<!-- NEWSLETTER-AREA START -->
								<div class="newsletter-area">
									<h2>Đăng ký nhận tin</h2>
									<p>Để nhận được các thông tin sản phẩm mới và chương trình khuyến mãi từ chúng tôi</p>
									<form action="{{ route('post.customerRegister') }}" method="POST">
										@csrf
										<div class="form-group newsletter-form-group">
										  <input required="" type="text" class="form-control newsletter-form" name="email" placeholder="Enter your e-mail">
										  <button type="submit" class="newsletter-btn">Đăng ký</button>
										</div>
									</form>
								</div>
							</div>
							<!-- FOOTER-TOP-LEFT END -->
						</div>
						<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
							<!-- FOOTER-TOP-RIGHT-1 START -->
							<div class="footer-top-right-1">
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 hidden-sm">
										<!-- STATICBLOCK START -->
										<div class="staticblock">
											<h2>Về chúng tôi</h2>
											<p>Văn phòng phẩm 89 – Nhà cung cấp văn phòng phẩm uy tín, phục vụ tối đa nhu cầu của doanh nghiệp và ngành in ấn. Văn phòng phẩm bán trên Kinh Bắc chất lượng, đa dạng, giá cả phải chăng và có nhiều khuyến mãi bất ngờ.</p>
											<p style="margin-top: 20px;">- Địa chỉ: {{ $setting->address_1 }}</p>
											<p>- Hotline: {{$setting->hotline}}</p>
											<p>- Email: {{$setting->email}}</p>
										</div>
										<!-- STATICBLOCK END -->
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										<!-- FOTTER-MENU-WIDGET START -->
										<div class="fotter-menu-widget">
											<div class="single-f-widget">
												<h2>Thông tin chung</h2>
												<ul>
													@foreach( $pageStatics as $ps)
													<li><a href="{{ route('get.page.static', $ps->ps_slug)}}"><i class="fa fa-angle-double-right"></i>{{ $ps->ps_name }} </a></li>
													@endforeach
												</ul>
											</div>
										</div>
										<!-- FOTTER-MENU-WIDGET END -->
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<!-- GOOGLE-MAP-AREA START -->
										<div class="Store-Information">
											<h2>Fanpage của chúng tôi</h2>
											<div class="fb-page" data-href="https://www.facebook.com/vpp13/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/vpp13/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/vpp13/">VĂN PHÒNG PHẨM ONLINE</a></blockquote></div>
											<div style="margin-top: 5px;" class="fb-like" data-href="https://www.facebook.com/vpp13/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
										</div>
										<!-- GOOGLE-MAP-AREA END -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- FOOTER-TOP-AREA END -->
		<!-- COPYRIGHT-AREA START -->
		<footer class="copyright-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="copy-right">
							<address>Copyright © 2015 <a href="http://bootexperts.com/">BootExperts</a> All Rights Reserved</address>
						</div>
						<div class="scroll-to-top">
							<a href="#" class="bstore-scrollertop"><i class="fa fa-angle-double-up"></i></a>
						</div>
					</div>
				</div>
			</div>
		</footer> 
		<!-- COPYRIGHT-AREA END -->
		<!-- JS 
		===============================================-->
		<!-- jquery js -->
		<script src="/frontend/js/vendor/jquery-1.11.3.min.js"></script>
		
		<!-- fancybox js -->
        <script src="/frontend/js/jquery.fancybox.js"></script>
		
		<!-- bxslider js -->
        <script src="/frontend/js/jquery.bxslider.min.js"></script>
		
		<!-- meanmenu js -->
        <script src="/frontend/js/jquery.meanmenu.js"></script>
		
		<!-- owl carousel js -->
        <script src="/frontend/js/owl.carousel.min.js"></script>
		
		<!-- nivo slider js -->
        <script src="/frontend/js/jquery.nivo.slider.js"></script>
		
		<!-- jqueryui js -->
        <script src="/frontend/js/jqueryui.js"></script>
		
		<!-- bootstrap js -->
        <script src="/frontend/js/bootstrap.min.js"></script>
		
		<!-- wow js -->
        <script src="/frontend/js/wow.js"></script>		
        <!-- facebook -->
        <div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=165436404903392&autoLogAppEvents=1"></script>

		<script>
			new WOW().init();
		</script>

		 @yield('script')

		 <script type="text/javascript">
		 	var DEVICE = '{{ device_agent() }}'
		 </script>

		 <!-- facebook -->
		 <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
	        window.fbAsyncInit = function() {
	          FB.init({
	            xfbml            : true,
	            version          : 'v7.0'
	          });
	        };

	        (function(d, s, id) {
	        var js, fjs = d.getElementsByTagName(s)[0];
	        if (d.getElementById(id)) return;
	        js = d.createElement(s); js.id = id;
	        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
	        fjs.parentNode.insertBefore(js, fjs);
	      }(document, 'script', 'facebook-jssdk'));
	  </script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="113458890377101"
		  theme_color="#13cf13"
		  logged_in_greeting="Vanphongpham89 kính chào Qúy khách"
		  logged_out_greeting="Vanphongpham89 kính chào Qúy khách">
      </div>

		<!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>	
		<script>
			function initialize() {
			  var mapOptions = {
				zoom: 8,
				scrollwheel: false,
				center: new google.maps.LatLng(35.149868, -90.046678)
			  };
			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);
			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				map: map
			  });

			}
			google.maps.event.addDomListener(window, 'load', initialize);				
		</script>
		<!-- main js -->
        <script src="/frontend/js/main.js"></script>
    </body>


</html>