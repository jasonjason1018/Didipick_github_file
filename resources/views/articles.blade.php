@include('include_php.css_inc')

	
	<div id="wrapper" class="clearfix">

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
							<li class="breadcrumb-item"><a href="index.php">首頁</a></li>
							<li class="breadcrumb-item active" aria-current="page">常見問題</li>
						</ol>
					</div>

					<div class="no-sticky mb-4 pageleftmenubox MobileOnly"><!--id="page-menu"-->
						<div id="page-menu-wrap">
							<div class="container">
								<div class="page-menu-row">

									<div class="page-menu-title ">常見問題</div>

									<nav class="page-menu-nav">
										<ul class="page-menu-container">
											<li class="page-menu-item current"><a href="qa.php"><div>常見問題</div></a></li>
											<li class="page-menu-item"><a href="shoppingprocess.php"><div>購物流程</div></a></li>
											<li class="page-menu-item"><a href="about.php"><div>關於直直買</div></a></li>
										</ul>
									</nav>

									<div id="page-menu-trigger" class="leftmenu"><i class="icon-line-menu"></i></div>

								</div>
							</div>
						</div>
					</div>
					
					
					<div class="row gutter-40 col-mb-40">
						<div class="postcontent col-lg-9 order-lg-last">
							<div class="qabox">
								<div class="toggle toggle-bg">
									<div class="faq-header">
										<div class="toggle-title">{{$qa->title}}</div>
									</div>
									
									<div class="faq-content toggle-contents">
										<hr/>
										<!--class="faq-content toggle-content"-->
										{!!$qa->content!!}
									</div>
									
									<div class="faq-else">
										<div class="faq-title">其他{{$qa_type}}</div>
										<div>
											@foreach($other_qa as $oq)
											<a class="faq-item" href="/didipick_articles/{{$oq->id}}">{{$oq->title}}</a>
											@endforeach
										</div>
									</div>
								</div>

								

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

	<script src="/js/jquery.js"></script>
	<script src="/js/plugins.min.js"></script>
	<script src="/js/functions.js"></script>


</body>
</html>