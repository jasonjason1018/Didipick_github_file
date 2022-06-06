<?
require_once "include_php/css_inc.php";
require_once "require_inc.php";
require_once "Admin/include/Session.php";
$session = new Session;
$session->Session();
$userid = $session->get('userid');
$id = $_GET['id'];
date_default_timezone_set("Asia/Taipei");
$today = date("Y-m-d H:i:s");
$sql = "select * from didipick_article_record where identity='$userid'";
$result = $mysql->query($sql);
$usrsize = $result->size();//不超過5筆
$sql = "select * from didipick_article_record where identity='$userid' and arid='$id'";
$result = $mysql->query($sql);
$arsize = $result->size();//不等於1
if($arsize!=1){
	if($usrsize < 5){
		$sql = "insert into didipick_article_record(arid, identity, insert_time)values('$id', '$userid', '$today')";
		$mysql->query($sql);
	}else{
		$sql = "select * from didipick_article_record where identity='$userid' order by insert_time";
		$result = $mysql->query($sql);
		$row = $result->fetch();
		$arreid = $row['id'];
		$sql = "update didipick_article_record set arid='$id', insert_time='$today' where id='$arreid'";
		$mysql->query($sql);
	}
}
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
		<?
			if(isset($_GET['id'])){
				$id = $_GET['id'];
			}else{
				$sql = "select * from didipick_master where type='2' order by rand()";
				$result = $mysql->query($sql);
				$row = $result->fetch();
				$id = $row['id'];
			}
			$sql = "update didipick_master set views=views+1 where id='$id'";
			$mysql->query($sql);
			$sql = "select * from didipick_master where id='$id'";
			$result = $mysql->query($sql);
			$row = $result->fetch();
			$date = explode('-', $row['insert_time']);
			$th = explode(' ', $date[2]);
			$monthname = array('', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
		?>
		<section id="page-title">

			<div class="container clearfix">
				<h1><?=$row['title']?></h1>
				<div>
					<span><i class="icon-line-edit-3"></i> by <?=$row['author']?></span>
				</div>
			</div>
		</section>

		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">首頁</a></li>
							<li class="breadcrumb-item"><a href="feedback.php">好評推薦 / 文章列表</a></li>
							<!--<li class="breadcrumb-item active" aria-current="page">保健品/分類</li>-->
						</ol>
					</div>

					


					

					<div class="row gutter-40 col-mb-80">
						
						<div class="postcontent col-lg-9">
							<div class="single-post mb-0">
								<div class="entry clearfix">
									

									<div class="entry-meta">
										<ul>
											<li><i class="icon-calendar3"></i> <?=$th[0]?>th <?=$monthname[$date[1]]?> <?=$date[0]?></li>
											<li><a href="#"><i class="icon-eye2"></i> <?=$row['views']?></a></li>
											<li>
											<?if($session->get('login-status') == "signing-in"){?>
												<?
												$sql_master = "select * from didipick_favory_article where identity='$userid' and ar_id='$id'";
												$result_master = $mysql->query($sql_master);
												$size_master = $result_master->size();
												if($size_master == 0){
												?>
													<div class="s-keep" onclick="addstar('<?=$i?>')" id="star<?=$i?>"></div>
													<input type="hidden" id="ar_id<?=$i?>" value="<?=$row['id']?>">
												<?}else{?>
													<div class="s-keep clicked" onclick="cancelstar('<?=$i?>')" id="star<?=$i?>"></div>
													<input type="hidden" id="ar_id<?=$i?>" value="<?=$row['id']?>">
												<?}?>

											<?}else{?>
												<div class="s-keep" onclick="alert('請先登入');window.location='login.php'"></div>
											<?}?>
											</li>
										</ul>
									</div>

									
									<div class="entry-content mt-0">
										<?=$row['text']?>
										<!--<div class="center">
											<img src="images/feedbackimg.png" alt="" class="mb-2 img_stretch">
											<div class="mt-2"><small class="t_gray">圖／翻攝自 <a href="#" target="_blank">@koki</a>、<a href="#" target="_blank">@haruka.f.official</a></small></div>
										</div>
										<br>

										<p>大家都說：素顏是女生不想公開的秘密！<br/>
											擔心一卸妝看起來肌膚蠟黃又暗沉......😱</p>
											
										<p>簡單兩招～教你養成❤️好氣色素顏美肌❤️<br/>
											聰明保養，不上妝也能少女感爆棚！</p>
										
										<br>
										<p class="t_didi_t"><i class="icon-heart"></i>清潔是肌膚保養的第一步！</p>

										<div class="center">
											<img src="images/feedbackimg_1.png" alt="" class="mb-2 img_stretch">
											<div class="mt-2 mb-2 "><small class="t_gray">圖／翻攝自 <a href="https://www.fancl.co.jp/beauty/item/3733a" target="_blank">https://www.fancl.co.jp/beauty/item/3733a</a></small></div>
										</div>
										<br>

										<p>唯有將肌膚清潔乾淨，才能預防彩妝、髒污殘留毛口！<br/>
											後續所擦的保養品便可以真正“有效吸收”。</p>
										
										<br>
										<p style="color: #A00000;">編輯精選>>【FANCL潔面粉】</p>
										<p>泡泡濃密細緻，能夠除去多餘的角質層，<br/>
											幫助改善因乾燥而引起的細紋皺紋，保濕力🆙</p>
										
										<br>

										<div class="center">
											<img src="images/feedbackimg_2.png" alt="" class="mb-2 img_stretch">
											<div class="mt-2 mb-2 "><small class="t_gray">圖／翻攝自 <a href="https://www.shiseido.co.jp/aqua/pickup/sakura_202101/" target="_blank">https://www.shiseido.co.jp/aqua/pickup/sakura_202101/</a></small></div>
										</div>
										<br>

										<p>換季時水分流失快速，還有惱人脫皮、乾癢問題......<br/>
											享受睡前的「Me Time」，好好幫肌膚補水吧！</p>
										
										<br>
										<p style="color: #A00000;">編輯精選>>【AQUA LABEL水之印 五合一凝膠保濕面霜 櫻花限定】</p>
										<p>連續七年銷售第一🏆<br/>
											集結化妝水、乳液、面霜、面膜和精華液的5合1功效，<br/>
											雙重玻尿酸長時間保持水分，滋潤彈力肌膚💦<br/>
											美翻的季節版限定包裝，還能聞到淡淡櫻花香味呢！</p>
										
										<br>-->

										<div class="clear"></div>
										<?
											$no = explode(',',$row['recommend_item']);
											$no_size = count($no);
											if($no_size == 1){
												$pno = $no[0];
												date_default_timezone_set("Asia/Taipei");
		 										$today = date("Ymd");
												$sql_check_product = "select * from didipick_product where status='1' and TO_DAYS(shelf_on) <= TO_DAYS('$today') and TO_DAYS(shelf_off) >= TO_DAYS('$today') and No='$pno'";
												$result_check = $mysql->query($sql_check_product);
												$check_size = $result_check->size();
											}else{
												$check_size = $no_size;
											}

											if($check_size != 0){
										?>
										<div class="rec-pro-wrap">
											<h2>推薦商品：</h2>
											<?
												$sql_rate = "select * from exchange_rate order by change_date desc";
												$result_rate = $mysql->query($sql_rate);
												$row_rate = $result_rate->fetch();
												$rate = $row_rate['rate'];
												date_default_timezone_set("Asia/Taipei");
		 										$today = date("Ymd");
												foreach($no as $k=>$v){
													$sql1 = "select * from didipick_product where No='$v'";
													$result1 = $mysql->query($sql1);
													$row1 = $result1->fetch();
													$ontime = explode('-', $row1['shelf_on']);
													$ontime = implode('', $ontime);
													$offtime = explode('-', $row1['shelf_off']);
													$offtime = implode('', $offtime);
											?>
											<?if($today>=$ontime && $today<=$offtime && $row1['status'] == 1){?>
												<a href="product_info.php?name=<?=$row1['name']?>" target="_blank">
												<div class="rec-pro-box">
													<div class="product-image">
														<img src="didipick_Admin/images/admin_upload_img/<?=$row1['img1']?>" alt="Fujiko Ponpon Powder 頭髮專用吸油粉撲">
													</div>
													<div class="product-desc">
														<div class="product-title"><h3><?=$row1['name']?></h3></div>
														<div class="product-price"><ins><small>NT.</small><?=ceil($row1['s_price']*$rate)?></ins></div>
														<div class="product-rating">
															<?
																$star = $row1['star'];
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
											</a>
											<?}?>
											<?}?>
										</div>
										<?}?>
										<div class="clear"></div>


										<div class="row justify-content-between align-items-center post-navigation">
											<div class="col-12 col-md-auto text-center">
												<div class="tagcloud">
													<?
														$label = explode(',', $row['label']);
														foreach($label as $k=>$v){
													?>
														<a href="#"><?=$v?></a>
													<?}?>
												</div>
											</div>
		
											<div class="col-12 col-md-auto text-center">
												<div class="si-share d-flex">
													<span>分享此項商品</span>
													<div>
														<?
															$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
														?>
														<!--<a href="https://www.facebook.com/sharer/sharer.php?u＝<?=$URL?>" target="_blank" class="social-icon si-borderless">-->
														<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?=$URL?>&amp;src=sdkpreparse" class="social-icon si-borderless">
															<img src="images/share_fb.svg" alt="">
														</a>
														<!--</a>-->
														<!--<a href="http://instagram.com/sharer.php?u=<?=$URL?>&media=didipick_Admin/images/master/<?=$row['img']?>&description=直直買 didipick" target="_blank" class="social-icon si-borderless">
															<img src="images/share_ig.svg" alt="">
														</a>-->
														<a href="https://social-plugins.line.me/lineit/share?url=<?=$URL?>" target="_blank" class="social-icon si-borderless">
															<img src="images/share_line.svg" alt="">
														</a>
													</div>
												</div>
											</div>
										</div>


									</div>
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

									<div class="col-12 col-md-auto text-center">
										<a href="feedback.php">返回文章列表 &rArr;</a>
									</div>
								</div>

								<div class="line"></div>


								<div class="respond">

									<h3>喜歡此篇內容的話，歡迎留言！</h3>

									<form class="row" action="master_send_message.php" method="post" id="commentform">
										<!--<div class="col-md-4 form-group">
											<label for="author">姓名</label>
											<input type="text" name="author" id="author" value="" size="22" tabindex="1" class="sm-form-control" />
										</div>

										<div class="col-md-4 form-group">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" value="" size="22" tabindex="2" class="sm-form-control" />
										</div>-->

										<div class="w-100"></div>

										<div class="col-12 form-group">
											<label for="comment">想說的話..</label>
											<textarea name="comment" cols="58" rows="7" tabindex="4" class="sm-form-control"></textarea>
										</div>
										<input type="hidden" name="master_id" value="<?=$id?>">
										<div class="col-12 form-group">
											<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d m-0">送出</button>
										</div>
									</form>

								</div>

								<div class="line"></div>
								<?
									$sql = "select * from didipick_message where article_id='$id' and status='1'";
									$result = $mysql->query($sql);
									$size = $result->size();
								?>

								<div id="comments" class="clearfix">

									<h3 id="comments-title"><span><?=$size?></span> Comments</h3>
									
									<ol class="commentlist clearfix">
										<?
											for($i=1;$i<=$size;$i++){
												$row = $result->fetch();
												$date = explode('-', $row['message_date']);
												$monthname = array('', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
												$th = explode(' ', $date[2]);
												$time = explode(':', $th[1]);
												if($time[0]>12){
													$moraft = 'pm';
												}else{
													$moraft = 'am';
												}
												$messageuser = $row['user_id'];
												$sql1 = "select * from member where identity='$messageuser' and webarea='2'";
												$result1 = $mysql->query($sql1);
												$row1 = $result1->fetch();
												$name = $row1['name'];
												$usrname = mb_substr($name, 0, 1, 'UTF-8');
												//$usrname = mb_convert_encoding($username[0], "UTF-8");
										?>
										<li class="comment even thread-even depth-1" id="li-comment-1">
											<div id="comment-1" class="comment-wrap clearfix">
												<div class="comment-meta">
													<div class="comment-author vcard">
														<span class="comment-avatar clearfix">
														<img alt='Image' src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>
													</div>
												</div>
												<div class="comment-content clearfix">
													<div class="comment-author"><?=$usrname?>XX<span><a href="#" title="Permalink to this comment"><?=$monthname[$date[1]]?> <?=$th[0]?>, <?=$date[0]?> at <?=$time[0]?>:<?=$time[1]?> <?=$moraft?></a></span></div>
													<p><?=str_replace(chr(13).chr(10),"<br>", $row['message_content']);?></p>
												</div>
												<div class="clear"></div>
											</div>
											<?}?>

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
															<div class="comment-author"><a href='#' rel='external nofollow' class='url'>didi小編</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>
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

							</div>

						</div>

						
						<div class="sidebar col-lg-3">
							<div class="sidebar-widgets-wrap">
								

								<div class="widget">

									<div class="tabs mb-0" id="sidebar-tabs">

										<ul class="tab-nav">
										<?if($session->get('login-status') == "signing-in"){?>
											<li><a href="#tabs-1">最近瀏覽の文章</a></li>
										<?}?>
											<li><a href="#tabs-2">熱門の文章</a></li>
										</ul>

										<div class="tab-container">
										<?if($session->get('login-status') == "signing-in"){?>
											<div class="tab-content right_cont align_j" id="tabs-1">
												<div class="posts-sm row" id="popular-post-list-sidebar">
													<?
													$sql = "select * from didipick_article_record where identity='$userid' order by insert_time desc";
													$result = $mysql->query($sql);
													$size = $result->size();
													for($i=1;$i<=$size;$i++){
														$row = $result->fetch();
														$arid = $row['arid'];
														$sql1 = "select * from didipick_master where id='$arid'";
														$result1 = $mysql->query($sql1);
														$row1 = $result1->fetch();
														if($row1['type']==1){
															$type = 'master';
														}else{
															$type = 'feedback';
														}
													?>
													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
																<div class="entry-title">
																	<h4><a href="<?=$type?>_info.php?id=<?=$row1['id']?>"><?=$row1['title']?></a></h4>
																</div>
														</div>
													</div>
													<?}?>
													<!--<div class="entry col-12">
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
													</div>
													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
																<div class="entry-title">
																	<h4><a href="#">[約會必勝]一秒化身日本好感系女孩！嚴選單品推薦</a></h4>
																</div>
														</div>
													</div>-->
												</div>
											</div>
											<?}?>
											<div class="tab-content right_cont align_j" id="tabs-2">
												<div class="posts-sm row" id="recent-post-list-sidebar">
													<?
													$sql = "select * from didipick_master order by views desc limit 5";
													$result = $mysql->query($sql);
													$size = $result->size();
													for($i=1;$i<=$size;$i++){
														$row = $result->fetch();
														if($row['type'] == 1){
															$type='master';
														}else{
															$type='feedback';
														}
													?>
													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
																<div class="entry-title">
																	<h4><a href="<?=$type?>_info.php?id=<?=$row['id']?>"><?=$row['title']?></a></h4>
																</div>
														</div>
													</div>
													<?}?>
													<!--<div class="entry col-12">
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
										<?
											$sql = "select * from didipick_master_label order by views desc limit 3";
											$result = $mysql->query($sql);
											$size = $result->size();
											for($i=1;$i<=$size;$i++){
												$row = $result->fetch();
										?>
											<a href="master.php?label=<?=$row['name']?>"><?=$row['name']?></a>
										<?}?>
									</div>

								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		
		<?require_once "include_php/footer_inc.php";?>

	</div>

	
	<div id="gotoTop"><img src="images/gotop.png" alt=""></div>

	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<script src="js/functions.js"></script>

	<script type="text/javascript">
    $('.liked,.keep,.s-keep').click(function(){
      $(this).toggleClass('clicked');
    });
    function addstar(no){
    	name = $("#ar_id"+no).val();
    	$.ajax({
			type:"POST",
			url:"cart_or_favory.php",
			data:{type:"favoryarticle",name:name},
			success:function(resp){
				$("#star"+no).removeAttr("onclick");
				$("#star"+no).attr("onclick", "cancelstar("+no+")");
			}
		});
    }
    function cancelstar(no){
    	name = $("#ar_id"+no).val();
    	$.ajax({
			type:"POST",
			url:"cart_or_favory.php",
			data:{type:"cancelfavoryarticle",name:name},
			success:function(resp){
				$("#star"+no).removeAttr("onclick");
				$("#star"+no).attr("onclick", "addstar("+no+")");
			}
		});
    }
    $("#submit-button").click(function(){
    	$("#submit-button").hide();
    });
  </script>
</body>
</html>