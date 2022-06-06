<? 
	require_once 'include_php/css_inc.php';
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
							<li class="breadcrumb-item active" aria-current="page">儲值金</li>
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
											<li class="page-menu-item current"><a href="order_addvalue.php" title="儲值金">儲值金</a></li>
											<li class="page-menu-item"><a href="member_coupon.php" title="專屬優惠券">專屬優惠券<b class="t_danger">・</b></a></li>
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

					<div class="row gutter-40 col-mb-40">
						
						<div class="postcontent col-lg-9 order-lg-last">

							<div class="refundbox">
								<div class="tabs tabs-alt tabs-justify clearfix" id="tab-10">

									<ul class="tab-nav clearfix">
										<li><a href="#addvalue">我要儲值</a></li>
										<li><a href="#addvaluerecord">儲值紀錄</a></li>
										<li><a href="#requestrefund">申請退款</a></li>
									</ul>
	
									<div class="tab-container">
	
										<?
											$sql="select * from member_account where identity='$userid'";
											$result = $mysql->query($sql);
											$row = $result->fetch();
										?>
										<div class="tab-content clearfix" id="addvalue">
											<div class="reimbursebox">
												<h4>推薦使用儲值功能，結帳方便最快速！</h4>
												<div class="row post-navigation addvaluebox">
													<div class="addvaitem_l col-md-3">帳戶餘額</div>
													<div class="addvaitem_c col-md-7">NT. <?=$row['balance']?></div>
													<div class="addvaitem_r col-md-2">
													</div>
													<hr class="valueline"/>
													<small>*您可透過 銀行匯款、ATM轉帳、Web-ATM轉帳 等方式匯款儲值，並可於 <a href="#addvaluerecord" target="_blank" class="prbtn">儲值紀錄</a> 查看儲值金的使用
													</small>
												</div>
												<div class="row post-navigation addvaluebox">
													<div class="col-xs-12 col-md-6">
														<div class="reimbursebox">
															
															<h4>專屬虛擬帳號 / 匯款資訊</h4>
															<div class="addvacon">
																<div class="center">
																	<img src="images/valueicon_1.jpg" alt="">
																</div>
																<p>銀行：玉山銀行（南京東路分行）<br>
																	銀行代碼：808<br>
																	戶名：直直買有限公司<br>
																	您的專屬帳號：<?=$userid?>
																</p>
															</div>
														</div>
													</div>
													<!--<div class="col-xs-12 col-md-6">
														<div class="reimbursebox">
															
															<h4>Web-ATM轉帳儲值</h4>
															<div class="addvacon">
																<div class="center">
																	<img src="images/valueicon_2.jpg" alt="">
																</div>
																<small class="t_gray">須具備晶片讀卡機，並連上網路</small>
																<div class="valuebtn">
																	<div class="valuebtn_item">
																		<p class="mb-3">使用 Web-ATM 匯款</p>
																		<input type="text" id="template-contactform-webatm" name="template-contactform-webatm" value="" class="sm-form-control required" placeholder="請填入儲值金額">
																	</div>
																	<div class="valuebtn_item mt-3 mt-md-0">
																		<a href="#" class="button button-3d m-0">確認</a>
																	</div>
																</div>
															</div>
														</div>
													</div>-->
												</div>
											</div>

											<div class="reimcon">
												<p>一般約在數分鐘左右款項就會入帳，依照匯款銀行處理時間而定，最晚約在30分鐘以內。沒有假日限制。<br/>
													匯款完成儲值，幾分鐘後重新進入會員帳戶，就會顯示於儲值金餘額中。<br/>
													會員專屬帳號只屬於您個人使用，每個會員都是不同的專屬帳號。
												</p>
												<p class="t_danger">請注意！<br>
													・ 郵局週末跨行匯款需等待營業日才能入帳。<br>
													・ 本站儲值不適用於銀行臨櫃匯款、無卡存款。</p>
												<p>若您匯款上有任何疑問，請傳訊息給線上客服或是mail cs@didipick.com 留下電話跟問題，我們會有專人為您處理。</p>
											</div>
										</div>

										<div class="tab-content clearfix" id="addvaluerecord">
											<div class="postcontent">
												<div class="tablescoll mb-4">
													<table class="table center avborder">
														<thead>
														<tr>
															<th>時間</th>
															<th>存入金額</th>
															<th>支出金額</th>
															<th>說明</th>
															<th>帳戶餘額</th>
														</tr>
														</thead>
														<tbody>
														<?
															$sql = "select * from member_account_record where type='2' and identity='$userid' order by insert_time desc";
															$result = $mysql->query($sql);
															$size = $result->size();
															for($i=1;$i<=$size;$i++){
																$row = $result->fetch();
														?>
														<tr>
															<td>
															<?
																$time = explode(' ', $row['insert_time']);
																echo $time[0].'<br>';
																echo $time[1];
															?>
															</td>
															<td>NT.<?=$row['cash']?></td>
															<td>——</td>
															<td>ATM轉帳儲值</td>
															<td>NT.<?=$row['balance']?></td>
														</tr>
														<?}?>
														<!--<tr>
															<td>2021/05/05<br>15:00</td>
															<td>NT.1,500</td>
															<td>——</td>
															<td>ATM轉帳儲值</td>
															<td>NT.5,000</td>
														</tr>
														<tr>
															<td>2021/05/05<br>15:00</td>
															<td>NT.1,500</td>
															<td>——</td>
															<td>ATM轉帳儲值</td>
															<td>NT.5,000</td>
														</tr>
														<tr>
															<td>2021/05/05<br>15:00</td>
															<td>NT.1,500</td>
															<td>——</td>
															<td>ATM轉帳儲值</td>
															<td>NT.5,000</td>
														</tr>
														<tr>
															<td>2021/05/05<br>15:00</td>
															<td>NT.1,500</td>
															<td>——</td>
															<td>ATM轉帳儲值</td>
															<td>NT.5,000</td>
														</tr>-->
														</tbody>
													</table>
												</div>
										
											</div>
											<div class="reimcon">
												<p>一般約在數分鐘左右款項就會入帳，依照匯款銀行處理時間而定，最晚約在30分鐘以內。沒有假日限制。<br>
													匯款完成儲值，幾分鐘後重新進入會員帳戶，就會顯示於儲值金餘額中。<br>
													會員專屬帳號只屬於您個人使用，每個會員都是不同的專屬帳號。
												</p>
												<p class="t_danger">請注意！<br>
													・ 郵局週末跨行匯款需等待營業日才能入帳。<br>
													・ 本站儲值不適用於銀行臨櫃匯款、無卡存款。</p>
												<p>若您匯款上有任何疑問，請傳訊息給線上客服或是mail cs@didipick.com 留下電話跟問題，我們會有專人為您處理。</p>
											</div>
										</div>

										<div class="tab-content clearfix" id="requestrefund">
											<div class="memconbox">
												<div class="choutbox">
													<div class="chform">
														<form class="row mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post" novalidate="novalidate">
															<div class="col-md-6 form-group">
																<label for="template-contactform-bank">銀行代碼</label>
																<input type="text" id="template-contactform-bank" name="template-contactform-bank" value="" class="sm-form-control">
															</div>
															<div class="col-md-6 form-group">
																<label for="template-contactform-bank">分行名稱</label>
																<input type="text" id="template-contactform-bank" name="template-contactform-bank" value="" class="sm-form-control">
															</div>

															<div class="col-12 form-group">
																<label for="template-contactform-bankname">戶名（僅限會員本人帳戶）</label>
																<input type="text" id="template-contactform-bankname" name="template-contactform-bankname" value="" class="sm-form-control required" placeholder="">
																<small class="t_danger">*僅限會員本人帳戶</small>
															</div>

															<div class="col-12 form-group">
																<label for="template-contactform-bankaccount">銀行帳號</label>
																<input type="text" id="template-contactform-bankaccount" name="template-contactform-bankaccount" value="" class="sm-form-control required" placeholder="">
															</div>

															<div class="col-12 form-group">
																<label for="template-contactform-bankrefund">退款金額</label>
																<input type="text" id="template-contactform-bankrefund" name="template-contactform-bankrefund" value="" class="sm-form-control required" placeholder="">
															</div>
				
															
				
															
															<div class="clear"></div>
				
															<div class="row post-navigation valuebtn">
																<div class="col-12 col-md-auto text-center">
																	<a href="#" class="button button-rounded m-0">申請退款</a>
																</div>
															</div>
														
							
							
														</form>
													</div>
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


</body>
</html>