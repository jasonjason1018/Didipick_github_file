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

					<div class="heading_box center headw_md">
						<p>ディディピック !</p>
						<h3>與日本。零時差。didipick本季最燃的選物是＿＿！</h3>
					</div>
					<div class="clear"></div>
					<div class="h_20"></div>

					<div>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="/">首頁</a></li>
							<li class="breadcrumb-item active" aria-current="page">達人勸敗 / 主題列表</li>
						</ol>
					</div>

					<div class="row gutter-40 pickingbox">
						@foreach($master as $v)
						<div class="entry col-12 masblogbox">
							<div class="grid-inner row no-gutters">
								<div class="entry-image col-md-4">
									<div class="feature-box media-box">
										<div class="fbox-media Darkbg">
											<!--<div class="subtag_t">免運</div>-->
											<div class="pickheart">
												<a><img src="images/topicon_star_w.svg" alt=""></a>
											</div>
											<p></p>
											<div class="pickbgpadding">
												<a href="master_info.html"><img src="/storage/{{$v->img}}" alt=""></a> 
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-8 pl-md-4">
									<div class="entry-title title-sm">
										<h3><a href="master_info.html">{{$v->title}}</a></h3>
									</div>
									<div class="tagcloud clearfix mb-2">
										@php
											$label = explode(',', $v->label);
										@endphp
										@foreach($label as $value)
											<a href="#">{{$value}}</a>
										@endforeach
										<!--<a href="#">美髮</a>
										<a href="#">蓬蓬粉</a>
										<a href="#">ponpon粉撲</a>-->
									</div>

									<div class="entry-meta">
										<ul>
											<li><i class="icon-calendar3"></i> 10th Feb 2021</li>
											<li><a href="#"><i class="icon-user"></i>{{$v->author}}</a></li>
										</ul>
									</div>
									<div class="entry-content">
										<p>{!!$v->outline!!}</p>
										<div class="align_r">
											<a href="master_info.html" class="more-link ">Ｍore ⇒</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach

					</div>

					<div class="clear"></div>


							<div class="center">
								<ul class="pagination pagination-transparent pagination-circle">
									<li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item"><a class="page-link" href="#">5</a></li>
									<li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
								</ul>
							</div>

				</div>
			</div>
		</section>

		
		@include('include_php.footer_inc');

	</div>

	
	<div id="gotoTop"><img src="images/gotop.png" alt=""></div>

	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<script src="js/functions.js"></script>


</body>
</html>