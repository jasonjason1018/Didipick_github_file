<link href="/admin/css/tt.css" rel="stylesheet" type="text/css">
<link href="/admin/css/tt2.css" rel="stylesheet" type="text/css">
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tt1">
            <tr>
              <td width="10">&nbsp;</td>
                <td width="80"><a href="/bc_index" target="_parent" class="tt1">首　　頁</a></td>
                <td width="80"><a href="/system" target="_parent" class="tt1">系統管理</a></td>
                <td width="80"><a href="/product" target="_parent" class="tt1">商品管理</a></td>
                <td width="80"><a href="/member" target="_parent" class="tt1">會員管理</a></td>
                <td width="80"><a href="/adver" target="_parent" class="tt1">廣告管理</a></td>
                <td width="80"><a href="/master" target="_parent" class="tt1">達人勸敗</a></td>
                <td width="80"><a href="/feedback" target="_parent" class="tt1">好評推薦</a></td>
                <!--href="/feedback" -->
                <td width="80"><a href="/help" target="_parent" class="tt1">&nbsp;&nbsp;公告<br>幫助中心</a></td>
			  <!--<td width="110"><a href="product.php" target="_parent" class="tt1">直購商品管理</a></td>
			  <td width="80"><a href="member.php" target="_parent" class="tt1">會員管理</a></td>
			  <td width="110"><a href="inorder.php" target="_parent" class="tt1">代購/代標 管理</a></td>
			  <td width="100"><a href="receiving.php" target="_parent" class="tt1">日本配送管理</a></td>
			  <td width="100"><a href="transport.php" target="_parent" class="tt1">台灣配送管理</a></td>
              <td width="80"><a href="product.php" target="_parent" class="tt1">商品資訊</a></td>
              <td width="80"><a href="aboutus.php" target="_parent" class="tt1">認識我們</a></td>
              <td width="105"><a href="travel.php" target="_parent" class="tt1">蚵仔寮一日遊</a></td>
              <td width="80"><a href="buy.php" target="_parent" class="tt1">購買須知</a></td>
              <td width="80"><a href="cook.php" target="_parent" class="tt1">創意料理</a></td>
              <td width="80"><a href="adver.php" target="_parent" class="tt1">廣告系統</a></td>
              <td width="80"><a href="qanda.php" target="_parent" class="tt1">客服中心</a></td>
              <td width="80"><a href="projects.php" target="_parent" class="tt1">訊息中心</a></td>
              <td width="80"><a href="everydaywork.php" target="_parent" class="tt1">每日訂單</a></td>
			  <td width="80"><a href="knowledge.php" target="_parent" class="tt1">公佈欄</a></td>-->
              <td>&nbsp;</td>
          </tr>
          </table>
      </td>
	  <td width="8%" valign="bottom">
		<form method="POST" action="/logout">
      @csrf
			<p align="right"><font size="2" face="微軟正黑體">帳號:{{$name}}</font><br><input type="submit" value="登出" name="B1"></p>
		</form>		</td>
	</tr>
</table>