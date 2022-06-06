<?
	require_once "require_inc.php";
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

		

		<?require_once "include_php/header_inc.php";?>

		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">首頁</a></li>
							<li class="breadcrumb-item active" aria-current="page">會員資料</li>
						</ol>
					</div>

					<div id="page-menu" class="no-sticky mb-4 pageleftmenubox MobileOnly">
						<div id="page-menu-wrap">
							<div class="container">
								<div class="page-menu-row">

									<div class="page-menu-title ">會員中心</div>

									<nav class="page-menu-nav">
										<ul class="page-menu-container">
											<li class="page-menu-item"><a href="member.php" title="會員總覽" class="active">會員總覽</a></li>
											<li class="page-menu-item"><a href="order_info.php" title="訂單查詢">訂單查詢</a></li>
											<li class="page-menu-item"><a href="order_addvalue.php" title="儲值金">儲值金</a></li>
											<li class="page-menu-item"><a href="member_coupon.php" title="專屬優惠券">專屬優惠券<b class="t_danger">・</b></a></li>
											<li class="page-menu-item"><a href="order_bonus.php" title="紅利點數">紅利點數</a></li>
											<li class="page-menu-item current"><a href="member_edit.php" title="會員資料">會員資料</a></li>
											<li class="page-menu-item"><a href="#" title="會員制度/等級">會員制度/等級</a></li>
											<li class="page-menu-item"><a href="member_password.php" title="更改密碼">更改密碼</a></li>
											<li class="page-menu-item"><a href="member_address.php" title="收件地址管理">收件地址管理</a></li>
											<li class="page-menu-item"><a href="order_service.php" title="客服中心">客服中心</a></li>

										</ul>
									</nav>

									<div id="page-menu-trigger" class="leftmenu"><i class="icon-line-more-vertical animated infinite pulse"></i></div>

								</div>
							</div>
						</div>
					</div>


					<div class="row justify-content-between align-items-center post-navigation mt-4">
						<div class="col-12 col-md-auto text-center desiretitle">
						</div>

						<div class="col-12 col-md-auto text-center">
							
						</div>
					</div>

					<div class="row gutter-40 col-mb-40">
						
						<div class="postcontent col-lg-9 order-lg-last">

							<div class="memconbox">
								<div class="choutbox">
									<div class="chform">
										<p class="mb-0 t_didi_t">請正確填寫哦！</p>
										<form class="row mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post" novalidate="novalidate">
											<?
											$sql = "select * from member where identity='$userid' and webarea='2'";
											$result = $mysql->query($sql);
											$row = $result->fetch();
											?>
											<div class="col-12 form-group">
												<label for="template-contactform-name">姓名</label>
												<input type="text" id="name" name="template-contactform-name" value="<?=$row['name']?>" class="sm-form-control required" placeholder="請填寫真實姓名...">
											</div>

											<div class="col-12 form-group">
												<label for="template-contactform-phone">手機</label>
												<input type="text" id="phone" name="template-contactform-phone" value="<?=$row['mobile']?>" class="sm-form-control valid" placeholder="+886" disabled="disabled">
												<small class="t_danger"></small>
											</div>

											<div class="col-12 form-group">
												<label for="template-contactform-email">電子郵件</label>
												<input type="text" id="email" name="template-contactform-email" value="<?=$row['email']?>" class="sm-form-control valid">
											</div>

											<!--<div class="col-12 form-group">
												<label for="template-contactform-number">出生日期</label>
												<input type="date" value="" class="form-control text-left component-datepicker default" placeholder="MM/DD/YYYY">
											</div>

											<div class="col-12 form-group">
												<label for="template-contactform-number">性別</label>
												<div class="cart_item">
													<div class="cart-product-name">
														<label class="control control--radio">男
															<input type="radio" name="radio" checked="checked">
															<div class="control__indicator"></div>
														</label>

													</div>
													<div class="cart-product-name">
														<label class="control control--radio">女
															<input type="radio" name="radio">
															<div class="control__indicator"></div>
														</label>
													</div>		
												</div>
											</div>-->

											<div class="col-12 form-group">
												<label for="template-contactform-number">電子報 <small>(訂閱商品/活動訊息，我們將不定期透過email通知最新商品活動及優惠訊息。)</small></label>
												<div class="cart_item">
													<div class="cart-product-name">
														<label class="control control--radio">訂閱
															<input type="radio" name="radio1" checked="checked">
															<div class="control__indicator"></div>
														</label>

													</div>
													<div class="cart-product-name">
														<label class="control control--radio">不訂閱
															<input type="radio" name="radio1">
															<div class="control__indicator"></div>
														</label>
													</div>		
												</div>
											</div>
											
									

											<div class="row post-navigation membtnbox">
												<div class="col-12 col-md-auto text-center xs-mb-5">
													<a href="#" class="button button-border button-rounded button-green m-0">重新填寫</a>
												</div>
						
												<div class="col-12 col-md-auto text-center">
													<a id="edit_data" class="button button-rounded m-0">確定修改</a>
												</div>
											</div>
			
			
										</form>
									</div>
								</div>
							</div>
							

							<div class="clear"></div>

						</div>
						
						
						<div class="sidebar col-lg-3 PCOnly">
							<div class="sidebar-widgets-wrap">

								<div class="widget widget_links product_lbox">

									<h4>會員中心</h4>
									<?require_once "include_php/member_inc.php";?>

								</div>



							</div>
						</div>
					</div>

					

		
				</div>

				<div class="clear"></div>

				
			</div>
		</section>
		
		<?require_once "include_php/footer_inc.php";?>

	</div>

	
	<div id="gotoTop"><img src="images/gotop.png" alt=""></div>

	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<script src="js/functions.js"></script>
	<script>
		$("#edit_data").click(function(){
			name = $("#name").val();
			email = $("#email").val();
			if(email==''){
				alert("請輸入電子郵件");
			}else if(name == ''){
				alert("請輸入姓名");
			}else{
				window.location="user_data_change.php?type=userdatachange&name="+name+"&email="+email;
			}
		});
		$("#email").blur(function(){
			var email = $('#email').val();
			var checkmail = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if(!checkmail.test(email)){
				if(email!=""){
					alert('email格式錯誤');
					document.getElementById('email').value="";
				}
			}else{
				return true;
			}
		});
	</script>

</body>
</html>