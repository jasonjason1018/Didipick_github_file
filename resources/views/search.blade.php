<? 
	require_once "require_inc.php";
	require_once 'include_php/css_inc.php';
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

					<div class="heading_box center headw_md">
						<p>ディディピック !</p>
						<h3>提供一站式日貨<span>代購＆直送</span>，日本同步限定品<span>直覺</span>買！</h3>
					</div>
					<div class="clear"></div>
					<div class="h_20"></div>

					<div>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">首頁</a></li>
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
											<?
												$sql_ca = "select * from didipick_category";
												$result_ca = $mysql->query($sql_ca);
												$size_ca = $result_ca->size();
												for($i = 1;$i<=$size_ca;$i++){
													$row_ca = $result_ca->fetch();
											?>
											<li class="page-menu-item"><a href="#" title="<?=$row_ca['name']?>"><img src="didipick_Admin/images/category_icon/<?=$row['icon']?>" alt=""><?=$row_ca['name']?></a></li>
											<?}?>
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
								<?	
									if(isset($_GET['pagen'])){	
										$pagen = $_GET['pagen']-1;
									}else{
										$pagen = 0;
									}
									$limit = 12;
									$page = $pagen*$limit;
									//echo $page;
									$sql = "select * from exchange_rate order by change_date desc";
									$result = $mysql->query($sql);
									$row = $result->fetch();
									$rate = $row['rate'];
									if(isset($_GET['q'])){
										$q = $_GET['q'];
										$sql = "select * from didipick_product where name like '%$q%' and status='1' limit $page, $limit";
									}
									$result = $mysql->query($sql);
									$size = $result->size();
									if($size!=0){
									for($i=1;$i<=$size;$i++){
										$row = $result->fetch();
										$pno = $row['No'];
								?>
								<div class="product probox col-md-3 col-sm-6 col-12">
									<div class="product-image">
										<a href="product_info.php?name=<?echo $row['name'];?>&id=<?echo $i?>"><img src="didipick_Admin/images/admin_upload_img/<?echo $row['img1'];?>" alt="資生堂MOILIP藥用護唇膏"></a>
										<?
										if($session->get('login-status') == "signing-in"){
											$sql_f = "select * from didipick_favory where identity='$userid' and product_No='$pno'";
											$result_f = $mysql->query($sql_f);
											$size_f = $result_f->size();
											if($size_f == 0){
										?>
										<div class="liked" onclick="addheart('<?=$i?>')" id="heart<?=$i?>"></div>
										<input type="hidden" id="product_name<?=$i?>"  value="<?=$row['name']?>">
										<?}else{?>
										<div class="liked clicked" onclick="cancelheart('<?=$i?>')" id="heart<?=$i?>"></div>
										<input type="hidden" id="product_name<?=$i?>" value="<?=$row['name']?>">
										<?}?>
										<?}else{?>
											<div class="liked" onclick="alert('請先登入');window.location='login.php'"></div>
										<?}?>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.php?name=<?echo $row['name'];?>&id=<?echo $i?>"><?echo $row['name']?></a></h3></div>
										<div class="product-price <?if($row['o_price']!= $row['s_price']){echo 'special-price';}?>"><ins><small>NT.</small><?echo ceil($row['s_price']*$rate);?></ins><?if($row['o_price']!= $row['s_price']){?><del><small>NT.</small><?=ceil($row['o_price']*$rate)?></del><?}?></div>
										<div class="product-rating">
											<?
												$star = $row['star'];
												$a = explode(',', $star);
												for($s = 1;$s<=$a[0];$s++){
													echo '<i class="icon-star3"></i>';
												}
												for($o = 1;$o<=$a[1];$o++){
													echo '<i class="icon-star-half-full"></i>';
												}
												for($b = 1;$b<=$a[2];$b++){
													echo '<i class="icon-star-empty"></i>';
												}
											?>
										</div>
									</div>
								</div>
								<?
									}
										}else{
											echo '<center><h1>沒有相關商品</h1></center>';
										}
								?>
								<!--<div class="product probox col-md-3 col-sm-6 col-12">
									<div class="product-image">
										<a href="product_info.php"><img src="images/product_img/proimg_2.jpg" alt="Fujiko Ponpon Powder 頭髮專用吸油粉撲"></a>
										<div class="liked"></div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.php">Fujiko Ponpon Powder 頭髮專用吸油粉撲</a></h3></div>
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
										<a href="product_info.php"><img src="images/product_img/proimg_3.jpg" alt="EVE止痛藥"></a>
										<div class="liked"></div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.php">EVE止痛藥</a></h3></div>
										<div class="product-price special-price"><ins><small>NT.</small>272</ins><del><small>NT.</small>389</del></div>
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
										<a href="product_info.php"><img src="images/product_img/proimg_2.jpg" alt="Fujiko Ponpon Powder 頭髮專用吸油粉撲"></a>
										<div class="liked"></div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.php">Fujiko Ponpon Powder 頭髮專用吸油粉撲</a></h3></div>
										<div class="product-price special-price"><ins><small>NT.</small>639</ins><del><small>NT.</small>745</del></div>
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
										<a href="product_info.php"><img src="images/product_img/proimg_3.jpg" alt="EVE止痛藥"></a>
										<div class="liked"></div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.php">EVE止痛藥</a></h3></div>
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
										<a href="product_info.php"><img src="images/product_img/proimg_1.jpg" alt="資生堂MOILIP藥用護唇膏"></a>
										<div class="liked"></div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.php">資生堂MOILIP藥用護唇膏</a></h3></div>
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
										<a href="product_info.php"><img src="images/product_img/proimg_3.jpg" alt="EVE止痛藥"></a>
										<div class="liked"></div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.php">EVE止痛藥</a></h3></div>
										<div class="product-price special-price"><ins><small>NT.</small>272</ins><del><small>NT.</small>389</del></div>
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
										<a href="product_info.php"><img src="images/product_img/proimg_2.jpg" alt="Fujiko Ponpon Powder 頭髮專用吸油粉撲"></a>
										<div class="liked"></div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.php">Fujiko Ponpon Powder 頭髮專用吸油粉撲</a></h3></div>
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
										<a href="product_info.php"><img src="images/product_img/proimg_1.jpg" alt="資生堂MOILIP藥用護唇膏"></a>
										<div class="liked"></div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.php">資生堂MOILIP藥用護唇膏</a></h3></div>
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
										<a href="product_info.php"><img src="images/product_img/proimg_3.jpg" alt="EVE止痛藥"></a>
										<div class="liked"></div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.php">EVE止痛藥</a></h3></div>
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
										<a href="product_info.php"><img src="images/product_img/proimg_2.jpg" alt="Fujiko Ponpon Powder 頭髮專用吸油粉撲"></a>
										<div class="liked"></div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.php">Fujiko Ponpon Powder 頭髮專用吸油粉撲</a></h3></div>
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
										<a href="product_info.php"><img src="images/product_img/proimg_1.jpg" alt="資生堂MOILIP藥用護唇膏"></a>
										<div class="liked"></div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.php">資生堂MOILIP藥用護唇膏</a></h3></div>
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
										<a href="product_info.php"><img src="images/product_img/proimg_3.jpg" alt="EVE止痛藥"></a>
										<div class="liked"></div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.php">EVE止痛藥</a></h3></div>
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
										<a href="product_info.php"><img src="images/product_img/proimg_2.jpg" alt="Fujiko Ponpon Powder 頭髮專用吸油粉撲"></a>
										<div class="liked"></div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.php">Fujiko Ponpon Powder 頭髮專用吸油粉撲</a></h3></div>
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
										<a href="product_info.php"><img src="images/product_img/proimg_1.jpg" alt="資生堂MOILIP藥用護唇膏"></a>
										<div class="liked"></div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.php">資生堂MOILIP藥用護唇膏</a></h3></div>
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
										<a href="product_info.php"><img src="images/product_img/proimg_3.jpg" alt="EVE止痛藥"></a>
										<div class="liked"></div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="product_info.php">EVE止痛藥</a></h3></div>
										<div class="product-price"><ins><small>NT.</small>272</ins></div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-half-full"></i>
										</div>
									</div>
								</div>-->

								


							</div>

							<div class="clear"></div>
							<?
								if(isset($_GET['q'])){
									$q = $_GET['q'];
									$sql = "select * from didipick_product where name like '%$q%' and status='1'";
								}
								$result = $mysql->query($sql);
								$productsize = $result->size();
								if($productsize<=$limit){
									$numpage = 0;
								}else if($productsize%$limit == 0){
									$numpage = $productsize/$limit;
								}else{
									$numpage = floor($productsize/$limit)+1;
								}
								//echo $numpage;
								if($numpage != 0){
							?>

							<div class="center">
								<ul class="pagination pagination-transparent pagination-circle">
									<?
										$pg = $pagen+1;
										//echo $pg;
										if($pg!=1 && isset($_GET['pagen'])){
									?>
									<li class="page-item"><a class="page-link" aria-label="Next" onclick="changepage(<?=$pg-1?>)"><span aria-hidden="true">«</span></a></li>
									<?}?>
									<?
										if($pg==1 || !isset($_GET['pagen'])){
											$a = 1;
										}else if($pg%10==0){
											$a = $pg+1;
										}else{
											$a = $pg-($pg%10)+1;
										}
									?>
									<?for($i=$a;$i<$a+10;$i++){
										if($i<=$numpage){
											if($i == 1){
												$pno = 1;
											}else{
												$pno = $i;
											}
										?>
									<li class="page-item <?if($pagen == $i-1){echo 'active';}else if($pagen==0 &&$i==1){echo 'active';}?>"><a class="page-link" onclick="changepage(<?=$pno?>)"><?=$i?></a></li>
									<?
										}
									}
									if($pg != $numpage){
									?>
									<li class="page-item"><a class="page-link" aria-label="Next" onclick="changepage(<?=$pg+1?>)"><span aria-hidden="true">»</span></a></li>
									<?}?>
								</ul>
							</div>
							<?}?>
						</div>
						
						
						<div class="sidebar col-lg-3">
							<div class="sidebar-widgets-wrap">

								<div class="widget widget_links product_lbox PCOnly">

									<h4>所有分類商品</h4>
									<ul>
										<?
											$sql_ca = "select * from didipick_category where status='1'";
											$result_ca = $mysql->query($sql_ca);
											$size_ca = $result_ca->size();
											for($i = 1;$i<=$size_ca;$i++){
												$row_ca = $result_ca->fetch();
												$id = $row_ca['sno'];
										?>
											<li><a href="#" title="<?=$row_ca['name']?>" onclick="categorychange('<?=$id?>')"><img src="didipick_Admin/images/category_icon/<?=$row_ca['icon']?>" alt=""><span id="caname<?=$i?>"><?=$row_ca['name']?></span></a></li>
										<?}?>
										<!--<li><a href="#" title="全部商品"><img src="images/product_l_icon/product_l_all.svg" alt="">全部商品</a></li>
										<li><a href="#" title="保健品"><img src="images/product_l_icon/product_l_medicine.svg" alt="">保健品</a></li>
										<li><a href="#" title="美妝"><img src="images/product_l_icon/product_l_makeups.svg" alt="">美妝</a></li>
										<li><a href="#" title="保養"><img src="images/product_l_icon/product_l_maintenance.svg" alt="">保養</a></li>
										<li><a href="#" title="美髮"><img src="images/product_l_icon/product_l_hair.svg" alt="">美髮</a></li>
										<li><a href="#" title="生活雜貨"><img src="images/product_l_icon/product_l_life.svg" alt="">生活雜貨</a></li>-->
									</ul>

								</div>

								<div class="widget check_box">

									<h4>熱銷品牌</h4>
									<?
										if(isset($_GET['brand'])){
											$b = $_GET['brand'];
											$checked = explode(',', $b);
											$reverse = array_reverse($checked); 
											$z = $reverse[1]; 
											$sql = "update didipick_brand set views=views+1 where sno='$z'";
											$mysql->query($sql);
										}
										$cate = $_GET['category'];
										$sql_br = "select * from didipick_brand where status='1' order by views desc";
										$result_br = $mysql->query($sql_br);
										$size_br = $result_br->size();
										for($i=1;$i<=$size_br;$i++){
											$row_br = $result_br->fetch();
									?>
									<div class="cb_pad">
										<label class="control control--checkbox"><?=$row_br['name']?>
											<input type="checkbox" id="br_cb<?=$i?>" name="br_cb[]" onclick="brandsearch('<?=$size_br?>')" <?if(in_array($row_br['sno'], $checked)){echo 'checked';}?>/>
											<div class="control__indicator"></div>
										</label>
									</div>
									<input type="hidden" id="brsno<?=$i?>" value="<?=$row_br['sno']?>">
									<?}?>
									
								</div>

							</div>
						</div>
					</div>

					<div class="clear"></div>
					
				<input type="hidden" id="q" value="<?=$_GET['q']?>">
				</div>
				
			</div>
			<input type="hidden" id="hcategory" value="<?if(isset($_GET['category'])){echo $_GET['category'];}?>">
			<input type="hidden" id="hbrand" value="<?if(isset($_GET['brand'])){echo $_GET['brand'];}?>">
		</section>
		
		<?require_once "include_php/footer_inc.php";?>

	</div>

	
	<div id="gotoTop"><img src="images/gotop.png" alt=""></div>

	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<script src="js/functions.js"></script>

	<script type="text/javascript">
    $('.liked,.keep').click(function(){
      $(this).toggleClass('clicked');
    });
    function categorychange(id){
				if(id==1){
					window.location="product.php";
				}else{
					window.location="product.php?category="+id;
				}
		}

		function brandsearch(size){
			var checked_box = "";
			for(var i =1;i<=size;i++){
				if($("#br_cb"+i).prop("checked")==true){
					brsno = $("#brsno"+i).val();
					checked_box += brsno+ ',';
				}
			}
			if($("#hcategory").val()==""){
				if(checked_box==""){
					window.location="product.php";
				}else{
					window.location="product.php?brand="+checked_box;
				}
			}else{
				cate = $("#hcategory").val();
				if(checked_box==""){
					window.location="product.php?category="+cate;
				}else{
					window.location="product.php?brand="+checked_box+'&category='+cate;
				}
			}
			//window.location=
			//alert(checked_box);
		}

		function changepage(pno){
			q = $("#q").val();
			if($("#hcategory").val()!=''){
				var cate = $("#hcategory").val();
			}else{
				var cate = 'nothing';
			}
			if($("#hbrand").val()!=''){
				var br = $("#hbrand").val();
			}else{
				var br = 'nothing';
			}
			if(cate!='nothing'){
				if(br!='nothing'){
					window.location="search.php?category="+cate+"&brand="+br+"&pagen="+pno+"&q="+q;
				}else{
					window.location="search.php?category="+cate+"&pagen="+pno+"&q="+q;
				}
			}else if(br != 'nothing'){
				window.location="search.php?brand="+br+"&pagen="+pno+"&q="+q;
			}else{
				window.location="search.php?pagen="+pno+"&q="+q;
			}
		}
		function addheart(no){
			name = $("#product_name"+no).val();
			//alert(name);
			$.ajax({
				type:"POST",
				url:"cart_or_favory.php",
				data:{type:"favory",name:name},
				success:function(resp){
					$("#heart"+no).removeAttr("onclick");
					$("#heart"+no).attr("onclick", "cancelheart("+no+")");
				}
			});
		}
		function cancelheart(no){
			name = $("#product_name"+no).val();
			//alert(name+"取消");
			$.ajax({
				type:"POST",
				url:"cart_or_favory.php",
				data:{type:"cancelfavory",name:name},
				success:function(resp){
					//alert(resp);
					$("#heart"+no).removeAttr("onclick");
					$("#heart"+no).attr("onclick", "addheart("+no+")");
				}
			});
			
		}
  </script>

</body>
</html>