<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>後台</title>
<script language="JavaScript" src="admin/include/js/jquery-1.4.2.min.js"></script>
<script language="JavaScript" src="admin/include/js/jquery-ui-1.8.11.custom.min.js"></script>
<script language="JavaScript" src="admin/include/js/jquery.ui.datepicker-zh-TW.js"></script>
<link type="text/css" href="admin/include/js/jquery-ui-1.8.11.custom.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="/wangcss/wangEditor.min.css">
<link rel="stylesheet" type="text/css" href="/wangcss/wangEditor.css">
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
    	<b>達人勸敗</b><hr>
    </td>
  </tr>
  <tr>
    <td width="100%"><input type="button" value="回上頁" name="new" onclick="window.location='/master'"></td>
  </tr>
  <!--<tr>
    <td width="100%"><input type="button" value="新增" name="new" onclick="window.location=''"></td>
  </tr>
  <tr>-->
    <tr>
    <td width="100%">
    	<form method="POST" action="/master_new_function" name="Links" enctype="multipart/form-data" id="product_edit_form">
    		@csrf
    <table border="1" cellpediting="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
    	  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">圖片</font></td>
		    <td width="82%"><input type="file" name="pic"></td>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">標題</font></td>
		    <td width="82%"><input type="text" id="title" name="title" value=""></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">標籤</font></td>
		    <td width="82%">
		    	@foreach($label as $k=>$v)
		    		<input type="checkbox" name="label{{$k}}" id="label{{$k}}" value="{{$v->name}}" onchange="labelcheckbox('{{$l_size}}', '{{$k}}')">{{$v->name}}<br>
		    		<input type="hidden" name="label_name{{$k}}" value="{{$v->name}}">
		    	@endforeach
		    </td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">作者</font></td>
		    <td width="82%"><input type="text" id="author" name="author" value=""></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">大綱</font></td>
		    <td width="82%"><input type="text" id="outline" name="outline" value=""></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">內文</font></td>
		    <td width="82%"><textarea name="content" id="content" rows="4" cols="60" class="form-controller"></textarea></td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">推薦商品</font></td>
		    <td width="82%">
		    	@foreach($product as $k=>$v)
		    		<input type="checkbox" name="recommend_item{{$k}}" id="recommend_item{{$k}}" value="{{$v->name}}" onchange="pcheckbox('{{$p_size}}', '{{$k}}')">{{$v->name}}<br>
		    		<input type="hidden" name="pno{{$k}}" value="{{$v->No}}">
		    	@endforeach
		    </td>
		  </tr>
		  <tr>
		    <td width="18%" bgcolor="#C0C0C0" align="center"><font size="2">瀏覽次數</font></td>
		    <td width="82%"><input type="text" id="views" name="views" value=""></td>
		  </tr>
		    <td width="100%" colspan="2">
		    	<input type="hidden" name="type" value="1">
		    	<input type="submit" value="確認送出"></td>
		  </tr>
		</table>
		@include('kindeditor::editor',['editor'=>'content'])
		@include('kindeditor::editor',['editor'=>'outline'])
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
	function pcheckbox(size, no){
		var t = 0;
		for(var i=0;i<=size;i++){
			if($("#recommend_item"+i).prop("checked")==true){
				t = t+1;
			}
		}
		if(t > 3){
			$("#recommend_item"+no).prop("checked", false);
		}
	}

	function labelcheckbox(size, no){
		var t = 0;
		for(var i=0;i<size;i++){
			if($("#label"+i).prop("checked")==true){
				t = t+1;
			}
		}
		//alert(t);
		if(t > 3){
			$("#label"+no).prop("checked", false);
		}
	}
</script>
<!--<script type="text/javascript" src="/wangjs/wangEditor.min.js"></script>
<script type="text/javascript">
    var editor = new wangEditor('content');
    editor.create();
</script>-->