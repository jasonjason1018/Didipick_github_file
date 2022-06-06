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
        <a href="/adver" class="tt1">首頁Banner</a>
        <a href="/banner" class="tt1">橫幅廣告</a>
      </td>
  </tr>
  <tr>
    <td width="100%">
      <b>廣告管理-首頁Banner</b><hr>
    </td>
  </tr>
  <tr>
    <td width="100%"><input type="button" value="新增" name="new" onclick="window.location='/adver_new'"></td>
  </tr>
  
  <tr>
    <tr>
    <td width="100%">
    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">

      <tr>
        <td width="5%" bgcolor="#C0C0C0" align="center"><font size="2">圖片</font></font></td>
        <td width="5%" bgcolor="#C0C0C0" align="center"><font size="2">標題</font></td>
        <td width="5%" bgcolor="#C0C0C0" align="center"><font size="2">狀態</font></td>
        @if($count != 0 && $count != -1)
          <td width="5%" bgcolor="#C0C0C0" align="center"><font size="2">排序</font></td>
        @endif
        <td width="15%" bgcolor="#C0C0C0" align="center">&nbsp;</td>
        <!--<td width="20%" bgcolor="#C0C0C0" align="center">&nbsp;</td>-->
      </tr>
      @foreach($data as $k=>$v)
      <tr>
        <td width="5%" align="center"><font size="3"><img src="storage/{{$v->banner}}" border="0" height="100"></font></td>
        <td width="5%" align="center"><font size="3">{{$v->title}}</font></td>
        @if($v->status == 1)
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
        @if($count != 0 && $count != -1)
          <td width="5%" align="center">
            <font size="3">
              @if($k == 0)
                <a href="/adver_sort/{{$v->sort}}/down">{{'▼'}}</a>
              @elseif($k == $count)
                <a href="/adver_sort/{{$v->sort}}/up">{{'▲'}}</a>
              @else
                <a href="/adver_sort/{{$v->sort}}/up">{{'▲'}}</a>&nbsp;
                <a href="/adver_sort/{{$v->sort}}/down">{{'▼'}}</a>
              @endif    
            </font>
          </td>
        @endif
        <td width="15%" align="center">
        <input type="button" value="編輯" name="update" onclick="window.location='/adver_edit/{{$v->sno}}'">
        @if($v->status == 1)
          <input type="button" value="關閉" name="close" onclick="window.location='/adver_off/{{$v->sno}}'">
        @else
          <input type="button" value="開啟" name="open" onclick="window.location='/adver_open/{{$v->sno}}'">
        @endif
        <input type="button" value="刪除" name="delete" onclick="window.location='/adver_delete/{{$v->sno}}'">
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
