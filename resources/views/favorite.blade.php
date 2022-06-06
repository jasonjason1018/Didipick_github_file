<?
require_once "include_php/css_inc.php";
require_once "require_inc.php";
?>



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

				

					<div>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">首頁</a></li>
							<li class="breadcrumb-item active" aria-current="page">最愛文章</li>
						</ol>
					</div>
					<h1>最愛文章</h1>

					<div id="page-menu" class="no-sticky mb-4 pageleftmenubox MobileOnly">
						<div id="page-menu-wrap">
							<div class="container">
								<div class="page-menu-row">

									<div class="page-menu-title ">我的收藏</div>

									<nav class="page-menu-nav">
										<ul class="page-menu-container">
											<li class="page-menu-item"><a href="product_desire.php"><div>慾望清單</div></a></li>
											<li class="page-menu-item current"><a href="favorite.php"><div>最愛文章</div></a></li>
										</ul>
									</nav>

									<div id="page-menu-trigger" class="leftmenu"><i class="icon-line-menu"></i></div>

								</div>
							</div>
						</div>
					</div>

					<div class="row justify-content-between align-items-center post-navigation mt-4 mb-4">
						<!-- <div class="col-12 col-md-auto desiretitle">
							<h3>文章 <span class="t_didi_t">5</span></h3>
						</div> -->

						<div class="col-12 col-md-auto text-center">
							<div class="input-group mx-auto">
								<input type="text" id="icons-filter" class="form-control" value="" placeholder="搜尋最愛文章關鍵字">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="icon-line-search"></i>
									</span>
								</div>
							</div>
						</div>
					</div>

					<div class="row gutter-40 col-mb-40">
						
						<div class="postcontent col-lg-9 order-lg-last">

							
							<div id="portfolio" class="post-grid portfolio row grid-container gutter-30">
								<?
									$sql = "select * from didipick_favory_article where identity='$userid'";
									$result = $mysql->query($sql);
									$size = $result->size();
									for($i=1;$i<=$size;$i++){
										$row = $result->fetch();
										$ar_id = $row['ar_id'];
										$sql1 = "select * from didipick_master where id='$ar_id'";
										$result1 = $mysql->query($sql1);
										$row1 = $result1->fetch();
										if($row1['type'] == '1'){
											$type = 'master';
										}else{
											$type = 'feedback';
										}
								?>
								<article class="entry portfolio-item col-md-4 col-sm-6 col-12 groceries">
									<div class="grid-inner">
										<div class="entry-image">
											<a href="<?=$type?>_info.php?id=<?=$row1['id']?>"><img src="didipick_Admin/images/master/<?=$row1['img']?>" alt="[約會必勝]一秒化身日本好感系女孩！嚴選單品推薦"></a>
										</div>
										<div class="entry-title">
											<h2><a href="<?=$type?>_info.php?id=<?=$row1['id']?>"><?=$row1['title']?></a></h2>
										</div>
										<div class="entry-meta feesmallicon">
											<ul>
												<?
													$date = explode('-', $row1['insert_time']);
													$th = explode(' ', $date[2]);
													$monthname = array('', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
												?>
												<li><i class="icon-calendar3"></i> <?=$th[0]?>th <?=$monthname[$date[1]]?> <?=$date[0]?></li>
												<li><a href="#"><i class="icon-eye2"></i> <?=$row1['views']?></a></li>
												<li><div class="s-keep clicked" onclick="cancelstar('<?=$i?>')" id="star<?=$i?>"></div></li>
												<input type="hidden" id="ar_id<?=$i?>" value="<?=$row1['id']?>">
											</ul>
										</div>
									</div>
								</article>
								<?}?>
								<!--<article class="entry portfolio-item col-md-4 col-sm-6 col-12 maintenance">
									<div class="grid-inner">
										<div class="entry-image">
											<a href="feedback_info.php"><img src="images/feedimg_2.jpg" alt="[約會必勝]一秒化身日本好感系女孩！嚴選單品推薦"></a>
										</div>
										<div class="entry-title">
											<h2><a href="feedback_info.php">[編輯特蒐]旅行必備藥品！出門不能少了它</a></h2>
										</div>
										<div class="entry-meta feesmallicon">
											<ul>
												<li><i class="icon-calendar3"></i> 20th Feb 2021</li>
												<li><a href="#"><i class="icon-eye2"></i> 13</a></li>
												<li><div class="s-keep clicked"></div></li>
											</ul>
										</div>
									</div>
								</article>
		
								<article class="entry portfolio-item col-md-4 col-sm-6 col-12 Hairdressing makeups">
									<div class="grid-inner">
										<div class="entry-image">
											<a href="feedback_info.php"><img src="images/feedimg_3.jpg" alt="[約會必勝]一秒化身日本好感系女孩！嚴選單品推薦"></a>
										</div>
										<div class="entry-title">
											<h2><a href="feedback_info.php">[敏感肌免驚]偽素顏肌養成術！只需睡前這樣做</a></h2>
										</div>
										<div class="entry-meta feesmallicon">
											<ul>
												<li><i class="icon-calendar3"></i> 20th Feb 2021</li>
												<li><a href="#"><i class="icon-eye2"></i> 13</a></li>
												<li><div class="s-keep clicked"></div></li>
											</ul>
										</div>
									</div>
								</article>
		
								<article class="entry portfolio-item col-md-4 col-sm-6 col-12 groceries">
									<div class="grid-inner">
										<div class="entry-image">
											<a href="feedback_info.php"><img src="images/feedimg_2.jpg" alt="[約會必勝]一秒化身日本好感系女孩！嚴選單品推薦"></a>
										</div>
										<div class="entry-title">
											<h2><a href="feedback_info.php">[編輯特蒐]旅行必備藥品！出門不能少了它</a></h2>
										</div>
										<div class="entry-meta feesmallicon">
											<ul>
												<li><i class="icon-calendar3"></i> 20th Feb 2021</li>
												<li><a href="#"><i class="icon-eye2"></i> 13</a></li>
												<li><div class="s-keep clicked"></div></li>
											</ul>
										</div>
									</div>
								</article>
		
								<article class="entry portfolio-item col-md-4 col-sm-6 col-12 medicine makeups">
									<div class="grid-inner">
										<div class="entry-image">
											<a href="feedback_info.php"><img src="images/feedimg_3.jpg" alt="[約會必勝]一秒化身日本好感系女孩！嚴選單品推薦"></a>
										</div>
										<div class="entry-title">
											<h2><a href="feedback_info.php">[敏感肌免驚]偽素顏肌養成術！只需睡前這樣做</a></h2>
										</div>
										<div class="entry-meta feesmallicon">
											<ul>
												<li><i class="icon-calendar3"></i> 20th Feb 2021</li>
												<li><a href="#"><i class="icon-eye2"></i> 13</a></li>
												<li><div class="s-keep clicked"></div></li>
											</ul>
										</div>
									</div>
								</article>
		
								<article class="entry portfolio-item col-md-4 col-sm-6 col-12 maintenance groceries">
									<div class="grid-inner">
										<div class="entry-image">
											<a href="feedback_info.php"><img src="images/feedimg_1.jpg" alt="[約會必勝]一秒化身日本好感系女孩！嚴選單品推薦"></a>
										</div>
										<div class="entry-title">
											<h2><a href="feedback_info.php">[約會必勝]一秒化身日本好感系女孩！嚴選單品推薦</a></h2>
										</div>
										<div class="entry-meta feesmallicon">
											<ul>
												<li><i class="icon-calendar3"></i> 20th Feb 2021</li>
												<li><a href="#"><i class="icon-eye2"></i> 13</a></li>
												<li><div class="s-keep clicked"></div></li>
											</ul>
										</div>
									</div>
								</article>-->
		
		
							</div>

							<div class="clear"></div>

						</div>
						
						
						<div class="sidebar col-lg-3 ">
							<div class="sidebar-widgets-wrap">

								<div class="widget widget_links product_lbox PCOnly">

									<h4>我的收藏</h4>
									<ul>
										<li><a href="product_desire.php" title="慾望清單">慾望清單</a></li>
										<li><a href="favorite.php" title="最愛文章" class="active">最愛文章</a></li>
									</ul>

								</div>


								<!--<div class="widget check_box checkdesire">

									<h4>篩選</h4>
									<div class="cb_pad">
										<label class="control control--checkbox">全部pick!文章
											<input type="checkbox" checked="checked"/>
											<div class="control__indicator"></div>
										</label>
									</div>
									<div class="cb_pad">
										<label class="control control--checkbox">只顯示近期文章
											<input type="checkbox"/>
											<div class="control__indicator"></div>
										</label>
									</div>
									
								</div>-->

								<!--<div class="widget cadesire">
									<h4>商品分類</h4>
									<ul>
										<li><a href="#">保健品 (1)</a></li>
										<li><a href="#">美妝 (1)</a></li>
										<li><a href="#">保養 (2)</a></li>
										<li><a href="#">美髮 (5)</a></li>
										<li><a href="#">生活雜貨 (14)</a></li>
									</ul>
								</div>-->

							</div>
						</div>
					</div>

					

		
				</div>

				<div class="clear"></div>
				<div class="h_40"></div>

				<div class="container">
					<div class="fancy-title title-center title-border">
						<h4>更多值得你 pick! 的日本選物：</h4>
					</div>

					<div id="oc-images" class="pickjpbox owl-carousel image-carousel carousel-widget" data-autoplay="4000" data-loop="true" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-lg="5" data-items-xl="6">
						<?
							$sql = "select * from exchange_rate order by change_date desc";
							$result = $mysql->query($sql);
							$row = $result->fetch();
							$rate = $row['rate'];
							$sql = "select * from didipick_product where status='1' order by rand() limit 7";
							$result = $mysql->query($sql);
							$size = $result->size();
							for($i=1;$i<=$size;$i++){
								$row = $result->fetch();
						?>
						<div class="oc-item"><!--85折salehcircle-->
							<a href="product_info.php?name=<?=$row['name']?>"><img src="didipick_Admin/images/admin_upload_img/<?echo $row['img1'];?>" alt="Image 1"></a>
							<h3><a href="product_info.php?name=<?=$row['name']?>"><?=$row['name']?></a></h3>
							<div class="product-price"><ins><small>NT.</small><?=ceil($rate * $row['s_price'])?></ins></div>
						</div>
						<?}?>
						<!--<div class="oc-item">
							<a href="product_info.php"><img src="images/product_img/proimg_1.jpg" alt="Image 1"></a>
							<h3><a href="product_info.php">FUTAE NIGHT PACK 夜間二重眼膜</a></h3>
							<div class="product-price"><ins><small>NT.</small>780</ins></div>
						</div>
						<div class="oc-item">
							<a href="product_info.php"><img src="images/product_img/proimg_3.jpg" alt="Image 1"></a>
							<h3><a href="product_info.php">FUTAE NIGHT PACK 夜間二重眼膜</a></h3>
							<div class="product-price"><ins><small>NT.</small>780</ins></div>
						</div>
						<div class="oc-item salehcircle">
							<a href="product_info.php"><img src="images/product_img/proimg_2.jpg" alt="Image 1"></a>
							<h3><a href="product_info.php">FUTAE NIGHT PACK 夜間二重眼膜</a></h3>
							<div class="product-price"><ins><small>NT.</small>780</ins></div>
						</div>
						<div class="oc-item">
							<a href="product_info.php"><img src="images/product_img/proimg_1.jpg" alt="Image 1"></a>
							<h3><a href="product_info.php">FUTAE NIGHT PACK 夜間二重眼膜</a></h3>
							<div class="product-price"><ins><small>NT.</small>780</ins></div>
						</div>
						<div class="oc-item">
							<a href="product_info.php"><img src="images/product_img/proimg_3.jpg" alt="Image 1"></a>
							<h3><a href="product_info.php">FUTAE NIGHT PACK 夜間二重眼膜</a></h3>
							<div class="product-price"><ins><small>NT.</small>780</ins></div>
						</div>
						<div class="oc-item salehcircle">
							<a href="product_info.php"><img src="images/product_img/proimg_2.jpg" alt="Image 1"></a>
							<h3><a href="product_info.php">FUTAE NIGHT PACK 夜間二重眼膜</a></h3>
							<div class="product-price"><ins><small>NT.</small>780</ins></div>
						</div>-->

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

	<script type="text/javascript">

    function cancelstar(no){
    	$(this).toggleClass('clicked');
    	var msg = "確定要刪除嗎？"; 
		if (confirm(msg)==true){ 
	    	name = $("#ar_id"+no).val();
	    	$.ajax({
				type:"POST",
				url:"cart_or_favory.php",
				data:{type:"cancelfavoryarticle",name:name},
				success:function(resp){
					window.location='favorite.php';
				}
			});
		}else{
			return false;
		}
    }
  </script>


</body>
</html>