<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>

	<title>紅利點數｜直直買 didipick</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
	<? require_once 'include_php/css_include.php';?>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PTLHLW4');</script>
	<!-- End Google Tag Manager -->

</head>

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

<?require_once "include_php/header_inc.php";?>
	
		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">首頁</a></li>
							<li class="breadcrumb-item active" aria-current="page">紅利點數</li>
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
											<li class="page-menu-item current"><a href="order_bonus.php" title="紅利點數">紅利點數</a></li>
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
						
						<div class="col-lg-9 order-lg-last">

							<div class="membonusbox">

								<p class="mb-3">可用紅利</p>
								<div class="pointbox">
									<div class="point_item bg_main bgpadd"><p class="mb-0 title_w">總共累積紅利</p></div>
									<div class="point_item">
										<b class="t_didi_t">100 <small>點</small></b>
										<p class="mb-0">(等同於NT$100)</p>
									</div>
									<div class="point_item bg_gray bgpadd"><p class="mb-0">已使用紅利</p></div>
									<div class="point_item">
										<b class="t_gray">60 <small>點</small></b>
										<p class="mb-0">(等同於NT$100)</p>
									</div>
								</div>

								<p class="mb-3">使用紅利明細</p>
								<div class="refundbox bouns_table">
									<div class="tabs tabs-alt tabs-justify clearfix" id="tab-10">

										<ul class="tab-nav clearfix">
											<li><a href="#getpoints">獲得點數</a></li>
											<li><a href="#usepoints">使用點數</a></li>
										</ul>
				
										<div class="tab-container">
											<div class="tab-content clearfix" id="getpoints">
												<div class="tablescoll mb-4">
													<table class="table center">
														<thead>
														<tr>
															<th>獲得點數</th>
															<th>紅利活動</th>
															<th>剩餘點數</th>
															<th>獲得時間</th>
															<th>使用期限</th>
														</tr>
														</thead>
														<tbody>
														<tr>
															<td>＋10點</td>
															<td>首次入會員好禮</td>
															<td>50點</td>
															<td>2021/06/01<br>18:00</td>
															<td>無期限</td>
														</tr>
													
														</tbody>
													</table>
												</div>
												
											</div>
											<div class="tab-content clearfix" id="usepoints">
											
												<div class="tablescoll mb-4">
													<table class="table center">
														<thead>
														<tr>
															<th>獲得點數</th>
															<th>紅利活動</th>
															<th>剩餘點數</th>
															<th>獲得時間</th>
															<th>使用期限</th>
														</tr>
														</thead>
														<tbody>
														<tr>
															<td>-50點</td>
															<td>購買保健藥品<br><small>KIP PYROL-Hi 居家萬用膏 15g 數量：5</small></td>
															<td>10點</td>
															<td>2021/06/01<br>18:00</td>
															<td>2021/12/31</td>
														</tr>
													
														</tbody>
													</table>
											
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							

							<div class="clear"></div>

						</div>
						
						
						<div class="sidebar col-lg-3 PCOnly">
							<div class="sidebar-widgets-wrap">

								<div class="widget widget_links product_lbox">

									<h4>會員中心</h4>
									<ul>
										<li><a href="member.php" title="會員總覽">會員總覽</a></li>
										<li><a href="order_info.php" title="訂單查詢">訂單查詢</a></li>
										<li><a href="order_addvalue.php" title="儲值金">儲值金</a></li>
										<li><a href="member_coupon.php" title="專屬優惠券">專屬優惠券<b class="t_danger">・</b></a></li>
										<li><a href="order_bonus.php" title="紅利點數" class="active">紅利點數</a></li>
										<li><a href="member_edit.php" title="會員資料">會員資料</a></li>
										<li><a href="#" title="會員制度/等級">會員制度/等級</a></li>
										<li><a href="member_password.php" title="更改密碼">更改密碼</a></li>
										<li><a href="member_address.php" title="收件地址管理">收件地址管理</a></li>
										<li><a href="order_service.php" title="客服中心">客服中心</a></li>
									</ul>

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


</body>
</html>