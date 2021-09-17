var XMLHttpRequestObject = false;
if (window.XMLHttpRequest)
{
  XMLHttpRequestObject = new XMLHttpRequest();
}
else if (window.ActiveXObject)
{
  XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}
  
function getData(srcData, divID)
{
  if(XMLHttpRequestObject)
  {
    srcData += "&parm="+new Date().getTime();
    var obj = document.getElementById(divID);
    XMLHttpRequestObject.open("GET", srcData);
    XMLHttpRequestObject.onreadystatechange = function()
    {
      if (XMLHttpRequestObject.readyState == 4 &&
          XMLHttpRequestObject.status == 200)
      {
        obj.innerHTML = XMLHttpRequestObject.responseText;
      }
    }
    XMLHttpRequestObject.send(null);
  }
}
function checkTrue(srcData)
{
  if(XMLHttpRequestObject)
  {
    srcData += "&parm="+new Date().getTime();
    // var obj = document.getElementById(divID);
    XMLHttpRequestObject.open("GET", srcData);
    XMLHttpRequestObject.onreadystatechange = function()
    {
      if (XMLHttpRequestObject.readyState == 4 &&
          XMLHttpRequestObject.status == 200)
      {
        var xml = XMLHttpRequestObject.responseText;
		if(xml == "true"){
			var x=document.getElementById("auth_error_msg");
			x.innerHTML="";
			document.authCodePost.sub1.disabled = false;
			document.getElementById("sub1").className = "btn type_fill --regular js-call_spec";
			document.reg_data.mobile_reg.value = document.register.mobile.value;
			document.reg_data.auth_reg.value = document.authCodePost.authcode.value;
		}else{
			var x=document.getElementById("auth_error_msg");
			x.innerHTML="驗證碼錯誤";
		}
      }
    }
    XMLHttpRequestObject.send(null);
  }
}
var Codeau = "";
function authCode(srcData)
{
  if(XMLHttpRequestObject)
  {
    srcData += "&parm="+new Date().getTime();
    // var obj = document.getElementById(divID);
    XMLHttpRequestObject.open("GET", srcData);
    XMLHttpRequestObject.onreadystatechange = function()
    {
      if (XMLHttpRequestObject.readyState == 4 &&
          XMLHttpRequestObject.status == 200)
      {
        Codeau = XMLHttpRequestObject.responseText;
      }
    }
    XMLHttpRequestObject.send(null);
  }
}
function changeIndex(id){
	if(id == 2){
		location = "?index=2";
	}else if(id == 3){
		location = "?index=3";
	}else{
		location = "?index=1";
	}
}
function sendAuthCode(){
	re = /^[0][9]\d{8}$/;
	var mobi = document.register.mobile.value;
	var err_ms = document.getElementById("mobile_error_msg");
	if(mobi.length == 10 && re.test(mobi) == true){
		err_ms.innerHTML = "";
		getData('http://tokukai.com/regAuthCode.php?mobile='+mobi,'mobile_error_msg');
		alert("認證碼已送出"+Codeau+",請確認後填入以下欄位");
		document.getElementById("send_auth").className = "btn type_fill --second";
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
  document.getElementById("send_auth").className = "btn type_fill --regular js-call_spec";
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
		checkTrue('http://tokukai.com/checkAuthCode.php?mobile='+ mobi + '&auth=' + authcode);
	}else{
		document.authCodePost.sub1.disabled = true;
		document.getElementById("sub1").className = "btn type_fill --second";
	}
}
function checklogin(){
	re = /^\d{10}$/;
	var mobi = document.login.mobile.value;
	var authcode = document.login.pwd.value;
	if(authcode.length >= 6 && mobi.length == 10 && re.test(mobi) == true){
		document.login.sub2.disabled = false;
		document.getElementById("sub2").className = "btn type_fill --regular";
	}else{
		document.login.sub2.disabled = true;
		document.getElementById("sub2").className = "btn type_fill --second";
	}
}
function TEST(){
	var name = document.reg_data.realname.value;
	var mobi = document.reg_data.mobile_reg.value;
	var auth = document.reg_data.auth_reg.value;
	var email = document.reg_data.email.value;
	var passwd = document.reg_data.pwd.value;
	var invite = document.reg_data.invite.value;
	var chkMail = "";
	var obj=document.getElementsByName("chkmail");
	if (obj[0].checked) {
		chkMail = "1";
	}else{
		chkMail = "0";
	}
	// location = '/testcode.php?name='+encodeURIComponent(name)+'&mobile='+mobi+'&auth='+auth;
	//alert('http://tokukai.com/testcode.php?name='+encodeURIComponent(name)+'&mobile='+encodeURIComponent(mobi)+'&auth='+encodeURIComponent(auth) + '&email=' + encodeURIComponent(email) + '&passwd=' + encodeURIComponent(passwd));
	getData('http://tokukai.com/testcode.php?name='+encodeURIComponent(name)+'&mobile='+encodeURIComponent(mobi)+'&auth='+encodeURIComponent(auth) + '&email=' + encodeURIComponent(email) + '&passwd=' + encodeURIComponent(passwd) + '&invite=' + encodeURIComponent(invite) + '&chkMail=' + encodeURIComponent(chkMail),'reg_final');
	if(document.getElementById("regSucc").innerHTML == "註冊完成"){
		getData('./logDiv.php','logIn');
	}
}
function checkPass(control) {
	re = /^[A-Za-z0-9]{0,}[0-9]{0,}[^ '"*]$/;
	if (control.value == "" || re.test(control.value) == false || control.value.length < 6 || control.value.length > 20) {
		validatePrompt(control, "密碼須為：不限英數、不含空白、雙引號、單引號、星號的6-20字元");
		return (false);
	}
	return (true);
}
function checkPass2(control) {
	re = /^[A-Za-z0-9]{0,}[0-9]{0,}[^ '"*]$/;
	if (control.value == "" || re.test(control.value) == false || control.value.length < 6 || control.value.length > 20) {
		// validatePrompt(control, "密碼須為：不限英數、不含空白、雙引號、單引號、星號的8-25字元");
		document.reg_data.subb.disabled = true;
		document.getElementById("subb").className = "btn type_fill --second";
		return (false);
	}
	return (true);
}
function checkRegName(control) {
	if (control.value == "") {
		//validatePrompt(control, "密碼須為：不限英數、不含空白、雙引號、單引號、星號的8-25字元");

		document.reg_data.subb.disabled = true;
		document.getElementById("subb").className = "btn type_fill --second";
		return (false);
	}
	return (true);
}
function checkRegName2(control) {
	if (control.value == "") {
		//validatePrompt(control, "密碼須為：不限英數、不含空白、雙引號、單引號、星號的8-25字元");
		validatePrompt(control, "姓名不可空白");
		return (false);
	}
	return (true);
}
function checkEmail(email){
	index = email.indexOf ('@', 0);		// 找出 @ 的位置
	if (email.length==0) {
		//alert("錯誤的E-mail格式！");
		document.reg_data.subb.disabled = true;
		document.getElementById("subb").className = "btn type_fill --second";
		return (false);
	} else if (index==-1) {
		//alert("錯誤的E-mail格式。");
		document.reg_data.subb.disabled = true;
		document.getElementById("subb").className = "btn type_fill --second";
		return (false);
	} else if (index==0) {
		//alert("錯誤的E-mail格式。");
		document.reg_data.subb.disabled = true;
		document.getElementById("subb").className = "btn type_fill --second";
		return (false);
	} else if (index==email.length-1) {
		//alert("錯誤的E-mail格式。");
		document.reg_data.subb.disabled = true;
		document.getElementById("subb").className = "btn type_fill --second";
		return (false);
	} else
		return (true);
}
function checkEmail2(email){
	index = email.indexOf ('@', 0);		// 找出 @ 的位置
	if (email.length==0) {
		alert("錯誤的E-mail格式！");
		document.reg_data.subb.disabled = true;
		document.getElementById("subb").className = "btn type_fill --second";
		return (false);
	} else if (index==-1) {
		alert("錯誤的E-mail格式。");
		document.reg_data.subb.disabled = true;
		document.getElementById("subb").className = "btn type_fill --second";
		return (false);
	} else if (index==0) {
		alert("錯誤的E-mail格式。");
		document.reg_data.subb.disabled = true;
		document.getElementById("subb").className = "btn type_fill --second";
		return (false);
	} else if (index==email.length-1) {
		alert("錯誤的E-mail格式。");
		document.reg_data.subb.disabled = true;
		document.getElementById("subb").className = "btn type_fill --second";
		return (false);
	} else
		return (true);
}
function checkRePassword(control,control2) {
	if (control.value != control2.value) {
		// validatePrompt(control2, "密碼確認欄位內容與密碼欄位不相符！");
		document.reg_data.subb.disabled = true;
		document.getElementById("subb").className = "btn type_fill --second";
		return (false);
	}
	return (true);
}
function checkRePassword2(control,control2) {
	if (control.value != control2.value) {
		validatePrompt(control2, "密碼確認欄位內容與密碼欄位不相符！");
		return (false);
	}
	return (true);
}
function validateForm(form){
	if (!checkRegName(form.realname)) return;
	if (!checkEmail(form.email.value)){
		return(false);
	}
	if (!checkPass2(form.pwd)) return;
	if (!checkRePassword(form.pwd,form.pwdcheck)) return;
	// if (!checkAuth(form.authtext)) return;
	// if (!checkTerm(form.term)) return;
	// form.submit();
	document.reg_data.subb.disabled = false;
	document.getElementById("subb").className = "btn type_fill --regular js-call_spec";
	return(true);
}
function logout(){
	location = "http://tokukai.com/logout.php";
}
function follow(id){
	gatData('http://tokukai.com/follow.php?id='+id,'noreturn');
}
function compare(id){
	gatData('http://tokukai.com/compare.php?id='+id,'noreturn');
}
function validatePrompt(control, promptStr) {
	alert(promptStr);
	control.focus();
	return;
}
function checkEmail3(email){
	index = email.indexOf ('@', 0);		// 找出 @ 的位置
	if (email.length==0) {
		// alert("錯誤的E-mail格式！");
		document.forgetForm.forgetS.disabled = true;
		document.getElementById("forgetSubmit").className = "btn type_fill --second js-call_spec";
		return (false);
	} else if (index==-1) {
		// alert("錯誤的E-mail格式。");
		document.forgetForm.forgetS.disabled = true;
		document.getElementById("forgetSubmit").className = "btn type_fill --second js-call_spec";
		return (false);
	} else if (index==0) {
		// alert("錯誤的E-mail格式。");
		document.forgetForm.forgetS.disabled = true;
		document.getElementById("forgetSubmit").className = "btn type_fill --second js-call_spec";
		return (false);
	} else if (index==email.length-1) {
		// alert("錯誤的E-mail格式。");
		document.forgetForm.forgetS.disabled = true;
		document.getElementById("forgetSubmit").className = "btn type_fill --second js-call_spec";
		return (false);
	} else {
		document.forgetForm.forgetS.disabled = false;
		document.getElementById("forgetSubmit").className = "btn type_fill --regular";
		return (true);
	}
}