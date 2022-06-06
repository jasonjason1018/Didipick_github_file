<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>後台</title>
<script language="JavaScript" src="admin/include/js/jquery-1.4.2.min.js"></script>
<script language="JavaScript" src="admin/include/js/jquery-ui-1.8.11.custom.min.js"></script>
<script language="JavaScript" src="admin/include/js/jquery.ui.datepicker-zh-TW.js"></script>
<link type="text/css" href="admin/include/js/jquery-ui-1.8.11.custom.css" rel="stylesheet" />
<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function($)
{
	/*開始日期*/
	$("#begin_date").datepicker({ dateFormat: 'yy-mm-dd' });
	$("#end_date").datepicker({ dateFormat: 'yy-mm-dd' });
})
</script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>

<body topmargin="0" leftmargin="0" bgcolor="#EBEBEB">

<table border="0" width="100%" id="table1" cellspacing="0" cellpadding="0">
	<tr>
		<td colspan="2" height="80" width="100%" background="/admin/images/brown_bg_line.png">
			<link href="/admin/css/tt.css" rel="stylesheet" type="text/css">
<table border="0" width="100%" id="table1" cellspacing="0" cellpadding="0" height="64">
	<tr>
		<td width="100" valign="top">
		<!--<img border="0" src="images/webadmin.gif" width="150" height="80">--></td>
  <td align="left" valign="top">
  <table width="100" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="60"></td>
    </tr>
  </table> 
 @include('Admin.include.header')
		</td>
	</tr>
	<tr>
		<td width="0%" background="admin/images/brown_bg_skin.png" valign="top">
			<div>
				@include('Admin.include.index_left')
			</div>
		</td>
		<td width="100%">
			<p>&nbsp;</p>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
  <tr>
    <td width="100%">
    	<b>會員管理</b><hr>
    </td>
  </tr>
  <tr>
    <td width="100%"><input type="button" value="回上頁" name="new" onclick="window.location='/brand'"></td>
  </tr>
  <!--<tr>
    <td width="100%"><input type="button" value="新增" name="new" onclick="window.location=''"></td>
  </tr>
  <tr>-->
    <tr>
    <td width="100%">
    	<form method="POST" action="/member_edit_update" name="Links" enctype="multipart/form-data" id="product_edit_form">
    		@csrf
    <table border="1" cellpediting="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
    	@foreach($data as $k=>$v)
    	 <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">會員編號</font></td>
		    <td width="82%"><font size="3">D-{{$v->id}}</font></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">類別</font></td>
		    <td width="82%"><font size="3" color="green">一般會員</font></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">帳號</font></td>
		    <td width="82%"><font size="2">{{$v->mobile}}</font></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">密碼</font></td>
		    <td width="82%">
		    	<input type="password" name="password" id="password" value="{{$passwordary[$k]}}">
		    	<a href="javascript:open()" style="display:" id="open_btn">顯示</a>
		    	<a href="javascript:close()" style="display:none" id="close_btn">隱藏</a>
		    </td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">姓名</font></td>
		    <td width="82%"><input type="text" name="name" value="{{$nameary[$k]}}"></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">手機號碼</font></td>
		    <td width="82%"><input type="text" name="mobile" id="mobile" value="{{$v->mobile}}"></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">身分證號</font></td>
		    <td width="82%"><font size="3" color="green">{{$passportary[$k]}}</font></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">E-MAIL</font></td>
		    <td width="82%"><input type="text" name="email" value="{{$v->email}}"></td>
		  </tr>
		  <!--<tr>
		  	
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">生日</font></td>
		    <td width="82%">
		    	
		    	<font size="3">年</font>
		    	<font size="3">月</font>
		    	<font size="3">日</font>
		    	
		    </td>
		  </tr>-->
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">Tel</font></td>
		    <td width="82%"><input type="text" name="tel" value="{{$v->tel}}"></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">地址</font></td>
		    <td width="82%">
		    	郵遞區號:<input type="text" name="zipcode" id="zipcode" value="{{$v->zipcode}}" size="5">
		    	地區:<input type="text" name="area" id="area" value="{{$v->area}}" size="12">
		    	地址:<input type="text" name="address" id="address" value="{{$v->address}}" size="32">
		    </td>
		  </tr>
		  <tr>
		    <td width="18%" height="30" bgcolor="#C0C0C0" align="center"><font size="2">狀態</font></td>
		    <td width="82%" height="30">
		    	<select name="publish">
		    		@if($v->publish == 'A')
		    			<option value="A" selected>未認證</option>
		    		@else
		    			<option value="A">未認證</option>
		    		@endif
		    		@if($v->publish == 'Y')
		    			<option value="Y" selected>開啟</option>
		    		@else
		    			<option value="Y">開啟</option>
		    		@endif
		    		@if($v->publish == 'O')
		    			<option value="O" selected>停用</option>
		    		@else
		    			<option value="O">停用</option>
		    		@endif
		    	</select>
		    </td>
		  </tr>
		  @foreach($account as $value)
		  <tr>
		    <td width="18%" height="30" bgcolor="#C0C0C0" align="center"><font size="2">帳戶餘額</font></td>
		    <td width="82%" height="30"><font size="3" color="blue">{{$value->balance}}</font></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">回饋金餘額</font></td>
		    <td width="82%"><font size="3" color="blue">{{$value->feedback}}</font></td>
		  </tr>
		  @endforeach
		  @endforeach
		  <tr>
		    <td width="100%" colspan="2">
		    	<input type="hidden" name="sno" value="{{$sno}}">
		    	<input type="button" value="確認送出" name="submit1" id="submit1" onclick="product_edit_form1()"></td>
		  </tr>
		</table>
    </form>
    </td>
  </tr>
    </td>
  </tr>
</table>
<br><br>
		</td>
	</tr>
</table>

</body>

</html>

<script>
	function product_edit_form1(){
		$("#product_edit_form").submit();
	}

	function open(){
		document.getElementById('password').type='text';
		document.getElementById('open_btn').style.display='none';
		document.getElementById('close_btn').style.display='';
	}
	
	function close(){
		document.getElementById('password').type='password';
		document.getElementById('open_btn').style.display='';
		document.getElementById('close_btn').style.display='none';
	}
</script>