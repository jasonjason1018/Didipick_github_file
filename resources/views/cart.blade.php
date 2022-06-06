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

		

		@include('include_php.header_inc')

	
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
							<li class="col-xs-3 col-sm-3 col-lg-3 active">
								<a href="javascript:void(0)" class="i-circled i-alt mx-auto bg-color">1</a>
								<h5>購物車</h5>
							</li>
							<li class="col-xs-3 col-sm-3 col-lg-3">
								<a href="javascript:void(0)" class="i-bordered i-circled mx-auto">2</a>
								<h5>填寫資料</h5>
							</li><li class="col-xs-3 col-sm-3 col-lg-3">
								<a href="javascript:void(0)" class="i-bordered i-circled mx-auto">3</a>
								<h5>訂購完成</h5>
							</li>
						</ul>
					</div>

					<div class="alert alert-info cartalert">
						<i class="icon-line2-bag"></i><!--【開幕慶】2/28 前全站類別商品，滿 NT$1,500<strong>立即免運！--></strong>
					</div>

					<div class="tablescoll mb-4">
						<table class="table cart mb-2">
							<thead>
								<tr style="border-top: 2px solid #5d5b5b;">
									<th class="cart-product-checkall">
										@php
											$cartitemsize = count($cartitem);
										@endphp
										<label class="control control--checkbox">
											<input id="check_all" type="checkbox" onclick="check_all('{{count($cartitem)}}')" checked="checked"/>
											<div class="control__indicator thtopcheck"></div>
										</label>
									</th>
									<th class="cart-product-thumbnail">&nbsp;</th>
									<th class="cart-product-name">商品名稱</th>
									<th class="cart-product-weight">重量</th>
									<th class="cart-product-price">價格</th>
									<th class="cart-product-quantity">數量</th>
									<th class="cart-product-subtotal">總計</th>
									<th class="cart-product-remove">&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								@php
									$totalweight = 0;
									$totalprice = 0;
								@endphp
								@foreach($cartitem as $k=>$cartitem)
								<tr class="cart_item">
									<td class="cart-product-checkall">
										<label class="control control--checkbox">
											<input type="checkbox" name="user_active_col[]" onclick="countprice('{{$k}}', '{{$cartitemsize}}')" id="item_checkbox{{$k}}" checked="checked"/>
											<div class="control__indicator"></div>
										</label>
									</td>
									<td class="cart-product-thumbnail">
										<a href="/didipick_product_info/{{$cartitem->sno}}"><img width="64" height="64" src="/storage/{{$cartitem->img1}}" alt="{{$cartitem->name}}"></a>
									</td>

									<td class="cart-product-name">
										<a href="/didipick_product_info/{{$cartitem->sno}}" id="product_name{{$k}}">{{$cartitem->name}}</a>
									</td>

									<td class="cart-product-price">
										<span id="weight{{$k}}">{{$cartitem->weight}}</span>kg
									</td>


									<td class="cart-product-price">
										<span class="amount t_highlight">
											NT.{{ceil($cartitem->s_price*$rate)}}&nbsp;
											@if($cartitem->s_price != $cartitem->o_price)
												<small style="color:#9E9E9D;text-decoration:line-through">
													NT. {{ceil($cartitem->o_price*$rate)}}
												</small>
											@endif
										</span>
									</td>

									<td class="cart-product-price" style="display:none">
										<span class="amount" style="display:none">NT.<span id="price{{$k}}">{{ceil($cartitem->s_price*$rate)}}</span></span>
										<span class="amount t_highlight">NT.300<small>NT. 746</small></span>
									</td>

									<td class="cart-product-quantity">
										<div class="quantity">
											@foreach($cartdata as $cartv)
												@if($cartv->product_No == $cartitem->No)
												@php
													$thisquantity = $cartv->quantity;
													$thisid = $cartv->id;
												@endphp
												<input type="button" value="-" class="minus" id="minus" onclick="minus('{{$k}}', '{{$cartv->id}}')">
												<input type="text" name="quantity" class="qty" id="quantity{{$k}}" value="{{$cartv->quantity}}" onblur="input_quantity('{{$k}}', '{{$cartv->id}}', '{{$cartitemsize}}')"/>
												<input type="button" value="+" class="plus" onclick="plus('{{$k}}', '{{$cartv->id}}')">
										</div>
									</td>

									<td class="cart-product-subtotal">
										<span class="amount">NT.<span id="num{{$k}}">{{ceil($cartitem->s_price*$rate) * $cartv->quantity}}</span></span>
											@endif
										@endforeach
									</td>
									<td class="cart-product-remove">
										<a href="/removecartitem/{{$thisid}}" class="remove" title="Remove"><i class="icon-trash2"></i></a>
									</td>
								</tr>
								@php
									$totalweight = $totalweight+$cartitem->weight*$thisquantity;
									$totalprice = $totalprice+ceil($cartitem->s_price*$rate) * $thisquantity;
								@endphp
								@endforeach
								
								
							</tbody>

						</table>
					</div>

					<div class="codebox">
						<div class=" codeleft">
							<input id="couponcode" type="text" value="" class="sm-form-control" placeholder="輸入優惠碼..." />
						</div>
						<div class="coderight" id="couponbtn">
							<a onclick="coupon()" class="button button-3d m-0">確認輸入</a>
						</div>
					</div>

					<div class="line"></div>

					<div class="row col-mb-30">
						<div class="col-lg-8">
							
							<div class="w-100">
								<div class="borline">
									<div class="fancy-title">
										<h4 class="t_didi_t">您的慾望清單:</h4>
									</div>
									<div id="oc-products" class="owlbox owl-carousel products-carousel carousel-widget" data-pagi="false" data-items-xs="2" data-items-sm="2" data-items-md="3" data-items-lg="4">
										
										@foreach($favory as $k=>$favoryv)
											@if(!in_array($favoryv->No, $incart))
												<div class="oc-item align_c">
													<div class="product probox">
														<div class="product-image">
															<a href="#"><img src="/storage/{{$favoryv->img1}}" alt="{{$favoryv->name}}"></a>
															
														</div>
														<div class="product-desc center">
															<div class="product-title"><h3><a href="/didipick_product_info/{{$favoryv->sno}}" id="pname_f{{$k}}">{{$favoryv->name}}</a></h3></div>
															<div class="product-price"><ins><small>NT.</small>{{ceil($favoryv->s_price*$rate)}}</ins></div>
														</div>
														<div class="quantity">
															<input type="button" value="-" class="minus">
															<input type="text" name="quantity" id="quantity_f{{$k}}" value="1" class="qty" />
															<input type="button" value="+" class="plus">
														</div>
														<a onclick="favoryaddtocart('{{$k}}', '{{$favoryv->No}}')">
															<div class="button button-3d m-0">加入購物車</div>
														</a>
													</div>
												</div>
											@endif
										@endforeach
										
									</div>
	
								</div>
							</div>
						</div>

						<div class="col-lg-4 ">
							<div class="choutbox">
								<h4>訂單摘要</h4>

								<div class="table-responsive">
									<table class="table cart cart-totals">
										<tbody>
											<tr class="cart_item">
												<td class="cart-product-name">
													<strong>重量</strong>
												</td>

												<td class="cart-product-name">
													<span class="amount color lead"><strong><font id="totalweight">{{$totalweight}}</font>kg</strong></span>
												</td>
											</tr>

											<tr class="cart_item">
												<td class="cart-product-name">
													<strong>優惠券</strong>
												</td>

												<td class="cart-product-name t_highlight">
													<span class="amount color lead"><small class=" t_highlight">-NT.</small> <strong id="coupon" class=" t_highlight">0</strong></span>
												</td>
											</tr>
											
											<tr class="cart_item">
												<td class="cart-product-name">
													<strong>合計</strong>
												</td>

												<td class="cart-product-name">
													<span class="amount color lead"><small>NT.</small> <strong id="total">{{$totalprice}}</strong></span>
												</td>
											</tr>
										</tbody>

									</table>
									<div class="center checkoutbtn">
										<a onclick="check_out('{{$cartitemsize}}')" class="button button-3d m-0">前往結帳</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<input type="hidden" id="couponnum">
					

		
				</div>


	
				<div class="clear"></div>

				
			</div>
		</section>

		
		@include('include_php.footer_inc')
	</div>

	
	<div id="gotoTop"><img src="images/gotop.png" alt=""></div>

	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>
	<script src="js/cartfunction.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/3.16.0/math.min.js"></script>

	<script src="js/functions.js"></script>
	<script type="text/javascript">
		$('.liked,.keep').click(function(){
			$(this).toggleClass('clicked');
		});
	</script>
	
	<script type="text/javascript">
		$('.liked,.keep').click(function(){
			$(this).toggleClass('clicked');
		});
		$(document).ready(function(){
			weight = $("#totalweight").text();
			if(weight>30){
				$("#totalweight").css('color', 'red');
			}
		});
	</script>

</body>
</html>