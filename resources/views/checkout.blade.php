@include('include_php.css_inc')

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

					<div class="clear"></div>
					<div class="h_20"></div>

					<div>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">首頁</a></li>
							<li class="breadcrumb-item active" aria-current="page">購物車</li>
						</ol>
					</div>

					<div>
						<ul class="process-steps process-2 row justify-content-center mb-4">
							<li class="col-sm-6 col-lg-3 active">
								<a href="javascript:void(0)" class="i-circled i-alt mx-auto bg-color">1</a>
								<h5>購物車</h5>
							</li>
							<li class="col-sm-6 col-lg-3 active">
								<a href="javascript:void(0)" class="i-circled i-alt mx-auto bg-color">2</a>
								<h5>填寫資料</h5>
							</li><li class="col-sm-6 col-lg-3">
								<a href="javascript:void(0)" class="i-bordered i-circled mx-auto">3</a>
								<h5>訂購完成</h5>
							</li>
						</ul>
					</div>

					<div class="alert alert-info cartalert">
						<i class="icon-line2-bag"></i><!--【開幕慶】2/28 前全站類別商品，滿 NT$1,500<strong>立即免運！</strong>-->
					</div>

					<div class="tablescoll mb-4">
						<div class="table-responsive">
							<table class="table cart checkdatabox">
								<thead>
									
									<tr class="center" style="display:none">
										<th colspan="6" style="border-bottom: 2px solid #5d5b5b; ">合計：NT <span id="num"></span> <br><small>購物車(件)</small></th>
									</tr>
									<tr style="border-top: 2px solid #5d5b5b;">
										<th class="cart-product-thumbnail">商品資料</th>
										<th class="cart-product-name">商品名</th>
										<th class="cart-product-discount">優惠</th>
										<th class="cart-product-price">單價</th>
										<th class="cart-product-quantity">數量</th>
										<th class="cart-product-subtotal">小計</th>
									</tr>
								</thead>
								<tbody>
									<!--<tr class="cart_item">
										<td class="cart-product-thumbnail">
											<a href="#">
												<img width="64" height="64" src="images/product_img/proimg_2.jpg" alt="資生堂MOILIP藥用護唇膏">
											</a>
										</td>

										<td class="cart-product-name">
											<a href="#">資生堂MOILIP藥用護唇膏</a><br>
											<div class="shipmentdays">預計7-14個工作天出貨</div> </span>
										</td>

										<td class="cart-product-discount">
											<span class="amount t_didi_t">85折</span>
										</td>
										
										<td class="cart-product-price">
											<span class="amount">NT. 200 <small>NT. 300</small></span>
										</td>

										<td class="cart-product-quantity">
											<div class="quantity clearfix">1</div>
										</td>

										<td class="cart-product-subtotal">
											<span class="amount">NT. 200</span>
										</td>
									</tr>-->
									@foreach($pdata as $pdatak=>$pdatav)
									<tr class="cart_item">
										<td class="cart-product-thumbnail">
											<a href="#">
												<img width="64" height="64" src="/storage/{{$pdatav->img1}}" alt="{{$pdatav->name}}">
											</a>
										</td>

										<td class="cart-product-name">
											<a href="#">{{$pdatav->name}}</a><br>
										</td>

										<td class="cart-product-discount">
											<span class="amount t_didi_t"><!--85折--></span>
										</td>
										
										<td class="cart-product-price">
											<span class="amount t_highlight">
											NT.{{ceil($pdatav->s_price*$rate)}}&nbsp;
											@if($pdatav->s_price != $pdatav->o_price)
												<small style="color:#9E9E9D;text-decoration:line-through">
													NT. {{ceil($pdatav->o_price*$rate)}}
												</small>
											@endif
										</span>
										</td>

										<td class="cart-product-quantity">
											@foreach($cdata as $cdatav)
												@if($pdatav->No == $cdatav->product_No)
													@php
														$cquantity = $cdatav->quantity;
													@endphp
													<div class="quantity clearfix">{{$cquantity}}</div>
												@endif
											@endforeach
										</td>

										<td class="cart-product-subtotal">
											<span class="amount">NT. {{ceil($pdatav->s_price*$rate) * $cquantity}}</span>
										</td>
									</tr>
									@endforeach
								</tbody>

							</table>
						</div>
					</div>

					<div class="line"></div>

					<div class="row col-mb-30">
						<div class="col-lg-7">
							
							<div class="mb-3">
								<div class="choutbox">
									<h4>收件資料</h4>
									<div class="chform">
										<p class="mb-0 t_didi_t">請正確填寫詳細收件地址！</p>
										<form class="row mb-0" id="creditpay" name="template-contactform" action="/credit-confirm" method="post" novalidate="novalidate" action="credit.php">
											@csrf
											<div class="col-12 form-group">
												<label for="shipping-form-address">選擇常用收件人<small>可設立多位常用收件人，請於 <a href="member_address.php" class="prbtn" >修改會員資料</a> 編輯。</small></label>
												<select id="select-addresscity" name="shipping-form-addresscity" class="sm-form-control valid">
													<option value="">請選擇收件人資訊或重新填寫以下資訊</option>
													@foreach($addressname as $k=>$v)
															<option value="{{$addressid[$k]}}">{{$v}}</option>
													@endforeach
												</select>
											</div>

											<div class="col-12 form-group">
												<label for="template-contactform-name">收件人姓名 <small>*</small></label>
												<input type="text" id="recipient-name" name="name" value="" class="sm-form-control required" placeholder="請填寫真實姓名...">
											</div>
											
											<div class="col-12 form-group mb-0">
												<label for="shipping-form-address">收件人地址</label>
											</div>
											<div class="col-md-4 form-group">
												<input type="text" id="addressnumber" name="addressnumber" value="" class="sm-form-control" placeholder="郵遞區號">
											</div>
											<div class="col-md-4 form-group">
												<select id="addresscity" name="addresscity" class="sm-form-control valid">
													<option value="">請選擇縣市</option>
													{!!$a!!}
												</select>
											</div>
											<div class="col-md-4 form-group">
												<select id="addressarea" name="addressarea" class="sm-form-control valid">
													<option value="">請選擇區域</option>
												</select>
											</div>

											<div class="col-md-12 form-group">
												<input type="text" id="addressstreet" name="addressstreet" value="" class="sm-form-control" placeholder="請選擇街道">
											</div>
			
											<div class="col-12 form-group">
												<label for="template-contactform-phone">電話號碼</label>
												<input type="text" id="recipient-phone" name="phone" value="" class="sm-form-control valid">
											</div>
			
											<div class="col-12 form-group">
												<label class="control control--checkbox mb-0">加入常用地址
													<input type="checkbox" id="commonaddress">
													<input type="hidden" id="addaddress" name="addaddress" value="dontadd">
													<div class="control__indicator"></div>
												</label>
											</div>
											
											<!--<input type="hidden" name="total" id="formtt" value="">
											<input type="hidden" name="ems" value="">
											<input type="hidden" name="couponprice" value="">-->
										</form>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-5 ">
							<div class="mb-3">
								<div class="choutbox">
									<h4>請選擇付款方式</h4>

									<div class="table-responsive">
										<table class="table cart cart-pay">
											<tbody>
												<tr class="cart_item">
													<td class="cart-product-name">
														
														<label class="control control--radio">儲值金扣款(帳戶餘額:NT. {{$balance->balance}})
															<input id="storedvalue" type="radio" name="radio" checked="checked"/>
															<div class="control__indicator"></div>
														</label>

													</td>
													<td class="cart-product-name">
														<label class="control control--radio">信用卡線上付款(須另外支付信用卡手續費)&nbsp;<a class="t_highlight" href="shoppingprocess.php" target="_blank"><i class="far fa-question-circle"></i>&nbsp;<small>說明</small></a>
															<input id="credit" type="radio" name="radio"/>
															<div class="control__indicator"></div>
														</label>
													</td>		
												</tr>
											
												<tr class="cart_item">
													<td class="cart-product-name">
														<p class="t_didi_t mb-0"><img src="images/checksafe.png" alt="">資訊安全及保護<br><small>didipick為保護你的付款資訊，我們將以SSL加密方式保障你的隱私，請安心使用。</small></p>
													</td>
												</tr>
												
											</tbody>

										</table>
									</div>
								</div>
							</div>

							<div class="mb-3">
								<div class="choutbox">
									<h4>訂單摘要</h4>

									<div class="table-responsive">
										<table class="table cart cart-totals">
											<tbody>
												<tr class="cart_item">
													<td class="cart-product-name">
														<strong>小計</strong>
													</td>

													<td class="cart-product-name">
														<span class="amount"><small>NT.</small><span id="price">{{$total}}</span></span>
													</td>
												</tr>
												<!--<tr class="cart_item">
													<td class="cart-product-name">
														<strong>國際運費</strong>
													</td>

													<td class="cart-product-name">
														<span class="amount"><small>NT.</small><span id="freight"> </span></span>
													</td>
												</tr>
												<tr class="cart_item">
													<td class="cart-product-name">
														<strong>刷卡手續費</strong>
													</td>

													<td class="cart-product-name">
														<span class="amount"><small>NT.</small><span id="cardmoney"> 60</span></span>
													</td>
												</tr>-->
												<tr class="cart_item">
													<td class="cart-product-name">
														<strong>使用優惠碼</strong>
													</td>

													<td class="cart-product-name">
														<span class="amount t_highlight"><small>-NT.</small> <span id="couponprice">0</span></span>
														<small id="ccode"><span>&emsp;(優惠碼:<span id="couponnamecode">abcd123</span>)</small>
													</span>
													</td>
												</tr>
												
												<tr class="cart_item">
													<td class="cart-product-name">
														<strong>國際運費</strong>
													</td>

													<td class="cart-product-name">
														<span class="amount"><small>NT.</small><span id="ems">{{$emsprice}}</span><small><span>&emsp;(總重:{{$weight}} kg)</small></span></span>
													</td>
												</tr>
												<tr>
													<td class="cart-product-name">
														<strong>合計</strong>
													</td>

													<td class="cart-product-name">
														<span class="amount color lead"><small>NT.</small> <strong id="total">{{$total+$emsprice}}</strong></span>
													</td>
												</tr>
											</tbody>

										</table>
										<!-- <div class="center checkoutbtn">
											<a href="#" class="button button-3d m-0">前往結帳</a>
										</div> -->
									</div>
								</div>
							</div>

							

							<div class="mb-3">
								

						
			
									<div id="graybutton" class="text-center mt-3" style="display:">
										<a class="button button-3d m-0 checkokbtn" style="background-color:gray">提交訂單，確認付款 ⇒</a>
									</div>
									<div class="text-center mt-3" style="display:none" id="sorder">
										<a id="send-order" class="button button-3d m-0 checkokbtn">提交訂單，確認付款 ⇒</a>
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
		$(document).ready(function(){
			c = $("#couponprice").text();
			if(c == 0){
				$("#ccode").hide();
			}
		});
			$("#addresscity").change(function(){
				area = $("#addresscity").val();
				var type = "area";
				var type2 = "f_zipcode";
				if(area == 0){
					$("#addressarea").html("<option value='0'>請選擇區域</option>");
					$("#addressnumber").val('');
				}else{
					$.ajax({
						type:"GET",
						url:"/select_area",
						data:{
							type:type,
							area:area
						},
						success:function(resp){
							//alert(resp);
							$("#addressarea").html(resp);
						}
					});
				}
					$.ajax({
						type:"GET",
						url:"/select_area",
						data:{
							type:type2,
							area:area
						},
						success:function(resp){
							$("#addressnumber").val(resp);
						}
					});
			});
			
			$("#addressarea").change(function(){
				area = $("#addresscity").val();
				area2 = $("#addressarea").val();
				var type3 = "zipcode";
				$.ajax({
					type:"GET",
					url:"select_area",
					data:{
						type:type3,
						area:area,
						area2:area2
					},
					success:function(resp){
						$("#addressnumber").val(resp);
					}
				});
			});


			$("#recipient-phone").blur(function(){
				phone = $("#recipient-phone").val();
				var checkphone = /^09[0-9]{8}$/;
				if(!checkphone.test(phone)){
					if(phone!=""){
						alert('電話號碼格式錯誤');
						$("#recipient-phone").val("");
						$("#graybutton").show();
						$("#sorder").hide();
					}
				}
			});


			$("#select-addresscity").change(function(){
				addressdata = $("#select-addresscity").val();
				if(addressdata !=""){
					$.ajax({
						type:"GET",
						url:"/common_address",
						data:{data:addressdata, type:"name"},
						async: false,
						success:function(resp){
							//alert(resp);
							name = resp;
						}
					});
					$.ajax({
						type:"GET",
						url:"/common_address",
						data:{data:addressdata, type:"zipcode"},
						async: false,
						success:function(resp){
							zipcode = resp;
						}
					});
					$.ajax({
						type:"GET",
						url:"/common_address",
						data:{data:addressdata, type:"city"},
						async: false,
						success:function(resp){
							city = resp;
						}
					});
					$.ajax({
						type:"GET",
						url:"/common_address",
						data:{data:addressdata, type:"area2"},
						async: false,
						success:function(resp){
							country = resp;
						}
					});
					$.ajax({
						type:"GET",
						url:"/common_address",
						data:{data:addressdata, type:"address"},
						async: false,
						success:function(resp){
							address = resp;
						}
					});
					$.ajax({
						type:"GET",
						url:"/common_address",
						data:{data:addressdata, type:"mob"},
						async: false,
						success:function(resp){
							mob = resp;
						}
					});
					$("#recipient-name").val(name);
					$("#addressnumber").val(zipcode);
					$("#addresscity").html(city);
					$("#addressarea").html(country);
					$("#addressstreet").val(address);
					$("#recipient-phone").val(mob);
					$("#mobform").val(mob);
					$("#graybutton").hide();
					$("#sorder").show();
				}else{
					$("#recipient-name").val("");
					$("#addressnumber").val("");
					$("#addresscity").val("");
					$("#addressarea").html("");
					$("#addressstreet").val("");
					$("#recipient-phone").val("");
					$("#graybutton").toggle();
					$("#sorder").toggle();
				}
				
			});

			$("#recipient-name").change(function(){
				name = $("#recipient-name").val();
				zipcode = $("#addressnumber").val();
				cityarea = $("#addresscity").val()+$("#addressarea").val();
				address = $("#addressstreet").val();
				mob = $("#recipient-phone").val();
				if(name==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else if(zipcode==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else if(cityarea==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else if(address==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else if(mob==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else{
					$("#graybutton").hide();
					$("#sorder").show();
				}
			});
			$("#addresscity").change(function(){
				name = $("#recipient-name").val();
				zipcode = $("#addressnumber").val();
				cityarea = $("#addresscity").val()+$("#addressarea").val();
				address = $("#addressstreet").val();
				mob = $("#recipient-phone").val();
				if(name==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else if(zipcode==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else if(cityarea==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else if(address==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else if(mob==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else{
					$("#graybutton").hide();
					$("#sorder").show();
				}
			});
			$("#addressarea").change(function(){
				name = $("#recipient-name").val();
				zipcode = $("#addressnumber").val();
				cityarea = $("#addresscity").val()+$("#addressarea").val();
				address = $("#addressstreet").val();
				mob = $("#recipient-phone").val();
				if(name==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else if(zipcode==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else if(cityarea==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else if(address==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else if(mob==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else{
					$("#graybutton").hide();
					$("#sorder").show();
				}
			});
			$("#addressstreet").change(function(){
				name = $("#recipient-name").val();
				zipcode = $("#addressnumber").val();
				cityarea = $("#addresscity").val()+$("#addressarea").val();
				address = $("#addressstreet").val();
				mob = $("#recipient-phone").val();
				if(name==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else if(zipcode==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else if(cityarea==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else if(address==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else if(mob==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else{
					$("#graybutton").hide();
					$("#sorder").show();
				}
			});
			$("#recipient-phone").change(function(){
				name = $("#recipient-name").val();
				zipcode = $("#addressnumber").val();
				cityarea = $("#addresscity").val()+$("#addressarea").val();
				address = $("#addressstreet").val();
				mob = $("#recipient-phone").val();
				if(name==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else if(zipcode==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else if(cityarea==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else if(address==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else if(mob==""){
					$("#graybutton").show();
					$("#sorder").hide();
				}else{
					$("#graybutton").hide();
					$("#sorder").show();
				}
			});

			$("#send-order").click(function(){
					name = $("#recipient-name").val();
					zipcode = $("#addressnumber").val();
					cityarea = $("#addresscity").val()+$("#addressarea").val();
					address = $("#addressstreet").val();
					mob = $("#recipient-phone").val();
					if(name==""){
						alert('請填寫收件人姓名');
					}else if(zipcode==""){
						alert('請填寫完整收件地址');
					}else if(cityarea==""){
						alert('請填寫完整收件地址');
					}else if(address==""){
						alert('請填寫完整收件地址');
					}else if(mob==""){
						alert('請填寫收件人電話號碼');
					}else{
						if($("#commonaddress").prop("checked")==true){
							/*name = $("#recipient-name").val();
							zipcode = $("#addressnumber").val();
							area = $("#addresscity").val();
							area2 = $("#addressarea").val();
							cityarea = $("#addresscity").val()+$("#addressarea").val();
							address = $("#addressstreet").val();
							mob = $("#recipient-phone").val();
							$.ajax({
								type:"GET",
								url:"add_common_address.php",
								data:{name:name, zipcode:zipcode, area:area, area2:area2, address:address, mob:mob, type:"memberaddcommonaddress"},
								success:function(resp){
								}
							});*/
							addaddress = 'true';
						}else{
							addaddress = 'false';
						}

						if($("#storedvalue").prop("checked") == true){
							name = $("#recipient-name").val();
							zipcode = $("#addressnumber").val();
							area = $("#addresscity").val();
							area2 = $("#addressarea").val();
							city = $("#addresscity").val();
							area = $("#addressarea").val();
							address = $("#addressstreet").val();
							mob = $("#recipient-phone").val();
							ems = $("#ems").text();
							couname = $("#couponnamecode").text();
							$.ajax({
								type:"GET",
								url:"/order_action",
								data:{name:name, zipcode:zipcode, city:city, area:area, address:address, mob:mob, ems:ems, addaddress:addaddress},
								success:function(resp){
									if(resp!="儲值金餘額不足"){
										if(resp!="商品剩餘數量不足"){
											window.location='/checkok/'+resp;
											//alert(resp);
										}else{
											alert(resp);
										}
									}else{
										alert(resp);
									}
									
								}
							});
						}else{
							$.ajax({
								type:"GET",
								url:"/checkquantitycredit",
								data:{},
								success:function(resp){
									//alert(resp);
									if(resp == '商品剩餘數量不足'){
										alert(resp);
									}else{
										$("#creditpay").submit();
									}
								}
							});
						}
					}
				});
			

			$("#commonaddress").click(function(){
				if($("#commonaddress").prop("checked")==true){
					name = $("#recipient-name").val();
					zipcode = $("#addressnumber").val();
					cityarea = $("#addresscity").val()+$("#addressarea").val();
					address = $("#addressstreet").val();
					mob = $("#recipient-phone").val();
					if(name==""){
						alert('請填寫收件人姓名');
						$("#commonaddress").prop("checked", false);
					}else if(zipcode==""){
						alert('請填寫完整收件地址');
						$("#commonaddress").prop("checked", false);
					}else if(cityarea==""){
						alert('請填寫完整收件地址');
						$("#commonaddress").prop("checked", false);
					}else if(address==""){
						alert('請填寫完整收件地址');
						$("#commonaddress").prop("checked", false);
					}else if(mob==""){
						alert('請填寫收件人電話號碼');
						$("#commonaddress").prop("checked", false);
					}else{
						name = $("#recipient-name").val();
						zipcode = $("#addressnumber").val();
						area1 = $("#addresscity").val()
						area2 = $("#addressarea").val();
						address = $("#addressstreet").val();
						mob = $("#recipient-phone").val();
						$.ajax({
							type:"GET",
							url:"/add_common_address",
							data:{name:name, zipcode:zipcode, area1:area1, area2:area2, address:address, mob:mob, type:"checkaddress"},
							success:function(resp){
								if(resp == "已有該地址資料"){
									alert(resp);
									$("#commonaddress").prop("checked", false);
									$("#addaddress").val("dontadd");
								}
							}
						});
						$("#addaddress").val("add");
							
					}
				}else{
					$("#addaddress").val("dontadd");
				}
			});
	</script>

</body>
</html>