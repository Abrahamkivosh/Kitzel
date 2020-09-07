<!doctype html>
<html lang="en">


<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>Kitzel Tours</title>
	<meta name="description" content="Tour and Travel Bootstrap 4 HTML Template" />
	<meta name="keywords" content="tour, tour agency, tour operator, tour package, tourism, travel, travel agency, trip, vacation, holiday, travel booking, tour booking, booking, " />
	<meta name="keywords" content="tour, tour agency, tour operator, tour package, tourism, travel, travel agency, trip, vacation, holiday, travel booking, tour booking, booking, " />
	<meta name="author" content="crenoveative">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Fav and Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.html">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.html">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.html">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.html">
	<link rel="shortcut icon" href="images/ico/favicon.html">

	<!-- Font face -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
	<link href="/site/assetfont-faces/metropolis/metropolis.css" rel="stylesheet">

	<!-- CSS Plugins -->
	<link href="/site/css/font-icons.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/site/bootstrap/css/bootstrap.min.css" media="screen">
	<link href="/site/css/animate.html" rel="stylesheet">
	<link href="/site/css/main.css" rel="stylesheet">
	<link href="/site/css/plugin.css" rel="stylesheet">

	<!-- CSS Custom -->
	<link href="/site/css/style.css" rel="stylesheet">

	<!-- CSS Custom -->
    <link href="/site/css/your-style.css" rel="stylesheet">
   <script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>





    @yield('head')


</head>



