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
    	<b>商品管理</b><hr>
    </td>
  </tr>
  <tr>
    <td width="100%"><input type="button" value="回上頁" name="new" onclick="window.location='/product'"></td>
  </tr>
  <!--<tr>
    <td width="100%"><input type="button" value="新增" name="new" onclick="window.location=''"></td>
  </tr>
  <tr>-->
    <tr>
    <td width="100%">
    	<form method="POST" action="/product_new_function" name="Links" enctype="multipart/form-data" id="product_edit_form">
    		@csrf
    <table border="1" cellpediting="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">商品編號</font></td>
		    <td width="82%">
		    	<input type="text" size="42" name="number" id="number" value="{{$No}}" disabled>
		    </td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">名稱</font></td>
		    <td width="82%"><input type="text" size="42" name="name" id="name" value=""></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">品牌</font></td>
		    <td width="82%">
		    	<select name="brand">
		    		@foreach($bdata as $bv)
		    			<option value="{{$bv->sno}}">{{$bv->name}}</option>
		    		@endforeach
		    	</select>
		    </td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">類別</font></td>
		    <td width="82%">
		    	<select name="category">
		    		@foreach($cdata as $cv)
		    			<option value="{{$cv->sno}}">{{$cv->name}}</option>
		    		@endforeach
		    	</select>
		    </td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">規格</font></td>
		    <td width="82%"><textarea name="spec" id="spec" rows="4" cols="60"></textarea></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">關鍵字</font></td>
		    <td width="82%"><input type="text" size="42" name="keyword" id="keyword" value=""></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">標籤</font></td>
		    <td width="82%"><textarea name="label" rows="4" cols="60"></textarea></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">簡述</font></td>
		    <td width="82%"><textarea name="brief" id="brief" rows="4" cols="60"></textarea></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">詳述</font></td>
		    <td width="82%"><textarea name="description" id="description" rows="4" cols="60"></textarea></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">圖片</font></td>
		    <td width="82%">
		    	@for($i=1;$i<=6;$i++)
		    		<input type="file" name="pic{{$i}}"><br>
		    	@endfor
		    </td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">剩餘數量</font></td>
		    <td width="82%"><input type="text" size="42" name="quantity" id="quantity" value=""></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">重量</font></td>
		    <td width="82%"><input type="text" size="42" name="weight" id="weight" value="">kg</td>
		  </tr>
		  <tr>
		    <td width="18%" height="30" bgcolor="#C0C0C0" align="center"><font size="2">上架日期</font></td>
		    <td width="82%" height="30"><input type="text" size="12" name="begin_date" id="begin_date" value="" autocomplete="off"></td>
		  </tr>
		  <tr>
		    <td width="18%" height="30" bgcolor="#C0C0C0" align="center"><font size="2">下架日期</font></td>
		    <td width="82%" height="30"><input type="text" size="12" name="end_date" id="end_date" value="" autocomplete="off"></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">原網址</font></td>
		    <td width="82%">
		    	<input type="text" size="42" name="url" id="url" value="">
		    		<!--<button><a href="" target="_blank">前往</a></button>-->
		    </td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">原價(¥)</font></td>
		    <td width="82%"><input type="text" size="42" name="didiprice_jp" id="didiprice_jp" value=""></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">特價(¥)</font></td>
		    <td width="82%"><input type="text" size="42" name="didiprice_tw" id="didiprice_tw" value=""></td>
		  </tr>
		  <!--<tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">原價</font></td>
		    <td width="82%"><input type="text" size="42" name="price" id="price" value="<?//=$row['price']?>"></td>
		  </tr>-->
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">評價</font></td>
		    <td width="82%"><input type="text" size="42" name="star" id="star" value=""><font size="2">星</font></td>
		  </tr>
		  <tr>
		  	<td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">瀏覽數</font></td>
		  	<td width="82%"><input type="text" size="42" name="views" id="views" value="{{$v->views}}"><font size="2"></font></td>
		  </tr>
		  <!--<tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">觀看數</font></td>
		    <td width="82%"><input type="text" size="42" name="views" id="views" value=""></td>
		  </tr>-->
		  <tr>
		    <td width="100%" colspan="2">
		    	<input type="submit" value="確認修改" id="btn">
		    </td>
		  </tr>
		</table>
		@include('kindeditor::editor',['editor'=>'spec'])
		@include('kindeditor::editor',['editor'=>'brief'])
		@include('kindeditor::editor',['editor'=>'description'])
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
	$("#btn").click(function(){
		$("#number").prop('disabled', false);
	});
</script>