<?
require_once "include_php/css_inc.php";
require_once "require_inc.php";
require_once 'Admin/include/Session.php';
$session = new Session;
$session->Session();
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
						<h1 class="font0">直直買 didipick</h1>
					<div id="logo" class=" mx-lg-auto col-auto flex-column order-lg-2 px-0">
						<a href="index.php" class="standard-logo"><img src="images/logo.png" alt="直直買 didipik"></a>
						<a href="index.php" class="retina-logo"><img src="images/logo.png" alt="直直買 didipik"></a>
					</div>
				</div>
				
				</div>
			</div>
			<div class="header-wrap-clone hide-clone"></div>
		</header>

		</div>

		<section id="content">
			<div class="content-wrap">
				<div class="container">
					<div class="login-register">
						<div class="tab-container">
		
							<div class="tab-content" id="tab-login">
								<div class="card mb-0">
									<div class="card-body" style="padding: 40px;">
										<form id="creditdata" name="creditdata" class="mb-0" action="order_credit_action.php" method="post">
		
											<h3>信用卡刷卡資訊</h3>
		
											<div class="check-responsive">
												
												<?
													$sql = "select * from exchange_rate order by change_date desc";
													$result = $mysql->query($sql);
													$row = $result->fetch();
													$rate = $row['rate'];
													$price = $_POST['total'];
													$ems = $_POST['ems'];
													$couponprice = $_POST['couponprice'];
													$serv = ceil($price*0.0375);
													$paytw = $price+$ems+$serv;
													$payjp = ceil($paytw/$rate);
												?>
												<div class="check-list-item">
													<div>商品小計</div>
													<div><small>NT.</small><span id="price"><?=$price-$couponprice?></span></div>
												</div>
												<div class="c-list-item"></div>
												<div class="check-list-item">
													<div>國際運費</div>
													<div><small>NT.</small><span id="ems"><?=$ems?></span></div>
												</div>
												<div class="c-list-item"></div>
												<div class="check-list-item">
													<div>刷卡手續費</div>
													<div><small>NT.</small><span id="serv"><?=$serv?></span></div>
												</div>
												<div class="c-list-item"></div>
												<div class="check-list-item t_highlight">
													<div>- 使用折價券</div>
													<div><small>NT.</small><span id="couponprice"><?=$couponprice?></span></div>
												</div>
												<div class="c-total-item"></div>
												<div class="check-list-item lead t_didi_t">
													<div><strong>應付金額</strong></div>
													<div><small>NT.</small><strong id="paytw"><?=$paytw?></strong></div>
												</div>
												<div class="check-list-item">
													<small>款項將以日幣支付</small>
													<div><small>¥ </small><strong id="payjp"><?=$payjp?></strong></div>
												<input type="hidden" name="price" value="<?=$price?>">
												<input type="hidden" name="ems" value="<?=$ems?>">
												<input type="hidden" name="serv" value="<?=$serv?>">
												<input type="hidden" name="name" value="<?=$_POST['name']?>">
												<input type="hidden" name="zipcode" value="<?=$_POST['addressnumber']?>">
												<input type="hidden" name="cityarea" value="<?=$_POST['addresscity'].$_POST['addressarea']?>">
												<input type="hidden" name="address" value="<?=$_POST['addressstreet']?>">
												<input type="hidden" name="mob" value="<?=$_POST['phone']?>">
											</div>
											<div style="display:none">
												<script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="pk_live_51JhrwSD6oBux3rOEfSkZPTnAlcrk0PiKgvpI4O7SnLYOiLibSfbm1E8US79vOArb04ktFREdXSV2OacJjmfL4tB100404xRHJO" data-amount="<?=$payjp?>" data-name="didipick" data-description="Widget" data-image="https://stripe.com/img/documentation/checkout/marketplace.png" data-locale="auto" data-currency="jpy">
												</script>
											</div>
											<div class="check-list-btn center">
												<a href="javascript:history.back()" class="button button-border button-rounded button-green">上一步</a>
												<button class="button button-rounded" onclick='testsend()'>填寫信用卡資料</button>
											</div>
										</form>
										
										
										
									</div>
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
		function testend(){
			$("#creditdata").submit();
		}
	</script>

</body>
</html>