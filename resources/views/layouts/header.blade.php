	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="{{ route('index') }}">
								<img src="images/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="{{ route('index') }}">Home</a></li>
								<li><a href="{{ route('about') }}">About</a></li>
								{{-- <li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="{{ route('404') }}">404 page</a></li>
										<li><a href="{{ route('about') }}">About</a></li>
										<li><a href="{{ route('cart') }}">Cart</a></li>
										<li><a href="{{ route('checkout') }}">Check Out</a></li>
										<li><a href="{{ route('contact') }}">Contact</a></li>
										<li><a href="{{ route('news') }}">News</a></li>
										<li><a href="{{ route('shop') }}">Shop</a></li>
									</ul>
								</li> --}}
								<li><a href="{{ route('news') }}">News</a></li>
								<li><a href="{{ route('contact') }}">Contact</a></li>
								<li><a href="{{ route('shop') }}">Shop</a></li>
								<li><a href="{{ route('login') }}">Login</a></li>
								<li><a href="{{ route('register') }}">Register</a></li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->