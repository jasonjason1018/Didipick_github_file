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
													<div class="slide" data-thumb="/images/product_img/proimg_1.jpg"><a href="/images/product_img/proimg_1.jpg" title="" data-lightbox="gallery-item"><img src="/images/product_img/proimg_1.jpg" alt="【第3類醫藥品】資生堂 MOILIP藥用護唇膏 8g"></a></div>
													<div class="slide" data-thumb="/images/product_img/proimg_2.jpg"><a href="/images/product_img/proimg_2.jpg" title="" data-lightbox="gallery-item"><img src="/images/product_img/proimg_2.jpg" alt="【第3類醫藥品】資生堂 MOILIP藥用護唇膏 8g"></a></div>
													<div class="slide" data-thumb="/images/product_img/proimg_3.jpg"><a href="/images/product_img/proimg_3.jpg" title="" data-lightbox="gallery-item"><img src="/images/product_img/proimg_3.jpg" alt="【第3類醫藥品】資生堂 MOILIP藥用護唇膏 8g"></a></div>
													<div class="slide" data-thumb="/images/product_img/proimg_1.jpg"><a href="/images/product_img/proimg_1.jpg" title="" data-lightbox="gallery-item"><img src="/images/product_img/proimg_1.jpg" alt="【第3類醫藥品】資生堂 MOILIP藥用護唇膏 8g"></a></div>
													<div class="slide" data-thumb="/images/product_img/proimg_2.jpg"><a href="/images/product_img/proimg_2.jpg" title="" data-lightbox="gallery-item"><img src="/images/product_img/proimg_2.jpg" alt="【第3類醫藥品】資生堂 MOILIP藥用護唇膏 8g"></a></div>
													<div class="slide" data-thumb="/images/product_img/proimg_3.jpg"><a href="/images/product_img/proimg_3.jpg" title="" data-lightbox="gallery-item"><img src="/images/product_img/proimg_3.jpg" alt="【第3類醫藥品】資生堂 MOILIP藥用護唇膏 8g"></a></div>
												</div>
											</div>
										</div>
										<div class="sale-flash badge badge-danger discount_icon">64折</div>
									</div>

								</div>

								<div class="col-md-6 product-desc infodesc">

									<h3>【第3類醫藥品】資生堂 MOILIP藥用護唇膏 8g</h3>

									<div class="d-flex align-items-center justify-content-between">
										
										<div class="product-price"><ins><small>NT.</small>299</ins>  <del><small>NT.</small>499</del> </div>
									</div>

									<form class="cart mt-4 mb-3 d-flex justify-content-start align-items-end" method="post" enctype='multipart/form-data'>
										<div class="quantity clearfix">
											<input type="button" value="-" class="minus">
											<input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty" />
											<input type="button" value="+" class="plus">
											<br>
											
										</div>

										<small style="color: #898988;">庫存僅剩 10</small>

										
									</form>

									<div class="mt-2 mb-2 d-flex justify-content-start align-items-center">
										<i class="icon-eye2"></i> <small class="ml-1">剛剛有 52 人在瀏覽此商品...</small>
									</div>

									<div class="product-rating mb-2 mt-2">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-half-full"></i>
										<i class="icon-star-empty"></i>
									</div>
									
									<div class="mt-4 mb-3 d-flex justify-content-start align-items-center">
										<button type="submit" class="add-to-cart button m-0 mr-3">加入購物車</button>

										<button type="submit" class="add-to-cart button addlikebtn m-0">加入慾望清單</button>
									</div>

									<div class="mt-2 mb-2 d-flex justify-content-start align-items-center">
										<span class="mr-1">促銷活動</span>
										<a href="#" class="button button-mini button-border button-circle button-amber">滿＄999免運</a>
										<a href="#" class="button button-mini button-border button-circle button-amber">第2件5折</a>
										<a href="#" class="ml-1 pmore">點我看更多</a>
									</div>

									
								

									<ul>
										<li>商品淨重：18g</li>
										<li>商品總重量：21g</li>
										<li>尺寸：高度9.8cm × 長度9.8cm × 寬度2.2cm</li>
										<li>本商品屬於醫藥品，請於訂購前點此確認相關注意事項。</li>
									</ul>
									<p class="t_highlight">現在訂購此商品並選擇以國際快捷郵件(EMS)配送至台灣，預計最快可於01/04出貨，並在01/06送達。<br>
										※上述預計出貨日・到貨日期為只購入此商品時的個別配送標準，並非集運配送之標準，僅供參考。</p>
									
									<div class="si-share d-flex mt-4">
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
									</div>

								</div>

								<div class="w-100 conttext">
									<h3>注意事項:</h3>
									<p>● 禁止事項<br>(若不遵守，可能導致現有症狀惡化，並易引發副作用及事故。)<br>‧請勿使用於下列部位：嚴重潮濕、潰爛之患部。</p>
									<p>● 注意事項<br>1.下列人士在使用前請先向醫生、藥劑師或註冊銷售商諮詢。</p>
									<ol style="list-style-position:outside;list-style-type:upper-roman;">
										<li>本人或家族有過敏性體質者。</li>
										<li>曾因藥物引起過敏反應者。</li>
									</ol>

									<p>2.使用後，若出現下列症狀，因可能為副作用所致，請立即停止使用，並持本產品外包裝及說明書向醫師、藥劑師或註冊銷售商諮詢。</p>
									<ol>
										<li>使用後，皮膚出現起疹、發紅、搔癢等症狀。</li>
										<li>使用5-6天後，症狀無明顯改善時。</li>
									</ol>

									<p>商品介紹<br>
										含有5項成分防止唇部乾裂脫皮，促進嬌嫩皮膚的新陳代謝，抑制唇部炎症發生，對容易嘴唇乾裂有修復的效果。<br>
										成分添加：<br>
										促進恢復嘴唇保濕的尿囊素、鎮定嘴唇發炎的甘草次酸、還有維持皮膚粘膜健康的泛醇和維生素B6、促進皮膚新陳代謝的維生素E和5種成分有效減輕發炎配方。<br>
										軟管包裝，外出時攜帶方便。推薦給長時間待在乾燥辦公室和作息不規律所引起的乾燥等。醫藥品。</p>
									
									<p>◆ 配合抗發炎劑成分(甘草次酸、尿囊素)、保持黏膜健康的維生素B群(維生素B6、維生素原B5)及維生素E。<br>
										◆ 軟管狀包裝,可直接塗抹<br>
										◆ 無香料‧無色素</p>
									<p>適用於嘴唇龜裂、唇瘡、唇炎、口角炎等症狀。<br>用法用量: 請適量塗抹於患部,一天數次。</p>
									<p>成分原料(每1克含)</p>
									<ul>
										<li>尿囊素:5mg (促進修復嘴唇乾燥粗糙)</li>
										<li>甘草次酸:3mg (抑制嘴唇發炎)</li>
										<li>維生素E醋酸酯:2mg (促進皮膚新陳代謝)</li>
										<li>鹽酸吡哆辛(維生素B6):1mg (維持皮膚黏膜健康)</li>
										<li>生素原B5:5mg (維持皮膚黏膜健康)</li>
									</ul>

									<p>【添加物】<br>礦物油、微晶蠟、甘油、甘油酯、對羥基苯甲酸酯、薄荷醇、凡士林。</p>

								</div>

								<div class="mt-5">

								</div>

							</div>
						</div>
					</div>

					<div class="line"></div>

					<div class="w-100">
						<div class="borline">
							<div class="fancy-title">
								<h4>購買此商品的人還買了:</h4>
							</div>
						
							<div class="ocpropad">
								<div id="oc-products" class="owlbox owl-carousel products-carousel carousel-widget" data-pagi="false" data-items-xs="2" data-items-sm="2" data-items-md="3" data-items-lg="4">

									<div class="oc-item">
										<div class="product probox">
											<div class="product-image">
												<a href="product_info.html"><img src="/images/product_img/proimg_1.jpg" alt="資生堂MOILIP藥用護唇膏"></a>
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
												<a href="product_info.html"><img src="/images/product_img/proimg_2.jpg" alt="Fujiko Ponpon Powder 頭髮專用吸油粉撲"></a>
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
												<a href="product_info.html"><img src="/images/product_img/proimg_3.jpg" alt="EVE止痛藥"></a>
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
												<a href="product_info.html"><img src="/images/product_img/proimg_4.jpg" alt="Fujiko Ponpon Powder 頭髮專用吸油粉撲"></a>
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
												<a href="product_info.html"><img src="/images/product_img/proimg_2.jpg" alt="EVE止痛藥"></a>
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
												<a href="product_info.html"><img src="/images/product_img/proimg_3.jpg" alt="大馬士革玫瑰髮蠟"></a>
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
												<a href="product_info.html"><img src="/images/product_img/proimg_1.jpg" alt="資生堂MOILIP藥用護唇膏"></a>
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
												<a href="product_info.html"><img src="/images/product_img/proimg_2.jpg" alt="Fujiko Ponpon Powder 頭髮專用吸油粉撲"></a>
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
												<a href="product_info.html"><img src="/images/product_img/proimg_3.jpg" alt="EVE止痛藥"></a>
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
												<a href="product_info.html"><img src="/images/product_img/proimg_4.jpg" alt="Fujiko Ponpon Powder 頭髮專用吸油粉撲"></a>
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
												<a href="product_info.html"><img src="/images/product_img/proimg_2.jpg" alt="EVE止痛藥"></a>
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
												<a href="product_info.html"><img src="/images/product_img/proimg_3.jpg" alt="大馬士革玫瑰髮蠟"></a>
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

					<div class="clear"></div>
		
				</div>
				
			</div>
		</section>

		
		@include('include_php.footer_inc')

	</div>

	
	<div id="gotoTop"><img src="/images/gotop.png" alt=""></div>

	<script src="/js/jquery.js"></script>
	<script src="/js/plugins.min.js"></script>

	<script src="/js/functions.js"></script>


</body>
</html>