<body class="with-waypoint-sticky header-bg-white">

	<!-- start Body Inner -->
	<div class="body-inner">



		<!-- start Header -->
		<header id="header-waypoint-sticky" class="header-main header-mobile-menu with-absolute-navbar">

			<div class="header-outer clearfix">

				<div class="header-inner">

					<div class="row shrink-auto-lg gap-0 align-items-center">

						<div class="col-5 col-shrink">
							<div class="col-inner">
								<div class="main-logo">
									<a href="/"><img src="/images/logo.png" alt="images" /></a>
								</div>
							</div>
						</div>

						<div class="col-7 col-shrink order-last-lg">
							<div class="col-inner">




                                <ul class="nav-mini-right">
                                    @guest

                                    @if (Route::has('register'))
                                    <li class="d-none d-sm-block">
                                        <a class="btn btn-brand-02 btn-sm btn-rounded" href="{{ route('register') }}"><span class="icon-font"><i class="icon-user-follow"></i></span>{{ __('Register ') }} </a>

                                    </li>

                                    <li class="d-none d-sm-block">
                                        <a class="btn btn-brand-02 btn-sm btn-rounded" href="{{ route('login') }}"><span class="icon-font"><i class="icon-login"></i></span>{{ __('Login ') }} </a>

                                    </li>

                                    @endif
                                @else


                                    <li class="dropdown">
                                        <a class="nav-link dropdown-toggle" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item "  href="{{ route('admin.dashboard') }}"><span class="text text-primary" >Dashboard</span> </a>
                                          <a class="dropdown-item "  href="{{ route('booking.checkout') }}"><span class="text text-primary" >Checkout</span> </a>
                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                           {{ __('Logout') }}
                                       </a>
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                        </div>
                                      </li>


                                @endguest
                                 </ul>


							</div>
						</div>

						<div class="col-12 col-auto">

							<div class="navbar-wrapper">

								<div class="navbar navbar-expand-lg">

									<div id="mobileMenu" class="collapse navbar-collapse">

										<nav class="main-nav-menu main-menu-nav navbar-arrow">

											<ul class="main-nav">
												<li><a href="/">Home</a>

                                                </li>

                                                <li><a href="/tours">Tour Packages</a></li>

                                                <li><a href="/custom-tours">Custom Tour</a></li>

												<li><a href="/posts">Blog</a></li>

												<li><a href="about-us">About Us</a></li>

												<li><a href="contact-us">Contact Us</a></li>

											</ul>

										</nav><!--/.nav-collapse -->

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</header>
        <!-- start Header -->











        <main class="py-4">
            @yield('content')
        </main>






		<!-- start Footer Wrapper -->
		<footer class="footer-wrapper light scrollspy-footer">

			<div class="footer-top">

				<div class="container">

					<div class="row shrink-auto-md align-items-lg-center gap-10">



						<div class="col-12 col-auto">

							<div class="col-inner">
								<ul class="footer-contact-list">
									<li>
										<span class="icon-font text-primary inline-block-middle mr-5 font16"><i class="fa fa-phone"></i></span> <span class="font700 text-black">+351 914 629 008</span>
									</li>
									<li>
										<span class="icon-font text-primary inline-block-middle mr-5 font16"><i class="fa fa-envelope"></i></span> <span class="font700 text-black">info@kitzeltours.com</span>
									</li>
								</ul>
							</div>

						</div>

					</div>

					<hr class="opacity-7" />

				</div>

			</div>

			<div class="main-footer">

				<div class="container">

					<div class="row gap-50">

						<div class="col-12 col-lg-5">

							<div class="footer-logo">
								<a href="/">Kitzel Tours</a>
							</div>

							<p class="mt-20">Experience Portugual and create memories that last. Kitzel Tours is your trusted tour Partner. We are affordable, knowledgable and passionate expect nothing short of an amazing experience.</p>

							<a href="#" class="text-capitalize font14 h6 line-1 mb-0 font500 mt-30">read more <i class="elegent-icon-arrow_right font18 inline-block-middle"></i></a>

						</div>

						<div class="col-12 col-lg-7">

							<div class="col-inner">

								<div class="row shrink-auto-sm gap-30">

									<div class="col-6 col-shrink">

										<div class="col-inner">
											<h5 class="footer-title">About company</h5>
											<ul class="footer-menu-list set-width">
												<li><a href="#">Who we are</a></li>
												<li><a href="#">Careers</a></li>
												<li><a href="#">Company history</a></li>
												<li><a href="#">Legal</a></li>
												<li><a href="#">Partners</a></li>
												<li><a href="#">Privacy notice</a></li>
											</ul>
										</div>

									</div>

									<div class="col-6 col-shrink">

										<div class="col-inner">
											<h5 class="footer-title">Customer Service</h5>
											<ul class="footer-menu-list set-width">
												<li><a href="#">Payment</a></li>
												<li><a href="#">Feedback</a></li>
												<li><a href="#">Contact us</a></li>
												<li><a href="#">Our Service</a></li>
												<li><a href="#">FAQ</a></li>
												<li><a href="#">Site map</a></li>
											</ul>
										</div>

									</div>

									<div class="col-12 col-auto">

										<div class="col-inner">
											<h5 class="footer-title">Newsletter &amp; Social</h5>
											<p class="font12">Savings her pleased are several started females met. Short her not among being any.</p>
											<form class="footer-newsletter mt-20">
												<div class="input-group">
													<input type="email" class="form-control" placeholder="Email address">
													<div class="input-group-append">
														<button class="btn btn-primary" type="button"><i class="far fa-envelope"></i></button>
													</div>
												</div>
											</form>
											<div class="footer-socials mt-20">
												<a href="#"><i class="fab fa-facebook-square"></i></a>
												<a href="#"><i class="fab fa-twitter-square"></i></a>
												<a href="#"><i class="fab fa-google-plus-square"></i></a>
												<a href="#"><i class="fab fa-pinterest-square"></i></a>
												<a href="#"><i class="fab fa-flickr"></i></a>
											</div>
										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

			<div class="bottom-footer">

				<div class="container">

					<div class="row shrink-auto-md gap-10 gap-40-lg">

						<div class="col-auto">
							<div class="col-inner">
								<ul class="footer-menu-list-02">
									<li><a href="#">Cookies</a></li>
									<li><a href="#">Policies</a></li>
									<li><a href="#">Terms</a></li>
									<li><a href="#">Blogs</a></li>
								</ul>
							</div>
						</div>

						<div class="col-shrink">
							<div class="col-inner">
								<p class="footer-copy-right"> &#169; 2020 <span class="text-primary">Kitzel Tours.</span> All Rights Reserved.</p>
							</div>
						</div>

					</div>

				</div>

			</div>

		</footer>
		<!-- start Footer Wrapper -->



	</div>
	<!-- end Body Inner -->







    	<!-- start Login modal -->
	<div class="modal fade modal-with-tabs form-login-modal" id="loginFormTabInModal" aria-labelledby="modalWIthTabsLabel" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content shadow-lg">

				<nav class="d-none">
					<ul class="nav external-link-navs clearfix">
						<li><a class="active" data-toggle="tab" href="#loginFormTabInModal-login">Sign-in</a></li>
						<li><a data-toggle="tab" href="#loginFormTabInModal-register">Register </a></li>
						<li><a data-toggle="tab" href="#loginFormTabInModal-forgot-pass">Forgot Password </a></li>
					</ul>
				</nav>

				<div class="tab-content">

					<div role="tabpanel" class="tab-pane active" id="loginFormTabInModal-login">

						<div class="form-login">

							<div class="form-header">
								<h4>Welcome Back to SiteName</h4>
								<p>Sign in to your account to continue using SiteName</p>
							</div>

							<div class="form-body">

								<form method="post" action="#">

									<div class="d-flex flex-column flex-lg-row align-items-stretch">

										<div class="flex-md-grow-1 bg-primary-light">

											<div class="form-inner">
												<div class="form-group">
													<label>Email adress/username</label>
													<input type="text" class="form-control" />
												</div>
												<div class="form-group">
													<label>Password</label>
													<input type="password" class="form-control" />
												</div>
												<div class="d-flex flex-column flex-md-row mt-25">
													<div class="flex-shrink-0">
														<a href="#" class="btn btn-primary btn-wide">Sign-in</a>
													</div>
													<div class="ml-0 ml-md-15 mt-15 mt-md-0">
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" id="loginFormTabInModal-rememberMe">
															<label class="custom-control-label" for="loginFormTabInModal-rememberMe">Remember me</label>
														</div>
													</div>
												</div>
												<a href="#loginFormTabInModal-forgot-pass" class="tab-external-link block mt-25 font600">Forgot password?</a>
											</div>

										</div>

										<div class="form-login-socials">
											<div class="login-socials-inner">
												<h5 class="mb-20">Or sign-up with your socials</h5>
												<button class="btn btn-login-with btn-facebook btn-block"><i class="fab fa-facebook"></i> facebook</button>
												<button class="btn btn-login-with btn-google btn-block"><i class="fab fa-google"></i> google</button>
												<button class="btn btn-login-with btn-twitter btn-block"><i class="fab fa-twitter"></i> google</button>
											</div>
										</div>

									</div>

								</form>

							</div>

							<div class="form-footer">
								<p>Not a member yet? <a href="#loginFormTabInModal-register" class="tab-external-link font600">Sign up</a> for free</p>
							</div>

						</div>

					</div>

					<div role="tabpanel" class="tab-pane fade in" id="loginFormTabInModal-register">

						<div class="form-login">

							<div class="form-header">
								<h4>Join SiteName for Free</h4>
								<p>Access thousands of online classes in design, business, and more!</p>
							</div>

							<div class="form-body">

								<form method="post" action="#">

									<div class="d-flex flex-column flex-lg-row align-items-stretch">

										<div class="flex-grow-1 bg-primary-light">

											<div class="form-inner">
												<div class="form-group">
													<label>Full name</label>
													<input type="text" class="form-control" />
												</div>
												<div class="form-group">
													<label>Email adress</label>
													<input type="text" class="form-control" />
												</div>
												<div class="row cols-2 gap-10">
													<div class="col">
														<div class="form-group">
															<label>Password</label>
															<input type="password" class="form-control" />
														</div>
													</div>
													<div class="col">
														<div class="form-group">
															<label>Confirm password</label>
															<input type="password" class="form-control" />
														</div>
													</div>
												</div>
											</div>

										</div>

										<div class="form-login-socials">
											<div class="login-socials-inner">
												<h5 class="mb-20">Or sign-in with your socials</h5>
												<button class="btn btn-login-with btn-facebook btn-block"><i class="fab fa-facebook"></i> facebook</button>
												<button class="btn btn-login-with btn-google btn-block"><i class="fab fa-google"></i> google</button>
												<button class="btn btn-login-with btn-twitter btn-block"><i class="fab fa-twitter"></i> google</button>
											</div>
										</div>

									</div>

									<div class="d-flex flex-column flex-md-row mt-30 mt-lg-10">
										<div class="flex-shrink-0">
											<a href="#" class="btn btn-primary btn-wide mt-5">Sign-up</a>
										</div>
										<div class="pt-1 ml-0 ml-md-15 mt-15 mt-md-0">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="loginFormTabInModal-acceptTerm">
												<label class="custom-control-label line-145" for="loginFormTabInModal-acceptTerm">By clicking this, you are agree to to our <a href="#">terms of use</a> and <a href="#">privacy policy</a> including the use of cookies</label>
											</div>
										</div>
									</div>

								</form>

							</div>

							<div class="form-footer">
								<p>Already a member? <a href="#loginFormTabInModal-login" class="tab-external-link font600">Sign in</a></p>
							</div>

						</div>

					</div>

					<div role="tabpanel" class="tab-pane fade in" id="loginFormTabInModal-forgot-pass">

						<div class="form-login">

							<div class="form-header">
								<h4>Lost your password?</h4>
								<p>Please provide your detail.</p>
							</div>

							<div class="form-body">
								<form method="post" action="#">
									<p class="line-145">We'll send password reset instructions to the email address associated with your account.</p>
									<div class="row">
										<div class="col-12 col-md-10 col-lg-8">
											<div class="form-group">
												<input type="password" class="form-control" placeholder="password" />
											</div>
										</div>
									</div>
									<button class="btn btn-primary mt-5">Retreive password</button>
								</form>
							</div>

							<div class="form-footer">
								<p>Back to <a href="#loginFormTabInModal-login" class="tab-external-link font600">Sign in</a> or <a href="#loginFormTabInModal-register" class="tab-external-link font600">Sign up</a></p>
							</div>

						</div>

					</div>

				</div>

				<div class="text-center pb-20">
					<button type="button" class="close" data-dismiss="modal" aria-labelledby="Close">
						<span aria-hidden="true"><i class="far fa-times-circle"></i></span>
					</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end Login modal -->










	<!-- start Back To Top -->
	<a id="back-to-top" href="#" class="back-to-top" role="button" title="Click to return to top" data-toggle="tooltip" data-placement="left"><i class="elegent-icon-arrow_carrot-up"></i></a>
	<!-- end Back To Top -->



	<!-- JS -->
	<script type="text/javascript" src="/site/js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="/site/js/plugins.js"></script>
    <script type="text/javascript" src="/site/js/custom-core.js"></script>








    @yield('scripts')
   <script>
        ClassicEditor
            .create(document.querySelector('#description'), {
                cloudServices: {
                    tokenUrl: 'http://localhost/learn/php/editor.php',
                    uploadUrl: 'http://localhost/learn/php/editor.php'
                }

            }).then((response) => {

            })
            .catch(error => console.error(error));




    </script>


</body>



</html>
