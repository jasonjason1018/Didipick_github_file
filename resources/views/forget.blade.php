<?
require_once "include_php/css_inc.php";
?>

	
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

		<header id="header" class="full-header header-size-lg">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row justify-content-lg-between">

					<div id="logo" class=" mx-lg-auto col-auto flex-column order-lg-2 px-0">
						<a href="index.php" class="standard-logo"><img src="images/logo.png" alt="直直買 didipik"></a>
						<a href="index.php" class="retina-logo"><img src="images/logo.png" alt="直直買 didipik"></a>
					</div>
				</div>
				
				</div>
			</div>
			<div class="header-wrap-clone hide-clone"></div>
		</header>

		
		<section id="content">
			<div class="content-wrap">
				<div class="container">

				<div class="login-register">
					<div class="tab-container">

						<div class="tab-content" id="tab-login">
							<div class="card mb-0">
								<div class="card-body" style="padding: 40px;">
									<form id="login-form" name="login-form" class="mb-0" action="#" method="post">

										<h3>忘記密碼</h3>

										<div class="row">
											<div class="col-12 form-group">
												<label for="login-form-Email">電子信箱:</label>
												<input type="text" id="Email" name="login-form-Email" value="" class="form-control" placeholder="請填入註冊使用的電子信箱"/>
											</div>

											<div class="col-12 form-group loginbtn center">
												<a href="#" class="button button-rounded m-0" id="mailbtn">發送確認信</a>
											</div>
											
										</div>



									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>


	</div>

	<div id="gotoTop"><img src="images/gotop.png" alt=""></div>

	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<script src="js/functions.js"></script>
	<script>
		$("#mailbtn").click(function(){
			mail = $("#Email").val();
			var checkmail = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if(mail == ''){
				alert('請輸入您的電子信箱');
			}else{
				if(checkmail.test(mail)==true){
					$.ajax({
						type:"POST",
						url:"mail.php",
						data:{mail:mail},
						success: function(resp){
							if(resp!='該信箱尚未註冊'){
								//alert('信件已發送');
								alert(resp);
							}else{
								alert(resp);
							}
						}
					});
				}else{
					$("#Email").val('');
					alert('電子信箱格式錯誤');
				}
			}
		});
	</script>
</body>
</html>