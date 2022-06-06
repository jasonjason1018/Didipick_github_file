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
      <td width="80">
        <a href="/help" class="tt1">最新公告</a>
        <a href="/qa" class="tt1">常見問題</a>
        <a href="/shoppingprocess" class="tt1">購物流程</a>
        <a href="/about" class="tt1">關於直直買</a>
      </td>
  </tr>
  <tr>
    <td width="100%">
      <b>常見問題</b><hr>
    </td>
  </tr>
  <tr>
    <td width="100%"><input type="button" value="新增" name="new" onclick="window.location='/qa_new'"></td>
  </tr>
  
  <tr>
    <tr>
    <td width="100%">
    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">

      <tr>
        <td width="5%" bgcolor="#C0C0C0" align="center"><font size="2">日期</font></font></td>
        <td width="5%" bgcolor="#C0C0C0" align="center"><font size="2">標題</font></td>
        <td width="5%" bgcolor="#C0C0C0" align="center"><font size="2">狀態</font></td>
        <td width="15%" bgcolor="#C0C0C0" align="center">&nbsp;</td>
        <!--<td width="20%" bgcolor="#C0C0C0" align="center">&nbsp;</td>-->
      </tr>
      @foreach($data as $v)
      <tr>
        <td width="5%" align="center"><font size="3">{{$v->insert_time}}</font></td>
        <td width="5%" align="center"><font size="3">{{$v->title}}</font></td>
        @if($v->status==1)
          @php
            $color = 'green';
            $status = '開啟';
          @endphp
        @else
          @php
            $color = 'red';
            $status = '關閉';
          @endphp
        @endif
        <td width="5%" align="center"><font size="2" color="{{$color}}">{{$status}}</font></td>

        <td width="15%" align="center">
        <input type="button" value="編輯" name="update" onclick="window.location='/qa_edit/{{$v->id}}'">
        @if($v->status == 1)
          <input type="button" value="關閉" name="close" onclick="window.location='/qa_off/{{$v->id}}'">
        @else
          <input type="button" value="開啟" name="open" onclick="window.location='/qa_open/{{$v->id}}'">
        @endif
        <input type="button" value="刪除" name="delete" onclick="window.location='/qa_delete/{{$v->id}}'">
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
