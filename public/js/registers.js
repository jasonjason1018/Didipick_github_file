function sendAuthCode(){
	re = /^[0][9]\d{8}$/;
	var mobi = document.register.mobile.value;
	var err_ms = document.getElementById("mobile_error_msg");
	if(mobi.length == 10 && re.test(mobi) == true){
		err_ms.innerHTML = "";
		alert(mobi);
		$.post("./regAuthCodes.php",{
			mobile: mobi
		},
		function(data,status){	
			$("#mobile_error_msg").html(data);
		});
		// alert("認證碼已送出"+Codeau+",請確認後填入以下欄位");
		document.getElementById("send_auth").className = "btn type_fill z-second";
		document.register.send_auth.disabled = true;
		initial();
	}else{	
		err_ms.innerHTML = "手機號碼格式錯誤";
	}
}
var countdownnumber=180;
var countdownid;
function initial(){ countdownfunc(); }
function countdownfunc(){
 var x=document.getElementById("countdown");
 x.innerHTML=countdownnumber + "秒後，可重新發送"
 if (countdownnumber==0){ 
  document.register.send_auth.disabled = false;
  document.getElementById("send_auth").className = "btn type_fill z-regular js-call_spec";
  clearTimeout(countdownid);
  countdownnumber=180;
 }else{
  countdownnumber--;
  if(countdownid){
   clearTimeout(countdownid);
  }
  countdownid=setTimeout(countdownfunc,1000);
 }
}
function checkAuth(){
	re = /^\d{6}$/;
	var mobi = document.register.mobile.value;
	var authcode = document.authCodePost.authcode.value;
	if(authcode.length == 6 && re.test(authcode) == true){
		checkTrue('https://tokukai.com/checkAuthCode.php?mobile='+ mobi + '&auth=' + authcode);
	}else{
		document.authCodePost.sub1.disabled = true;
		document.getElementById("sub1").className = "btn type_fill z-second";
	}
}