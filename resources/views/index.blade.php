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
						<li data-index="rs-312" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="include/rs-plugin/demos/assets/images/100x50_carousel3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Wild" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
							<img src="images/banner_1.jpg"  alt="Image"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

							

							

							<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
								 id="slide-312-layer-10"
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
								 id="slide-312-layer-11"
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
								 id="slide-312-layer-8"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
											data-width="full"
								data-height="full"
								data-whitespace="nowrap"

								data-type="shape"
								data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-312-layer-10","delay":""},{"event":"mouseenter","action":"startlayer","layer":"slide-312-layer-11","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-312-layer-10","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-312-layer-11","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-312-layer-1","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-312-layer-1","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-312-layer-7","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-312-layer-7","delay":""}]'
								data-responsive_offset="on"

								data-frames='[{"delay":10,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);br:0 0 0 0;"}]'
								data-textAlign="['inherit','inherit','inherit','inherit']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"

								style="z-index: 9;font-family:Open Sans;cursor:pointer;"> </a>
						</li>
						
						<li data-index="rs-313" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="include/rs-plugin/demos/assets/images/100x50_carousel4.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
							<img src="images/banner_2.jpg"  alt="Image"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

							

							<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
								 id="slide-313-layer-10"
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
								style="z-index: 6;font-family:Open Sans;background-color:rgba(255,255,255,1);"> </div>

							<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
								 id="slide-313-layer-11"
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
								style="z-index: 7;font-family:Open Sans;background-color:rgba(255,255,255,1);"> </div>


							<a href="master_info.html" class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
								 id="slide-313-layer-8"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
											data-width="full"
								data-height="full"
								data-whitespace="nowrap"

								data-type="shape"
								data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-313-layer-10","delay":""},{"event":"mouseenter","action":"startlayer","layer":"slide-313-layer-11","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-313-layer-10","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-313-layer-11","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-313-layer-14","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-313-layer-14","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-313-layer-7","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-313-layer-7","delay":""}]'
								data-responsive_offset="on"

								data-frames='[{"delay":10,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);br:0 0 0 0;"}]'
								data-textAlign="['inherit','inherit','inherit','inherit']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"

								style="z-index: 9;font-family:Open Sans;cursor:pointer;"> </a>
						</li>
						
						<li data-index="rs-314" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="include/rs-plugin/demos/assets/images/100x50_carousel2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
							<img src="images/banner_3.jpg"  alt="Image"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>


							<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
								 id="slide-314-layer-10"
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
								style="z-index: 6;font-family:Open Sans;background-color:rgba(255,255,255,1);"> </div>

							<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
								 id="slide-314-layer-11"
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
								style="z-index: 7;font-family:Open Sans;background-color:rgba(255,255,255,1);"> </div>

							

							<a href="feedback_info.html" class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
								 id="slide-314-layer-8"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
											data-width="full"
								data-height="full"
								data-whitespace="nowrap"

								data-type="shape"
								data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-314-layer-10","delay":""},{"event":"mouseenter","action":"startlayer","layer":"slide-314-layer-11","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-314-layer-10","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-314-layer-11","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-314-layer-12","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-314-layer-12","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-314-layer-7","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-314-layer-7","delay":""}]'
								data-responsive_offset="on"

								data-frames='[{"delay":10,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);br:0 0 0 0;"}]'
								data-textAlign="['inherit','inherit','inherit','inherit']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"

								style="z-index: 9;font-family:Open Sans;cursor:pointer;"> </a>
						</li>
						
						<li data-index="rs-315" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="include/rs-plugin/demos/assets/images/100x50_carousel5.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
							<img src="images/banner_1.jpg"  alt="Image"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

							

							<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
								 id="slide-315-layer-10"
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
								style="z-index: 6;font-family:Open Sans;background-color:rgba(255,255,255,1);"> </div>

							<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
								 id="slide-315-layer-11"
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
								style="z-index: 7;font-family:Open Sans;background-color:rgba(255,255,255,1);"> </div>

				
							<a href="product.html" class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
								 id="slide-315-layer-8"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
											data-width="full"
								data-height="full"
								data-whitespace="nowrap"

								data-type="shape"
								data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-315-layer-10","delay":""},{"event":"mouseenter","action":"startlayer","layer":"slide-315-layer-11","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-315-layer-10","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-315-layer-11","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-315-layer-12","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-315-layer-12","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-315-layer-7","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-315-layer-7","delay":""}]'
								data-responsive_offset="on"

								data-frames='[{"delay":10,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);br:0 0 0 0;"}]'
								data-textAlign="['inherit','inherit','inherit','inherit']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"

								style="z-index: 9;font-family:Open Sans;cursor:pointer;"> </a>
						</li>
						
						<li data-index="rs-316" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="include/rs-plugin/demos/assets/images/100x50_carousel7.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
							<img src="images/banner_2.jpg"  alt="Image"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

							

							<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
								 id="slide-316-layer-10"
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
								style="z-index: 6;font-family:Open Sans;background-color:rgba(255,255,255,1);"> </div>

							<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
								 id="slide-316-layer-11"
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
								style="z-index: 7;font-family:Open Sans;background-color:rgba(255,255,255,1);"> </div>

							
							<a href="master_info.html" class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
								 id="slide-316-layer-8"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
											data-width="full"
								data-height="full"
								data-whitespace="nowrap"

								data-type="shape"
								data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-316-layer-10","delay":""},{"event":"mouseenter","action":"startlayer","layer":"slide-316-layer-11","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-316-layer-10","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-316-layer-11","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-316-layer-12","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-316-layer-12","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-316-layer-7","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-316-layer-7","delay":""}]'
								data-responsive_offset="on"

								data-frames='[{"delay":10,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);br:0 0 0 0;"}]'
								data-textAlign="['inherit','inherit','inherit','inherit']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"

								style="z-index: 9;font-family:Open Sans;cursor:pointer;"> </a>
						</li>
						
						<li data-index="rs-317" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="include/rs-plugin/demos/assets/images/100x50_carousel2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
							<img src="images/banner_3.jpg"  alt="Image"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

							

							<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
								 id="slide-314-layer-10"
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
								style="z-index: 6;font-family:Open Sans;background-color:rgba(255,255,255,1);"> </div>

							<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
								 id="slide-314-layer-11"
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
								style="z-index: 7;font-family:Open Sans;background-color:rgba(255,255,255,1);"> </div>
							
							

							<a href="feedback_info.html" class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
								 id="slide-314-layer-8"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
											data-width="full"
								data-height="full"
								data-whitespace="nowrap"

								data-type="shape"
								data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-314-layer-10","delay":""},{"event":"mouseenter","action":"startlayer","layer":"slide-314-layer-11","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-314-layer-10","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-314-layer-11","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-314-layer-12","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-314-layer-12","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-314-layer-7","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-314-layer-7","delay":""}]'
								data-responsive_offset="on"

								data-frames='[{"delay":10,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);br:0 0 0 0;"}]'
								data-textAlign="['inherit','inherit','inherit','inherit']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"

								style="z-index: 9;font-family:Open Sans;cursor:pointer;"> </a>
						</li>
						
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
								<a href="master.html">看更多</a>
							</div>
						</div>

						<div class="row justify-content-center col-mb-50 pickingbox">
							<div class="col-sm-6 col-lg-4" data-animate="fadeInUp" data-delay="0">
								<div class="feature-box media-box">
									<div class="fbox-media Darkbg">
										<div class="subtag_t">免運</div>
										<div class="pickheart">
											<a href="#"><img src="images/topicon_star_addy.svg" alt=""></a>
										</div>
										<p>Fujiko Ponpon Powder</p>
										<div class="pickbgpadding">
											<a href="master_info.html"><img src="images/masterind_1.jpg" alt=""></a>
										</div>
									</div>
									<div class="fbox-content px-0">
										<h3><a href="master_info.html">[頭髮專用吸油粉撲] 30秒擺脫扁塌頭！懶人必備蓬蓬粉... </a></h3>
									</div>
									<div class="product-desc">
										<div class="product-price font-primary"><del class="mr-1"><small>NT.</small>499</del> <ins><small>NT.</small>299</ins></div>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4" data-animate="fadeInUp" data-delay="50">
								<div class="feature-box media-box">
									<div class="fbox-media DarkOlivebg">
										<div class="subtag_n">85折</div>
										<div class="pickheart">
											<a href="#"><img src="images/topicon_star_addy.svg" alt=""></a>
										</div>
										<p>資生堂 SHISEIDO</p>
										<div class="pickbgpadding">
											<a href="master_info.html"><img src="images/masterind_2.jpg" alt=""></a>
										</div>
									</div>
									<div class="fbox-content px-0">
										<h3><a href="master_info.html">【MOILIP藥用護唇膏】滋潤No.1！唇部乾裂、脫皮救星... </a></h3>
									</div>
									<div class="product-desc">
										<div class="product-price font-primary"><del class="mr-1"><small>NT.</small>499</del> <ins><small>NT.</small>299</ins></div>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4" data-animate="fadeInUp" data-delay="100">
								<div class="feature-box media-box">
									<div class="fbox-media Darkbg">
										<div class="subtag_t">免運</div>
										<div class="pickheart">
											<a href="#"><img src="images/topicon_star_w.svg" alt=""></a>
										</div>
										<p>CANMAKE</p>
										<div class="pickbgpadding">
											<a href="master_info.html"><img src="images/masterind_3.jpg" alt=""></a>
										</div>
									</div>
									<div class="fbox-content px-0">
										<h3><a href="master_info.html">【CANMAKE舒芙蕾眼彩組】日本SNS熱搜話題！百搭零廢色... </a></h3>
									</div>
									<div class="product-desc">
										<div class="product-price font-primary"><del class="mr-1"><small>NT.</small>499</del> <ins><small>NT.</small>299</ins></div>
									</div>
								</div>
							</div>
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
								<a href="product_top20.htm">看更多</a>
							</div>
						</div>


						<div class="ocpropad">
							<div id="oc-products" class="owlbox owl-carousel products-carousel carousel-widget" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">

								<div class="oc-item">
									<div class="product probox">
										<div class="product_logo center">
											<a href="#"><img src="images/product_logo/prologo_1.jpg" alt=""></a>
										</div>
		
										<div class="product-image">
											<a href="product_info.html"><img src="images/product_img/proimg_1.jpg" alt="日本 Fujiko Ponpon Powder 頭髮專用吸油粉撲"></a>
											<div class="addheartbox">
												<img src="images/product_heart.png" alt="">
											</div>
										</div>
										<div class="product-desc center">
											<div class="product-title"><h3><a href="product_info.html">日本 Fujiko Ponpon Powder 頭髮專用吸油粉撲</a></h3></div>
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
								</div>
		
								<div class="oc-item">
									<div class="product probox">
										<div class="product_logo center">
											<a href="#"><img src="images/product_logo/prologo_2.jpg" alt=""></a>
										</div>
		
										<div class="product-image">
											<a href="product_info.html"><img src="images/product_img/proimg_2.jpg" alt="AQUALABEL水之印 五合一凝膠保濕面霜 櫻花限定"></a>
											<div class="addheartbox">
												<img src="images/product_heart_add.png" alt="" class="active">
											</div>
										</div>
										<div class="product-desc center">
											<div class="product-title"><h3><a href="product_info.html">AQUALABEL水之印 五合一凝膠保濕面霜 櫻花限定</a></h3></div>
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
								</div>

								<div class="oc-item">
									<div class="product probox">
										<div class="product_logo center">
											<a href="#"><img src="images/product_logo/prologo_3.jpg" alt=""></a>
										</div>
		
										<div class="product-image">
											<a href="product_info.html"><img src="images/product_img/proimg_3.jpg" alt="naturaglace化妝晚霜02（自然米色）"></a>
											<div class="addheartbox">
												<img src="images/product_heart.png" alt="">
											</div>
										</div>
										<div class="product-desc center">
											<div class="product-title"><h3><a href="product_info.html">naturaglace化妝晚霜02（自然米色）</a></h3></div>
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

								<div class="oc-item">
									<div class="product probox">
										<div class="product_logo center">
											<a href="#"><img src="images/product_logo/prologo_4.jpg" alt=""></a>
										</div>
		
										<div class="product-image">
											<a href="product_info.html"><img src="images/product_img/proimg_4.jpg" alt="CANMAKE浮雕愛心潤色唇膏口紅"></a>
											<div class="addheartbox">
												<img src="images/product_heart.png" alt="">
											</div>
										</div>
										<div class="product-desc center">
											<div class="product-title"><h3><a href="product_info.html">CANMAKE浮雕愛心潤色唇膏口紅</a></h3></div>
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
								</div>

								<div class="oc-item">
									<div class="product probox">
										<div class="product_logo center">
											<a href="#"><img src="images/product_logo/prologo_5.jpg" alt=""></a>
										</div>
		
										<div class="product-image">
											<a href="product_info.html"><img src="images/product_img/proimg_5.jpg" alt="KIP PYROL-Hi 居家萬用膏 15g"></a>
											<div class="addheartbox">
												<img src="images/product_heart.png" alt="">
											</div>
										</div>
										<div class="product-desc center">
											<div class="product-title"><h3><a href="product_info.html">KIP PYROL-Hi 居家萬用膏 15g</a></h3></div>
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

								<div class="oc-item">
									<div class="product probox">
										<div class="product_logo center">
											<a href="#"><img src="images/product_logo/prologo_6.jpg" alt=""></a>
										</div>
		
										<div class="product-image">
											<a href="product_info.html"><img src="images/product_img/proimg_6.jpg" alt="武田製藥 合利他命強效營養補充 270錠"></a>
											<div class="addheartbox">
												<img src="images/product_heart.png" alt="">
											</div>
										</div>
										<div class="product-desc center">
											<div class="product-title"><h3><a href="product_info.html">武田製藥 合利他命強效營養補充 270錠</a></h3></div>
											<div class="product-price"><ins><small>NT.</small>659</ins></div>
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

								<div class="oc-item">
									<div class="product probox">
										<div class="product_logo center">
											<a href="#"><img src="images/product_logo/prologo_7.jpg" alt=""></a>
										</div>
		
										<div class="product-image">
											<a href="product_info.html"><img src="images/product_img/proimg_7.jpg" alt="Visee耀目光澤四色眼影盤"></a>
											<div class="addheartbox">
												<img src="images/product_heart.png" alt="">
											</div>
										</div>
										<div class="product-desc center">
											<div class="product-title"><h3><a href="product_info.html">Visee耀目光澤四色眼影盤</a></h3></div>
											<div class="product-price"><ins><small>NT.</small>659</ins></div>
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

								<div class="oc-item">
									<div class="product probox">
										<div class="product_logo center">
											<a href="#"><img src="images/product_logo/prologo_8.jpg" alt=""></a>
										</div>
		
										<div class="product-image">
											<a href="product_info.html"><img src="images/product_img/proimg_8.jpg" alt="CEZANNE 睫毛精華液"></a>
											<div class="addheartbox">
												<img src="images/product_heart.png" alt="">
											</div>
										</div>
										<div class="product-desc center">
											<div class="product-title"><h3><a href="product_info.html">CEZANNE 睫毛精華液</a></h3></div>
											<div class="product-price"><ins><small>NT.</small>659</ins></div>
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

								<div class="oc-item">
									<div class="product probox">
										<div class="product_logo center">
											<a href="#"><img src="images/product_logo/prologo_9.jpg" alt=""></a>
										</div>
		
										<div class="product-image">
											<a href="product_info.html"><img src="images/product_img/proimg_9.jpg" alt="妮維雅豐盈潤色護唇膏"></a>
											<div class="addheartbox">
												<img src="images/product_heart.png" alt="">
											</div>
										</div>
										<div class="product-desc center">
											<div class="product-title"><h3><a href="product_info.html">妮維雅豐盈潤色護唇膏</a></h3></div>
											<div class="product-price"><ins><small>NT.</small>659</ins></div>
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

								<div class="oc-item">
									<div class="product probox">
										<div class="product_logo center">
											<a href="#"><img src="images/product_logo/prologo_10.jpg" alt=""></a>
										</div>
		
										<div class="product-image">
											<a href="product_info.html"><img src="images/product_img/proimg_10.jpg" alt="APAGARD Premio 特效微粒子美白牙膏 100g"></a>
											<div class="addheartbox">
												<img src="images/product_heart.png" alt="">
											</div>
										</div>
										<div class="product-desc center">
											<div class="product-title"><h3><a href="product_info.html">APAGARD Premio 特效微粒子美白牙膏 100g</a></h3></div>
											<div class="product-price"><ins><small>NT.</small>659</ins></div>
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

								

							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="h_20"></div>

					<div class="addbox">

							<div class="addimg">
								<img src="images/indbanner_1.jpg" alt="" class="img_stretch">
							</div>
	
							<div class="row">
								<div class="col-sm-6 col-lg-4 text-center addiconbox" data-animate="bounceIn">
									<img src="images/addicon_free.png" alt="">
									<h5>滿額免運</h5>
								</div>
	
								<div class="col-sm-6 col-lg-4 text-center addiconbox" data-animate="bounceIn" data-delay="200">
									<img src="images/addicon_map.png" alt="">
									<h5>日本同步</h5>
								</div>
	
								<div class="col-sm-6 col-lg-4 text-center addiconbox" data-animate="bounceIn" data-delay="400">
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
							<div class="brand_item salebox"><a href="#"><img src="images/brand_1.jpg" alt=""></a></div>
							<div class="brand_item"><a href="#"><img src="images/brand_2.jpg" alt=""></a></div>
							<div class="brand_item"><a href="#"><img src="images/brand_3.jpg" alt=""></a></div>
							<div class="brand_item salebox sale75"><a href="#"><img src="images/brand_4.jpg" alt=""></a></div>
							<div class="brand_item"><a href="#"><img src="images/brand_5.jpg" alt=""></a></div>
							<div class="brand_item"><a href="#"><img src="images/brand_6.jpg" alt=""></a></div>
							<div class="brand_item salebox"><a href="#"><img src="images/brand_7.jpg" alt=""></a></div>
							<div class="brand_item"><a href="#"><img src="images/brand_8.jpg" alt=""></a></div>
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

							<div class="entry col-md-4 col-sm-6 col-12" data-animate="fadeInUp" data-delay="0">
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

							<div class="entry col-md-4 col-sm-6 col-12" data-animate="fadeInUp" data-delay="50">
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
							</div>
	
							
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
							<li><a href="qa.html">購物一定要加入會員嗎？</a></li>
							<li><a href="qa.html">目前提供哪些付款方式？</a></li>
							<li><a href="qa.html">退出貨日期是幾天呢？我什麼時候可以收到貨？</a></li>
							<li><a href="qa.html">如何查詢目前訂單的處理情況？</a></li>
							<li><a href="qa.html">完成訂購後，可以取消或修改訂單嗎？</a></li>
							<li><a href="qa.html">收到商品有毀損或數量不正確，該如何處理？</a></li>
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