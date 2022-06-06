<?
require_once "require_inc.php";
if(isset($_POST['mob'])){
	$mob = $_POST['mob'];
}else{
	header("Location:signup.php");
}
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>

	<title>註冊會員｜直直買 didipick</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
	<? require_once 'include_php/css_include.php';?>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PKM45FH');</script>
	<!-- End Google Tag Manager -->

</head>

<body class="stretched">

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PKM45FH"
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

		<header id="header" class="full-header header-size-lg">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row justify-content-lg-between">

					<div id="logo" class=" mx-lg-auto col-auto flex-column order-lg-2 px-0">
						<a href="index.php" class="standard-logo"><img src="images/logo.png" alt="直直買 didipik"></a>
						<a href="index.php" class="retina-logo"><img src="images/logo.png" alt="直直買 didipik"></a>
					</div>
				</div>
				
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header>

		
		<section id="content">
			<div class="content-wrap">
				<div class="container">

				<div class="login-register">
					<div class="tab-container">

						<div class="tab-content" id="tab-login">
							<div class="card mb-0">
								<div class="card-body" style="padding: 40px;">
									<form id="signup2" name="signup2" class="mb-0" action="signup_action.php" method="post">

										<h3>成為新會員</h3>

										<div class="row">
											<div class="col-12 form-group">
												<label for="login-form-phone">姓名:</label>
												<input type="text" id="name" name="name" value="" class="form-control" placeholder="輸入姓名"/>
											</div>

											<div class="col-12 form-group">
												<label for="login-form-phone">身分證字號:</label>
												<input type="text" id="passport" name="passport" value="" class="form-control" placeholder="輸入身分證字號" onblur="checkpassportID()" />
											</div>

											<div class="col-12 form-group">
												<label for="login-form-phone">地址:</label>
												<input style="text-align:center;" type="text" id="zipcode" name="zipcode" value="" class="form-control" placeholder="" disabled="disabled"/>
												<select style="text-align:center;" class="form-control" name="area" id="area" onchange="jsarea('area')">
													<option>縣市</option>
													<?
														$sql = "select DISTINCT city from streetname";
														$result = $mysql->query($sql);
														$size = $result->size();
														for($i=1;$i<=$size;$i++){
															$row = $result->fetch();
															echo '<option>'.$row['city'].'</option>';
														}
													?>
												</select>
												<select style="text-align:center;" class="form-control" name="area2" id="area2" onchange="jsarea('zipcode')">
													<option>鄉鎮市區</option>
												</select>
												<input style="text-align:center;" type="text" id="address" name="address" value="" class="form-control" placeholder="輸入地址"/>
											</div>

											<div class="col-12 form-group">
												<label for="login-form-phone">電子郵件:</label>
												<input type="text" id="email" name="email" value="" class="form-control" placeholder="輸入電子郵件" onblur="checkemail()" />
											</div>
											<div class="col-12 form-group">
												<label for="login-form-password">密碼:</label>
												<input type="password" id="password" name="password" value="" class="form-control" placeholder="6-20 位字元，不含特殊符號" onblur="checkpassword('1')"/>
											</div>

											<div class="col-12 form-group">
												<label for="login-form-password">密碼確認:</label>
												<input type="password" id="password2" name="password2" value="" class="form-control" placeholder="再次確認密碼" onblur="checkpassword('2')"/>
											</div>

											<div class="col-12 form-group getnews">
												<label class="control control--checkbox mb-0">同意 <a href="about.php" class="prbtn" target="_blank">didipick會員服務條款</a>，並同意將會員資料提供給公司做為註冊及認證使用。
													<input type="checkbox" name="regulations" id="regulations">
													<div class="control__indicator"></div>
												</label>
											</div>

											<input type="hidden" name="sex" id="sex" value="">
											<input type="hidden" name="mob" id="mob" value="<?=$mob?>">

											<div class="col-12 form-group loginbtn center">
												<a href="javascript:senddata();" class="button button-rounded m-0">註冊完成</a>
											</div>

										</div>

									</form>
									<div class="line line-sm"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>

	</div>

	<div id="gotoTop"><img src="images/gotop.png" alt=""></div>

	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<script src="js/functions.js"></script>
	<script>
		function senddata(){
			var errMsg = "";
			name = $('#name').val();
			passport = $('#passport').val();
			zipcode = $('#zipcode').val();
			area = $('#area').val();
			area2 = $('#area2').val();
			address = $('#address').val();
			email = $('#email').val();
			pwd = $('#password').val();
			pwd2 = $('#password2').val();
			mob = $('#mob').val();
			sex = $('#sex').val();
			reg = $("#regulations").prop("checked");
				if(name==''){
					alert('請輸入姓名');
				}else if(passport == ''){
					alert('請輸入身分證字號');
				}else if(zipcode == ''){
					alert('請選擇地區');
				}else if(area == ''){
					alert('請選擇地區');
				}else if(area2 == ''){
					alert('請選擇地區');
				}else if(address ==''){
					alert('請輸入地址');
				}else if(email==''){
					alert('請輸入email');
				}else if(pwd == ''){
					alert('請輸入密碼');
				}else if(pwd2==''){
					alert('請再次輸入密碼');
				}else if(reg == false){
					alert('請勾選同意DIDIPICK會員服務條款');
				}else{
					$.ajax({
						type:"GET",
						url:"signup_action.php",
						data:{
							name:name,
							passport:passport,
							zipcode:zipcode,
							area:area,
							area2:area2,
							address:address,
							email:email,
							password:pwd,
							mob:mob,
							sex:sex
						},
						success: function(resp){
							alert(resp);
							window.location = "check_login.php?mob="+mob+"&password="+pwd;
						}
					});
				}
		}
		function jsarea(code){
			if(code == 'area'){
				area = $('#area').val();
				var type = 'area';
				var type2 = 'f_zipcode';
				$.ajax({
					type:"GET",
					url:"select_area.php",
					data:{
						area:area,
						type:type
					},
					success: function(resp){
						$("#area2").html(resp);
					}
				});
				$.ajax({
					type:"GET",
					url:"select_area.php",
					data:{
						area:area,
						type:type2

					},
					success: function(resp){
						$("#zipcode").val(resp);
					}
				});
			}else if(code == 'zipcode'){
					area = $('#area').val();
					area2 = $('#area2').val();
					var type3 = 'zipcode';
					$.ajax({
						type:"GET",
						url:"select_area.php",
						data:{
							area:area,
							area2:area2,
							type:type3
						},
						success: function(resp){
							$("#zipcode").val(resp);
						}
					});
			}
		}
		function checkpassportID(){
			  // 依照字母的編號排列，存入陣列備用。
			  var letters = new Array('A', 'B', 'C', 'D', 
			      'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 
			      'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 
			      'X', 'Y', 'W', 'Z', 'I', 'O');
			  // 儲存各個乘數
			  var multiply = new Array(1, 9, 8, 7, 6, 5, 
			                           4, 3, 2, 1, 1);
			  var idStr = document.getElementById('passport').value;
			  var nums = new Array(2);
			  var firstChar;
			  var firstNum;
			  var lastNum;
			  var sex;
			  var total = 0;
			  // 撰寫「正規表達式」。第一個字為英文字母，
			  // 第二個字為1或2，後面跟著8個數字，不分大小寫。
			  var regExpID=/^[a-z](1|2)\d{8}$/i; 
			  // 使用「正規表達式」檢驗格式
			  if (idStr.search(regExpID)==-1) {
			    // 基本格式錯誤
			    if(idStr != ""){
					alert("身份證字號格式錯誤");
					document.getElementById('passport').value="";
				   return false;
				}
			  } else {
				// 取出第一個字元和最後一個數字。
				firstChar = idStr.charAt(0).toUpperCase();
				lastNum = idStr.charAt(9);
				sex = idStr.charAt(1);
				document.getElementById('sex').value=sex;
			  }
			  for(var i=0;i<26;i++){
				if(firstChar == letters[i]){
					firstNum = i+10;
					nums[0] = Math.floor(firstNum/10);
					nums[1] = firstNum - (nums[0] * 10);
					break;
				}
			  }
			  for(var i =0;i<multiply.length; i++){
			  		if(i<2){
			  			total += nums[i] * multiply[i];
			  		}else{
			  			total += parseInt(idStr.charAt(i-1)) * multiply[i];
			  		}
			  }
			  if(total % 10 != 0){
			  		if(idStr != ""){
				  		alert('請填寫正確的身分證字號');
				  		document.getElementById('passport').value="";
				  	}
			  }
			  return true;
	}
	function checkemail(){
		var email = document.getElementById('email').value;
		var checkmail = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(!checkmail.test(email)){
			if(email!=""){
				alert('email格式錯誤');
				document.getElementById('email').value="";
			}
		}else{
			return true;
		}
	}
	function checkpassword(type){
		if(type == 1){
			var pwd = document.getElementById('password').value;
			var check = /^(?=.*[a-z])(?=.*\d)[a-zA-Z\d]{6,20}$/;
			var check2 = /[^@$!%*?&\s]$/;
			if(check.test(pwd)){
					//alert('ok');
					return true;
			}else{
				if(check2.test(pwd)){
					if(pwd!=""){
						alert('請輸入英文+數字6~20碼的密碼');
						$("#password").val("");
					}
				}else{
					if(pwd!=""){
						alert('密碼不能包含特殊符號');
						$("#password").val("");
					}
				}
			}
		}else if(type == 2){
			var pwd = document.getElementById('password').value;
			var pwd2 = document.getElementById('password2').value;
			if(pwd!=''){
				if(pwd == pwd2){
					//alert('ok');
					return true;
				}else{
					if(pwd2!=""){
						alert('密碼不一致');
						document.getElementById('password2').value="";
					}
				}
			}else{
				if(pwd2!=""){
					alert('請先填入密碼');
					document.getElementById('password2').value="";
				}
			}
		}
	}
	</script>

</body>
</html>