@include('include_php.css_inc')

<body class="stretched">

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTLHLW4"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	
	<div id="wrapper" class="clearfix">

		<!-- <div class="modal-on-load" data-target="#myModal1"></div>

		<div class="modal1 mfp-hide subscribe-widget mx-auto" id="myModal1" style="max-width: 750px;">
			<div class="row justify-content-center bg-white align-items-center" style="min-height: 380px;">
				<div class="col-md-5 p-0">
					<div style="background: url('images/modals/modal1.jpg') no-repeat center right; background-size: cover;  min-height: 380px;"></div>
				</div>
				<div class="col-md-7 bg-white p-4">
					<div class="heading-block border-bottom-0 mb-3">
						<h3 class="font-secondary nott ">Join Our Newsletter &amp; Get <span class="text-danger">40%</span> Off your First Order</h3>
						<span>Get Latest Fashion Updates &amp; Offers</span>
					</div>
					<div class="widget-subscribe-form-result"></div>
					<form class="widget-subscribe-form2 mb-2" action="include/subscribe.php" method="post">
						<input type="email" id="widget-subscribe-form2-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email Address..">
						<div class="d-flex justify-content-between align-items-center mt-1">
							<button class="button button-dark  bg-dark text-white ml-0" type="submit">Subscribe</button>
							<a href="#" class="btn-link" onClick="$.magnificPopup.close();return false;">Don't Show me</a>
						</div>
					</form>
					<small class="mb-0 font-italic text-black-50">*We also hate Spam &amp; Junk Emails.</small>
				</div>
			</div>
		</div> -->

		<div class="modal1 mfp-hide" id="modal-register">
			<div class="card mx-auto" style="max-width: 540px;">
				<div class="card-header py-3 bg-transparent center">
					<h3 class="mb-0 font-weight-normal">Hello, Welcome Back</h3>
				</div>
				<div class="card-body mx-auto py-5" style="max-width: 70%;">

					<a href="#" class="button button-large btn-block si-colored si-facebook nott font-weight-normal ls0 center m-0"><i class="icon-facebook-sign"></i> Log in with Facebook</a>

					<div class="divider divider-center"><span class="position-relative" style="top: -2px">OR</span></div>

					<form id="login-form" name="login-form" class="mb-0 row" action="#" method="post">

						<div class="col-12">
							<input type="text" id="login-form-username" name="login-form-username" value="" class="form-control not-dark" placeholder="Username" />
						</div>

						<div class="col-12 mt-4">
							<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control not-dark" placeholder="Password" />
						</div>

						<div class="col-12">
							<a href="#" class="float-right text-dark font-weight-light mt-2">Forgot Password?</a>
						</div>

						<div class="col-12 mt-4">
							<button class="button btn-block m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
						</div>
					</form>
				</div>
				<div class="card-footer py-4 center">
					<p class="mb-0">Don't have an account? <a href="#"><u>Sign up</u></a></p>
				</div>
			</div>
		</div>

		@include('include_php.header_inc')

		
		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="clear"></div>
					<div class="h_20"></div>

					<div>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">首頁</a></li>
							<li class="breadcrumb-item active" aria-current="page">關於直直買</li>
						</ol>
					</div>

					<div id="page-menu" class="no-sticky mb-4 pageleftmenubox MobileOnly">
						<div id="page-menu-wrap">
							<div class="container">
								<div class="page-menu-row">

									<div class="page-menu-title ">常見問題</div>

									<nav class="page-menu-nav">
										<ul class="page-menu-container">
											<li class="page-menu-item"><a href="qa.html"><div>常見問題</div></a></li>
											<li class="page-menu-item"><a href="shoppingprocess.html"><div>購物流程</div></a></li>
											<li class="page-menu-item current"><a href="about.html"><div>關於直直買</div></a></li>
										</ul>
									</nav>

									<div id="page-menu-trigger" class="leftmenu"><i class="icon-line-more-vertical animated infinite pulse"></i></div>

								</div>
							</div>
						</div>
					</div>

					<div class="row gutter-40 col-mb-40">
						<div class="postcontent col-lg-9 order-lg-last">
							<div class="qabox">
								
								@foreach($qa as $qav)
								<div class="toggle toggle-bg">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-line-plus"></i>
											<i class="toggle-open icon-line-minus"></i>
										</div>
										<div class="toggle-title">{{$qav->title}}</div>
									</div>
									<div class="toggle-content">
										{!!$qav->content!!}
									</div>
								</div>
								@endforeach
							</div>
						</div>
						<div class="sidebar col-lg-3 PCOnly">
							<div class="sidebar-widgets-wrap">

								@include('include_php.qa_left_inc')


							</div>
						</div>
					</div>

					

					
				</div>

			</div>
		</section>

		@include('include_php.footer_inc')

	</div>

	<div id="gotoTop"><img src="images/gotop.png" alt=""></div>

	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<script src="js/functions.js"></script>
</body>
</html>