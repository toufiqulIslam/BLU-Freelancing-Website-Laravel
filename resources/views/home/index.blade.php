<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>BLU || Home</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" type="image/png" href="/img/favicon.png">
	<!-- Place favicon.ico in the root directory -->
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700" rel="stylesheet">
	
	<!-- css  -->
	<!-- Bootstrap CSS
		============================================ -->
		<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
	<!-- Icon Font CSS
		============================================ -->
		<link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
	<!-- Mean Menu CSS
		============================================ -->
		<link rel="stylesheet" href="{{ asset('/css/meanmenu.min.css') }}">
	<!-- Animate CSS
		============================================ -->
		<link rel="stylesheet" href="{{ asset('/css/animate.min.css') }}">
	<!-- Style CSS
		============================================ -->
		<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/header.css') }}">
	<!-- Responsive CSS 
		============================================ -->
		<link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">
	<!-- Modernizer JS
		============================================ -->
		<script src="{{ asset('/js/vendor/modernizr-2.8.3.min.js') }}"></script>
	</head>
	<body>
		<!-- preloder-wrap -->
		<div id="cssLoader3" class="preloder-wrap">
			<div class="loader">
				<div class="child-common child4"></div>
				<div class="child-common child3"></div>
				<div class="child-common child2"></div>
				<div class="child-common child1"></div>
			</div>
		</div>
		<!-- preloder-wrap -->
	<!-- Hero
		============================================ -->
		<div class="hero-wrapper text-center ">
			<div class="hero-wrapper-text">
				<div class="hero-content">
					<div class="table">
						<div class="table-cell">
							<div class="container">
								<div class="row">
									<div class="col-xs-12">
										<h1>BLU</h1>
										<h3> BLU - Freelancing Site </h3>
										<p><span>3 Home Varsion</span>/<span>6 Blog Pages</span>/<span>5 Portfolio</span></p>			
										<a href="/{{strtolower(Session::get('action'))}}" class="buy-template">{{Session::get('action')}}</a>&nbsp;&nbsp;&nbsp;
										<a href="{{route('home.profile', Session::get('pathUser'))}}" class="buy-template" style="display: {{Session::get('hide')}};" >{{Session::get('user')}} @php $var = Session::get('active');
											if($var=='show'){ @endphp <span style="height: 15px;width: 15px;padding: 5px; background-color: #33cc33;border-radius: 50%;display: inline-block;"></span> @php } else{ @endphp
											<span style="height: 15px;width: 15px;padding: 5px; background-color: #ff5050;border-radius: 50%;display: inline-block;"></span> @php } @endphp </a>
											<a href="/signup" style="display: {{Session::get('hide2')}};" class="buy-template">{{Session::get('user')}}</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>				
				</div>
			</div>
	<!-- Demo Section
		============================================ -->
		<div class="demo-area">
			<div class="container ptb-100">
				<div class="row">
					<div class="col-xs-12">
						<h2 class="section-title text-center">Find your freelancer or agency</h2>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 col-lg-3">
						<div class="single-demo text-center">
							<div class="demo-img">
								<a target="_blank" href="{{route('home.freelancers', 'web')}}"><img src="/img/demo/home1.png" alt="" /></a>
							</div>
							<div class="demo-content">
								<h3><a href="{{route('home.freelancers', 'web')}}" target="_blank">Web, Mobile & Software Dev</a></h3>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 col-lg-3">
						<div class="single-demo text-center">
							<div class="demo-img">
								<a target="_blank" href="{{route('home.freelancers', 'design')}}"><img src="/img/demo/home2.png" alt="" /></a>
							</div>
							<div class="demo-content">
								<h3><a href="{{route('home.freelancers', 'design')}}" target="_blank">Design & Creative</a></h3>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 col-lg-3">
						<div class="single-demo text-center">
							<div class="demo-img">
								<a target="_blank" href="{{route('home.freelancers', 'writing')}}"><img src="/img/demo/home3.png" alt="" /></a>
							</div>
							<div class="demo-content">
								<h3><a href="{{route('home.freelancers', 'writing')}}" target="_blank">Writing</a></h3>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 col-lg-3">
						<div class="single-demo text-center">
							<div class="demo-img">
								<a target="_blank" href="{{route('home.freelancers', 'sales')}}"><img src="/img/demo/blog1.png" alt="" /></a>
							</div>
							<div class="demo-content">
								<h3><a href="{{route('home.freelancers', 'sales')}}" target="_blank">Sales & Marketing</a></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
	<!-- Feature Section
		============================================ -->
		<div id="feature" class="feature-area bg-off-white padding-90 fix">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title text-center col-xs-12">
							<h1>BLU Feature</h1>
							<p>There are so many reasons to choose BLU, here are a few items:</p>
						</div>
						<div class="feature-list col-xs-12">
							<ul>
								<li>Valid HTML5 & CSS3</li>
								<li>Neat, clean and simple design</li>
								<li>Creative and Modern Design</li>
								<li>Total 32 HTML Pages</li>
								<li>Built Based on Bootstrap v3</li>
								<li>Fully Responsive</li>
								<li>3 home Pages</li>
								<li>Cross Browser Optimization</li>
								<li>Well Commented HTML & CSS files</li>
								<li>Google Fonts</li>
								<li>Well Documented</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- Footer Top Area
		============================================ -->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="footer-logo col-xs-12 text-center">
							<h2>BLU</h2>
						</div>
						<div class="footer-social col-xs-12 text-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- Footer Bottom Area
		============================================ -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<!-- Copyright -->
					<div class="col-xs-12">
						<div class="copyright col-xs-12 text-center">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="{{route('home.index')}}" style="color: white;">BLU</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</div>
					</div>
				</div>
			</div>
		</div>



		<!-- JS -->

<!-- jQuery JS
	============================================ -->
	<script src="{{ asset('/js/vendor/jquery-1.12.0.min.js') }}"></script>
<!-- Bootstrap JS
	============================================ -->
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<!-- jquery.scrollup.min.js
	============================================ -->
	<script src="{{ asset('/js/jquery.scrollup.min.js') }}"></script>
<!-- Main JS
	============================================ -->
	<script src="{{ asset('/js/main.js') }}"></script>

</body>
</html>
