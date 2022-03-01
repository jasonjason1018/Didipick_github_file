<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>後台</title>
</head>

<body topmargin="0" leftmargin="0" bgcolor="#EBEBEB">

<table border="0" width="100%" id="table1" cellspacing="0" cellpadding="0">
	<tr>
		<td colspan="2" height="80" width="100%" background="admin/images/brown_bg_line.png">
			<link href="admin/css/tt.css" rel="stylesheet" type="text/css">
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
    	<b>系統管理</b><hr>
    </td>
  </tr>
  <!--<tr>
    <td width="100%"><input type="button" value="新增" name="new" onclick="window.location=''"></td>
  </tr>
  <tr>-->
    <tr>
    <td width="100%">
    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">
      <tr>
        <td width="15%" bgcolor="#C0C0C0" align="center"><font size="2">姓名</font></td>
        <td width="15%" bgcolor="#C0C0C0" align="center"><font size="2">帳號</font></td>
        <td width="10%" bgcolor="#C0C0C0" align="center"><font size="2">群組</font></td>
        <td width="25%" bgcolor="#C0C0C0" align="center"><font size="2">EMAIL</font></td>
        <td width="15%" bgcolor="#C0C0C0" align="center"><font size="2">狀態</font></td>
        <!--<td width="20%" bgcolor="#C0C0C0" align="center">&nbsp;</td>-->
      </tr>
      @foreach($data as $v)
      <tr>
        <td width="15%" align="center"><font size="2">{{$v->user_name}}</font></td>
        <td width="15%" align="center"><font size="2">{{$v->user_account}}</font></td>
        <td width="10%" align="center"><font size="2">{{$v->user_group}}</font></td>
        <td width="25%" align="center"><font size="2">
        	@if($v->user_email == '')
        		{{'-'}}
        	@endif
        </font></td>
        @if($v->user_status == 1)
        	<td width="25%" align="center"><font size="2" style="color:green">使用中</font></td>
        @else
        	<td width="25%" align="center"><font size="2" style="color:red">已停用</font></td>
        @endif
      </tr>
      @endforeach
    </table>
    	
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
