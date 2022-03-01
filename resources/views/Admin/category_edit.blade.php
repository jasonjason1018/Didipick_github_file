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
    	<b>類別管理</b><hr>
    </td>
  </tr>
  <tr>
    <td width="100%"><input type="button" value="回上頁" name="new" onclick="window.location='/category'"></td>
  </tr>
  <!--<tr>
    <td width="100%"><input type="button" value="新增" name="new" onclick="window.location=''"></td>
  </tr>
  <tr>-->
    <tr>
    <td width="100%">
    	<form method="POST" action="/category_edit_update" name="Links" enctype="multipart/form-data" id="product_edit_form">
    		@csrf
    <table border="1" cellpediting="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
    	@foreach($data as $v)
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">名稱</font></td>
		    <td width="82%"><input type="text" size="42" name="name" id="name" value="{{$v->name}}"></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">icon</font></td>
		    <td width="82%">
		    	@if($v->icon == '')
		    		<input type="file" name="pic">
		    	@else
			    	@php
			    		$img = explode('/', $v->icon);
			    		$img = $img[1];
			    	@endphp
		    		<input type="text" name="pic" value="{{$v->icon}}">
		    		<button><a href="/category_img/{{$img}}" target="_blank">圖片</a></button>
		    		<button><a href="/category_delete_edit_img/{{$img}}/{{$v->sno}}">刪除</a></button>
		    	@endif
		    </td>
		  </tr>
		  <tr>
		    <td width="100%" colspan="2">
		    	<input type="hidden" name="sno" value="{{$sno}}">
		    	<input type="button" value="確認送出" name="submit1" id="submit1" onclick="product_edit_form1()"></td>
		  </tr>
		  @endforeach
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
</script>