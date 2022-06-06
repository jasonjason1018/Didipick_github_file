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

		
		<section id="slider" class="slider-element revslider-wrap">

			<div id="portfolio_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="nice-and-clean-projects" data-source="gallery" style="margin:0px auto;background:#2d3032;padding:0px;margin-top:0px;margin-bottom:0px;">
				<div id="portfolio" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7.2">
					<ul>
						@foreach($adver as $adverk=> $adverv)
						<li data-index="rs-{{312+$adverk}}" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="include/rs-plugin/demos/assets/images/100x50_carousel3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Wild" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
							<img src="/storage/{{$adverv->banner}}"  alt="Image"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

							

							
							
							<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
								 id="slide-{{312+$adverk}}-layer-10"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
											data-width="2"
								data-height="75"
								data-whitespace="nowrap"

								data-type="shape"
								data-responsive_offset="on"

								data-frames='[{"delay":"bytrigger","speed":600,"frame":"0","from":"sY:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":600,"frame":"999","to":"sY:0;","ease":"Power4.easeOut"}]'
								data-textAlign="['inherit','inherit','inherit','inherit']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								data-lasttriggerstate="reset"
								style="z-index: 7;font-family:Open Sans;background-color:rgba(255,255,255,1);"> </div>

							<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
								 id="slide-{{312+$adverk}}-layer-11"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
											data-width="75"
								data-height="2"
								data-whitespace="nowrap"

								data-type="shape"
								data-responsive_offset="on"

								data-frames='[{"delay":"bytrigger","speed":600,"frame":"0","from":"sX:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":600,"frame":"999","to":"sX:0;","ease":"Power4.easeOut"}]'
								data-textAlign="['inherit','inherit','inherit','inherit']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								data-lasttriggerstate="reset"
								style="z-index: 8;font-family:Open Sans;background-color:rgba(255,255,255,1);"> </div>

							<a href="product.html" class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
								 id="slide-{{312+$adverk}}-layer-8"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
											data-width="full"
								data-height="full"
								data-whitespace="nowrap"

								data-type="shape"
								data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-{{312+$adverk}}-layer-10","delay":""},{"event":"mouseenter","action":"startlayer","layer":"slide-{{312+$adverk}}-layer-11","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-{{312+$adverk}}-layer-10","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-{{312+$adverk}}-layer-11","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-{{312+$adverk}}-layer-1","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-{{312+$adverk}}-layer-1","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-{{312+$adverk}}-layer-7","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-{{312+$adverk}}-layer-7","delay":""}]'
								data-responsive_offset="on"

								data-frames='[{"delay":10,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);br:0 0 0 0;"}]'
								data-textAlign="['inherit','inherit','inherit','inherit']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"

								style="z-index: 9;font-family:Open Sans;cursor:pointer;"> </a>
						</li>
						
						@endforeach
						@foreach($adver as $adverk=> $adverv)
						<li data-index="rs-{{312+count($adver)+$adverk}}" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="include/rs-plugin/demos/assets/images/100x50_carousel3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Wild" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
							<img src="/storage/{{$adverv->banner}}"  alt="Image"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

							

							
							
							<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
								 id="slide-{{312+$adverk}}-layer-10"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
											data-width="2"
								data-height="75"
								data-whitespace="nowrap"

								data-type="shape"
								data-responsive_offset="on"

								data-frames='[{"delay":"bytrigger","speed":600,"frame":"0","from":"sY:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":600,"frame":"999","to":"sY:0;","ease":"Power4.easeOut"}]'
								data-textAlign="['inherit','inherit','inherit','inherit']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								data-lasttriggerstate="reset"
								style="z-index: 7;font-family:Open Sans;background-color:rgba(255,255,255,1);"> </div>

							<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
								 id="slide-{{312+$adverk}}-layer-11"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
											data-width="75"
								data-height="2"
								data-whitespace="nowrap"

								data-type="shape"
								data-responsive_offset="on"

								data-frames='[{"delay":"bytrigger","speed":600,"frame":"0","from":"sX:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":600,"frame":"999","to":"sX:0;","ease":"Power4.easeOut"}]'
								data-textAlign="['inherit','inherit','inherit','inherit']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								data-lasttriggerstate="reset"
								style="z-index: 8;font-family:Open Sans;background-color:rgba(255,255,255,1);"> </div>

							<a href="product.html" class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
								 id="slide-{{312+$adverk}}-layer-8"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
											data-width="full"
								data-height="full"
								data-whitespace="nowrap"

								data-type="shape"
								data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-{{312+$adverk}}-layer-10","delay":""},{"event":"mouseenter","action":"startlayer","layer":"slide-{{312+$adverk}}-layer-11","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-{{312+$adverk}}-layer-10","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-{{312+$adverk}}-layer-11","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-{{312+$adverk}}-layer-1","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-{{312+$adverk}}-layer-1","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-{{312+$adverk}}-layer-7","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-{{312+$adverk}}-layer-7","delay":""}]'
								data-responsive_offset="on"

								data-frames='[{"delay":10,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);br:0 0 0 0;"}]'
								data-textAlign="['inherit','inherit','inherit','inherit']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"

								style="z-index: 9;font-family:Open Sans;cursor:pointer;"> </a>
						</li>
						
						@endforeach
						
						
					</ul>
					<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
				</div>
			</div>

		</section>

		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="heading_box center headw_md">
						<p>ディディピック !</p>
						<h3>提供一站式日貨<span>代購＆直送</span>，日本同步限定品<span>直覺</span>買！</h3>
					</div>

					<div>

						<div class="align-items-center mt-5 mb-4 ind_title_box">
							<div class="ind_title">
								<h2>達人勸敗</h2>
								<span>PICKING!<br><small>ピック</small></span>
							</div>
							<div class="mt-4 mt-lg-0 morebtn">
								<a href="/didipick_master">看更多</a>
							</div>
						</div>
						<div class="row justify-content-center col-mb-50 pickingbox">
							@foreach($master as $masterv)
							<div class="col-sm-6 col-lg-4">
								<div class="feature-box media-box">
									<div class="fbox-media Darkbg">
										<!--<div class="subtag_t">免運</div>-->
										<div></div>
										<div class="pickheart">
											<a href="#"><img src="images/topicon_star_addy.svg" alt=""></a>
										</div>
										<!--<p>Fujiko Ponpon Powder</p>-->
										<p></p>
										<div class="pickbgpadding">
											<a href="master_info.html"><img src="/storage/{{$masterv->img}}" alt=""></a>
										</div>
									</div>
									<div class="fbox-content px-0">
										<h3><a href="master_info.html">{{$masterv->title}}</a></h3>
									</div>
									<!--<div class="product-desc">
										<div class="product-price font-primary"><del class="mr-1"><small>NT.</small>499</del> <ins><small>NT.</small>299</ins></div>
									</div>-->
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<div class="clear"></div>
					<div class="h_20"></div>

					<div>

						<div class="align-items-center mt-5 mb-4 ind_title_box">
							<div class="ind_title">
								<h2>熱銷排行</h2>
								<span>RANKING!<br><small>ランキング</small></span>
							</div>
							<div class="mt-4 mt-lg-0 morebtn">
								<a href="/didipick_product_top20">看更多</a>
							</div>
						</div>


						<div class="ocpropad">
							<div id="oc-products" class="owlbox owl-carousel products-carousel carousel-widget" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">
								@foreach($product as $productv)
								<div class="oc-item">
									<div class="product probox">
										<div class="product_logo center">
											@foreach($brand as $brandv)
												@if($productv->brand == $brandv->sno)
													<a href=""><img src="/storage/{{$brandv->icon}}" alt=""></a>
												@endif
											@endforeach
										</div>
		
										<div class="product-image">
											<a href="product_info.php"><img src="/storage/{{$productv->img1}}" alt="" onerror="this.src='images/empty-cover@2x.png'"></a>
										<!--<div class="liked" onclick="addheart()" id="heart"></div>
										
										<div class="liked clicked" onclick="cancelheart()" id="heart"></div>-->
										
											<div class="liked" id="heart"></div>
										</div>
										<div class="product-desc center">
											<div class="product-title"><h3><a href="product_info.php">{{$productv->name}}</a></h3></div>
											<div class="product-price special-price"><ins><small>NT.</small>{{ceil($productv->s_price * $rate)}}</ins><del><small>NT.</small>{{ceil($productv->o_price * $rate)}}</del></div>
											<div class="product-rating">
											@php
												$star = $productv->star;
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
									</div>
								</div>
							</div>
							@endforeach
								

							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="h_20"></div>

					<div class="addbox">
						@foreach($banner as $bannerv)
							<div class="addimg">
								<img src="/storage/{{$bannerv->banner}}" alt="" class="img_stretch">
							</div>
						@endforeach
							<div class="row">
								<div class="col-sm-6 col-lg-4 text-center addiconbox">
									<img src="images/addicon_free.png" alt="">
									<h5>滿額免運</h5>
								</div>
	
								<div class="col-sm-6 col-lg-4 text-center addiconbox">
									<img src="images/addicon_map.png" alt="">
									<h5>日本同步</h5>
								</div>
	
								<div class="col-sm-6 col-lg-4 text-center addiconbox">
									<img src="images/addicon_airplan.png" alt="">
									<h5>日本直送</h5>
								</div>
	
							
							</div>
	
					</div>
					<div class="clear"></div>
					<div class="h_20"></div>

					<div>

						<div class="align-items-center mt-5 mb-4 ind_title_box">
							<div class="ind_title">
								<h2>熱銷品牌</h2>
								<span>BRANDING!<br><small>ランキング</small></span>
							</div>
							<div class="mt-4 mt-lg-0 morebtn">
								<a href="#">看更多</a>
							</div>
						</div>


						<div class="brandbox">
							@foreach($hotbrand as $hotbrandv)
								<div class="brand_item"><a href="#"><img src="/storage/{{$hotbrandv->icon2}}" alt=""></a></div>
							@endforeach
							<!--<div class="brand_item salebox"><a href="#"><img src="images/brand_1.jpg" alt=""></a></div>
							<div class="brand_item"><a href="#"><img src="images/brand_2.jpg" alt=""></a></div>
							<div class="brand_item"><a href="#"><img src="images/brand_3.jpg" alt=""></a></div>
							<div class="brand_item salebox sale75"><a href="#"><img src="images/brand_4.jpg" alt=""></a></div>
							<div class="brand_item"><a href="#"><img src="images/brand_5.jpg" alt=""></a></div>
							<div class="brand_item"><a href="#"><img src="images/brand_6.jpg" alt=""></a></div>
							<div class="brand_item salebox"><a href="#"><img src="images/brand_7.jpg" alt=""></a></div>
							<div class="brand_item"><a href="#"><img src="images/brand_8.jpg" alt=""></a></div>-->
						</div>

					</div>
					<div class="clear"></div>
					<div class="h_40"></div>

				</div>

				<div class="bg_main feedbakbox">
					<div class="h_20"></div>
					<div class="container">

						<div class="align-items-center mt-5 mb-4 ind_title_box">
							<div class="ind_title">
								<h2 class="title_w">好評推薦</h2>
								<span class="title_w">FEEDBACK!<br><small>ランキング</small></span>
							</div>
							<div class="mt-4 mt-lg-0 morebtn">
								<a href="feedback.html">看更多</a>
							</div>
						</div>

						

						<div id="posts" class="post-grid row grid-container gutter-40">

							<div class="entry col-md-4 col-sm-6 col-12">
								<div class="grid-inner">
									<div class="entry-image">
										<a href="images/feedimg_1.jpg" data-lightbox="image"><img src="images/feedimg_1.jpg" alt="[女生小心機]素顏美肌養成術！只需每天這樣做"></a>
									</div>
									<div class="entry-title">
										<h2><a href="feedback_info.html">[女生小心機]素顏美肌養成術！只需每天這樣做</a></h2>
									</div>
									<div class="entry-meta">
										<ul>
											<li><i class="icon-calendar3"></i> 20th Feb 2021</li>
											<li><a href="#"><i class="icon-eye2"></i> 13</a></li>
											<li><a href="#"><img src="images/topicon_star_addy.svg" alt="" class="icon_star"></a></li>
										</ul>
									</div>
								</div>
							</div>

							<!--<div class="entry col-md-4 col-sm-6 col-12" data-animate="fadeInUp" data-delay="50">
								<div class="grid-inner">
									<div class="entry-image">
										<a href="images/feedimg_2.jpg" data-lightbox="image"><img src="images/feedimg_2.jpg" alt="[約會必勝]一秒化身日本好感系女孩！嚴選單品推薦"></a>
									</div>
									<div class="entry-title">
										<h2><a href="feedback_info.html">[約會必勝]一秒化身日本好感系女孩！嚴選單品推薦</a></h2>
									</div>
									<div class="entry-meta">
										<ul>
											<li><i class="icon-calendar3"></i> 20th Feb 2021</li>
											<li><a href="#"><i class="icon-eye2"></i> 13</a></li>
											<li><a href="#"><img src="images/topicon_star_w.svg" alt="" class="icon_star"></a></li>
										</ul>
									</div>
								</div>
							</div>
						
							<div class="entry col-md-4 col-sm-6 col-12" data-animate="fadeInUp" data-delay="100">
								<div class="grid-inner">
									<div class="entry-image">
										<a href="images/feedimg_3.jpg" data-lightbox="image"><img src="images/feedimg_3.jpg" alt="[編輯特蒐]超夯療癒系小物，好想抱緊處理！"></a>
									</div>
									<div class="entry-title">
										<h2><a href="feedback_info.html">[編輯特蒐]超夯療癒系小物，好想抱緊處理！</a></h2>
									</div>
									<div class="entry-meta">
										<ul>
											<li><i class="icon-calendar3"></i> 20th Feb 2021</li>
											<li><a href="#"><i class="icon-eye2"></i> 13</a></li>
											<li><a href="#"><img src="images/topicon_star_w.svg" alt="" class="icon_star"></a></li>
										</ul>
									</div>
								</div>
							</div>-->
	
							
						</div>


					</div>
				</div>
				<div class="clear"></div>
				<div class="h_40"></div>

				<div class="container">
					<div class="fancy-title fancy-c mt-5 center">
						<h2>常見問題</h2>
						<span>FAQ!<br><small>よくある質問</small></span>
					</div>

					<div class="qabox">
						<ul>
							@foreach($qa as $qav)
								<li><a href="/didipick_qa">{{$qav->title}}</a></li>
							@endforeach
							<!--<li><a href="qa.html">購物一定要加入會員嗎？</a></li>
							<li><a href="qa.html">目前提供哪些付款方式？</a></li>
							<li><a href="qa.html">退出貨日期是幾天呢？我什麼時候可以收到貨？</a></li>
							<li><a href="qa.html">如何查詢目前訂單的處理情況？</a></li>
							<li><a href="qa.html">完成訂購後，可以取消或修改訂單嗎？</a></li>
							<li><a href="qa.html">收到商品有毀損或數量不正確，該如何處理？</a></li>-->
						</ul>
					</div>

				</div>

	
				<div class="clear"></div>

				
			</div>
		</section>

		
		@include('include_php.footer_inc')

	</div>

	
	<div id="gotoTop"><img src="images/gotop.png" alt=""></div>

	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<script src="js/functions.js"></script>

	
	<script src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>

	<script>
		$('.liked,.keep').click(function(){
		    $(this).toggleClass('clicked');
		});
		var revapi130,
			tpj;
		var $ = jQuery.noConflict();

		(function() {
			if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad); else onLoad();

			function onLoad() {
				if (tpj===undefined) { tpj = jQuery; if("off" == "on") tpj.noConflict();}
				if(tpj("#portfolio").revolution == undefined){
					revslider_showDoubleJqueryError("#portfolio");
				}else{
					revapi130 = tpj("#portfolio").show().revolution({
						sliderType:"carousel",
						jsFileLocation:"include/rs-plugin/js/",
						sliderLayout:"fullwidth",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
							 mouseScrollReverse:"default",
							onHoverStop:"off",
							arrows: {
								style:"uranus",
								enable:true,
								hide_onmobile:false,
								hide_onleave:false,
								tmp:'',
								left: {
									h_align:"center",
									v_align:"bottom",
									h_offset:-30,
									v_offset:30
								},
								right: {
									h_align:"center",
									v_align:"bottom",
									h_offset:30,
									v_offset:30
								}
							}
						},
						carousel: {
							horizontal_align: "center",
							vertical_align: "center",
							fadeout: "off",
							maxVisibleItems: 5,
							infinity: "on",
							space: 0,
							stretch: "off",
							 showLayersAllTime: "on",
							 easing: "Power3.easeInOut",
							 speed: "800"
						},
						viewPort: {
							enable:true,
							outof:"wait",
							visible_area:"80%",
							presize:false
						},
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[600,600,500,400],
						gridheight:[640,600,500,400],
						lazyType:"none",
						shadow:0,
						spinner:"spinner3",
						stopLoop:"on",
						stopAfterLoops:0,
						stopAtSlide:1,
						shuffle:"off",
						autoHeight:"off",
						disableProgressBar:"on",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				} /* END OF revapi call */
			} /* END OF ON LOAD FUNCTION */
		}()); /* END OF WRAPPING FUNCTION */
	</script>

</body>
</html>