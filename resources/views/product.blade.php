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

					<div class="heading_box center headw_md">
						<p>ディディピック !</p>
						<h3>提供一站式日貨<span>日本直送</span>，日本同步限定品<span>直覺</span>買！</h3>
					</div>
					<div class="clear"></div>
					<div class="h_20"></div>

					<div>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="/">首頁</a></li>
							<li class="breadcrumb-item active" aria-current="page">商品列表</li>
						</ol>
					</div>
					<h1>商品列表</h1>

					<div id="page-menu" class="no-sticky mb-4 pageleftmenubox MobileOnly">
						<div id="page-menu-wrap">
							<div class="container">
								<div class="page-menu-row">

									<div class="page-menu-title ">所有分類商品</div>

									<nav class="page-menu-nav">
										<ul class="page-menu-container">
											@foreach($category as $categoryv)
												<li class="page-menu-item active"><a href="#" title=""><img src="/storage/{{$categoryv->icon}}" alt="">{{$categoryv->name}}</a></li>
											@endforeach
										</ul>
									</nav>

									<div id="page-menu-trigger" class="leftmenu"><i class="icon-line-menu"></i></div>

								</div>
							</div>
						</div>
					</div>

					<div class="row gutter-40 col-mb-40">
						
						<div class="postcontent col-lg-9 order-lg-last">

							
							<div id="shop" class="shop row grid-container gutter-20" data-layout="fitRows">
								@foreach($product as $product)
								<div class="product probox col-md-3 col-sm-6 col-12">
									<div class="product-image">
										<a href="/didipick_product_info/{{$product->sno}}"><img src="/storage/{{$product->img1}}" alt="資生堂MOILIP藥用護唇膏"></a>
										@if(Session::has('didipick_login'))
												@if(!in_array($product->No, $f_product))
													<div class="liked" onclick="pfavory('{{$product->No}}')" id="p_star{{$product->No}}"></div>
												@else
													<div class="liked clicked" onclick="pcancelfavory('{{$product->No}}')" id="p_star{{$product->No}}"></div>
												@endif
										@else
											<div class="liked" onclick="alert('請先登入');window.location='/didipick_login'"></div>
										@endif
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="/didipick_product_info/{{$product->sno}}" >{{$product->name}}</a></h3></div>
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
										<div class="product-rating">
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
									</div>
								</div>
								@endforeach

								


							</div>

							<div class="clear"></div>
							@php
								$bsize = count($brand);
							@endphp
							@if($totalpage > 1)
							<div class="center">
								@if(!isset($nowpage))
									@php
										$nowpage = 1;
									@endphp
								@endif
								<ul class="pagination pagination-transparent pagination-circle">
									@if($nowpage != 1)
										<li class="page-item"><a href="javascript:void(0)" class="page-link" onclick="page('{{$nowpage-1}}', '{{$bsize}}')" aria-label="Next"><span aria-hidden="true">«</span></a></li>
									@endif

										@if($nowpage<=10)
											@php
												$a = 1;
											@endphp
										@elseif($nowpage%10==0)
											@php
												$a = $nowpage+1;
											@endphp
										@else
											@php
												$a = $nowpage-($nowpage%10)+1;
											@endphp
										@endif
									@for($i=$a;$i<$a+10;$i++)
										@if($i<=$totalpage)
											@if($nowpage == $i)
												<li class="page-item active"><a href="javascript:void(0)" class="page-link" onclick="page('{{$i}}', '{{$bsize}}')">{{$i}}</a></li>
											@else
												<li class="page-item"><a href="javascript:void(0)" class="page-link" onclick="page('{{$i}}', '{{$bsize}}')">{{$i}}</a></li>
											@endif
										@endif
									@endfor
									@if($nowpage != $totalpage)
										<li class="page-item"><a href="javascript:void(0)" class="page-link" onclick="page('{{$nowpage+1}}', '{{$bsize}}')" aria-label="Next"><span aria-hidden="true">»</span></a></li>
									@endif
								</ul>
							</div>
							@endif
						</div>
						
						
						<div class="sidebar col-lg-3">
							<div class="sidebar-widgets-wrap">

								<div class="widget widget_links product_lbox PCOnly">

									<h4>所有分類商品</h4>
									<ul>
										@foreach($category as $v)
											@if(isset($categorysno))
												@if($categorysno == $v->sno)
													<li><a href="javascript:void(0)" title="{{$v->name}}" onclick="category('{{$v->sno}}')" class="active"><img src="/storage/{{$v->icon}}" alt="">{{$v->name}}</a></li>
												@else
													@if($v->name == '全部商品')
														<li><a href="javascript:void(0)" title="{{$v->name}}" onclick="category('all')"><img src="/storage/{{$v->icon}}" alt="">{{$v->name}}</a></li>
													@else
														<li><a href="javascript:void(0)" title="{{$v->name}}" onclick="category('{{$v->sno}}')"><img src="/storage/{{$v->icon}}" alt="">{{$v->name}}</a></li>
													@endif
												@endif
											@else
												@if($v->name == '全部商品')
													<li><a href="javascript:void(0)" title="{{$v->name}}" onclick="category('all')" class="active"><img src="/storage/{{$v->icon}}" alt="">{{$v->name}}</a></li>
												@else
													<li><a href="javascript:void(0)" title="{{$v->name}}" onclick="category('{{$v->sno}}')"><img src="/storage/{{$v->icon}}" alt="">{{$v->name}}</a></li>
												@endif
											@endif
										@endforeach
										@if(isset($categorysno))
											<input type="hidden" id="categorysno" value="{{$categorysno}}">
										@else
											<input type="hidden" id="categorysno" value="all">
										@endif
									</ul>

								</div>

								<div class="widget check_box">

									<h4>熱銷品牌</h4>
									@foreach($brand as $k=>$v)
										<div class="cb_pad">
											<label class="control control--checkbox">{{$v->name}}
												<!--<input type="checkbox" checked="checked"/>-->
												@if(isset($brandsno))
													@if(in_array($v->sno, $brandsno))
														<input type="checkbox" id="brand{{$k}}" onclick="brand('{{$bsize}}')" value="{{$v->sno}}" checked/>
													@else
														<input type="checkbox" id="brand{{$k}}" onclick="brand('{{$bsize}}')" value="{{$v->sno}}"/>
													@endif
												@else
													<input type="checkbox" id="brand{{$k}}" onclick="brand('{{$bsize}}')" value="{{$v->sno}}"/>
												@endif
												<div class="control__indicator"></div>

											</label>
										</div>
									@endforeach
									
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
	<script src="/js/acfavory.js"></script>
	<script type="text/javascript">
    $('.liked,.keep').click(function(){
      $(this).toggleClass('clicked');
    });
    function brand(size){
			//alert(no);
			var brandid = "";
			for(var i=0;i<=size;i++){
				if($("#brand"+i).prop("checked")==true){
					sno = $("#brand"+i).val();
					brandid = sno+','+brandid;
				}
			}
			category = $("#categorysno").val();
			if(brandid == "" && category=="all"){
				window.location="/didipick_product";
			}else if(brandid == "" && category!="all"){
				window.location="/category_search/"+category;
			}else{
				window.location="/brand_search/"+brandid+"/"+category;
			}
		}

		function category(category){
			window.location="/category_search/"+category;
		}

		function page(page, size){
			var brandid = "";
			for(var i=0;i<=size;i++){
				if($("#brand"+i).prop("checked")==true){
					sno = $("#brand"+i).val();
					brandid = sno+','+brandid;
				}
			}
			if(brandid == ""){
				brandid = "none";
			}
			category = $("#categorysno").val();
			window.location="/product_page/"+page+"/"+brandid+"/"+category;
		}

  </script>

</body>
</html>