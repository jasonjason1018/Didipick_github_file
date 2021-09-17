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
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tt1">
            <tr>
              <td width="10">&nbsp;</td>
              <td width="80"><a href="index.php" target="_parent" class="tt1">首　　頁</a></td>
              <td width="80"><a href="user.php" target="_parent" class="tt1">系統管理</a></td>
              <td width="80"><a href="indexEditNew.php" target="_parent" class="tt1">首頁設定</a></td>
              <td width="80"><a href="akind.php" target="_parent" class="tt1">類別管理</a></td>
			  
			  <td width="110"><a href="product.php" target="_parent" class="tt1">直購商品管理</a></td>
			  <td width="80"><a href="member.php" target="_parent" class="tt1">會員管理</a></td>
			  <td width="110"><a href="inorder.php" target="_parent" class="tt1">代購/代標 管理</a></td>
			  <td width="100"><a href="receiving.php" target="_parent" class="tt1">日本配送管理</a></td>
			  <td width="100"><a href="transport.php" target="_parent" class="tt1">台灣配送管理</a></td>
              <!--<td width="80"><a href="product.php" target="_parent" class="tt1">商品資訊</a></td>
              <td width="80"><a href="aboutus.php" target="_parent" class="tt1">認識我們</a></td>
              <td width="105"><a href="travel.php" target="_parent" class="tt1">蚵仔寮一日遊</a></td>
              <td width="80"><a href="buy.php" target="_parent" class="tt1">購買須知</a></td>
              <td width="80"><a href="cook.php" target="_parent" class="tt1">創意料理</a></td>-->
              <td width="80"><a href="adver.php" target="_parent" class="tt1">廣告系統</a></td>
              <td width="80"><a href="qanda.php" target="_parent" class="tt1">客服中心</a></td>
              <td width="80"><a href="projects.php" target="_parent" class="tt1">訊息中心</a></td>
              <td width="80"><a href="everydaywork.php" target="_parent" class="tt1">每日訂單</a></td>
			  <td width="80"><a href="knowledge.php" target="_parent" class="tt1">公佈欄</a></td>
              <td>&nbsp;</td>
          </tr>
          </table>
      </td>
	  <td width="8%" valign="bottom">
		<form method="POST" action="./logout.php">
			<p align="right"><font size="2" face="微軟正黑體">帳號:</font><br><input type="submit" value="登出" name="B1"></p>
		</form>		</td>
	</tr>
