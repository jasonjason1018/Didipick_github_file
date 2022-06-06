@include('include_php.css_inc')
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v12.0&appId=1116878418766951&autoLogAppEvents=1" nonce="SP3nryHv"></script>



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
		

		<section id="page-title">

			<div class="container clearfix">
				<h1>{{$master->title}}</h1>
				<div>
					<span><i class="icon-line-edit-3"></i> by {{$master->author}}</span>
				</div>
			</div>

		</section>

		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">首頁</a></li>
							<li class="breadcrumb-item"><a href="master.php">達人勸敗 / 主題列表 </a></li>
							<li class="breadcrumb-item active" aria-current="page">頭髮專用吸油粉撲</li>
						</ol>
					</div>

					

					<div class="row gutter-40 col-mb-80">
						
						<div class="postcontent col-lg-9">
							<div class="single-post mb-0">
								<div class="entry clearfix">
									@php
										$date = explode('-', $master->insert_time);
										$th = explode(' ', $date[2]);
										$monthname = array('', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
										if($date[1] < 10){
											$date1 = explode('0', $date[1]);
											$date1 = $date1[1];
										}
									@endphp

									<div class="entry-meta">
										<ul>
											<li><i class="icon-calendar3"></i>  {{$th[0] .' '}} {{$monthname[$date1].' '}} {{$date[0]}}</li>
											<li><a href="#"><i class="icon-eye2"></i> {{$master->views}}</a></li>
											<li>
											@if(Session::has('didipick_login'))
											<!--最愛文章-->
												@if(!in_array($master->id, $f_article))
													<div class="s-keep" onclick="mfavory('{{$master->id}}')" id="m_star{{$master->id}}"></div>
												@else
													<div class="s-keep clicked" onclick="mcancelfavory('{{$master->id}}')" id="m_star{{$master->id}}"></div>
												@endif
											@else
												<div class="s-keep" onclick="alert('請先登入');window.location='/didipick_login'"></div>
											@endif
											</li>
										</ul>
									</div>

									
									<div class="entry-content mt-0">
										{!!$master->text!!}
										<!--<div class="center">
											<img src="images/masterimg.jpg" alt="" class="mb-2 img_stretch">
											<div class="mt-2"><small class="t_gray">圖／翻攝自 <a href="https://fujikobrand.com/item/fpppowder/" target="_blank">https://fujikobrand.com/item/fpppowder/</a></small></div>
										</div>
										<br>

										<p>風靡日妞的【頭皮去油神器】，女孩們都該擁有！<br>相信大家一定都有過這種尷尬的時刻......</p>

										<blockquote><p>「出門前精心打理好的完美髮型，拿下安全帽瞬間又扁又塌😔 」<br>「偷懶不想洗頭，隔天馬上被朋友拆穿，真糗！」<br>「悶熱的天氣，不僅全身黏ＴＴ，連瀏海都排排站貼在額頭😱」</p></blockquote>
										
										<br>

										<p>這些苦惱ICE都懂，現在教你如何瞬間❤️回復乾爽❤️</p>

										<div class="center">
											<img src="images/masterimg_1.jpg" alt="" class="mb-2" style="width: 50%;">
											<div class="mt-2 mb-2 "><small class="t_gray">圖／翻攝自 <a href="https://fujikobrand.com/item/fpppowder/" target="_blank">https://fujikobrand.com/item/fpppowder/</a></small></div>
										</div>
										<br>
										<p>拿出我們的【Fujiko Ponpon Powder】就對啦～(撒花🌸)<br/>
											輕巧外型方便攜帶，出門一定會放包包！<br/>
											在任何無法洗頭的情形下，都能快速去除頭皮油光😍<br/>
											還有清新香氣瞬間除臭！友善肌膚成分，可以安心使用唷～
											</p>

										<br>
									
										<p class="t_didi_t"><i class="icon-heart"></i>使用方式超簡單：</p>
										
										<div class="center">
											<img src="images/masterimg_2.png" alt="" class="img_stretch mb-2">
											<div class="mt-2 mb-2 "><small class="t_gray">圖／翻攝自 <a href="https://fujikobrand.com/item/fpppowder/" target="_blank">https://fujikobrand.com/item/fpppowder/</a></small></div>
										</div>
										<br>
										<p>Step.1 鋪在頭皮出油的地方<br/>
											Steo.2 輕輕撥鬆髮根，讓白色粉末吸附油脂</p>
											
										<p>再用梳子梳理，仙氣翩翩的妳又回來了😘<br/>
											是不是真的超方便！直接買一打囤貨吧～
											</p>-->
										
										<div class="clear"></div>
										<div class="rec-pro-wrap">
											<h2>推薦商品：</h2>
											
												@foreach($Ritem as $Ritem)
												@php
													date_default_timezone_set("Asia/Taipei");
		 											$today = date("Ymd");
													$ontime = explode('-', $Ritem->shelf_on);
													$ontime = implode('', $ontime);
													$offtime = explode('-', $Ritem->shelf_off);
													$offtime = implode('', $offtime);
												@endphp
												@if($today>=$ontime && $today<=$offtime && $Ritem->status == 1)
													<a href="/didipick_product_info/{{$Ritem->sno}}" target="_blank">
												@else
													<a onclick="alert('商品已下架')" target="_blank">
												@endif
												<div class="rec-pro-box">
													<div class="product-image">
														<img src="/storage/{{$Ritem->img1}}" alt="Fujiko Ponpon Powder 頭髮專用吸油粉撲">
													</div>
													<div class="product-desc">
														<div class="product-title"><h3 id="pname">{{$Ritem->name}}</h3></div>
														@if($Ritem->s_price != $Ritem->o_price)
															<div class="product-price special-price">
														@else
															<div class="product-price">
														@endif
															<ins>
																<small>
																NT.
															</small>
															{{ceil($Ritem->s_price*$rate)}}
														</ins>
														@if($Ritem->s_price != $Ritem->o_price)
															<del>
																<small>
																NT.
															</small>
															{{ceil($Ritem->o_price*$rate)}}
														</del>
														@endif
														</div>
														<div class="product-rating">
															
														</div>
														
														<div class="quantity">
															<input type="button" value="-" class="minus">
															<input type="text" name="quantity" id="pquantity" value="1" class="qty" />
															<input type="button" value="+" class="plus">
														</div>
														
														<a>
															@if(Session::has('didipick_login'))
																<div class="button button-3d m-0" onclick='addtocart("")'>加入購物車</div>
															@else
																<div class="button button-3d m-0" onclick='alert("請先登入");window.location="/didipick_login"'>加入購物車</div>
															@endif
														</a>


													</div>
													
												</div>
											</a>
											@endforeach
										</div>


										<div class="clear"></div>


										

										<div class="row justify-content-between align-items-center post-navigation">
											<div class="col-12 col-md-auto text-center">
												<div class="tagcloud">
													@php
														$label = explode(',', $master->label);
													@endphp
													@foreach($label as $v)
														<a href="javascript:void(0)">{{$v}}</a>
													@endforeach
												</div>
											</div>
		
											<div class="col-12 col-md-auto text-center">
												<div class="si-share d-flex">
													<span>分享此項商品</span>
													<div>
														@php
															$URL='http://didipick.com'.$_SERVER['REQUEST_URI'];
														@endphp
														<!--<a href="https://www.facebook.com/sharer/sharer.php?u＝<?=$URL?>" target="_blank" class="social-icon si-borderless">-->
														<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{$URL}}&amp;src=sdkpreparse" class="social-icon si-borderless">
															<img src="/images/share_fb.svg" alt="">
														</a>
														<!--</a>-->
														<!--<a href="http://instagram.com/" target="_blank" class="social-icon si-borderless">
															<img src="/images/share_ig.svg" alt="">
														</a>-->
														<a href="https://social-plugins.line.me/lineit/share?url={{$URL}}" target="_blank" class="social-icon si-borderless">
															<img src="/images/share_line.svg" alt="">
														</a>
													</div>
												</div>
											</div>
										</div>



									</div>
								</div>


								<div class="igmaster mb-5">
									<div class="igmaster_item">
										<img src="/images/igmaster.jpg" alt="">
									</div>
									<div class="igmaster_item">
										<p class="t_didi_t mb-0">{{$master->author}}</p><br>
										<!--<small><span>13</span> 篇文章</small>-->
									</div>
									<!-- <div class="igmaster_item">
										<a href="https://www.instagram.com/ice_i_eat/" class="button" target="_blank"><i class="icon-line-plus"></i>追蹤</a>
									</div> -->
								</div>

								
								<div class="row justify-content-between align-items-center post-navigation">
									<!--<div class="col-12 col-md-auto text-center">
										<p class="mb-2 t_didi_t">我要訂閱，didipick滿足你所有的新奇渴望！</p>
										<form action="#" class="my-0" novalidate="novalidate">
											<div class="input-group mx-auto">
												<input type="text" class="form-control" placeholder="請輸入電子信箱" required="">
												<div class="input-group-append">
													<button class="btn btn-gcolor" type="submit"><i class="icon-email2"></i></button>
												</div>
											</div>
										</form>
									</div>-->

									<div class="col-12 col-md-auto text-center gobackbtn">
										<a href="#">返回文章列表 &rArr;</a>
									</div>
								</div>

								<div class="line"></div>


								<div class="respond">

									<h3>喜歡此篇內容的話，歡迎留言！</h3>

									<form class="row" action="master_send_message.php" method="post" id="commentform">
										<!-- <div class="col-md-4 form-group">
											<label for="author">姓名</label>
											<input type="text" name="author" id="author" value="" size="22" tabindex="1" class="sm-form-control" />
										</div>

										<div class="col-md-4 form-group">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" value="" size="22" tabindex="2" class="sm-form-control" />
										</div>

										<div class="w-100"></div> -->

										<div class="col-12 form-group">
											<label for="comment">想說的話..</label>
											<textarea name="comment" cols="58" rows="7" tabindex="4" class="sm-form-control"></textarea>
										</div>

										<div class="col-12 form-group">
											<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d m-0">送出</button>
										</div>
									</form>

								</div>

								<div class="line"></div>
								

								<div id="comments" class="clearfix">

									<h3 id="comments-title"><span>100</span> Comments</h3>
									
									<ol class="commentlist clearfix">
										
										<li class="comment even thread-even depth-1" id="li-comment-1">
											<div id="comment-1" class="comment-wrap clearfix">
												<div class="comment-meta">
													<div class="comment-author vcard">
														<span class="comment-avatar clearfix">
														<img alt='Image' src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>
													</div>
												</div>
												<div class="comment-content clearfix">
													<div class="comment-author">張XX<span><div>2021.01.01</div></span></div>
													<p>哈囉</p>
												</div>
												<div class="clear"></div>
											</div>

											<!--<ul class='children'>
												<li class="comment byuser comment-author-_smcl_admin odd alt depth-2" id="li-comment-3">
													<div id="comment-3" class="comment-wrap clearfix">
														<div class="comment-meta">
															<div class="comment-author vcard">
																<span class="comment-avatar clearfix">
																<img alt='Image' src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G' class='avatar avatar-40 photo' height='40' width='40' /></span>
															</div>
														</div>
														<div class="comment-content clearfix">
															<div class="comment-author"><a href='#' rel='external nofollow' class='url'>didi小編</a><span><div>April 24, 2012 at 10:46 am</div></span></div>
															<p>這篇文章有幫到妳的話真是太好囉！歡迎您持續關注好評推薦，下個月我們即將推出更精彩的主題唷～～～</p>
														</div>
														<div class="clear"></div>
													</div>

												</li>

											</ul>-->

										</li>
									</ol>

									<div class="clear"></div>
								</div>

								<!-- <div class="dividertitle center">
									<div class="divideb">
										<h3 class="t_didi_t">你可能也喜歡</h3>
										<p class="t_didi_t">You may also like</p>
									</div>
								</div> -->

								

							</div>

						</div>

						
						<div class="sidebar col-lg-3">
							<div class="sidebar-widgets-wrap">
								

								<div class="widget">

									<div class="tabs mb-0" id="sidebar-tabs">

										<ul class="tab-nav">
											<li><a href="#tabs-1">最近瀏覽の文章</a></li>
											<li><a href="#tabs-2">熱門の文章</a></li>
										</ul>

										<div class="tab-container">

											<div class="tab-content right_cont align_j" id="tabs-1">
												<div class="posts-sm row" id="popular-post-list-sidebar">
													
													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
																<div class="entry-title">
																	@foreach($other as $other)
																		<h4><a href="">{{$other->title}}</a></h4>
																	@endforeach
																</div>
														</div>
													</div>

												</div>
											</div>

											<div class="tab-content right_cont align_j" id="tabs-2">
												<div class="posts-sm row" id="recent-post-list-sidebar">
													
													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
																<div class="entry-title">
																	@foreach($hotmaster as $hotmaster)
																		<h4><a href="/didipick_master_info/{{$master->id}}">{{$hotmaster->title}}</a></h4>
																	@endforeach
																</div>
														</div>
													</div>

													<!--<div class="entry col-12">
														<div class="grid-inner row no-gutters">
																<div class="entry-title">
																	<h4><a href="#">[約會必勝]一秒化身日本好感系女孩！嚴選單品推薦</a></h4>
																</div>
														</div>
													</div>
													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
																<div class="entry-title">
																	<h4><a href="#">[編輯特蒐]旅行必備藥品！出門不能少了它</a></h4>
																</div>
														</div>
													</div>
													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
																<div class="entry-title">
																	<h4><a href="#">[約會必勝]一秒化身日本好感系女孩！嚴選單品推薦</a></h4>
																</div>
														</div>
													</div>
													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
																<div class="entry-title">
																	<h4><a href="#">[編輯特蒐]旅行必備藥品！出門不能少了它</a></h4>
																</div>
														</div>
													</div>-->
												</div>
											</div>
				

										</div>

									</div>

								</div>

								<div class="widget clearfix">

									<h4>熱門關鍵字</h4>
									<div class="tagcloud">
										@foreach($hotlabel as $hotlabel)
											<a href="">{{$hotlabel->name}}</a>
										@endforeach
										<!--<a href="#">偽素顏</a>
										<a href="#">素顏肌養成術</a>-->
									</div>

								</div>

							</div>
						</div>
					</div>

				</div>

				<div class="clear"></div>

				<div class="dividertitle divider-center">
					<div class="dividebg">
						<h3 class="t_didi_t mb-2">你可能也喜歡</h3>
						<p class="t_didi_t mb-0">You may also like</p>
					</div>
				</div>

				<div class="container">
					<div class="row masterbox">
						
						<div class="masterblog_item col-lg-4 col-xs-12">
							<a href=""><img src="" alt=""></a>
							<h3><a href="">TITLE</a></h3>
						
							<div class="row justify-content-between align-items-center post-navigation">
								<!--<div class="col-6 col-md-auto align_l">
									<a href="#">美甲</a>												
								</div>-->

								<!--<div class="col-6 col-md-auto align_r">
									<small class="t_gray">22 day ago</small>
								</div>-->
							</div>
						</div>
						<!--<div class="masterblog_item col-lg-4 col-xs-12" data-animate="fadeInUp" data-delay="50">
							<a href="master_info.html"><img src="images/masterblog_1.jpg" alt=""></a>
							<h3><a href="master_info.html">[鬼滅之刃]禰豆子指彩掀熱議！精選6款「柳葉紋印漸層」美甲</a></h3>
						
							<div class="row justify-content-between align-items-center post-navigation">
								<div class="col-6 col-md-auto align_l">
									<a href="#">女生選物</a>												
								</div>

								<div class="col-6 col-md-auto align_r">
									<small class="t_gray">22 day ago</small>
								</div>
							</div>
						</div>
						<div class="masterblog_item col-lg-4 col-xs-12" data-animate="fadeInUp" data-delay="100">
							<a href="master_info.html"><img src="images/masterblog_1.jpg" alt=""></a>
							<h3><a href="master_info.html">[鬼滅之刃]禰豆子指彩掀熱議！精選6款「柳葉紋印漸層」美甲</a></h3>
						
							<div class="row justify-content-between align-items-center post-navigation">
								<div class="col-6 col-md-auto align_l">
									<a href="#">美甲</a>												
								</div>

								<div class="col-6 col-md-auto align_r">
									<small class="t_gray">22 day ago</small>
								</div>
							</div>
						</div>-->

					</div>
				</div>

			</div>
		</section>

		
		@include('include_php.header_inc')

	</div>

	
	<div id="gotoTop"><img src="/images/gotop.png" alt=""></div>

	<script src="/js/jquery.js"></script>
	<script src="/js/plugins.min.js"></script>
	<script src="/js/acfavory.js"></script>
	<script src="/js/functions.js"></script>

	<script type="text/javascript">
    $('.liked,.keep,.s-keep').click(function(){
      $(this).toggleClass('clicked');
    });
  </script>
</body>
</html>