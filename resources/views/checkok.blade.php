@include('include_php.css_inc')

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
							<li class="breadcrumb-item"><a href="index.php">首頁</a></li>
							<li class="breadcrumb-item active" aria-current="page">購物車</li>
						</ol>
					</div>

					<div>
						<ul class="process-steps process-2 row justify-content-center mb-4">
							<li class="col-sm-6 col-lg-3 active">
								<a href="#" class="i-circled i-alt mx-auto bg-color">1</a>
								<h5>購物車</h5>
							</li>
							<li class="col-sm-6 col-lg-3 active">
								<a href="#" class="i-circled i-alt mx-auto bg-color">2</a>
								<h5>填寫資料</h5>
							</li><li class="col-sm-6 col-lg-3 active">
								<a href="#" class="i-circled i-alt mx-auto bg-color">3</a>
								<h5>訂購完成</h5>
							</li>
						</ul>
					</div>
					
					<div class="checkokbox">
						<h3 class="t_didi_t mb-2"><img src="/images/logomark.svg" alt="" class="logomark"> 感謝您的訂購，訂單已成立！</h3>
						<p class="t_didi_t">{{$ono}}</p>

						<p>訂單確認中，系統已將您訂購的清單明細寄發至您的信箱中，我們將儘速為您處理。稍後可在<a href="order_info.php" class="t_didi_t">訂單查詢</a>中查看購買細節。</p>
						
						<div class="checkokbtn center">
							<a href="product.php" class="button button-rounded">繼續購物 ⇒</a><br>
							<a href="order_addvalue.php#processing" class="button button-border button-rounded button-green">會員儲值 ⇒</a>
						</div>

						<div class="mt-3">
							<small>根據海關的最新政策，持有臺灣身分證的收貨人將需要執行實名身分驗證，請使用海關管理機構提供的實名認證官方App進行。<a href="https://web.customs.gov.tw/multiplehtml/3150" class="t_didi_t" target="_blank">進一步了解。</a></small>
						</div>
					</div>
		
				</div>
	
				<div class="clear"></div>

				
			</div>
		</section>

		
		@include('include_php.footer_inc')

	</div>

	
	<div id="gotoTop"><img src="/images/gotop.png" alt=""></div>

	<script src="/js/jquery.js"></script>
	<script src="/js/plugins.min.js"></script>

	<script src="/js/functions.js"></script>


</body>
</html>