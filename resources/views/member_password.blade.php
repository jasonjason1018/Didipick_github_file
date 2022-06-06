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
							<li class="breadcrumb-item active" aria-current="page">更改密碼</li>
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
											<li class="page-menu-item"><a href="member_edit.php" title="會員資料">會員資料</a></li>
											<li class="page-menu-item"><a href="#" title="會員制度/等級">會員制度/等級</a></li>
											<li class="page-menu-item current"><a href="member_password.php" title="更改密碼">更改密碼</a></li>
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
										<form class="row mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post" novalidate="novalidate">

											<div class="col-12 form-group">
												<label for="template-contactform-oldpassword">目前密碼</label>
												<input type="password" id="oldpassword" name="template-contactform-oldpassword" value="" class="sm-form-control required" placeholder="舊密碼">
											</div>

											<div class="col-12 form-group">
												<label for="template-contactform-newpassword">新密碼</label>
												<input type="password" id="password" name="template-contactform-newpassword" value="" class="sm-form-control required" placeholder="請輸入新密碼" onblur="checkpassword('1')">
												<small class="t_danger">*請輸入6個字元以上的英文字母及數字，不可使用特殊符號</small>
											</div>

											<div class="col-12 form-group">
												<label for="template-contactform-checkpassword">新密碼確認</label>
												<input type="password" id="password2" name="template-contactform-checkpassword" value="" class="sm-form-control required" placeholder="請再次輸入新密碼" onblur="checkpassword('2')">
											</div>


											<div class="row post-navigation membtnbox">
												<div class="col-12 col-md-auto text-center xs-mb-5">
													<a href="#" class="button button-border button-rounded button-green m-0">重新填寫</a>
												</div>
						
												<div class="col-12 col-md-auto text-center">
													<a class="button button-rounded m-0" id="sendpwd">確定修改</a>
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
		$("#oldpassword").blur(function(){
			oldpwd = $("#oldpassword").val();
			if(oldpwd != ''){
				$.ajax({
					type:"GET",
					url:"user_data_change.php",
					data:{pwd:oldpwd, type:"checkoldpwd"},
					success: function(resp){
						if(resp=="密碼錯誤"){
							$("#pwderr").text(resp);
							$("#oldpassword").val("");
						}else{
							$("#pwderr").text(resp);
						}
					}
				});
			}
		});

		function checkpassword(type){
			if(type == 1){
				var pwd = document.getElementById('password').value;
				var check = /^(?=.*[a-z])(?=.*\d)[a-zA-Z\d]{6,20}$/;
				var check2 = /[^@$!%*?&\s]$/;
				if(check.test(pwd)){
						//alert('ok');
						return true;
				}else{
					if(check2.test(pwd)){
						if(pwd!=""){
							alert('請輸入英文+數字6~20碼的密碼');
							$("#password").val("");
						}
					}else{
						if(pwd!=""){
							alert('密碼不能包含特殊符號');
							$("#password").val("");
						}
					}
				}
			}else if(type == 2){
				var pwd = document.getElementById('password').value;
				var pwd2 = document.getElementById('password2').value;
				if(pwd!=''){
					if(pwd == pwd2){
						//alert('ok');
						return true;
					}else{
						if(pwd2!=""){
							alert('密碼不一致');
							document.getElementById('password2').value="";
						}
					}
				}else{
					if(pwd2!=""){
						alert('請先填入新密碼');
						document.getElementById('password2').value="";
					}
				}
			}
		}

		$("#sendpwd").click(function(){
			o_pwd = $("#oldpassword").val();
			pwd = $("#password").val();
			pwd2 = $("#password2").val();
			if(o_pwd == ""){
				alert("請輸入舊密碼");
			}else if(pwd == ""){
				alert("請輸入新密碼");
			}else if(pwd2 == ""){
				alert("請輸入第二次新密碼");
			}else{
				alert("密碼已更換");
				window.location="user_data_change.php?type=sendnewpwd&pwd="+pwd2;
			}
		});
		$("#password").blur(function(){
			var pwd = $('#password').val();
			var check = /^(?=.*[a-z])(?=.*\d)[a-zA-Z\d]{6,20}$/;
			var check2 = /[^@$!%*?&\s]$/;
			if(check.test(pwd)){
					//alert('ok');
					return true;
			}else{
				if(check2.test(pwd)){
					if(pwd!=""){
						alert('請輸入英文+數字6~20碼的密碼');
						$("#password").val("");
					}
				}else{
					if(pwd!=""){
						alert('密碼不能包含特殊符號');
						$("#password").val("");
					}
				}
			}
		});
	</script>

</body>
</html>