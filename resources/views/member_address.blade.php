<?
require_once "require_inc.php";
require_once "didipick_Admin/function/decode_function.php";
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
							<li class="breadcrumb-item active" aria-current="page">收件地址管理</li>
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
											<li class="page-menu-item"><a href="member_password.php" title="更改密碼">更改密碼</a></li>
											<li class="page-menu-item current"><a href="member_address.php" title="收件地址管理">收件地址管理</a></li>
											<li class="page-menu-item"><a href="order_ service.php" title="客服中心">客服中心</a></li>

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

							<div class="align_r mb-2">
								<a href="#myModal1" data-lightbox="inline" class="button button-rounded m-0"><i class="icon-line-plus"></i>增加常用地址</a>

								<div class="modal1 mfp-hide" id="myModal1">
									<div class="block mx-auto modalbox" style="background-color: #FFF;">
										<div class="memconbox">
											<div class="choutbox">
												<div class="chform">
													<form class="row mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post" novalidate="novalidate">
			
														<div class="col-12 form-group">
															<label for="template-contactform-name">收件人</label>
															<input type="text" id="name" name="template-contactform-name" value="" class="sm-form-control required" placeholder="請填寫真實姓名...">
														</div>
			
														<div class="col-12 form-group">
															<label for="template-contactform-phone">聯絡電話</label>
															<input type="text" id="mobile" name="template-contactform-phone" value="" class="sm-form-control valid" placeholder="+886">
															<small class="t_danger">*請勿加入符號，市話請填寫區碼，如：0212345678</small>
														</div>
														
														<div class="col-12 form-group mb-0">
															<label for="shipping-form-address">收件人地址</label>
														</div>
			
														<!--<div class="memadpadd">
															<label class="control control--radio">台灣
																<input type="radio" name="radio" checked="checked">
																<div class="control__indicator"></div>
															</label>
														</div>-->
														<div class="clear"></div>
			
														<div class="col-md-4 form-group">
															<input type="text" id="zipcode" name="shipping-form-addressnumber" value="" class="sm-form-control" placeholder="郵遞區號">
														</div>
														<div class="col-md-4 form-group">
															<select id="area" name="shipping-form-addresscity" class="sm-form-control valid" onchange="jsarea('area')">
																<option value="">請選擇縣市</option>
																<?
																	$sql = "select city from streetname";
																	$result = $mysql->query($sql);
																	$size = $result->size();
																	$a=1;
																	for($i = 1;$i <= $size ; $i++){
																		$row = $result->fetch();
																		if(in_array($row['city'], $ary)){
																		}else{
																			$ary[$i] = $row['city'];
																			$a++;
																		}
																	}
																	foreach($ary as $k=>$v){
																			echo '<option>'.$v.'</option>';
																		}
																?>
															</select>
														</div>
														<div class="col-md-4 form-group">
															<select id="area2" name="shipping-form-addressarea" class="sm-form-control valid" onchange="jsarea('zipcode')">
																<option value="">請選擇區域</option>
															</select>
														</div>
			
														<div class="col-md-12 form-group">
															<input type="text" id="address" name="shipping-form-addressstreet" value="" class="sm-form-control" placeholder="請選擇街道">
														</div>
						
														<!-- <div class="memadpadd">
															<label class="control control--radio">海外國家
																<input type="radio" name="radio">
																<div class="control__indicator"></div>
															</label>
														</div>
														<div class="clear"></div>
						
														<div class="col-md-12 form-group">
															<input type="text" id="shipping-form-addressstreet" name="shipping-form-addressstreet" value="" class="sm-form-control" placeholder="請輸入完整地址">
														</div> -->
			
														<div class="row post-navigation membtnbox">
															<!--<div class="col-xs-12 col-md-auto text-center xs-mb-5">
																<a href="#" class="button button-border button-rounded button-green m-0">取消</a>
															</div>-->
									
															<div class="col-12 col-md-auto text-center">
																<a id="addcommonaddress" class="button button-rounded m-0">新增地址</a>
															</div>
														</div>
						
						
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							

							<div class="memconbox">
								<div class="maddressbox">
									<?
										$sql = "select * from didipick_member_common_address where identity='$userid'";
										$result = $mysql->query($sql);
										$size = $result->size();
										for($i=1;$i<=$size;$i++){
											$row = $result->fetch();
									?>
									<div class="maddress_item active">
										<div class="maddress_l">
											<p>收件人：<?=$row['name']?></p>
											<p>聯絡電話：<?=$row['phone']?></p>
											<p>收件地址：<?=$row['zipcode']?> <?=$row['area1'].$row['area2'].$row['address']?></p>
										</div>
										<div class="maddress_r">
										<?
											if($row['preset'] == '1'){
										?>
											<div>
												<span class="preset_t"><a href="#" onclick="preset('<?=$row['id']?>', 'cancelpreset')">取消預設</a></span><span class="preset_t"><a href="#" onclick="delete_common_address('<?=$row['id']?>')">刪除</a></span><br>
												<span><a href="#" class="button button-border button-rounded button-green">編輯</a></span>
											</div>
											<?}else{?>
												<div>
													<span class="preset_t"><a href="#" id="" onclick="preset('<?=$row['id']?>', 'setpreset')">設為預設</a></span><span class="preset_t"><a href="#" onclick="delete_common_address('<?=$row['id']?>')">刪除</a></span><br>
													<span><a href="#" class="button button-border button-rounded button-green">編輯</a></span>
												</div>
											<?}?>
										</div>
									</div>
									<?}?>
									
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
		function jsarea(code){
			if(code == 'area'){
				area = $('#area').val();
				var type = 'area';
				var type2 = 'f_zipcode';
				$.ajax({
					type:"GET",
					url:"select_area.php",
					data:{
						area:area,
						type:type
					},
					success: function(resp){
						$("#area2").html(resp);
					}
				});
				$.ajax({
					type:"GET",
					url:"select_area.php",
					data:{
						area:area,
						type:type2

					},
					success: function(resp){
						$("#zipcode").val(resp);
					}
				});
			}else if(code == 'zipcode'){
					area = $('#area').val();
					area2 = $('#area2').val();
					var type3 = 'zipcode';
					$.ajax({
						type:"GET",
						url:"select_area.php",
						data:{
							area:area,
							area2:area2,
							type:type3
						},
						success: function(resp){
							$("#zipcode").val(resp);
						}
					});
			}
		}

		$("#addcommonaddress").click(function(){
			name = $("#name").val();
			mobile = $("#mobile").val();
			zipcode = $("#zipcode").val();
			area = $("#area").val();
			area2 = $("#area2").val();
			address = $("#address").val();
			if(name == ""){
				alert("請輸入姓名");
			}else if(mobile == ""){
				alert("請輸入電話號碼");
			}else if(zipcode == ""){
				alert("請輸入郵遞區號");
			}else if(area == ""){
				alert("請選擇縣市");
			}else if(area2 == ""){
				alert("請選擇區域");
			}else if(address == ""){
				alert("請填寫地址");
			}else{
				name = $("#name").val();
				mobile = $("#mobile").val();
				zipcode = $("#zipcode").val();
				area = $("#area").val();
				area2 = $("#area2").val();
				address = $("#address").val();
				$.ajax({
					type:"POST",
					url:"add_common_address.php",
					data:{name:name, zipcode:zipcode, area:area, area2:area2, address:address, mob:mobile, type:"memberaddcommonaddress"},
					success:function(resp){
						if(resp == 'ok'){
							window.location="member_address.php";
						}else{
							alert(resp);
						}
					}
				});
			}
		});
		function preset(id, type){
			if(type == 'setpreset'){
				$.ajax({
					type:"POST",
					url:"preset_delete_address.php",
					data:{type:type, id:id},
					success:function(resp){
						if(resp == 'ok'){
							window.location="member_address.php";
						}
					}
				});
			}else if(type == 'cancelpreset'){
				$.ajax({
					type:"POST",
					url:"preset_delete_address.php",
					data:{type:type, id:id},
					success:function(resp){
						if(resp == 'ok'){
							window.location="member_address.php";
						}
					}
				});
			}
		}

		function delete_common_address(id){
			$.ajax({
				type:"POST",
				url:"preset_delete_address.php",
				data:{type:"delete_common_address", id:id},
				success:function(resp){
					if(resp == 'ok'){
						window.location="member_address.php";
					}
				}
			});
		}
	</script>

</body>
</html>