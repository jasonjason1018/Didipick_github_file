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

					<div>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">首頁</a></li>
							<li class="breadcrumb-item active" aria-current="page">商品列表</li>
						</ol>
					</div>

					<div class="single-product">
						<div class="product">
							<div class="row gutter-40">

								<div class="col-md-6">
									<div class="product-image">
										<div class="fslider" data-pagi="false" data-arrows="true" data-thumbs="true">
											<div class="flexslider">
												<div class="slider-wrap" data-lightbox="gallery">
												@for($i=1;$i<=6;$i++)
													@php
														$a = 'img'.$i;
													@endphp
													@if($product->$a != '')
														<div class="slide" data-thumb="/storage/{{$product->$a}}"><a href="/storage/{{$product->$a}}" title="" data-lightbox="gallery-item"><img src="/storage/{{$product->$a}}" alt="【第3類醫藥品】資生堂 MOILIP藥用護唇膏 8g"></a></div>
													@endif
												@endfor
												</div>
											</div>
										</div>
										<!--<div class="sale-flash badge badge-danger discount_icon">64折</div>-->
									</div>

								</div>

								<div class="col-md-6 product-desc infodesc">

									<h3>{{$product->name}}</h3>

									<div class="d-flex align-items-center justify-content-between">
										
										@if($product->s_price != $product->o_price)
												<div class="product-price special-price">
											@else
												<div class="product-price">
											@endif
												<ins>
													<small>
													NT.
												</small>
												{{ceil($product->s_price*$rate)}}
											</ins>
											@if($product->s_price != $product->o_price)
												<del>
													<small>
													NT.
												</small>
												{{ceil($product->o_price*$rate)}}
											</del>
											@endif
										</div>
									</div>

									<form class="cart mt-4 mb-3 d-flex justify-content-start align-items-end" method="post" enctype='multipart/form-data'>
										<div class="quantity clearfix">
											<input type="button" value="-" class="minus">
											<input id="product_quantity" type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty" />
											<input type="button" value="+" class="plus">
											<br>
											<input type="hidden" id="product_No" value="{{$product->No}}">
										</div>

										<small style="color: #898988;">庫存僅剩 {{$product->quantity}}</small>

										
									</form>

									<!--<div class="mt-2 mb-2 d-flex justify-content-start align-items-center">
										<i class="icon-eye2"></i> <small class="ml-1">剛剛有 52 人在瀏覽此商品...</small>
									</div>-->

									<div class="product-rating mb-2 mt-2">
										@php
												$star = $product->star;
												$a = explode(',', $star);
											@endphp
											@foreach($a as $k=>$v)
												@for($st=1;$st<=$v;$st++)
													@if($k==0)
														<i class="icon-star3"></i>
													@elseif($k==1)
														<i class="icon-star-half-full"></i>
													@else
														<i class="icon-star-empty"></i>
													@endif
												@endfor
											@endforeach
									</div>
									
									<div class="mt-4 mb-3 d-flex justify-content-start align-items-center">
										@if(Session::has('didipick_login'))
											<button type="submit" class="add-to-cart button m-0 mr-3" id="addcart" onclick="addtocart()">加入購物車</button>
										@else
											<button type="submit" class="add-to-cart button m-0 mr-3" id="addcart" onclick="alert('請先登入');window.location='/didipick_login'">加入購物車</button>
										@endif
										@if(Session::has('didipick_login'))

												<button type="submit" class="add-to-cart button  m-0" id="addfavory" style="display:none">加入慾望清單</button>

												<button type="submit" class="add-to-cart button  m-0" id="addfavory" style="display:">加入慾望清單</button>
										@else
											<button type="submit" class="add-to-cart button  m-0" onclick="alert('請先登入');window.location='/didipick_login'">加入慾望清單</button>
										@endif
									</div>

									<!--<div class="mt-2 mb-2 d-flex justify-content-start align-items-center">
										<span class="mr-1">促銷活動</span>
										<a href="#" class="button button-mini button-border button-circle button-amber">滿＄999免運</a>
										<a href="#" class="button button-mini button-border button-circle button-amber">第2件5折</a>
										<a href="#" class="ml-1 pmore">點我看更多</a>
									</div>-->

									
								
									{!!$product->sku!!}<br>
									{!!$product->brief!!}
									
									<!--<div class="si-share d-flex mt-4">
										<span>分享此項商品</span>
										<div>
											<a href="#" class="social-icon si-borderless">
												<img src="/images/share_fb.svg" alt="">
											</a>
											<a href="#" class="social-icon si-borderless">
												<img src="/images/share_ig.svg" alt="">
											</a>
											<a href="#" class="social-icon si-borderless">
												<img src="/images/share_line.svg" alt="">
											</a>
										</div>
									</div>-->

								</div>

								<div class="w-100 conttext">
									<h3>注意事項:</h3>
									{!!$product->description!!}

								</div>

								<div class="mt-5">

								</div>

							</div>
						</div>
					</div>

					<div class="line"></div>

					<!--<div class="w-100">
						<div class="borline">
							<div class="fancy-title">
								<h4>購買此商品的人還買了:</h4>
							</div>
						
							<div class="ocpropad">
								<div id="oc-products" class="owlbox owl-carousel products-carousel carousel-widget" data-pagi="false" data-items-xs="2" data-items-sm="2" data-items-md="3" data-items-lg="4">

									<div class="oc-item">
										<div class="product probox">
											<div class="product-image">
												<a href="product_info.html"><img src="images/product_img/proimg_1.jpg" alt="資生堂MOILIP藥用護唇膏"></a>
												<div class="addheartbox">
													<i class="icon-heart"></i>
												</div>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="product_info.html">資生堂MOILIP藥用護唇膏</a></h3></div>
												<div class="product-price"><ins><small>NT.</small>300</ins></div>
											</div>
										</div>
									</div>
			
									<div class="oc-item">
										<div class="product probox">
											<div class="product-image">
												<a href="product_info.html"><img src="images/product_img/proimg_2.jpg" alt="Fujiko Ponpon Powder 頭髮專用吸油粉撲"></a>
												<div class="addheartbox">
													<i class="icon-heart"></i>
												</div>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="product_info.html">Fujiko Ponpon Powder 頭髮專用吸油粉撲</a></h3></div>
												<div class="product-price"><ins><small>NT.</small>639</ins></div>
											</div>
										</div>
									</div>

									<div class="oc-item">
										<div class="product probox">
											<div class="product-image">
												<a href="product_info.html"><img src="images/product_img/proimg_3.jpg" alt="EVE止痛藥"></a>
												<div class="addheartbox">
													<i class="icon-heart"></i>
												</div>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="product_info.html">EVE止痛藥</a></h3></div>
												<div class="product-price"><ins><small>NT.</small>272</ins></div>
											</div>
										</div>
									</div>

									<div class="oc-item">
										<div class="product probox">
											<div class="product-image">
												<a href="product_info.html"><img src="images/product_img/proimg_4.jpg" alt="Fujiko Ponpon Powder 頭髮專用吸油粉撲"></a>
												<div class="addheartbox">
													<i class="icon-heart"></i>
												</div>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="product_info.html">Fujiko Ponpon Powder 頭髮專用吸油粉撲</a></h3></div>
												<div class="product-price"><ins><small>NT.</small>639</ins></div>
											</div>
										</div>
									</div>

									<div class="oc-item">
										<div class="product probox">
											<div class="product-image">
												<a href="product_info.html"><img src="images/product_img/proimg_2.jpg" alt="EVE止痛藥"></a>
												<div class="addheartbox">
													<i class="icon-heart"></i>
												</div>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="product_info.html">EVE止痛藥</a></h3></div>
												<div class="product-price"><ins><small>NT.</small>272</ins></div>
											</div>
										</div>
									</div>

									<div class="oc-item">
										<div class="product probox">
											<div class="product-image">
												<a href="product_info.html"><img src="images/product_img/proimg_3.jpg" alt="大馬士革玫瑰髮蠟"></a>
												<div class="addheartbox">
													<i class="icon-heart"></i>
												</div>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="product_info.html">大馬士革玫瑰髮蠟</a></h3></div>
												<div class="product-price"><ins><small>NT.</small>659</ins></div>
											</div>
										</div>
									</div>

									
									

								</div>
							</div>
						</div>
					</div>

					<div class="h_40"></div>

					<div class="w-100">
						<div class="borline">
							<div class="fancy-title">
								<h4>最近瀏覽過的商品:</h4>
							</div>

							<div class="ocpropad">
								<div id="oc-products" class="owlbox owl-carousel products-carousel carousel-widget" data-pagi="false" data-items-xs="2" data-items-sm="2" data-items-md="3" data-items-lg="4">

									<div class="oc-item">
										<div class="product probox">
											<div class="product-image">
												<a href="product_info.html"><img src="images/product_img/proimg_1.jpg" alt="資生堂MOILIP藥用護唇膏"></a>
												<div class="addheartbox">
													<i class="icon-heart"></i>
												</div>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="product_info.html">資生堂MOILIP藥用護唇膏</a></h3></div>
												<div class="product-price"><ins><small>NT.</small>300</ins></div>
											</div>
										</div>
									</div>
			
									<div class="oc-item">
										<div class="product probox">
											<div class="product-image">
												<a href="product_info.html"><img src="images/product_img/proimg_2.jpg" alt="Fujiko Ponpon Powder 頭髮專用吸油粉撲"></a>
												<div class="addheartbox">
													<i class="icon-heart"></i>
												</div>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="product_info.html">Fujiko Ponpon Powder 頭髮專用吸油粉撲</a></h3></div>
												<div class="product-price"><ins><small>NT.</small>639</ins></div>
											</div>
										</div>
									</div>

									<div class="oc-item">
										<div class="product probox">
											<div class="product-image">
												<a href="product_info.html"><img src="images/product_img/proimg_3.jpg" alt="EVE止痛藥"></a>
												<div class="addheartbox">
													<i class="icon-heart"></i>
												</div>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="product_info.html">EVE止痛藥</a></h3></div>
												<div class="product-price"><ins><small>NT.</small>272</ins></div>
											</div>
										</div>
									</div>

									<div class="oc-item">
										<div class="product probox">
											<div class="product-image">
												<a href="product_info.html"><img src="images/product_img/proimg_4.jpg" alt="Fujiko Ponpon Powder 頭髮專用吸油粉撲"></a>
												<div class="addheartbox">
													<i class="icon-heart"></i>
												</div>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="product_info.html">Fujiko Ponpon Powder 頭髮專用吸油粉撲</a></h3></div>
												<div class="product-price"><ins><small>NT.</small>639</ins></div>
											</div>
										</div>
									</div>

									<div class="oc-item">
										<div class="product probox">
											<div class="product-image">
												<a href="product_info.html"><img src="images/product_img/proimg_2.jpg" alt="EVE止痛藥"></a>
												<div class="addheartbox">
													<i class="icon-heart"></i>
												</div>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="product_info.html">EVE止痛藥</a></h3></div>
												<div class="product-price"><ins><small>NT.</small>272</ins></div>
											</div>
										</div>
									</div>

									<div class="oc-item">
										<div class="product probox">
											<div class="product-image">
												<a href="product_info.html"><img src="images/product_img/proimg_3.jpg" alt="大馬士革玫瑰髮蠟"></a>
												<div class="addheartbox">
													<i class="icon-heart"></i>
												</div>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="product_info.html">大馬士革玫瑰髮蠟</a></h3></div>
												<div class="product-price"><ins><small>NT.</small>659</ins></div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>-->

					<div class="clear"></div>
		
				</div>
				
			</div>
		</section>

		
		@include('include_php.footer_inc')

	</div>

	
	<div id="gotoTop"><img src="/images/gotop.png" alt=""></div>

	<script src="/js/jquery.js"></script>
	<script src="/js/plugins.min.js"></script>
	<script src="/js/acfavory.js"></script>
	<script src="/js/functions.js"></script>


</body>
</html>