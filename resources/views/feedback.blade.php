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

					<!--<div class="grid-filter-wrap">-->

						<!--<ul class="grid-filter" data-container="#portfolio">
							<li class="activeFilter"><a href="#" data-filter="*">All</a></li>
							<?/*
								$sql = "select * from didipick_category where name<>'全部商品' and status='1'";
								$result = $mysql->query($sql);
								$size = $result->size();
								for($i=1;$i<=$size;$i++){
									$row = $result->fetch();*/
							?>
								<li><a href="#" data-filter=""></a></li>
							-->
							<!--<li><a href="#" data-filter=".medicine">保健品</a></li>
							<li><a href="#" data-filter=".makeups">美妝</a></li>
							<li><a href="#" data-filter=".maintenance">保養</a></li>
							<li><a href="#" data-filter=".Hairdressing">美髮</a></li>
							<li><a href="#" data-filter=".groceries">生活雜貨</a></li>-->
						<!--</ul>-->

						<!-- <div class="grid-shuffle rounded" data-container="#portfolio">
							<i class="icon-random"></i>
						</div> -->

					<!--</div>-->


					<div class="heading_box center headw_md">
						<p>ディディピック !</p>
						<h3>與日本。零時差。didipick本季的熱門話題是＿＿！</h3>
					</div>
					<div class="clear"></div>
					<div class="h_20"></div>

					<div>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">首頁</a></li>
							<li class="breadcrumb-item active" aria-current="page">好評推薦/文章列表</li>
						</ol>
					</div>
					<h1>好評推薦</h1>

					<div id="portfolio" class="post-grid portfolio row grid-container gutter-30">
						@foreach($master as $master)
						<article class="entry portfolio-item col-md-4 col-sm-6 col-12">
							<div class="grid-inner">
								<div class="entry-image">
									<a href=""><img src="/storage/{{$master->img}}" alt="[約會必勝]一秒化身日本好感系女孩！嚴選單品推薦"></a>
								</div>
								<div class="entry-title">
									<h2><a href="">{{$master->title}}</a></h2>
								</div>
								<div class="entry-meta feesmallicon">
									@php
										$date = explode('-', $master->insert_time);
										$th = explode(' ', $date[2]);
										$monthname = array('', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
										if($date[1] < 10){
											$date1 = explode('0', $date[1]);
											$date1 = $date1[1];
										}
									@endphp
									<ul>
										<li><i class="icon-calendar3"></i> {{$th[0] .' '}} {{$monthname[$date1].' '}} {{$date[0]}}</li>
										<li><a href="#"><i class="icon-eye2"></i> {{$master->views}}</a></li>
										<li>
										@if(Session::has('didipick_login'))
												@if(!in_array($master->id, $f_article))
													<li><div class="s-keep" onclick="mfavory('{{$master->id}}')" id="m_star{{$master->id}}"></div></li>
												@else
													<li><div class="s-keep clicked" onclick="mcancelfavory('{{$master->id}}')" id="m_star{{$master->id}}"></div></li>
												@endif
											@else
												<li><div class="s-keep" onclick="alert('請先登入');window.location='/didipick_login'"></div></li>
											@endif
										</li>
									</ul>
								</div>
								<p>{!!$master->outline!!}</p>
							</div>
						</article>
						@endforeach
						
					</div>

					<div class="clear"></div>


							

							<div class="center">
								<ul class="pagination pagination-transparent pagination-circle">
									
									<li class="page-item"><a class="page-link" aria-label="Next" onclick="changepage()"><span aria-hidden="true">«</span></a></li>
									
										
									
									<li class="page-item active"><a class="page-link" onclick="changepage()">1</a></li>
									
									<li class="page-item"><a class="page-link" aria-label="Next" onclick="changepage()"><span aria-hidden="true">»</span></a></li>
									
								</ul>
							</div>
							

		
				</div>
	
				
			</div>
		</section>

		@include('include_php.footer_inc')

	</div>

	
	<div id="gotoTop"><img src="images/gotop.png" alt=""></div>

	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<script src="js/functions.js"></script>
	<script src="/js/acfavory.js"></script>
	<script type="text/javascript">
    $('.liked,.keep,.s-keep').click(function(){
      $(this).toggleClass('clicked');
    });
    
  </script>
</body>
</html>