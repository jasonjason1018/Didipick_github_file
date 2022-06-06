<?
function randString($len = 6)
 {
    $chars = str_repeat('0123456789', 3);
    // 位數過長重複字串一定次數
    $chars = str_shuffle($chars);
    $str = substr($chars, 0, $len);
    return $str;
}
$auth = randString();
require_once 'Admin/include/Session.php';
$session = new Session;
$session->Session();
if($session->get('login-status') == 'signing-in'){
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>

	<title>註冊會員｜直直買 didipick</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
	<? require_once 'include_php/css_include.php';?>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PKM45FH');</script>
	<!-- End Google Tag Manager -->
</head>

<body class="stretched">

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PKM45FH"
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
									<form id="authform" name="login-form" class="mb-0" action="signup2.php" method="post">

										<h3>成為新會員</h3>

										<div class="row">
											<div class="col-12 form-group">
												<label for="login-form-phone">電話號碼:</label>
												<input type="text" id="phone" name="phone" value="" class="form-control" placeholder="輸入電話號碼"/>
											</div>
											<div class="col-12 form-group loginbtn center"  id="send">
												<input type="button"  href="#" id="btn" class="button button-border button-rounded button-green m-0" value="發送驗證碼">
											</div>
											<div class="col-12 form-group">
												<label for="login-form-phone">簡訊驗證碼:</label>
												<input type="text" id="userauth" name="userauth" value="" class="form-control" placeholder="輸入簡訊驗證碼"/>
											</div>
											<input type="hidden" name="mob" id="mob" value="">
											<!--<div class="col-12 form-group">
												<label for="login-form-password">密碼:</label>
												<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control" placeholder="6-20 位字元，不含特殊符號"/>
											</div>

											<div class="col-12 form-group">
												<label for="login-form-password">密碼確認:</label>
												<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control" placeholder="再次確認密碼"/>
											</div>

											<div class="col-12 form-group getnews">
												<label class="control control--checkbox mb-0">同意 <a href="about.php" class="prbtn">didipick會員服務條款</a>，並同意將會員資料提供給公司做為註冊及認證使用。
													<input type="checkbox">
													<div class="control__indicator"></div>
												</label>
											</div>-->

											<div class="col-12 form-group loginbtn center">
												<a href="#" id="nextformbtn" class="button button-rounded m-0">下一步</a>
											</div>

										</div>

									</form>
									<div class="line line-sm"></div>
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

</body>

<script type="text/javascript">
			$("#phone").blur(function(){
				mobile = $("#phone").val();
				var cellphone = /^09[0-9]{8}$/;
				if(mobile != ''){
					if(cellphone.test(mobile)==false){
						alert('請填寫正確的手機號碼');
						$("#phone").val('');
					}else{
						$("#mob").val(mobile);
					}
				}
			});
			
			$("#btn").click(function(){
				mobile = $("#phone").val();
				if(mobile == ''){
					alert('請填入手機號碼');
				}else{
					$("#btn").attr('disabled', true);
					//button.disabled = 'disabled';
						var time = 120;
						var timer = setInterval(function() {
							if (time == -1) {
								clearInterval(timer)
								$("#btn").attr('disabled', false);
								$("#btn").val('發送驗證碼');
								//button.disabled = '';
								//button.value = '發送驗證碼';
							} else {
								$("#btn").val(time + '秒後重新發送');
								//button.value = time + '秒後重新發送';
								time--;
							}
						}, 1000)
						$.ajax({
							type:"POST",
							url:"SendSms.php",
							data:{mobile:mobile},
							success: function(resp){
								alert(resp);
							}
						});
				}
			});

			$("#nextformbtn").click(function(){
					mob = $("#phone").val();
					auth = $("#userauth").val();
						$.ajax({
							type:"POST",
				            url:"CheckSms.php",
				            data: {auth:auth, mob:mob},
				            //dataType: 'json',
				            success: function(resp){
				            	if(resp == 'ok'){
				            		$("#authform").submit();
				            	}else if(resp == 'timeout'){
				            		alert('驗證碼已經過期');
				            	}else{
				            		alert(resp);
				            	}
				            },
				            error:function(err){
				                console.log(err)
				            },
						});
			});
		</script>
</html>