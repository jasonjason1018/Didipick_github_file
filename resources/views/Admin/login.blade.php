<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="/js/jquery.min.js"></script>
<title>無標題文件</title>
<style type="text/css">
<!--
body {
	background-image: url(admin/images/login_bg.gif);
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.bg {
	background-image: url(admin/images/login_bg2.png);
	background-repeat: no-repeat;
	height: 310px;
	width: 310px;
}
.box {
	height: 20px;
	width: 200px;
	border: 1px solid #666666;
}
.box2 {
	font-size: 12px;
	color: #666666;
	background-color: #CCCCCC;
	height: 20px;
	width: 40px;
	border: 1px solid #666666;
}
.tt1 {
	font-size: 12px;
	color: #666666;
}
-->
</style>
</head>

<body>
	<form method="POST" action="/check_login" id="acpwform">
    @csrf
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"><table width="400" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="30"></td>
      </tr>
      <tr>
        <td align="center"><table width="300" border="0" cellpadding="0" cellspacing="0" class="bg">
          <tr>
            <td align="center" valign="top"><table width="200" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="200">&nbsp;</td>
              </tr>
            </table>
              <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="30" class="tt1">帳號:</td>
                  <td><input name="username" type="text" class="box" id="username" /></td>
                </tr>
              </table>
              <table width="250" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="10"></td>
                  </tr>
              </table>
              <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="30" class="tt1">密碼:</td>
                  <td><input name="password" type="password" class="box" id="password" /></td>
                </tr>
              </table>
              <table width="250" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="10"></td>
                </tr>
              </table>
              <table width="230" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="right"><button name="button" type="button" class="box2" id="button">重填</button></td>
                  <td width="50" align="right"><input name="button2" type="button" class="box2" id="button2" value="送出" /></td>
                </tr>
              </table>
              </td>
          </tr>
        </table></td>
      </tr>
    </table>
    </td>
  </tr>
</table>
</form>

</body>
</html>
<script>
   function keyFunction() {
       //alert("Key code = " + event.keyCode);
       if(event.keyCode==13){
         username = $("#username").val();
         password = $("#password").val();
         if(username != '' && password != ''){
           $("#acpwform").submit();
         }
       }
     }
     document.onkeydown=keyFunction;
</script>
<script>
    $("#button").click(function(){
      $("#username").val('');
      $("#password").val('');
    });
    $("#button2").click(function(){
        ac = $("#username").val();
        pw = $("#password").val();
        if(ac == '' || pw == ''){
          alert('請輸入帳號、密碼');
        }else{
          $("#acpwform").submit();
        }
    });
</script>
