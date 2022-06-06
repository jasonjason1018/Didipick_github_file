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
							<li class="breadcrumb-item"><a href="index.html">首頁</a></li>
							<li class="breadcrumb-item active" aria-current="page">最新消息</li>
						</ol>
					</div>

					<div id="page-menu" class="no-sticky mb-4 pageleftmenubox MobileOnly">
						<div id="page-menu-wrap">
							<div class="container">
								<div class="page-menu-row">

									<div class="page-menu-title ">最新消息</div>

									<nav class="page-menu-nav">
										<ul class="page-menu-container">
											<li class="page-menu-item"><a href="#"><div>訊息公告<b class="t_danger">・</b></div></a></li>
											<!-- <li class="page-menu-item"><a href="#"><div>主題活動<b class="t_danger">・</b></div></a></li> -->
											
										</ul>
									</nav>

									<div id="page-menu-trigger" class="leftmenu"><i class="icon-line-menu"></i></div>

								</div>
							</div>
						</div>
					</div>


					<div class="row gutter-40 col-mb-40">
						
						<div class="postcontent col-lg-9 order-lg-last">

							<div class="noticeconbox">
								<?
								$sql = "select * from didipick_announcement where status='1'";
								$result = $mysql->query($sql);
								$size = $result->size();
								for($i=1;$i<=$size;$i++){
									$row = $result->fetch();
								?>
								<div class="toggle toggle-bg-w">
									<div class="toggle-header">
										<div class="toggle-title">
											<div class="togglesmall">公告</div><h3><?=$row['title']?></h3>
											<?
											$date = explode(' ', $row['insert_time']);
											?>
											<small class="toggle_date"><?=$date[0]?></small>
										</div>

										<div class="toggle-icon">
											<i class="toggle-closed icon-line-chevron-down"></i>
											<i class="toggle-open icon-line-chevron-up"></i>
										</div>

										
									</div>

									<div class="toggle-content" style="display: none;">
										<p><?=$row['content']?></p>
									</div>
								</div>
								<?}?>

								<!--<div class="toggle toggle-bg-2">
									<div class="toggle-header">

										<div class="toggle-title">
											<div class="togglesmall">公告</div><h3>EMS運費打折優惠變更公告</h3>
											<small class="toggle_date">2020.12.31</small>
										</div>

										<div class="toggle-icon">
											<i class="toggle-closed icon-line-chevron-down"></i>
											<i class="toggle-open icon-line-chevron-up"></i>
										</div>

										
									</div>

									<div class="toggle-content" style="display: none;">
										<p>轉送JAPAN將對EMS運費的折扣率進行變更。新折扣率將從日本時間2021年11月8日(一)正午之後開始適用。</p>
									</div>
								</div>-->

								
								
							</div>
							

							<div class="clear"></div>

						</div>
						
						
						<div class="sidebar col-lg-3 PCOnly">
							<div class="sidebar-widgets-wrap">

								<div class="widget widget_links product_lbox">

									<h4>最新消息</h4>
									<ul>
										<!--<li><a href="notice.php" title="訂單通知" class="">訂單通知</a></li>-->
										<li><a href="news.php" title="訊息公告">訊息公告<!--<b class="t_danger">・</b>--></a></li>
										<!-- <li><a href="#" title="主題活動">主題活動<b class="t_danger">・</b></a></li> -->
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