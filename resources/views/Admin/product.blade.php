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
        <a href="/category" class="tt1">類別管理</a>
        <a href="/brand" class="tt1">品牌管理</a>
        <a href="/product" class="tt1">商品管理</a><hr>
      </td>
  </tr>
  <tr>
    <td width="100%">
      <b>商品管理</b><hr>
    </td>
  </tr>
  <tr>
    <td width="100%"><input type="button" value="新增" name="new" onclick="window.location='/product_new'"></td>
  </tr>
  <tr>
    <td width="100%">
      <form method="POST" action="/category_search" name="Links" id="Links">
        @csrf
        <font size="2">類別:
          <select name="kind" id="kind" size="1">
            <option value="all">全部項目</option>
            @foreach($cdata as $v)
              @if($v->name != '全部商品')
                @if($c == $v->sno)
                  <option value="{{$v->sno}}" selected>{{$v->name}}</option>
                @else
                  <option value="{{$v->sno}}">{{$v->name}}</option>
                @endif
              @endif
            @endforeach
          </select>
        </font>
        <input type="submit" value="查詢">
      </form>
    </td>
  </tr>
  <tr>
    <tr>
    <td width="100%">
    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">
      <tr>
        <td width="10%" bgcolor="#C0C0C0" align="center"><font size="2">類別</font></font></td>
        <td width="15%" bgcolor="#C0C0C0" align="center"><font size="2">名稱</font></font></td>
        <td width="5%" bgcolor="#C0C0C0" align="center"><font size="2">單價(JPY)</font></td>
        <td width="5%" bgcolor="#C0C0C0" align="center"><font size="2">狀態</font></td>
        <td width="5%" bgcolor="#C0C0C0" align="center"><font size="2">剩餘數量</font></td>
        <td width="15%" bgcolor="#C0C0C0" align="center">&nbsp;</td>
        <!--<td width="20%" bgcolor="#C0C0C0" align="center">&nbsp;</td>-->
      </tr>
      @foreach($data as $v)
      <tr>
        <td width="10%" align="center"><p align="center"><font size="3">
          @foreach($cdata as $cv)
            @if($v->category == $cv->sno)
              {{$cv->name}}
            @endif
          @endforeach
        </font></td>
        <td width="15%" align="center"><font size="3"><a href="{{$v->original_url}}" target="_blank">{{$v->name}}</a></font></td>
        <td width="5%" align="center"><font size="3">{{$v->s_price}}</font></td>
        <td width="5%" align="center"><font size="3" color="@if($v->status==1){{'green'}}@else{{'red'}}@endif">@if($v->status==1){{'開啟'}}@else{{'關閉'}}@endif</font></td>
        <td width="5%" align="center" ><font size="3">{{$v->quantity}}</font></td>
        <td width="15%" align="center">
        <input type="button" value="商品編輯" name="update" onclick="window.location='/product_edit/{{$v->sno}}'">
        @if($v->status==1)
          <input type="button" value="關閉" name="close" onclick="window.location='/product_off/{{$v->sno}}'">
        @else
          <input type="button" value="開啟" name="open" onclick="window.location='/product_open/{{$v->sno}}'">
        @endif
        <input type="button" value="刪除" name="delete" onclick="window.location='/product_delete/{{$v->sno}}'">
        </td>
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