</table>
		</td>
	</tr>
	<tr>
		<td width="0%" background="admin/images/brown_bg_skin.png" valign="top">
			<div>
				<ul>
					<li class="leftNoItem">　</li>
				</ul>
			</div>
		</td>
		<td width="100%">
			<p>&nbsp;</p>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
  <tr>
    <td width="100%">
    	<b>HOME</b>&nbsp;&nbsp;
		<input type="button" value="新增訂單" name="new" onclick="window.location='inorder_new1.php'"><hr>
    </td>
  </tr>
  <tr>
    <td width="100%"><input type="button" value="新增" name="new" onclick="window.location='./home_new.php'"></td>
  </tr>
  <tr>
    <td width="100%">
    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">
      <!--
      <tr>
        <td width="25%" bgcolor="#C0C0C0" align="center"><font size="2">圖片</font></td>
        <td width="25%" bgcolor="#C0C0C0" align="center"><font size="2">說明</font></td>
        <td width="25%" bgcolor="#C0C0C0" align="center"><font size="2">超連結</font></td>
        <td width="10%" bgcolor="#C0C0C0" align="center"><font size="2">狀態</font></td>
        <td width="15%" bgcolor="#C0C0C0" align="center">&nbsp;</td>
      </tr>
      -->
	  <tr>
        <td width="25%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">會員數</font></td>
        <td width="75%" align="center" bgcolor="#E0E0E0" align="center"><font size="4" color="#A03636"><a href="member.php"></a>&nbsp;人</font>(VIP :人;&nbsp;&nbsp;一般 :人)</td>
      </tr>
	  <tr>
        <td width="25%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">新增問與答</font></td>
        <td width="75%" align="center" bgcolor="#E0E0E0" align="center"><font size="4" color="#A03636"><a href="qanda.php"></a>&nbsp;項</font></td>
      </tr>
	  <tr>
        <td width="25%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">新增會員退款</font></td>
        <td width="75%" align="center" bgcolor="#E0E0E0" align="center"><font size="4" color="#A03636"><a href="refunds.php"></a>&nbsp;筆</font></td>
      </tr>
	  <tr>
        <td width="25%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">新增代購商品</font></td>
        <td width="75%" align="center" bgcolor="#E0E0E0" align="center"><font size="4" color="#A03636"><a href="everydaywork.php"></a>&nbsp;筆</font></td>
      </tr>
	  <tr>
        <td width="25%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">新增代標得標商品</font></td>
        <td width="75%" align="center" bgcolor="#E0E0E0" align="center"><font size="4" color="#A03636"><a href="everydaywork2.php"></a>&nbsp;筆</font></td>
      </tr>
	  <tr>
        <td width="25%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">新增美味箱商品</font></td>
        <td width="75%" align="center" bgcolor="#E0E0E0" align="center"><font size="4" color="#A03636"><a href="foodBox.php"></a>&nbsp;筆</font></td>
      </tr>
	  <tr>
        <td width="25%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">海運出貨單</font></td>
        <td width="75%" align="center" bgcolor="#E0E0E0" align="center"><font size="4" color="#A03636"><a href="shipOcean.php"></a>&nbsp;筆</font></td>
      </tr>
	  <tr>
        <td width="25%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">海運通知出貨</font></td>
        <td width="75%" align="center" bgcolor="#E0E0E0" align="center"><font size="4" color="#A03636"><a href="shipOceanNotice.php"></a>&nbsp;筆</font></td>
      </tr>
	  <tr>
        <td width="25%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">日寄日出貨單</font></td>
        <td width="75%" align="center" bgcolor="#E0E0E0" align="center"><font size="4" color="#A03636"><a href="shipJapan.php"></a>&nbsp;筆</font></td>
      </tr>
	  <tr>
        <td width="25%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">日寄日通知出貨</font></td>
        <td width="75%" align="center" bgcolor="#E0E0E0" align="center"><font size="4" color="#A03636"><a href="shipJapanNotice.php"></a>&nbsp;筆</font></td>
      </tr>
	  <tr>
        <td width="25%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">EMS、順豐出貨單</font></td>
        <td width="75%" align="center" bgcolor="#E0E0E0" align="center"><font size="4" color="#A03636"><a href="shipEMS.php"></a>&nbsp;筆</font></td>
      </tr>
	  <tr>
        <td width="25%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">EMS、順豐通知出貨</font></td>
        <td width="75%" align="center" bgcolor="#E0E0E0" align="center"><font size="4" color="#A03636"><a href="shipEMSNotice.php"></a>&nbsp;筆</font></td>
      </tr>
	  <tr>
        <td width="25%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">台灣出貨單</font></td>
        <td width="75%" align="center" bgcolor="#E0E0E0" align="center"><font size="4" color="#A03636"><a href="shipTaiwan.php"></a>&nbsp;筆</font></td>
      </tr>
	  <tr>
        <td width="25%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">台灣通知出貨</font></td>
        <td width="75%" align="center" bgcolor="#E0E0E0" align="center"><font size="4" color="#A03636"><a href="shipTaiwanNotice.php"></a>&nbsp;筆</font></td>
      </tr>
	  <tr>
        <td width="25%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">人工代運商品(清點入倉)</font></td>
        <td width="75%" align="center" bgcolor="#E0E0E0" align="center"><font size="4" color="#A03636"><a href="/Admin/warehouse.php"></a>&nbsp;筆</font></td>
      </tr>
	  <tr>
        <td width="25%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">郵局空運商品(清點入倉)</font></td>
        <td width="75%" align="center" bgcolor="#E0E0E0" align="center"><font size="4" color="#A03636"><a href="/Admin/warehouse.php"></a>&nbsp;筆</font></td>
      </tr>
	  <tr>
        <td width="25%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">取引單</font></td>
        <td width="75%" align="center" bgcolor="#E0E0E0" align="center"><font size="4" color="#A03636"><a href="payList.php"></a>&nbsp;筆</font></td>
      </tr>
	  <tr>
        <td width="25%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">取消待退款訂單數</font></td>
        <td width="75%" align="center" bgcolor="#E0E0E0" align="center"><font size="4" color="#A03636"><a href="/Admin/Refund.php"></a>&nbsp;筆</font></td>
      </tr>
	  <tr>
        <td width="25%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">待議價商品</font></td>
        <td width="75%" align="center" bgcolor="#E0E0E0" align="center"><font size="4" color="#A03636"><a href="/Admin/offer.php"></a>&nbsp;筆</font></td>
      </tr>
	  <tr>
        <td width="25%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">待詢問商品</font></td>
        <td width="75%" align="center" bgcolor="#E0E0E0" align="center"><font size="4" color="#A03636"><a href="/Admin/offer5.php"></a>&nbsp;筆</font></td>
      </tr>
	  <tr>
        <td width="25%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">問題商品處理中</font></td>
        <td width="75%" align="center" bgcolor="#E0E0E0" align="center"><font size="4" color="#A03636"><a href="/Admin/complaint.php"></a>&nbsp;筆</font></td>
      </tr>
	  <tr>
        <td width="25%" height="45" bgcolor="#E0E0E0" align="center"><font size="2">請款單(未付款)</font></td>
        <td width="75%" align="center" bgcolor="#E0E0E0" align="center"><font size="4" color="#A03636"><a href="/Admin/payment.php"></a>&nbsp;筆</font></td>
      </tr>
    </table>
    </td>
  </tr>
</table>
<br><br>
		</td>
	</tr>
</table>

</body>

</html>
