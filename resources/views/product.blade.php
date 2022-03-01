@include('include_php.css_inc')

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

		

		@include('include_php.header_inc')

		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="heading_box center headw_md">
						<p>ディディピック !</p>
						<h3>提供一站式日貨<span>代購＆直送</span>，日本同步限定品<span>直覺</span>買！</h3>
					</div>
					<div class="clear"></div>
					<div class="h_20"></div>

					<div>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">首頁</a></li>
							<li class="breadcrumb-item active" aria-current="page">商品列表</li>
						</ol>
					</div>

					<div id="page-menu" class="no-sticky mb-4 pageleftmenubox MobileOnly">
						<div id="page-menu-wrap">
							<div class="container">
								<div class="page-menu-row">

									<div class="page-menu-title ">所有分類商品</div>

									<nav class="page-menu-nav">
										<ul class="page-menu-container">
											<li class="page-menu-item"><a href="#" title="全部商品"><img src="images/product_l_icon/product_l_all_w.svg" alt="">全部商品</a></li>
											<li class="page-menu-item"><a href="#" title="保健藥品"><img src="images/product_l_icon/product_l_medicine_w.svg" alt="">保健藥品</a></li>
											<li class="page-menu-item"><a href="#" title="美妝"><img src="images/product_l_icon/product_l_makeups_w.svg" alt="">美妝</a></li>
											<li class="page-menu-item"><a href="#" title="保養"><img src="images/product_l_icon/product_l_maintenance_w.svg" alt="">保養</a></li>
											<li class="page-menu-item"><a href="#" title="美髮"><img src="images/product_l_icon/product_l_hair_w.svg" alt="">美髮</a></li>
											<li class="page-menu-item"><a href="#" title="生活雜貨"><img src="images/product_l_icon/product_l_life_w.svg" alt="">生活雜貨</a></li>
										</ul>
									</nav>

									<div id="page-menu-trigger" class="leftmenu"><i class="icon-line-more-vertical animated infinite pulse"></i></div>

								</div>
							</div>
						</div>
					</div>

					<div class="row gutter-40 col-mb-40">
						
						<div class="postcontent col-lg-9 order-lg-last">

							
							<div id="shop" class="shop row grid-container gutter-20" data-layout="fitRows">

								<div class="product probox col-md-3 col-sm-6 col-12">
									<div class="product-image">
										<a href="product_info.html"><img src="images/product_img/proimg_1.jpg" alt="資生堂MOILIP藥用護唇膏"></a>
										<div class="addheartbox">
											<img src="images/product_heart_add.png" alt="" class="active">
										</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.html">資生堂MOILIP藥用護唇膏</a></h3></div>
										<div class="product-price"><ins><small>NT.</small>300</ins></div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-half-full"></i>
										</div>
									</div>
								</div>

								<div class="product probox col-md-3 col-sm-6 col-12">
									<div class="product-image">
										<a href="product_info.html"><img src="images/product_img/proimg_2.jpg" alt="Fujiko Ponpon Powder 頭髮專用吸油粉撲"></a>
										<div class="addheartbox">
											<img src="images/product_heart.png" alt="">
										</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.html">Fujiko Ponpon Powder 頭髮專用吸油粉撲</a></h3></div>
										<div class="product-price"><ins><small>NT.</small>639</ins></div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-half-full"></i>
										</div>
									</div>
								</div>

								<div class="product probox col-md-3 col-sm-6 col-12">
									<div class="product-image">
										<a href="product_info.html"><img src="images/product_img/proimg_3.jpg" alt="EVE止痛藥"></a>
										<div class="addheartbox">
											<img src="images/product_heart.png" alt="">
										</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.html">EVE止痛藥</a></h3></div>
										<div class="product-price"><ins><small>NT.</small>272</ins></div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-half-full"></i>
										</div>
									</div>
								</div>

								<div class="product probox col-md-3 col-sm-6 col-12">
									<div class="product-image">
										<a href="product_info.html"><img src="images/product_img/proimg_2.jpg" alt="Fujiko Ponpon Powder 頭髮專用吸油粉撲"></a>
										<div class="addheartbox">
											<img src="images/product_heart.png" alt="">
										</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.html">Fujiko Ponpon Powder 頭髮專用吸油粉撲</a></h3></div>
										<div class="product-price"><ins><small>NT.</small>639</ins></div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-half-full"></i>
										</div>
									</div>
								</div>

								<div class="product probox col-md-3 col-sm-6 col-12">
									<div class="product-image">
										<a href="product_info.html"><img src="images/product_img/proimg_3.jpg" alt="EVE止痛藥"></a>
										<div class="addheartbox">
											<img src="images/product_heart.png" alt="">
										</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.html">EVE止痛藥</a></h3></div>
										<div class="product-price"><ins><small>NT.</small>272</ins></div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-half-full"></i>
										</div>
									</div>
								</div>

								<div class="product probox col-md-3 col-sm-6 col-12">
									<div class="product-image">
										<a href="product_info.html"><img src="images/product_img/proimg_1.jpg" alt="資生堂MOILIP藥用護唇膏"></a>
										<div class="addheartbox">
											<img src="images/product_heart.png" alt="">
										</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.html">資生堂MOILIP藥用護唇膏</a></h3></div>
										<div class="product-price"><ins><small>NT.</small>300</ins></div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-half-full"></i>
										</div>
									</div>
								</div>

								<div class="product probox col-md-3 col-sm-6 col-12">
									<div class="product-image">
										<a href="product_info.html"><img src="images/product_img/proimg_3.jpg" alt="EVE止痛藥"></a>
										<div class="addheartbox">
											<img src="images/product_heart.png" alt="">
										</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.html">EVE止痛藥</a></h3></div>
										<div class="product-price"><ins><small>NT.</small>272</ins></div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-half-full"></i>
										</div>
									</div>
								</div>

								<div class="product probox col-md-3 col-sm-6 col-12">
									<div class="product-image">
										<a href="product_info.html"><img src="images/product_img/proimg_2.jpg" alt="Fujiko Ponpon Powder 頭髮專用吸油粉撲"></a>
										<div class="addheartbox">
											<img src="images/product_heart.png" alt="">
										</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.html">Fujiko Ponpon Powder 頭髮專用吸油粉撲</a></h3></div>
										<div class="product-price"><ins><small>NT.</small>639</ins></div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-half-full"></i>
										</div>
									</div>
								</div>

								<div class="product probox col-md-3 col-sm-6 col-12">
									<div class="product-image">
										<a href="product_info.html"><img src="images/product_img/proimg_1.jpg" alt="資生堂MOILIP藥用護唇膏"></a>
										<div class="addheartbox">
											<img src="images/product_heart.png" alt="">
										</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.html">資生堂MOILIP藥用護唇膏</a></h3></div>
										<div class="product-price"><ins><small>NT.</small>300</ins></div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-half-full"></i>
										</div>
									</div>
								</div>

								<div class="product probox col-md-3 col-sm-6 col-12">
									<div class="product-image">
										<a href="product_info.html"><img src="images/product_img/proimg_3.jpg" alt="EVE止痛藥"></a>
										<div class="addheartbox">
											<img src="images/product_heart.png" alt="">
										</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.html">EVE止痛藥</a></h3></div>
										<div class="product-price"><ins><small>NT.</small>272</ins></div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-half-full"></i>
										</div>
									</div>
								</div>

								<div class="product probox col-md-3 col-sm-6 col-12">
									<div class="product-image">
										<a href="product_info.html"><img src="images/product_img/proimg_2.jpg" alt="Fujiko Ponpon Powder 頭髮專用吸油粉撲"></a>
										<div class="addheartbox">
											<img src="images/product_heart.png" alt="">
										</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.html">Fujiko Ponpon Powder 頭髮專用吸油粉撲</a></h3></div>
										<div class="product-price"><ins><small>NT.</small>639</ins></div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-half-full"></i>
										</div>
									</div>
								</div>

								<div class="product probox col-md-3 col-sm-6 col-12">
									<div class="product-image">
										<a href="product_info.html"><img src="images/product_img/proimg_1.jpg" alt="資生堂MOILIP藥用護唇膏"></a>
										<div class="addheartbox">
											<img src="images/product_heart.png" alt="">
										</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.html">資生堂MOILIP藥用護唇膏</a></h3></div>
										<div class="product-price"><ins><small>NT.</small>300</ins></div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-half-full"></i>
										</div>
									</div>
								</div>

								<div class="product probox col-md-3 col-sm-6 col-12">
									<div class="product-image">
										<a href="product_info.html"><img src="images/product_img/proimg_3.jpg" alt="EVE止痛藥"></a>
										<div class="addheartbox">
											<img src="images/product_heart.png" alt="">
										</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.html">EVE止痛藥</a></h3></div>
										<div class="product-price"><ins><small>NT.</small>272</ins></div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-half-full"></i>
										</div>
									</div>
								</div>

								<div class="product probox col-md-3 col-sm-6 col-12">
									<div class="product-image">
										<a href="product_info.html"><img src="images/product_img/proimg_2.jpg" alt="Fujiko Ponpon Powder 頭髮專用吸油粉撲"></a>
										<div class="addheartbox">
											<img src="images/product_heart.png" alt="">
										</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.html">Fujiko Ponpon Powder 頭髮專用吸油粉撲</a></h3></div>
										<div class="product-price"><ins><small>NT.</small>639</ins></div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-half-full"></i>
										</div>
									</div>
								</div>

								<div class="product probox col-md-3 col-sm-6 col-12">
									<div class="product-image">
										<a href="product_info.html"><img src="images/product_img/proimg_1.jpg" alt="資生堂MOILIP藥用護唇膏"></a>
										<div class="addheartbox">
											<img src="images/product_heart.png" alt="">
										</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.html">資生堂MOILIP藥用護唇膏</a></h3></div>
										<div class="product-price"><ins><small>NT.</small>300</ins></div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-half-full"></i>
										</div>
									</div>
								</div>

								<div class="product probox col-md-3 col-sm-6 col-12">
									<div class="product-image">
										<a href="product_info.html"><img src="images/product_img/proimg_3.jpg" alt="EVE止痛藥"></a>
										<div class="addheartbox">
											<img src="images/product_heart.png" alt="">
										</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.html">EVE止痛藥</a></h3></div>
										<div class="product-price"><ins><small>NT.</small>272</ins></div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-half-full"></i>
										</div>
									</div>
								</div>

								


							</div>

							<div class="clear"></div>


							<div class="center">
								<ul class="pagination pagination-transparent pagination-circle">
									<li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item"><a class="page-link" href="#">5</a></li>
									<li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
								</ul>
							</div>
						</div>
						
						
						<div class="sidebar col-lg-3">
							<div class="sidebar-widgets-wrap">

								<div class="widget widget_links product_lbox PCOnly">

									<h4>所有分類商品</h4>
									<ul>
										<li><a href="#" title="全部商品"><img src="images/product_l_icon/product_l_all.svg" alt="">全部商品</a></li>
										<li><a href="#" title="保健品"><img src="images/product_l_icon/product_l_medicine.svg" alt="">保健品</a></li>
										<li><a href="#" title="美妝"><img src="images/product_l_icon/product_l_makeups.svg" alt="">美妝</a></li>
										<li><a href="#" title="保養"><img src="images/product_l_icon/product_l_maintenance.svg" alt="">保養</a></li>
										<li><a href="#" title="美髮"><img src="images/product_l_icon/product_l_hair.svg" alt="">美髮</a></li>
										<li><a href="#" title="生活雜貨"><img src="images/product_l_icon/product_l_life.svg" alt="">生活雜貨</a></li>
									</ul>

								</div>

								<div class="widget check_box">

									<h4>熱銷品牌</h4>
									<div class="cb_pad">
										<label class="control control--checkbox">SHISEIDO資生堂
											<input type="checkbox" checked="checked"/>
											<div class="control__indicator"></div>
										</label>
									</div>
									<div class="cb_pad">
										<label class="control control--checkbox">FUJIKO
											<input type="checkbox"/>
											<div class="control__indicator"></div>
										</label>
									</div>
									<div class="cb_pad">
										<label class="control control--checkbox">COSME DECORTÉ/黛珂
											<input type="checkbox"/>
											<div class="control__indicator"></div>
										</label>
									</div>
									<div class="cb_pad">
										<label class="control control--checkbox">ADENOVITAL育髮系列
											<input type="checkbox"/>
											<div class="control__indicator"></div>
										</label>
									</div>
									<div class="cb_pad">
										<label class="control control--checkbox">HADA LABO
											<input type="checkbox"/>
											<div class="control__indicator"></div>
										</label>
									</div>
									<div class="cb_pad">
										<label class="control control--checkbox">JEMILE FRAN
											<input type="checkbox"/>
											<div class="control__indicator"></div>
										</label>
									</div>
									<div class="cb_pad">
										<label class="control control--checkbox">KISSME MEDICATED
											<input type="checkbox"/>
											<div class="control__indicator"></div>
										</label>
									</div>
									<div class="cb_pad">
										<label class="control control--checkbox">CUREL/珂潤
											<input type="checkbox"/>
											<div class="control__indicator"></div>
										</label>
									</div>
									<div class="cb_pad">
										<label class="control control--checkbox">OPERA
											<input type="checkbox"/>
											<div class="control__indicator"></div>
										</label>
									</div>
									<div class="cb_pad">
										<label class="control control--checkbox">EXCEL 眼影系列
											<input type="checkbox"/>
											<div class="control__indicator"></div>
										</label>
									</div>
									<div class="cb_pad">
										<label class="control control--checkbox">SHIRO 唇釉系列
											<input type="checkbox"/>
											<div class="control__indicator"></div>
										</label>
									</div>
									<div class="cb_pad">
										<label class="control control--checkbox">AVANCE
											<input type="checkbox"/>
											<div class="control__indicator"></div>
										</label>
									</div>
									<div class="cb_pad">
										<label class="control control--checkbox">小林製藥
											<input type="checkbox"/>
											<div class="control__indicator"></div>
										</label>
									</div>
									<div class="cb_pad">
										<label class="control control--checkbox">PRODUCT大馬士革
											<input type="checkbox"/>
											<div class="control__indicator"></div>
										</label>
									</div>
									
								</div>

							</div>
						</div>
					</div>

					<div class="clear"></div>
		
				</div>
				
			</div>
		</section>
		
		<footer id="footer" class="bg-transparent border-0">

			<div class="container">
				<div class="footer-widgets-wrap pb-3 ">

					<div class="row">

						<div class="col-lg-2 col-md-3 col-6">
							<div class="widget">

								<h4 class="ls0 mb-2 nott">購物體驗</h4>

								<ul class="list-unstyled iconlist ml-0">
									<li><a href="cart.html">購物車</a></li>
									<li><a href="qa.html">常見問題</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-6">
							<div class="widget">

								<h4 class="ls0 mb-2 nott">會員中心</h4>

								<ul class="list-unstyled iconlist ml-0">
									<li><a href="login.html">登入/註冊</a></li>
									<li><a href="member_password.html">忘記密碼</a></li>
									<li><a href="notice.html">通知總覽</a></li>
									<li><a href="order_info.html">訂單查詢</a></li>
									<li><a href="product_desire.html">我的收藏</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-6">
							<div class="widget">

								<h4 class="ls0 mb-2 nott">關於直直買</h4>

								<ul class="list-unstyled iconlist ml-0">
									<li><a href="about.html">關於我們</a></li>
									<li><a href="shoppingprocess.html">購物流程</a></li>
									<li><a href="about.html">服務條款</a></li>
									<li><a href="about.html">隱私權政策</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-6">
							<div class="widget">

								<h4 class="ls0 mb-2 nott">直購商品</h4>

								<ul class="list-unstyled iconlist ml-0">
									<li><a href="master.html">達人勸敗</a></li>
									<li><a href="feedback.html">好評推薦</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-4 col-md-8 center">
							<div class="widget footcenter">

								<div class="footlogo">
									<img src="images/footerlogo.png" alt="直直買 didipik">
								</div>
								<div class="widget subscribe-widget mt-2">
									<ul class="list-unstyled iconlist ml-0">
										<li>客服信箱：<a href="#">info@didipick.com</a></li>
									</ul>

									<ul class="list-unstyled socialiconlist ml-0">
										<li><a href="#"><img src="images/socialicon_fb.png" alt=""></a></li>
										<li><a href="#"><img src="images/socialicon_ig.png" alt=""></a></li>
										<li><a href="#"><img src="images/socialicon_yt.png" alt=""></a></li>
										<li><a href="#"><img src="images/socialicon_line.png" alt=""></a></li>
									</ul>

									
								</div>

							</div>
						</div>

					</div>

				</div>

			</div>

			
			<div id="copyrights" class="bg-transparent center">

				<div class="container">
					<p>copyright © 2021 直直買 日本好物直購平台 All Rights Reserved.</p>
				</div>

			</div>
		</footer>

	</div>

	
	<div id="gotoTop"><img src="images/gotop.png" alt=""></div>

	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<script src="js/functions.js"></script>


</body>
</html>