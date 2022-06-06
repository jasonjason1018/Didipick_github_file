<?
require_once "include_php/css_inc.php";
require_once "require_inc.php";
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
							<li class="breadcrumb-item active" aria-current="page">專屬優惠卷</li>
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
											<li class="page-menu-item current"><a href="member_coupon.php" title="專屬優惠券">專屬優惠券<b class="t_danger">・</b></a></li>
											<li class="page-menu-item"><a href="order_bonus.php" title="紅利點數">紅利點數</a></li>
											<li class="page-menu-item"><a href="member_edit.php" title="會員資料">會員資料</a></li>
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

					<div class="row justify-content-between align-items-center post-navigation mt-4 ">
						<div class="col-12 col-md-auto text-center desiretitle">
						</div>

						<div class="col-12 col-md-auto text-center">
							
						</div>
					</div>

					<div class="row gutter-40 col-mb-40">
						
						<div class="postcontent col-lg-9 order-lg-last">

							<div class=" couponbox">
								<?
									$sql = "select * from member where identity='$userid'";
									$result = $mysql->query($sql);
									$row = $result->fetch();
									$user_id = $row['id'];
									$vip = $row['vip'];
									if($vip == 1){
										$sql = "select * from didipick_coupon where use_limit='1' or use_limit='3' and user_id='$user_id' or use_limit='2'";
									}else{
										$sql = "select * from didipick_coupon where use_limit='1' or use_limit='3' and user_id='$user_id'";
									}
									$result = $mysql->query($sql);
									$size = $result->size();
									for($i=1;$i<=$size;$i++){
										$row = $result->fetch();
										$btime = explode('-', $row['begin_time']);
										$btime = implode('/', $btime);
										$etime = explode('-', $row['end_time']);
										$etime = implode('/', $etime);
										$coupon_code = $row['coupon_code'];
										$sql1 = "select * from didipick_coupon_use where member='$userid' and coupon='$coupon_code'";
										$result1 = $mysql->query($sql1);
										$size1 = $result1->size();
										if($size1 == 0){
								?>
								<div class="coupon_item">
									<div class="coupon_l">
										<p>優惠券</p>
										<p class="cprice">NT.<?=$row['price']?></p>
									</div>
									<div class="coupon_c">
										<p>名稱：<?=$row['content']?></p>
										<p>使用方式：結帳時輸入序號即可折抵</p>
										<p>使用期限：<?=$btime?>~<?=$etime?></p>
										<!--<p>適用類別：適用全站所有商品</p>-->
									</div>
									<div class="coupon_r">
										<div>
											<span id="couponcode<?=$i?>"><?=$row['coupon_code']?></span>
											<span><a onclick="copyUrl2('<?=$i?>')" class="button button-border button-rounded button-green">複製</a></span>
										</div>
										<p class="mb-0 t_danger">尚未領取</p>
									</div>
								</div>
								<?}else{?>
								<div class="coupon_item">
									<div class="bgcover"></div>
									<div class="coupon_l">
										<p>優惠券</p>
										<p class="cprice">NT.<?=$row['price']?></p>
									</div>
									<div class="coupon_c">
										<p>名稱：<?=$row['content']?></p>
										<p>使用方式：結帳時輸入序號即可折抵</p>
										<p>使用期限：<?=$btime?>~<?=$etime?></p>
									</div>
									<div class="coupon_r">
										<p class="mb-0 t_blue">已兌換</p>
									</div>
								</div>
								<?}?>
								<?}?>
								
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
	<script src="link to your JS file"></script>
	<script src="js/functions.js"></script>
	<script>
		function copyUrl2(no)
		{
		var Url2=document.getElementById("couponcode"+no);
		window.getSelection().selectAllChildren(Url2);
		document.execCommand("Copy"); // 執行瀏覽器複製命令
		alert("已複製");
		}
	</script>

</body>
</html>