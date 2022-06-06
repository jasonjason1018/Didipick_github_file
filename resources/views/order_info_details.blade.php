<?
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
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

		<?require_once "include_php/header_inc.php"?>
	
		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">首頁</a></li>
							<li class="breadcrumb-item"><a href="order_info.html">訂單查詢</a></li>
							<li class="breadcrumb-item active" aria-current="page">訂單明細</li>
						</ol>
					</div>

					<div id="page-menu" class="no-sticky mb-4 pageleftmenubox MobileOnly">
						<div id="page-menu-wrap">
							<div class="container">
								<div class="page-menu-row">

									<div class="page-menu-title ">會員中心</div>

									<nav class="page-menu-nav">
										<ul class="page-menu-container">
											<li class="page-menu-item"><a href="member.html" title="會員總覽" class="active">會員總覽</a></li>
											<li class="page-menu-item current"><a href="order_info.html" title="訂單查詢">訂單查詢</a></li>
											<li class="page-menu-item"><a href="order_addvalue.html" title="儲值金">儲值金</a></li>
											<li class="page-menu-item"><a href="member_coupon.html" title="專屬優惠券">專屬優惠券<b class="t_danger">・</b></a></li>
											<li class="page-menu-item"><a href="order_bonus.html" title="紅利點數">紅利點數</a></li>
											<li class="page-menu-item"><a href="member_edit.html" title="會員資料">會員資料</a></li>
											<li class="page-menu-item"><a href="#" title="會員制度/等級">會員制度/等級</a></li>
											<li class="page-menu-item"><a href="member_password.html" title="更改密碼">更改密碼</a></li>
											<li class="page-menu-item"><a href="member_address.html" title="收件地址管理">收件地址管理</a></li>
											<li class="page-menu-item"><a href="order_service.html" title="客服中心">客服中心</a></li>

										</ul>
									</nav>

									<div id="page-menu-trigger" class="leftmenu"><i class="icon-line-menu"></i></div>

								</div>
							</div>
						</div>
					</div>
					<?
						$id = $_GET['id'];
						$sql = "select * from didipick_order where id='$id'";
						$result = $mysql->query($sql);
						$row = $result->fetch();
						$sql_item = "select * from didipick_order_item where id='$id'";
						$result_item = $mysql->query($sql_item);
						$size_item = $result_item->size();
						$orderid = $row['order_No'];
					?>

					<div class="row gutter-40 col-mb-40">
						
						<div class="postcontent col-lg-9 order-lg-last">
							

							<div class="orderdetails">
								<h4>訂單狀態</h4>
								
								<div>
									<div class="orderdetails-header">
										<div class="left">
											<?if($row['process']==1){?>	
											<h2 class="ship-title t_highlight">待付款</h2>
										<?}else if($row['process']==2){?>
											<h2 class="ship-title t_didi_t">處理中</h2>
											<p>更新時間: <?=$row['insert_time']?></p>
										<?}else if($row['process']==3){?>
											<h2 class="ship-title t_didi_t">已訂購</h2>
											<?for($i=1;$i<=$size_item;$i++){?>
												<?$row_item = $result_item->fetch();?>
												<p>更新時間: <?=$row_item['buy_time']?></p>
											<?}?>
										<?}else if($row['process']==4){?>
											<h2 class="ship-title t_didi_t">已出貨</h2>
											<?for($i=1;$i<=$size_item;$i++){?>
												<?$row_item = $result_item->fetch();?>
												<p>更新時間: <?=$row_item['receipt_time']?></p>
											<?}?>
										<?}else if($row['process']==5){?>
											<h2 class="ship-title t_didi_t">國際運輸中</h2>
											<p>更新時間: <?=$row['shipment_time']?></p>
										<?}else if($row['process']==6){?>
											<h2 class="ship-title t_didi_t">已完成</h2>
											<p>更新時間: <?=$row['complete_time']?></p>
										<?}else if($row['process']==0){?>
											<h2 class="ship-title t_gray">已取消</h2>
											<p>取消原因:&nbsp;<?=$row['remark1']?></p>
											<p>更新時間: <?=$row['cancel_time']?></p>
										<?}?>
											<!-- <h2 class="ship-title t_highlight">待付款</h2> -->
											<!-- <h2 class="ship-title t_didi_t">處理中</h2> -->
											<!-- <h2 class="ship-title t_didi_t">已訂購</h2> -->
											<!-- <h2 class="ship-title t_didi_t">已出貨</h2> -->
											<!-- <h2 class="ship-title t_didi_t">國際運輸</h2> -->
											<!-- <h2 class="ship-title t_didi_t">已完成</h2> 
											<h2 class="ship-title t_gray">已取消</h2>
											<p>取消原因: 庫存不足</p>
											<p>更新時間: 2021-03-31 09:30</p>-->
										
										</div>
										
										
									</div>
									
									
								</div>
							</div>


							<div class="orderdetails">
								<h4>訂單摘要：<?=$row['order_No']?></h4>

								<div class="tablescoll mb-0">
									<div class="table-responsive">
										<table class="table cart checkdatabox">
											<tbody>
												<?
													$sql1 = "select * from didipick_order_item where id='$id'";
													$result1 = $mysql->query($sql1);
													$size1 = $result1->size();
													for($i=1;$i<=$size1;$i++){
														$row1 = $result1->fetch();
														$pname = $row1['p_name'];
														$sql2 = "select * from didipick_product where name in(select p_name from didipick_order_item where id='$id' and p_name='$pname')";
														$result2 = $mysql->query($sql2);
														$row2 = $result2->fetch();
												?>
												<tr class="cart_item">
													<td class="cart-product-thumbnail">
														<a href="#">
															<img width="64" height="64" src="didipick_Admin/images/admin_upload_img/<?=$row2['img1']?>" alt="資生堂MOILIP藥用護唇膏">
														</a>
													</td>

													<td class="cart-product-name">
														<a href="#"><?=$row1['p_name']?></a><br>
													</td>

													<td class="cart-product-quantity">
														<div class="quantity clearfix">×  <?=$row1['quantity']?></div>
													</td>

													<td class="cart-product-subtotal">
														<span class="amount">NT.<?=$row1['price']?></span>
													</td>
												</tr>
												<?}?>
											</tbody>

										</table>
									</div>
								</div>

								<div class="pricedetails">
									<ul>
										<?
											$xxx = 0;
											$sql2 = "select * from didipick_order_item where id='$id'";
											$result2 = $mysql->query($sql2);
											$size2 = $result2->size();
											for($i=1;$i<=$size2;$i++){
												$row2 = $result2->fetch();
												$itemprice = $xxx+$row2['price'];
											}
										?>
										<li><span class="pdeitem_l">小計：</span><span class="pdeitem_r">NT <?=$itemprice?><span class="pdeitem_l"></li>
										<li><span class="pdeitem_l">國際運費：</span><span class="pdeitem_r">NT <?=$row['freight']?></span></li>
										<?if($row['pay_type'] == 2){?>
										<li class="pb-2"><span class="pdeitem_l">刷卡手續費：</span><span class="pdeitem_r">NT <?=$row['handlefee']?></span></li>
										<?}?>
										<?
											$sql1 = "select * from didipick_coupon_use where member='$userid' and order_id='$orderid'";
											$result1 = $mysql->query($sql1);
											$row1 = $result1->fetch();
										?>
										<li class="pb-2"><span class="pdeitem_l">優惠券：</span><span class="pdeitem_r" style="color:red">NT <?=$row1['price']?></span></li>
										<li class="pdtotal pt-2"><span class="pdeitem_l">合計：</span><span class="pdeitem_r">NT <?if($row['pay_type'] == 2){echo $itemprice+$row['freight']-$row1['price']+$row['handlefee'];}else{echo $itemprice+$row['freight']-$row1['price'];}?></span></li>
									</ul>
									
								</div>

								
							</div>

							<div class="clear"></div>


							<div class="orderdetails">
								<h4>收件人資訊</h4>
								<div class="details_list">
									<ul>
										<li><span class="mr-3">收件人</span><?=$row['name']?></li>
										<li><span class="mr-3">收件人地址</span><?=$row['zipcode'].' '.$row['area'].$row['address']?></li>
										<li><span class="mr-3">收件人電話</span><?=$row['phone']?></li>
										<li><span class="mr-3">寄至</span>台灣</li>
										<li><span class="mr-3">運送方式</span>EMS國際運送</li>
									</ul>
								</div>
							</div>

							<div class="orderdetails">
								<h4>付款資訊</h4>
								<div class="details_list">
									<ul>
										<li><span class="mr-3">付款方式</span><?if($row['pay_type']==1){echo "儲值金付款";}else{echo "信用卡線上付款";}?></li>
									</ul>
								</div>
							</div>


						</div>
						
						
						<div class="sidebar col-lg-3 PCOnly">
							<div class="sidebar-widgets-wrap">

								<div class="widget widget_links product_lbox">

									<h4>我的訂單</h4>
									<ul>
										<?require_once "include_php/member_inc.php";?>
									</ul>

								</div>

							</div>
						</div>
					</div>

					

		
				</div>

				<div class="clear"></div>

				
			</div>
		</section>

		
		<?require_once "include_php/footer_inc.php"?>

	</div>

	
	<div id="gotoTop"><img src="images/gotop.png" alt=""></div>

	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<script src="js/functions.js"></script>
	<script type="text/javascript">
    function CopyTextToClipboard(id) {
    var TextRange = document.createRange();
    TextRange.selectNode(document.getElementById(id));
    sel = window.getSelection();
      sel.removeAllRanges();
      sel.addRange(TextRange);
    document.execCommand("copy");
    // alert("複製完成")  //此行可加可不加
    }
  </script>

</body>
</html>