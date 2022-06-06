<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>

	<title>退款申請｜直直買 didipick</title>
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
							<li class="breadcrumb-item active" aria-current="page">我的訂單</li>
						</ol>
					</div>

					<div class="row gutter-40 col-mb-80">
						
						<div class="postcontent col-lg-9 order-lg-last">

							<div class="refundbox">
								<div class="tabs tabs-alt tabs-justify clearfix" id="tab-10">

									<ul class="tab-nav clearfix">
										<li><a href="#reimburse">我要退款</a></li>
										<li><a href="#refundrecord">退款紀錄</a></li>
									</ul>
	
									<div class="tab-container">
	
										<div class="tab-content clearfix" id="reimburse">
											<div class="reimbursebox">
												<h4>退款前請先聯繫<b>線上客服</b>，並拍下商品毀損證明，確認ok才予以退款哦！</h4>
												<div class="chform">
													<form class="row mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post" novalidate="novalidate">
			
														<div class="col-12 form-group">
															<label for="template-contactform-reimburse">退款商品訂單編號</label>
															<input type="text" id="template-contactform-reimburse" name="template-contactform-reimburse" value="" class="sm-form-control required">
															<small>*可於訂單查詢複製您的商品訂單編號</small>
														</div>
						
														<div class="col-12 form-group">
															<label for="template-contactform-money">應退款金額</label>
															<input type="number" id="template-contactform-money" name="template-contactform-money" value="" class="required email sm-form-control" placeholder="NT.">
														</div>
						
														<div class="col-12 form-group">
															<label for="shipping-form-message">退款原因</label>
															<textarea class="sm-form-control" id="shipping-form-message" name="shipping-form-message" rows="6" cols="30" placeholder="有什麼訊息想告訴我們嗎..."></textarea>
															<small>*請如實說明</small>
														</div>

														<div class="row post-navigation membtnbox">
															<div class="col-12 col-md-auto text-center">
																<a href="#" class="button button-border button-rounded button-green m-0">重新填寫</a>
															</div>
									
															<div class="col-12 col-md-auto text-center">
																<a href="#" class="button button-rounded m-0">確定申請退款</a>
															</div>
														</div>
						
														
													</form>
												</div>
											</div>

											<div class="reimcon">
												<p>didipick 服務條款中關於「七天鑑賞期」的說明如下： 台灣境內交易，根據台灣消保法第十九條規範，享有收到商品後
													隔日起算七天內無條件退換貨的服務，且商品退回運費由本站承擔。請保持商品包裝完整寄回，經didipick確認無誤後，
													即可申請退款。 七天鑑賞期的規範是指「買家收到商品隔日起算內七天需要向本站提出退款需求」，並非買賣雙方需在
													七天內完成退貨流程。因此，聯繫直直買客服並送出退款申請後，請先耐心等候我們的回覆，以便雙方協調後續事宜。 
													如果你在交易的過程中認為權益受損，或超過三個工作天（不含週末假日）仍未收到我們的回覆，歡迎<a href="#" target="_blank" class="prbtn">我們聯繫。</a>
												</p>
												<p class="t_danger">請注意！<br>
													直直買收到退款申請信且確認符合退款條件後，會再通知會員將商品寄回，待我們回收商品後就會進行退款<br>
													・ 請在商品出貨後10日內提出申請，超過申請期限將不予受理 (依e-mail信件顯示時間為準)<br>
													・ 未申請購物保障方案的訂單皆不受理。</p>
												<p>若您退款上有任何疑問，請傳訊息給線上客服或是mail cs@didipick.com 留下電話跟問題，我們會有專人為您處理。</p>
											</div>

										</div>
										<div class="tab-content clearfix" id="refundrecord">
											<div class="postcontent">

												<table class="table center">
													<thead>
													<tr>
														<th>時間</th>
														<th>訂單編號</th>
														<th>退款金額與方式</th>
														<th>退款商品</th>
														<th>退款原因</th>
														<th>退款狀態</th>
													</tr>
													</thead>
													<tbody>
													<tr>
														<td>2021/05/05<br>15:00</td>
														<td><a href="#">12345678</a></td>
														<td>$1,500<br><span>ATM轉帳</span></td>
														<td>大馬士革玫瑰髮蠟</td>
														<td>寄送過程中毀損，商品瓶蓋破裂</td>
														<td><a href="#">處理中</a></td>
													</tr>
													<tr>
														<td>2021/05/05<br>15:00</td>
														<td><a href="#">12345678</a></td>
														<td>$1,500<br><span>信用卡刷退</span></td>
														<td>大馬士革玫瑰髮蠟</td>
														<td>寄送過程中毀損，商品瓶蓋破裂</td>
														<td><a href="#">處理中</a></td>
													</tr>
													<tr>
														<td>2021/05/05<br>15:00</td>
														<td>12345678</td>
														<td>$1,500<br><span>ATM轉帳</span></td>
														<td>大馬士革玫瑰髮蠟</td>
														<td>寄送過程中毀損，商品瓶蓋破裂</td>
														<td>已退款</td>
													</tr>
													<tr>
														<td>2021/05/05<br>15:00</td>
														<td>12345678</td>
														<td>$1,500<br><span>ATM轉帳</span></td>
														<td>大馬士革玫瑰髮蠟</td>
														<td>寄送過程中毀損，商品瓶蓋破裂</td>
														<td>已退款</td>
													</tr>
													<tr>
														<td>2021/05/05<br>15:00</td>
														<td>12345678</td>
														<td>$1,500<br><span>ATM轉帳</span></td>
														<td>大馬士革玫瑰髮蠟</td>
														<td>寄送過程中毀損，商品瓶蓋破裂</td>
														<td>已退款</td>
													</tr>
													</tbody>
												</table>
										
											</div>
										</div>
										
									</div>
	
								</div>
							</div>
							

							<div class="clear"></div>

						</div>
						
						
						<div class="sidebar col-lg-3">
							<div class="sidebar-widgets-wrap">

								<div class="widget widget_links product_lbox">

									<h4>我的訂單</h4>
									<ul>
										<li><a href="member.php" title="會員總覽">會員總覽</a></li>
										<li><a href="order_info.php" title="訂單查詢" class="active">訂單查詢</a></li>
										<li><a href="order_addvalue.php" title="儲值金">儲值金</a></li>
										<li><a href="member_coupon.php" title="專屬優惠券">專屬優惠券<b class="t_danger">・</b></a></li>
										<li><a href="order_bonus.php" title="紅利點數">紅利點數</a></li>
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