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
							<li class="breadcrumb-item active" aria-current="page">訂單查詢</li>
						</ol>
					</div>
					
					<!-- <ul class="process-steps process-5 row col-mb-30 justify-content-center mb-0">
						<li class="col-sm-6 col-lg-3 process-step-con">
							<a href="#" class="i-bordered i-circled mx-auto icon-ok"></a>
							<h5 class="t_gray">待付款</h5>
						</li>
						<li class="col-sm-6 col-lg-3 process-step-con">
							<a href="#" class="i-bordered i-circled mx-auto icon-ok"></a>
							<h5 class="t_gray">處理中</h5>
						</li>
						<li class="col-sm-6 col-lg-3 process-step-con">
							<a href="#" class="i-bordered i-circled mx-auto icon-ok"></a>
							<h5 class="t_gray">已訂購</h5>
						</li>
						<li class="col-sm-6 col-lg-3 process-step-con">
							<a href="#" class="i-bordered i-circled mx-auto icon-ok"></a>
							<h5 class="t_gray">日本到貨</h5>
						</li>
						<li class="col-sm-6 col-lg-3 process-step-con">
							<a href="#" class="i-bordered i-circled mx-auto icon-ok"></a>
							<h5 class="t_gray">國際運輸</h5>
						</li>
						<li class="col-sm-6 col-lg-3 process-step-con">
							<a href="#" class="i-bordered i-circled mx-auto icon-ok"></a>
							<h5 class="t_gray">已完成</h5>
						</li>
					</ul> -->

					<!-- <div id="page-menu" class="no-sticky mb-4 pageleftmenubox MobileOnly">
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
					</div> -->


					<div class="row justify-content-between align-items-center post-navigation mt-3 mb-3">
						<div class="col-12 col-md-auto text-center desiretitle">
						</div>

						<div class="col-12 col-md-auto text-center">
							<div class="input-group mx-auto">
								<input type="text" id="ordernumber" class="form-control" value="" placeholder="請輸入您的訂單編號...">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="icon-line-search" id="searchorder"></i>
									</span>
								</div>
							</div>
							<small class="t_didi_t">可於訂單查詢查看您的購買紀錄，也可從寄送的mail信件中複製您的訂單編號來查看訂單！</small>
						</div>
					</div>


					<div class="row gutter-40 col-mb-40">
						
						<div class="postcontent col-lg-9 order-lg-last">
							
							<div class="tabs tabs-bb clearfix orderinfo_box" >
								<?if(!isset($_GET['o_no'])){?>
								<ul class="tab-nav clearfix">
										<li><a href="#notpaidyet">待付款</a></li>
										<li><a href="#processing">處理中</a></li>
										<li><a href="#tobereceived">日本到貨</a></li>
										<li><a href="#shipping">國際運輸</a></li>
										<li><a href="#completed">已完成</a></li>
										<li><a href="#Cancelled">已取消</a></li>
								</ul>

								<div class="tab-container pt-2">
									
									<?
										$status_ary = array('notpaidyet','processing','tobereceived','shipping','completed','Cancelled');
										array('待付款','處理中','日本到貨','國際運輸','已完成','已取消');
										for($i=0;$i<=5;$i++){
									?>
									<div class="tab-content clearfix" id="<?=$status_ary[$i]?>">
										<div class="postcontent">
											<div class="tablescoll mb-4">
												<table class="table center">
													
													<tbody>
													<?
														if(isset($_GET['np_pagen'])){	
															$np_pagen = $_GET['np_pagen']-1;
														}else{
															$np_pagen = 0;
														}
														if(isset($_GET['ps_pagen'])){	
															$ps_pagen = $_GET['ps_pagen']-1;
														}else{
															$ps_pagen = 0;
														}
														if(isset($_GET['tob_pagen'])){	
															$tob_pagen = $_GET['tob_pagen']-1;
														}else{
															$tob_pagen = 0;
														}
														if(isset($_GET['sp_pagen'])){	
															$sp_pagen = $_GET['sp_pagen']-1;
														}else{
															$sp_pagen = 0;
														}
														if(isset($_GET['cp_pagen'])){	
															$cp_pagen = $_GET['cp_pagen']-1;
														}else{
															$cp_pagen = 0;
														}
														if(isset($_GET['cn_pagen'])){	
															$cn_pagen = $_GET['cn_pagen']-1;
														}else{
															$cn_pagen = 0;
														}
														$np_limit = 1;
														$np_page = $np_pagen*$np_limit;
														$ps_limit = 1;
														$ps_page = $ps_pagen*$ps_limit;
														$tob_limit = 1;
														$tob_page = $tob_pagen*$tob_limit;
														$sp_limit = 1;
														$sp_page = $sp_pagen*$sp_limit;
														$cp_limit = 1;
														$cp_page = $cp_pagen*$cp_limit;
														$cn_limit = 1;
														$cn_page = $cn_pagen*$cn_limit;
														if($i==0){
															$sql = "select * from didipick_order where process='1' and identity='$userid' order by insert_time desc limit $np_page, $np_limit";
														}else if($i==1){
															$sql = "select * from didipick_order where process='2' and identity='$userid' or process='3' and identity='$userid' order by insert_time desc limit $ps_page, $ps_limit";
														}else if($i==2){
															$sql = "select * from didipick_order where process='4' and identity='$userid' order by insert_time desc limit $tob_page, $tob_limit";
														}else if($i==3){
															$sql = "select * from didipick_order where process='5' and identity='$userid' order by insert_time desc limit $sp_page, $sp_limit";
														}else if($i==4){
															$sql = "select * from didipick_order where process='6' and identity='$userid' order by insert_time desc limit $cp_page, $cp_limit";
														}else if($i==5){
															$sql = "select * from didipick_order where process='0' and identity='$userid' order by insert_time desc limit $cn_page, $cn_limit";
														}
														$result = $mysql->query($sql);
														$size = $result->size();
														for($a=1;$a<=$size;$a++){
															$row = $result->fetch();
															$id = $row['id'];
															$sql1 = "select * from didipick_product where name in(select p_name from didipick_order_item where id='$id')";
															$result1 = $mysql->query($sql1);
															$row1 = $result1->fetch();
													?>
													<tr>
														<td class="cart-product-thumbnail noborder">
															<a href="order_info_details.php?id=<?=$id?>" target="_blank"><img width="64" height="64" src="didipick_Admin/images/admin_upload_img/<?echo $row1['img1'];?>" alt=""></a>
															<div><a href="order_info_details.php?id=<?=$id?>" target="_blank"><?=$row['order_No']?></a></div>
														</td>
														<td class="noborder text-decoration_u"><a href="order_info_details.php?id=<?=$id?>" target="_blank"><?=$row1['name']?></a></td>
														<td class="noborder">$<?=$row['total']+$row['handlefee']?><br><span><?if($row['pay_type']==1){echo "儲值金付款";}else{echo "信用卡線上付款";}?></span></td>
														<td class="noborder"><?
																$time = explode(' ', $row['insert_time']);
																$tm = explode(':', $time[1]);
																echo $time[0].'<br>'.$tm[0].':'.$tm[1];
															?></td>
														<td class="noborder t_highlight"></td>
														<td class="noborder">
															<?if($i=='0'){?>
															<span><a href="#" class="button button-border button-gray btn_circle">取消<br/>訂單</a></span>
															<?}?>
															<span><a href="#" class="button btn_circle">再次<br/>購買</a></span>
														</td>
													</tr>
													<?}?>
													</tbody>
												</table>
												<?
													if($i==0){
														$sql_size = "select * from didipick_order where process='1' and identity='$userid'";
												?>
												<?
													$result_size = $mysql->query($sql_size);
													$cp_size = $result_size->size();
													//echo $cp_size;
													if($np_limit>$np_size){
														$np_numpage=0;
													}else if($np_size%$np_limit == 0){
														$np_numpage = $np_size/$np_limit;
													}else{
														$np_numpage = floor($np_size/$np_limit)+1;
													}
													if($np_numpage != 0 && $np_numpage != 1){
												?>

												<div class="center">
													<ul class="pagination pagination-transparent pagination-circle">
														<?
															$np_pg = $np_pagen+1;

															if($np_pg!=1 && isset($_GET['np_pagen'])){
														?>
														<li class="page-item"><a class="page-link" aria-label="Next" onclick="np_changepage(<?=$np_pg-1?>)"><span aria-hidden="true">«</span></a></li>
														<?}?>
														<?
															if($np_pg==1 || !isset($_GET['np_pagen'])){
																$np_a = 1;
															}else if($np_pg%10==0){
																$np_a = $np_pg+1;
															}else{
																$np_a = $np_pg-($np_pg%10)+1;
															}
														?>
														<?for($i=$np_a;$i<$np_a+10;$i++){
															if($i<=$np_numpage){
																if($i == 1){
																	$np_pno = 1;
																}else{
																	$np_pno = $i;
																}
															?>
														<li class="page-item <?if($np_pagen == $i-1){echo 'active';}else if($np_pagen==0 &&$i==1){echo 'active';}?>"><a class="page-link" onclick="np_changepage(<?=$np_pno?>)"><?=$i?></a></li>
														<?
															}
														}
														if($np_pg != $np_numpage){
														?>
														<li class="page-item"><a class="page-link" aria-label="Next" onclick="np_changepage(<?=$np_pg+1?>)"><span aria-hidden="true">»</span></a></li>
														<?}?>
													</ul>
												</div>
												<?}?>
												<?	}else if($i==1){
														$sql_size = "select * from didipick_order where process='2' and identity='$userid' or process='3' and identity='$userid'";?>
												<?
													$result_size = $mysql->query($sql_size);
													$ps_size = $result_size->size();
													//echo $ps_size;
													if($ps_limit>$ps_size){
														$ps_numpage=0;
													}else if($ps_size%$ps_limit == 0){
														$ps_numpage = $ps_size/$ps_limit;
													}else{
														$ps_numpage = floor($ps_size/$ps_limit)+1;
													}
													if($ps_numpage != 0 && $ps_numpage != 1){
												?>

												<div class="center">
													<ul class="pagination pagination-transparent pagination-circle">
														<?
															$ps_pg = $ps_pagen+1;

															if($ps_pg!=1 && isset($_GET['ps_pagen'])){
														?>
														<li class="page-item"><a class="page-link" aria-label="Next" onclick="ps_changepage(<?=$ps_pg-1?>)"><span aria-hidden="true">«</span></a></li>
														<?}?>
														<?
															if($ps_pg==1 || !isset($_GET['ps_pagen'])){
																$ps_a = 1;
															}else if($ps_pg%10==0){
																$ps_a = $ps_pg+1;
															}else{
																$ps_a = $ps_pg-($ps_pg%10)+1;
															}
														?>
														<?for($i=$ps_a;$i<$ps_a+10;$i++){
															if($i<=$ps_numpage){
																if($i == 1){
																	$ps_pno = 1;
																}else{
																	$ps_pno = $i;
																}
															?>
														<li class="page-item <?if($ps_pagen == $i-1){echo 'active';}else if($ps_pagen==0 &&$i==1){echo 'active';}?>"><a class="page-link" onclick="ps_changepage(<?=$ps_pno?>)"><?=$i?></a></li>
														<?
															}
														}
														if($ps_pg != $ps_numpage){
														?>
														<li class="page-item"><a class="page-link" aria-label="Next" onclick="ps_changepage(<?=$ps_pg+1?>)"><span aria-hidden="true">»</span></a></li>
														<?}?>
													</ul>
												</div>
												<?}?>
													<?}else if($i==2){
														$sql_size = "select * from didipick_order where process='4' and identity='$userid'";?>
													<?
													$result_size = $mysql->query($sql_size);
													$tob_size = $result_size->size();
													//echo $tob_size;
													if($tob_limit>$tob_size){
														$tob_numpage=0;
													}else if($tob_size%$tob_limit == 0){
														$tob_numpage = $tob_size/$tob_limit;
													}else{
														$tob_numpage = floor($tob_size/$tob_limit)+1;
													}
													if($tob_numpage != 0 && $tob_numpage != 1){
												?>

												<div class="center">
													<ul class="pagination pagination-transparent pagination-circle">
														<?
															$tob_pg = $tob_pagen+1;

															if($tob_pg!=1 && isset($_GET['tob_pagen'])){
														?>
														<li class="page-item"><a class="page-link" aria-label="Next" onclick="tob_changepage(<?=$tob_pg-1?>)"><span aria-hidden="true">«</span></a></li>
														<?}?>
														<?
															if($tob_pg==1 || !isset($_GET['tob_pagen'])){
																$tob_a = 1;
															}else if($tob_pg%10==0){
																$tob_a = $tob_pg+1;
															}else{
																$tob_a = $tob_pg-($tob_pg%10)+1;
															}
														?>
														<?for($i=$tob_a;$i<$tob_a+10;$i++){
															if($i<=$tob_numpage){
																if($i == 1){
																	$tob_pno = 1;
																}else{
																	$tob_pno = $i;
																}
															?>
														<li class="page-item <?if($tob_pagen == $i-1){echo 'active';}else if($tob_pagen==0 &&$i==1){echo 'active';}?>"><a class="page-link" onclick="tob_changepage(<?=$tob_pno?>)"><?=$i?></a></li>
														<?
															}
														}
														if($tob_pg != $tob_numpage){
														?>
														<li class="page-item"><a class="page-link" aria-label="Next" onclick="tob_changepage(<?=$tob_pg+1?>)"><span aria-hidden="true">»</span></a></li>
														<?}?>
													</ul>
												</div>
												<?}?>
													<?}else if($i==3){
														$sql_size = "select * from didipick_order where process='5' and identity='$userid'";?>
													<?
													$result_size = $mysql->query($sql_size);
													$sp_size = $result_size->size();
													//echo $sp_size;
													if($sp_limit>$sp_size){
														$sp_numpage=0;
													}else if($sp_size%$sp_limit == 0){
														$sp_numpage = $sp_size/$sp_limit;
													}else{
														$sp_numpage = floor($sp_size/$sp_limit)+1;
													}
													if($sp_numpage != 0 && $sp_numpage != 1){
												?>

												<div class="center">
													<ul class="pagination pagination-transparent pagination-circle">
														<?
															$sp_pg = $sp_pagen+1;

															if($sp_pg!=1 && isset($_GET['sp_pagen'])){
														?>
														<li class="page-item"><a class="page-link" aria-label="Next" onclick="sp_changepage(<?=$sp_pg-1?>)"><span aria-hidden="true">«</span></a></li>
														<?}?>
														<?
															if($sp_pg==1 || !isset($_GET['sp_pagen'])){
																$sp_a = 1;
															}else if($sp_pg%10==0){
																$sp_a = $sp_pg+1;
															}else{
																$sp_a = $sp_pg-($sp_pg%10)+1;
															}
														?>
														<?for($i=$sp_a;$i<$sp_a+10;$i++){
															if($i<=$sp_numpage){
																if($i == 1){
																	$sp_pno = 1;
																}else{
																	$sp_pno = $i;
																}
															?>
														<li class="page-item <?if($sp_pagen == $i-1){echo 'active';}else if($sp_pagen==0 &&$i==1){echo 'active';}?>"><a class="page-link" onclick="sp_changepage(<?=$sp_pno?>)"><?=$i?></a></li>
														<?
															}
														}
														if($sp_pg != $sp_numpage){
														?>
														<li class="page-item"><a class="page-link" aria-label="Next" onclick="sp_changepage(<?=$sp_pg+1?>)"><span aria-hidden="true">»</span></a></li>
														<?}?>
													</ul>
												</div>
												<?}?>
													<?}else if($i==4){
														$sql_size = "select * from didipick_order where process='6' and identity='$userid'";?>
													<?
													$result_size = $mysql->query($sql_size);
													$cp_size = $result_size->size();
													//echo $cp_size;
													if($cp_limit>$cp_size){
														$cp_numpage=0;
													}else if($cp_size%$cp_limit == 0){
														$cp_numpage = $cp_size/$cp_limit;
													}else{
														$cp_numpage = floor($cp_size/$cp_limit)+1;
													}
													if($cp_numpage != 0 && $cp_numpage != 1){
												?>

												<div class="center">
													<ul class="pagination pagination-transparent pagination-circle">
														<?
															$cp_pg = $cp_pagen+1;

															if($cp_pg!=1 && isset($_GET['cp_pagen'])){
														?>
														<li class="page-item"><a class="page-link" aria-label="Next" onclick="cp_changepage(<?=$cp_pg-1?>)"><span aria-hidden="true">«</span></a></li>
														<?}?>
														<?
															if($cp_pg==1 || !isset($_GET['cp_pagen'])){
																$cp_a = 1;
															}else if($cp_pg%10==0){
																$cp_a = $cp_pg+1;
															}else{
																$cp_a = $cp_pg-($cp_pg%10)+1;
															}
														?>
														<?for($i=$cp_a;$i<$cp_a+10;$i++){
															if($i<=$cp_numpage){
																if($i == 1){
																	$cp_pno = 1;
																}else{
																	$cp_pno = $i;
																}
															?>
														<li class="page-item <?if($cp_pagen == $i-1){echo 'active';}else if($cp_pagen==0 &&$i==1){echo 'active';}?>"><a class="page-link" onclick="cp_changepage(<?=$cp_pno?>)"><?=$i?></a></li>
														<?
															}
														}
														if($cp_pg != $cp_numpage){
														?>
														<li class="page-item"><a class="page-link" aria-label="Next" onclick="cp_changepage(<?=$cp_pg+1?>)"><span aria-hidden="true">»</span></a></li>
														<?}?>
													</ul>
												</div>
												<?}?>
													<?}else if($i==5){
														$sql_size = "select * from didipick_order where process='0' and identity='$userid'";?>
														<?
													$result_size = $mysql->query($sql_size);
													$cn_size = $result_size->size();
													//echo $cn_size;
													if($cn_limit>$cn_size){
														$cn_numpage=0;
													}else if($cn_size%$cn_limit == 0){
														$cn_numpage = $cn_size/$cn_limit;
													}else{
														$cn_numpage = floor($cn_size/$cn_limit)+1;
													}
													if($cn_numpage != 0 && $cn_numpage != 1){
												?>

												<div class="center">
													<ul class="pagination pagination-transparent pagination-circle">
														<?
															$cn_pg = $cn_pagen+1;

															if($cn_pg!=1 && isset($_GET['cn_pagen'])){
														?>
														<li class="page-item"><a class="page-link" aria-label="Next" onclick="cn_changepage(<?=$cn_pg-1?>)"><span aria-hidden="true">«</span></a></li>
														<?}?>
														<?
															if($cn_pg==1 || !isset($_GET['cn_pagen'])){
																$cn_a = 1;
															}else if($cn_pg%10==0){
																$cn_a = $cn_pg+1;
															}else{
																$cn_a = $cn_pg-($cn_pg%10)+1;
															}
														?>
														<?for($i=$cn_a;$i<$cn_a+10;$i++){
															if($i<=$cn_numpage){
																if($i == 1){
																	$cn_pno = 1;
																}else{
																	$cn_pno = $i;
																}
															?>
														<li class="page-item <?if($cn_pagen == $i-1){echo 'active';}else if($cn_pagen==0 &&$i==1){echo 'active';}?>"><a class="page-link" onclick="cn_changepage(<?=$cn_pno?>)"><?=$i?></a></li>
														<?
															}
														}
														if($cn_pg != $cn_numpage){
														?>
														<li class="page-item"><a class="page-link" aria-label="Next" onclick="cn_changepage(<?=$cn_pg+1?>)"><span aria-hidden="true">»</span></a></li>
														<?}?>
													</ul>
												</div>
												<?}?>
													<?}
													?>
											</div>
										</div>
									</div>
									<?
										}
									?>
								</div>
								<?}?>
								<?if(isset($_GET['o_no'])){?>
									<a href="order_info.php#processing">所有訂單</a>
									<hr />
								
								<div class="tab-container pt-2">
									<div class="tab-content clearfix" id="<?=$status_ary[$i]?>">
										<div class="postcontent">
											<div class="tablescoll mb-4">
												<table class="table center">
													<tbody>
									<?
										$o_no = $_GET['o_no'];
										$sql = "select * from didipick_order where order_No='$o_no'";
										$result = $mysql->query($sql);
										$row = $result->fetch();
										$id = $row['id'];
										$sql1 = "select * from didipick_product where name in(select p_name from didipick_order_item where id='$id')";
										$result1 = $mysql->query($sql1);
										$row1 = $result1->fetch();
									?>
													<tr>
														<td class="cart-product-thumbnail noborder">
															<a href="order_info_details.php?id=<?=$row['id']?>" target="_blank"><img width="64" height="64" src="didipick_Admin/images/admin_upload_img/<?echo $row1['img1'];?>" alt=""></a>
															<div><a href="order_info_details.php?id=<?=$row['id']?>" target="_blank"><?=$row['order_No']?></a></div>
														</td>
														<td class="noborder text-decoration_u"><a href="order_info_details.php?id=<?=$row['id']?>" target="_blank"><?=$row1['name']?></a></td>
														<td class="noborder">$<?=$row['total']+$row['handlefee']?><br><span><?if($row['pay_type']==1){echo "儲值金付款";}else{echo "信用卡線上付款";}?></span></td>
														<td class="noborder"><?
																$time = explode(' ', $row['insert_time']);
																$tm = explode(':', $time[1]);
																echo $time[0].'<br>'.$tm[0].':'.$tm[1];
															?></td>
															<?
															$sql_process =  "select * from didipick_process where id in(select process from didipick_order where order_No='$o_no')";
															$result_ps = $mysql->query($sql_process);
															$row_ps = $result_ps->fetch();
															?>
														<td class="noborder"><?=$row_ps['proess_status']?></td>
														<td class="noborder">
															<span><a href="#" class="button btn_circle">再次<br/>購買</a></span>
														</td>
													</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
													
													
								<?}?>
							</div>

							<div class="clear"></div>
						</div>
						
						
						<div class="sidebar col-lg-3 PCOnly">
							<div class="sidebar-widgets-wrap">

								<div class="widget widget_links product_lbox">

									<h4>我的訂單</h4>
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
		$("#searchorder").click(function(){
			o_no = $("#ordernumber").val();
			if(o_no != ''){
				window.location="order_info.php?o_no="+o_no;
			}
		});
		function np_changepage(pagen){
	    	window.location="order_info.php?np_pagen="+pagen+"#notpaidyet";
	    }
		function ps_changepage(pagen){
	    	window.location="order_info.php?ps_pagen="+pagen+"#processing";
	    }
		function tob_changepage(pagen){
	    	window.location="order_info.php?tob_pagen="+pagen+"#Cancelled";
	    }
		function sp_changepage(pagen){
	    	window.location="order_info.php?sp_pagen="+pagen+"#completed";
	    }
	    function cp_changepage(pagen){
	    	window.location="order_info.php?cp_pagen="+pagen+"#notpaidyet";
	    }
		function cn_changepage(pagen){
	    	window.location="order_info.php?cn_pagen="+pagen+"#processing";
	    }
	    function keyFunction() {
			//alert("Key code = " + event.keyCode);
			if(event.keyCode==13){
				$("#searchorder").click();
			}
		}
		document.onkeydown=keyFunction;
	</script>

</body>
</html>