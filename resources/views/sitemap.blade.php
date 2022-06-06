<?
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
require_once "include_php/css_inc.php";
require_once "require_inc.php";
require_once "Admin/include/Session.php";
$session = new Session;
$session->Session();
?>

	
	<div id="wrapper">

		<?require_once "include_php/header_inc.php";?>

		
		
		<section id="content">
			<div class="content-wrap" style="padding-bottom: 30px;">
				<div class="container clearfix">

					<div>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">首頁</a></li>
							<li class="breadcrumb-item active" aria-current="page">網站導覽</li>
						</ol>
					</div>

					<h1>網站導覽</h1>
					<div class="row grid-container chart-samples" data-layout="fitRows">

						<div class="col-lg-3 bottommargin-sm">
							<h4>關於直直買</h4>
							<ul>
								<li><a href="about.php">關於我們</a></li>
								<li><a href="about.php">服務條款</a></li>
								<li><a href="about.php">隱私權政策</a></li>
							</ul>
						</div>

						<div class="col-lg-3 bottommargin-sm">
							<h4>會員中心</h4>
							<ul>
							<?if($session->get('login-status') != 'signing-in'){?>
								<li><a href="login.php">會員登入</a></li>
								<li><a href="signup.php">註冊會員</a></li>
								<li><a href="forget.php">忘記密碼</a></li>
							<?}?>
							<?if($session->get('login-status') == 'signing-in'){?>
								<li><a href="member.php">會員總覽</a></li>
								<li><a href="order_info.php">訂單查詢</a></li>
								<li><a href="order_addvalue.php">儲值金</a></li>
								<li><a href="member_coupon.php">專屬優惠券</a></li>
								<li><a href="order_bonus.php">紅利點數</a></li>
								<li><a href="member_edit.php">會員資料</a></li>
								<li><a href="member_password.php">更改密碼</a></li>
								<li><a href="member_address.php">收件地址管理</a></li>
								<li><a href="order_service.php">客服中心</a></li>
							<?}?>
							</ul>
						</div>

						<div class="col-lg-3 bottommargin-sm">
							<h4>購物體驗</h4>
							<ul>
							<?if($session->get('login-status') == 'signing-in'){?>
								<li><a href="cart.php">購物車</a></li>
							<?}?>
								<li><a href="qa.php">常見問題</a></li>
								<li><a href="shoppingprocess.php">購物流程</a></li>
							</ul>
						</div>

						<div class="col-lg-3 bottommargin-sm">
							<h4>直購商品</h4>
							<ul>
								<li><a href="master.php">達人勸敗</a></li>
								<li><a href="product.php">所有分類</a></li>
								<li><a href="product_top20.php">熱銷排行</a></li>
								<li><a href="feedback.php">好評推薦</a></li>
							</ul>
						</div>
						<?if($session->get('login-status') == 'signing-in'){?>
						<div class="col-lg-3 bottommargin-sm">
							<h4>通知總覽</h4>
							<ul>
								<li><a href="notice.php">訂單通知</a></li>
								<!--<li><a href="#">主題活動</a></li>
								<li><a href="#">訊息公告</a></li>
								<li><a href="#">專屬通知</a></li>-->
							</ul>
						</div>
						<?}?>
						<?if($session->get('login-status') == 'signing-in'){?>
							<div class="col-lg-3 bottommargin-sm">
								<h4>我的收藏</h4>
								<ul>
									<li><a href="product_desire.php">慾望清單</a></li>
									<li><a href="favorite.php">最愛文章</a></li>
								</ul>
							</div>
						<?}?>

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

</body>
</html>