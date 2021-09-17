<?
// Page function
function Page($page,$perpage,$result,$site,$search,$key_word,$during,$date_to,$date_from){
	if($during){ $during_k = "during=".$during."&"; }
	if($date_to){ $date_to_k = "date_to=".$date_to."&"; }
	if($date_from){ $date_from_k = "date_from=".$date_from."&";}
	$page = intval($page);

	$total_page_num = ($result->size()) / $perpage;
	if(($result->size() % $perpage) > 0){
		$total_page_num = $total_page_num + 1;
	}
	
	if($page < 0 or $page > $total_page_num or $page == ''){
		$page = 1;
	}
	$start = intval($page / 10);

	if($start == 0){
		$start=$start+1;
	}else{
		$start=$start*10;
	}

	$end = $start+9;


	if($end > $total_page_num){
		$end = $total_page_num;
	}
	echo "<p align=\"center\"><font size=\"2\"></font><font>";
	$up = $page-1;
	if($page > 1){ 
		echo "</font><font size=\"2\"><a href='".$site."?page=1&".$during_k."key=".$key_word."&".$date_to_k."search=".$search."&".$date_from_k."'>".Page_00."</a>　　　</font>";
		echo "<font size=2><a href='".$site."?page=".$up."&".$during_k."key=".$key_word."&".$date_to_k."search=".$search."&".$date_from_k."'>".Page_01."</a>&nbsp;&nbsp;&nbsp;</font>"; 
	}
	for($i=$start;$i<=$end;$i++){

		if($i == $page){ echo "<b>"; }
		echo "<a href='".$site."?page=".$i."&".$during_k."key=".$key_word."&".$date_to_k."search=".$search."&".$date_from_k."'>".$i."</a>&nbsp&nbsp"; 
		if($i == $page){ echo "</b>"; }

	}
	$down = $page+1;
	if($down <= $total_page_num){ echo "<font size=2>&nbsp;&nbsp;&nbsp;<a href='".$site."?page=".$down."&".$during_k."key=".$key_word."&".$date_to_k."search=".$search."&".$date_from_k."'>".Page_02."</a></font>"; }
	$total_p = intval($total_page_num);
	echo "</font>";
	if($total_p > 1){
		echo "<font size=\"2\">　　　<a href='".$site."?page=".$total_p."&".$during_k."key=".$key_word."&".$date_to_k."search=".$search."&".$date_from_k."'>".Page_03."</a></font>";
	}
	echo "</p>";	
}

function Page3($page,$perpage,$result,$site,$search,$key_word,$during,$date_to,$date_from){
	if($during){ $during_k = "during=".$during."&"; }
	if($date_to){ $date_to_k = "date_to=".$date_to."&"; }
	if($date_from){ $date_from_k = "date_from=".$date_from."&";}
	$page = intval($page);

	$total_page_num = ($result->size()) / $perpage;
	if(($result->size() % $perpage) > 0){
		$total_page_num = $total_page_num + 1;
	}
	
	if($page < 0 or $page > $total_page_num or $page == ''){
		$page = 1;
	}
	$start = intval($page / 10);

	if($start == 0){
		$start=$start+1;
	}else{
		$start=$start*10;
	}

	$end = $start+9;


	if($end > $total_page_num){
		$end = $total_page_num;
	}
//	echo "<p align=\"center\"><font size=\"2\"></font><font>";
	$up = $page-1;
	// if($page > 1){ 
		echo "<a class=\"bar__btn is-prev\" href='".$site."?page=".$up."&".$during_k."key=".$key_word."&".$date_to_k."search=".$search."&".$date_from_k."'>上一頁</a>"; 
	// }
	echo "<ul class=\"pages\">";
	for($i=$start;$i<=$end;$i++){

		if($i == $page){ echo "<li class=\"is-active\">"; }else{ echo "<li>";}
		echo "<a href='".$site."?page=".$i."&".$during_k."key=".$key_word."&".$date_to_k."search=".$search."&".$date_from_k."'>".$i."</a>"; 
		if($i == $page){ echo "</li>"; }else{ echo "</li>";}

	}
	echo "</ul>";
	$down = $page+1;
	// if($down <= $total_page_num){ 
		echo "<a class=\"bar__btn is-next\" href='".$site."?page=".$down."&".$during_k."key=".$key_word."&".$date_to_k."search=".$search."&".$date_from_k."'>下一頁</a>"; 
	// }
	$total_p = intval($total_page_num);	
}
function Page4($page,$perpage,$result,$site,$search,$key_word,$during,$date_to,$date_from){
	if($during){ $during_k = "during=".$during."&"; }
	if($date_to){ $date_to_k = "date_to=".$date_to."&"; }
	if($date_from){ $date_from_k = "date_from=".$date_from."&";}
	$page = intval($page);

	$total_page_num = ($result->size()) / $perpage;
	if(($result->size() % $perpage) > 0){
		$total_page_num = $total_page_num + 1;
	}
	
	if($page < 0 or $page > $total_page_num or $page == ''){
		$page = 1;
	}
	$start = intval($page / 10);

	if($start == 0){
		$start=$start+1;
	}else{
		$start=$start*10;
	}

	$end = $start+9;


	if($end > $total_page_num){
		$end = $total_page_num;
	}
//	echo "<p align=\"center\"><font size=\"2\"></font><font>";
	$up = $page-1;
	// if($page > 1){ 
		//echo "<a class=\"bar__btn is-prev\" href='".$site."?page=".$up."&".$during_k."key=".$key_word."&".$date_to_k."search=".$search."&".$date_from_k."'>上一頁</a>"; 
	// }
	echo "<ul class=\"pagination\">";
	for($i=$start;$i<=$end;$i++){

		if($i == $page){ echo "<li class=\"active\">"; }else{ echo "<li>";}
		echo "<a href='".$site."?page=".$i."&".$during_k."key=".$key_word."&".$date_to_k."search=".$search."&".$date_from_k."'>".$i."</a>"; 
		if($i == $page){ echo "</li>"; }else{ echo "</li>";}

	}
	echo "</ul>";
	$down = $page+1;
	// if($down <= $total_page_num){ 
		//echo "<a class=\"bar__btn is-next\" href='".$site."?page=".$down."&".$during_k."key=".$key_word."&".$date_to_k."search=".$search."&".$date_from_k."'>下一頁</a>"; 
	// }
	$total_p = intval($total_page_num);	
}
// Page functionx
function Pagex($page,$perpage,$result,$site,$search,$key_word,$during,$date_to,$date_from){
	if($during){ $during_k = "during=".$during."&"; }
	if($date_to){ $date_to_k = "date_to=".$date_to."&"; }
	if($date_from){ $date_from_k = "date_from=".$date_from."&";}
	$page = intval($page);
	$key_word = rawurldecode($key_word);

	$total_page_num = ($result->size()) / $perpage;
	if(($result->size() % $perpage) > 0){
		$total_page_num = $total_page_num + 1;
	}
	
	if($page < 0 or $page > $total_page_num or $page == ''){
		$page = 1;
	}
	$start = intval($page / 10);

	if($start == 0){
		$start=$start+1;
	}else{
		$start=$start*10;
	}

	$end = $start+9;


	if($end > $total_page_num){
		$end = $total_page_num;
	}
	echo "<p align=\"center\"><font size=\"2\"></font><font>";
	$up = $page-1;
	if($page > 1){ 
		echo "</font><font size=\"2\"><a href='".$site."?page=1&".$during_k.$key_word."&".$date_to_k."search=".$search."&".$date_from_k."'>".Page_00."</a>　　　</font>";
		echo "<font size=2><a href='".$site."?page=".$up."&".$during_k.$key_word."&".$date_to_k."search=".$search."&".$date_from_k."'>".Page_01."</a>&nbsp;&nbsp;&nbsp;</font>"; 
	}
	for($i=$start;$i<=$end;$i++){

//		if($i == $page){ echo "<b>"; }
		echo "<a href='".$site."?page=".$i."&".$during_k.$key_word."&".$date_to_k."search=".$search."&".$date_from_k."'";
		if($i == $page){ echo " style='color:red;font-size:18px'"; }
		echo ">".$i."</a>&nbsp&nbsp"; 
//		if($i == $page){ echo "</b>"; }

	}
	$down = $page+1;
	if($down <= $total_page_num){ echo "<font size=2>&nbsp;&nbsp;&nbsp;<a href='".$site."?page=".$down."&".$during_k.$key_word."&".$date_to_k."search=".$search."&".$date_from_k."'>".Page_02."</a></font>"; }
	$total_p = intval($total_page_num);
	echo "</font>";
	if($total_p > 1){
		echo "<font size=\"2\">　　　<a href='".$site."?page=".$total_p."&".$during_k.$key_word."&".$date_to_k."search=".$search."&".$date_from_k."'>".Page_03."</a></font>";
	}
	echo "</p>";	
}



//帳號檢查
function control($host,$dbUser,$dbPass,$dbName,$session){
	$admin = $session->get("admin");
	$mysql = new MySQL($host,$dbUser,$dbPass,$dbName);
	if($_POST["username"]){
		$sql = "select * from account where username = '".catch_word($_POST["username"])."' and publish = 'Y'";
		$result = $mysql->query($sql);
		$row = $result->fetch();
		if($row){
			if($row["password"] == md5($_POST["password"]) ){
				$session->set("admin",$row);
			}else{
				header("Location:./login.php");
				exit();
			}
		}else{
			header("Location:./login.php");
			exit();
		}
	}elseif($admin["username"] != ""){
		//$person = $session->get("person");
		$sql = "select * from account where username = '".$admin["username"]."'";
		$result = $mysql->query($sql);
		$row = $result->fetch();
		if($row){
			if($row["password"] == $admin["password"]){
				$admin = $row;
				$session->set("admin",$admin);
			}else{
				header("Location:./login.php");
				exit();
			}
		}else{
			header("Location:./login.php");
			exit();
		}
	}else{
		header("Location:./login.php");
		exit();
	}
}
//群組權限
function group($session,$dep,$ctl){
	global $host;
	global $dbUser;
	global $dbPass;
	global $dbName;
	$mysql = new MySQL($host,$dbUser,$dbPass,$dbName);
	$admin = $session->get("admin");
	$grp = $admin["group_id"];
	
	$sql = "select * from group_admin where g_id = ".$grp;
	$result = $mysql->query($sql);
	$row = $result->fetch();
	if($row[$dep] > $ctl){
		return true;
	}else{
		return false;
	}
}

function check_default($password){
	if($password == md5("zeroplus")){
		header("Location:./update-pwd.php");
	}
}
function mail_send_big5($from,$to,$subject,$message,$attachment){ 
		// 取得上傳檔案的資訊
		if ($attachment != "") {
			 // 處理附檔郵件
			$file_type  = "application/msword"; //filetype($attachment );
			$file_name = basename($attachment);			 
			$fp = fopen($attachment , "rb");  // 讀取附檔的內容
			$data = fread($fp, filesize($attachment ));
			 fclose($fp);
		}
		// 指定寄件者的郵件標頭
		$headers = "From: $from\nReply-To: $from\n";   
		//$headers = "From:" . $from . " <". $from .">\n\n";			
		// 是否有上傳檔案
 
     // 建立MIME的邊界字串
     $semi_rand = md5(time());
     $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
     // 新增附檔的郵件標頭
     $headers .= "MIME-Version: 1.0\n";
     $headers .= "Content-Type: multipart/mixed;\n";
     $headers .= " boundary=\"{$mime_boundary}\""; 
     // 新增郵件內容
     $backup = $message; 
//       $msg = $backup;
     $msg  = "This is a multi-part message in MIME format.\n\n";
     $msg .= "--{$mime_boundary}\n";
     $msg .= "Content-Type: text/html; charset=\"big-5\"\n";
     $msg .= "Content-Transfer-Encoding: 8bit\n\n".$backup."\n\n";
		if ($attachment != "") {		 
				 // 替附檔資料加碼
				 $data = chunk_split(base64_encode($data));
				 // 新增附檔的郵件內容
				 $msg .= "--{$mime_boundary}\n";
				 $msg .= "Content-Type: {$file_type};\n";
				 $msg .= " name=\"{$file_name}\"\n";
				 $msg .= "Content-Transfer-Encoding: base64\n\n".$data ."\n\n";
				 $msg .= "--{$mime_boundary}--\n";		
		}	 
		if (mail($to, $subject, $msg, $headers ))
			 return true;
		else
			 echo false;
}
function mail_send($from,$to,$subject,$message,$attachment){ 
		// 取得上傳檔案的資訊
		if ($attachment != "") {
			 // 處理附檔郵件
			$file_type  = "application/msword"; //filetype($attachment );
			$file_name = basename($attachment);			 
			$fp = fopen($attachment , "rb");  // 讀取附檔的內容
			$data = fread($fp, filesize($attachment ));
			 fclose($fp);
		}
		// 指定寄件者的郵件標頭
		$headers = "From: $from\nReply-To: $from\n";   
		//$headers = "From:" . $from . " <". $from .">\n\n";			
		// 是否有上傳檔案
 
     // 建立MIME的邊界字串
     $semi_rand = md5(time());
     $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
     // 新增附檔的郵件標頭
     $headers .= "MIME-Version: 1.0\n";
     $headers .= "Content-Type: multipart/mixed;\n";
     $headers .= " boundary=\"{$mime_boundary}\""; 
     // 新增郵件內容
     $backup = $message; 
     $msg  = "This is a multi-part message in MIME format.\n\n";
     $msg .= "--{$mime_boundary}\n";
     $msg .= "Content-Type: text/html; charset=\"UTF-8\"\n";
     $msg .= "Content-Transfer-Encoding: 8bit\n\n".$backup."\n\n";
		if ($attachment != "") {		 
				 // 替附檔資料加碼
				 $data = chunk_split(base64_encode($data));
				 // 新增附檔的郵件內容
				 $msg .= "--{$mime_boundary}\n";
				 $msg .= "Content-Type: {$file_type};\n";
				 $msg .= " name=\"{$file_name}\"\n";
				 $msg .= "Content-Transfer-Encoding: base64\n\n".$data ."\n\n";
				 $msg .= "--{$mime_boundary}--\n";		
		}	 
		if (mail($to, $subject, $msg, $headers ))
			 return true;
		else
			 echo false;
}
function pass($num){
    $return_string = '';
    $tmpstr = '0123456789abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ'; //密碼產生字元類別
    for ($i=0;$i<$num;$i++){
        $return_string .= $tmpstr{mt_rand(0,strlen($tmpstr)-1)};
    }
    return $return_string;
}
function inum($num){
    $return_string = '';
    $tmpstr = '0123456789'; //密碼產生字元類別
    for ($i=0;$i<$num;$i++){
        $return_string .= $tmpstr{mt_rand(0,strlen($tmpstr)-1)};
    }
    return $return_string;
}
function inum2($num){
    $return_string = '';
    $tmpstr = '123456789'; //密碼產生字元類別
    for ($i=0;$i<$num;$i++){
        $return_string .= $tmpstr{mt_rand(0,strlen($tmpstr)-1)};
    }
    return $return_string;
}
function zero_ftp($f_server,$f_user,$f_pass,$file_name,$file_temp,$site){
	$upload_file = $file_temp;
	$upload_name = $file_name;
	$local_file = $site.$upload_name;
	if($connect_id = ftp_connect($f_server)){
		echo "Create Connect<br>";
	}else{
		echo "Not Create Connect<br>";
	}
	if($login_result = ftp_login($connect_id,$f_user,$f_pass)){
		echo "Login Success<br>";
	}else{
		echo "Login Failed<br>";
	}

	if(!ftp_put($connect_id, $local_file, $upload_file, FTP_BINARY)){
		return false;
	
	}else{
		return true;
	}

	ftp_quit($connect_id);
}
function catch_word($string_word){
	$omi = addcslashes($string_word,"'");
	// $omi = str_replace("%","",$omi);
	// $omi = str_replace("mouseover","",$omi);
	$omi = str_replace("\"","",$omi);
	$omi = str_replace("(","",$omi);
	$omi = str_replace(")","",$omi);
	$omi = str_replace("%22","",$omi);
	$omi = str_replace("%27","",$omi);
	$omi = str_replace("%28","",$omi);
	$omi = str_replace("%29","",$omi);
	$omi = str_replace("%2522","",$omi);
	$omi = str_replace("%2527","",$omi);
	$omi = str_replace("%2528","",$omi);
	$omi = str_replace("%2529","",$omi);
	return $omi;
}
function catch_word2($string_word){
	$omi = str_replace("\'","",$string_word);
	return $omi;
}
function ctrl($user,$control){
	$admin = $user;
	$cont = explode(":",$control);
	$count = 0;
	for($i = 0; $i < sizeof($cont); $i++){
		if($admin == $cont[$i]){
			$count++;
		}
	}
	if($count > 0){
		return true;
	}else{
		return false;
	}
}
function auth_ctrl($user,$control){
	$admin = $user;
	$cont = explode(",",$control);
	$count = 0;
	for($i = 0; $i < sizeof($cont); $i++){
		if($admin == $cont[$i]){
			$count++;
		}
	}
	if($count > 0){
		return true;
	}else{
		return false;
	}
}

function Yahoo_auCateSearch($i)
{
	global $Y_a_appid;
	if($i == 0 or $i == ""){
		$toURL = "https://auctions.yahooapis.jp/AuctionWebService/V2/categoryTree?appid=".$Y_a_appid;
	}else{
		$toURL = "https://auctions.yahooapis.jp/AuctionWebService/V2/categoryTree?appid=".$Y_a_appid."&category=".$i;
	}
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	return $result;

}
function Yahoo_shCateSearch($i)
{
	global $Y_s_appid;
	if($i == 0 or $i == ""){
		$toURL = "https://shopping.yahooapis.jp/ShoppingWebService/V1/json/categorySearch?appid=".$Y_s_appid."&category_id=1";
	}else{
		$toURL = "https://shopping.yahooapis.jp/ShoppingWebService/V1/json/categorySearch?appid=".$Y_s_appid."&category_id=".$i;
	}
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	return $result;

}
function rakuten_shCateSearch($i)
{
	global $R_s_appid;
	if($i == 0 or $i == ""){
		$toURL = "https://app.rakuten.co.jp/services/api/IchibaGenre/Search/20140222?format=json&genreId=0&applicationId=".$R_s_appid;
	}else{
		$toURL = "https://app.rakuten.co.jp/services/api/IchibaGenre/Search/20140222?format=json&genreId=".$i."&applicationId=".$R_s_appid;
	}

	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	return $result;
}

function Yahoo_auList($cate = 0,$page,$sort,$store,$it_status,$buynow,$aucmin,$aucmax,$aucmin_bb,$aucmax_bb,$sell,$easypay,$new,$freeship,$wrap,$thumb,$attn,$point,$gift,$offer,$min_char,$max_char,$min_affi,$max_affi,$timebuf,$rank)
{
	global $Y_a_appid;
	$toURL = "https://auctions.yahooapis.jp/AuctionWebService/V2/categoryLeaf";
	$toURL.= "?appid=".$Y_a_appid."&category=".$cate;
	switch($sort){
		case "1" :
			$sort_th = rawurlencode("cbids");
			$order = "d";
			break;
		case "2" :
			$sort_th = rawurlencode("cbids");
			$order = "a";
			break;
		case "3" :
			$sort_th = rawurlencode("bidorbuy");
			$order = "d";
			break;
		case "4" :
			$sort_th = rawurlencode("bidorbuy");
			$order = "a";
			break;
		case "5" :
			$sort_th = rawurlencode("bids");
			$order = "a";
			break;
		case "6" :
			$sort_th = rawurlencode("bids");
			$order = "d";
			break;
		case "7" :
			$sort_th = rawurlencode("end");
			$order = "d";
			break;
		case "8" :
			$sort_th = rawurlencode("end");
			$order = "a";
			break;
		case "9" :
			$sort_th = rawurlencode("affiliate");
			$order = "a";
		case "10" :
			$sort_th = rawurlencode("affiliate");
			$order = "d";
		default :
			$sort_th = rawurlencode("cbids");
			$order = "d";
	}
	if($page != "") $toURL.= "&page=".$page;
	if($sort != "") $toURL.= "&sort=".$sort_th;
	if($order != "") $toURL.= "&order=".$order;
	if($store != "") $toURL.= "&store=".$page;
	if($aucmin != "") $toURL.= "&aucminprice=".$aucmin;
	if($aucmax != "") $toURL.= "&aucmaxprice=".$aucmax;
	if($aucmin_bb != "") $toURL.= "&aucmin_bidorbuy_price=".$aucmin_bb;
	if($aucmax_bb != "") $toURL.= "&aucmax_bidorbuy_price=".$aucmax_bb;
	if($sell != "") $toURL.= "&seller=".$sell;
	if($easypay != "") $toURL.= "&easypayment=".$easypay;
	if($new != "") $toURL.= "&new=".$new;
	if($freeship != "") $toURL.= "&freeshipping=".$freeship;
	if($wrap != "") $toURL.= "&wrappingicon=".$wrap;
	if($buynow != "") $toURL.= "&buynow=".$buynow;
	if($thumb != "") $toURL.= "&thumbnail=".$thumb;
	if($attn != "") $toURL.= "&attn=".$attn;
	if($point != "") $toURL.= "&point=".$point;
	if($gift != "") $toURL.= "&gift_icon=".$gift;
	if($it_status != "") $toURL.= "&item_status=".$it_status;
	if($offer != "") $toURL.= "&offer=".$offer;
	if($min_char != "") $toURL.= "&min_charity=".$min_char;
	if($max_char != "") $toURL.= "&max_charity=".$max_char;
	if($min_affi != "") $toURL.= "&min_affiliate=".$min_affi;
	if($max_affi != "") $toURL.= "&max_affiliate=".$max_affi;
	if($timebuf != "") $toURL.= "&timebuf=".$timebuf;
	if($rank != "") $toURL.= "&ranking=".$rank;
	
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	return $result;

}
function Rakuten_shList($cate = 0,$page = 1,$sort = 1,$keyword,$shopCode,$itemCode,$tagid = null,$minPrice = null,$maxPrice = null,$availability = 1,$field = 1,$carrier = 0,$imageflag = 0,$orflag = 0)
{
	switch($sort){
		case "1" :
			$sort_th = rawurlencode("-reviewAverage");
			break;
		case "2" :
			$sort_th = rawurlencode("-reviewCount");
			break;
		case "3" :
			$sort_th = rawurlencode("-updateTimestamp");
			break;
		case "4" :
			$sort_th = rawurlencode("-itemPrice");
			break;
		case "5" :
			$sort_th = rawurlencode("+itemPrice");
			break;
		default :
			$sort_th = rawurlencode("-reviewAverage");
	}
	global $R_s_appid;
	$toURL = "https://app.rakuten.co.jp/services/api/IchibaItem/Search/20170706";
	$toURL.= "?applicationId=".$R_s_appid."&format=json&genreId=".$cate."&hits=20";
	if($page != "") $toURL.= "&page=".$page;
	if($sort != "") $toURL.= "&sort=".$sort_th;
	if($keyword != "") $toURL.= "&keyword=".$keyword;
	if($shopCode != "") $toURL.= "&shopCode=".$shopCode;
	if($itemCode != "") $toURL.= "&itemCode=".$itemCode;
	if($tagid != "") $toURL.= "&tagId=".$tagid;
	if($minPrice != "") $toURL.= "&minPrice=".$minPrice;
	if($maxPrice != "") $toURL.= "&maxPrice=".$maxPrice;
	if($availavility != "") $toURL.= "&availability=".$availability;
	if($field != "") $toURL.= "&field=".$field;
	if($carrier != "") $toURL.= "&carrier=".$carrier;
	if($imageflag != "") $toURL.= "&imageFlag=".$imageFlag;
	if($orflag != "") $toURL.= "&orflag=".$orflag;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	return $result;
}
function Yahoo_shList($cate = 1,$page = 0,$sort = 1,$query,$store_id,$type,$image_size = 132,$prod_id,$pers_id,$brand_id,$price_from,$price_to,$condition = 'all')
{
	switch($sort){
		case "1" :
			$sort_th = rawurlencode("-score");
			break;
		case "2" :
			$sort_th = rawurlencode("-review_count");
			break;
		case "3" :
			$sort_th = rawurlencode("-sold");
			break;
		case "4" :
			$sort_th = rawurlencode("-price");
			break;
		case "5" :
			$sort_th = rawurlencode("+price");
			break;
		default :
			$sort_th = rawurlencode("-score");
	}
	global $Y_s_appid;
	$hits = 20;
	if(intval($page) > 49) $page = 49; else $page = intval($page);
	// $toURL = "https://shopping.yahooapis.jp/ShoppingWebService/V1/itemSearch";
	$toURL = "https://shopping.yahooapis.jp/ShoppingWebService/V3/itemSearch";
	// $toURL.= "?appid=".$Y_s_appid."&genre_category_id=".$cate;
	$toURL.= "?appid=".$Y_s_appid."&genre_category_id=".$cate."&results=".$hits."&start=".($page*$hits);
	if($sort != "") $toURL.= "&sort=".$sort_th;
	if($query != "") $toURL.= "&query=".$query;
	// if($type != "") $toURL.= "&type=".$type;
	// if($prod_id != "") $toURL.= "&product_id=".$prod_id;
	// if($pers_id != "") $toURL.= "&person_id=".$pers_id;
	// if($brand_id != "") $toURL.= "&brand_id=".$brand_id;
	if($store_id != "") $toURL.= "&seller_id=".$store_id;
	if($price_from != "") $toURL.= "&price_from=".$price_form;
	if($price_to != "") $toURL.= "&price_to=".$price_to;
	// if($condition != "") $toURL.= "&condition=".$condition;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	return $result;

}
function Yahoo_auProd($id)
{
	global $Y_a_appid;
	$toURL = "https://auctions.yahooapis.jp/AuctionWebService/V2/auctionItem";
	$toURL.= "?appid=".$Y_a_appid."&auctionID=".$id;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	return $result;

}
function Yahoo_shProd($id)
{
	global $Y_s_appid;
	$toURL = "https://shopping.yahooapis.jp/ShoppingWebService/V1/itemLookup";
	$toURL.= "?appid=".$Y_s_appid."&itemcode=".$id."&image_size=600&responsegroup=large";
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	return $result;

}
function Rakuten_shProd($id)
{
	global $R_s_appid;
	$toURL = "https://app.rakuten.co.jp/services/api/IchibaTag/Search/20140222";
	$toURL.= "?applicationId=".$R_s_appid."&tagId=".$id;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	return $result;

}
function Rakuten_spec($url)
{
	global $R_s_appid;
	$toURL = $url;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
		CURLOPT_ENCODING=>"gzip,deflate",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	return $result;

}
function Rakuten_spec2($url){
	global $R_s_appid;
	$UserAgent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; .NET CLR 3.5.21022; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
	$curl = curl_init();	//建立一個新的CURL資源
	curl_setopt($curl, CURLOPT_URL, $url);	//設定URL和相應的選項
	curl_setopt($curl, CURLOPT_HEADER, 0);  //0表示不輸出Header，1表示輸出
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);	//設定是否顯示頭資訊,1顯示，0不顯示。
	//如果成功只將結果返回，不自動輸出任何內容。如果失敗返回FALSE

	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($curl, CURLOPT_ENCODING, '');	//設定編碼格式，為空表示支援所有格式的編碼
	//header中“Accept-Encoding: ”部分的內容，支援的編碼格式為："identity"，"deflate"，"gzip"。

	curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
	//設定這個選項為一個非零值(象 “Location: “)的頭，伺服器會把它當做HTTP頭的一部分發送(注意這是遞迴的，PHP將傳送形如 “Location: “的頭)。

	$data = curl_exec($curl); 
	//echo curl_errno($curl); //返回0時表示程式執行成功
	curl_close($curl);	//關閉cURL資源，並釋放系統資源

	return $data;
}
function Yahoo_auRating($url)
{
	global $Y_a_appid;
	$toURL = $url;
	$toURL.= "&appid=".$Y_a_appid;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	return $result;

}
function Yahoo_auItemList($url)
{
	global $Y_a_appid;
	$toURL = $url;
	$toURL.= "&appid=".$Y_a_appid;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	return $result;

}
function Yahoo_auScript($url)
{
	global $Y_a_appid;
	$toURL = $url;
	// $toURL.= "&appid=".$Y_a_appid;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	$script = explode("<div class=\"ProductExplanation__commentBody js-disabledContextMenu\">",$result);
	$script_cont = explode("</div>",$script[1]);
	return $script_cont[0];

}
function Yahoo_auScriptEnd($url)
{
	global $Y_a_appid;
	$toURL = $url;
	// $toURL.= "&appid=".$Y_a_appid;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	$script = explode("<div id=\"acMdUsrPrv\" class=\"modUsrPrv highlightWordSearch\">",$result);
	$script_cont = explode("</div>",$script[1]);
	return $script_cont[0];

}
function Yahoo_auBidHistory($id)
{
	global $Y_a_appid;
	$toURL = "https://auctions.yahooapis.jp/AuctionWebService/V1/BidHistory";
	$toURL.= "?appid=".$Y_a_appid."&auctionID=".$id;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	return $result;

}
function Yahoo_auSearch($cate = 0,$page,$sort,$query,$store,$it_status,$buynow,$aucmin,$aucmax,$aucmin_bb,$aucmax_bb,$sell,$easypay,$new,$freeship,$wrap,$thumb,$attn,$point,$gift,$offer,$min_char,$max_char,$min_affi,$max_affi,$timebuf,$rank)
{
	global $Y_a_appid;
	$toURL = "https://auctions.yahooapis.jp/AuctionWebService/V2/search";
	$toURL.= "?appid=".$Y_a_appid."&category=".$cate;
	switch($sort){
		case "1" :
			$sort_th = rawurlencode("cbids");
			$order = "d";
			break;
		case "2" :
			$sort_th = rawurlencode("cbids");
			$order = "a";
			break;
		case "3" :
			$sort_th = rawurlencode("bidorbuy");
			$order = "d";
			break;
		case "4" :
			$sort_th = rawurlencode("bidorbuy");
			$order = "a";
			break;
		case "5" :
			$sort_th = rawurlencode("bids");
			$order = "a";
			break;
		case "6" :
			$sort_th = rawurlencode("bids");
			$order = "d";
			break;
		case "7" :
			$sort_th = rawurlencode("end");
			$order = "d";
			break;
		case "8" :
			$sort_th = rawurlencode("end");
			$order = "a";
			break;
		case "9" :
			$sort_th = rawurlencode("affiliate");
			$order = "a";
		case "10" :
			$sort_th = rawurlencode("affiliate");
			$order = "d";
		default :
			$sort_th = rawurlencode("cbids");
			$order = "d";
	}
	if($page != "") $toURL.= "&page=".$page;
	if($sort != "") $toURL.= "&sort=".$sort_th;
	if($query != "") $toURL.= "&query=".$query;
	if($order != "") $toURL.= "&order=".$order;
	if($store != "") $toURL.= "&store=".$page;
	if($it_status != "") $toURL.= "&item_status=".$it_status;
	if($buynow != "") $toURL.= "&buynow=".$buynow;
	if($aucmin != "") $toURL.= "&aucminprice=".$aucmin;
	if($aucmax != "") $toURL.= "&aucmaxprice=".$aucmax;
	if($aucmin_bb != "") $toURL.= "&aucmin_bidorbuy_price=".$aucmin_bb;
	if($aucmax_bb != "") $toURL.= "&aucmax_bidorbuy_price=".$aucmax_bb;
	if($sell != "") $toURL.= "&seller=".$sell;
	if($easypay != "") $toURL.= "&easypayment=".$easypay;
	if($new != "") $toURL.= "&new=".$new;
	if($freeship != "") $toURL.= "&freeshipping=".$freeship;
	if($wrap != "") $toURL.= "&wrappingicon=".$wrap;
	
	if($thumb != "") $toURL.= "&thumbnail=".$thumb;
	if($attn != "") $toURL.= "&attn=".$attn;
	if($point != "") $toURL.= "&point=".$point;
	if($gift != "") $toURL.= "&gift_icon=".$gift;
	if($offer != "") $toURL.= "&offer=".$offer;
	if($min_char != "") $toURL.= "&min_charity=".$min_char;
	if($max_char != "") $toURL.= "&max_charity=".$max_char;
	if($min_affi != "") $toURL.= "&min_affiliate=".$min_affi;
	if($max_affi != "") $toURL.= "&max_affiliate=".$max_affi;
	if($timebuf != "") $toURL.= "&timebuf=".$timebuf;
	if($rank != "") $toURL.= "&ranking=".$rank;
	
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	return $result;
}
function Yahoo_spec($url)
{
	global $Y_s_appid;
	$toURL = $url;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
		CURLOPT_ENCODING=>"gzip,deflate",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	return $result;

}
function BankcheckCode($id)
{
	$m = 0;
	$c = 1;
	$aryId = str_split($id);
	for($i = (sizeof($aryId) - 1); $i >= 0; $i--){
		$m+= $aryId[$i]*$c;
		$c++;
		if($c == 10){
			$c = 1;
		}
	}
	$x = str_split($m);
	$an = sizeof($x) - 1;
	$mr = $x[$an];
	return $mr;
}
function TransJtoZhTW($word)
{
	$url = "http://tw.xyzdict.com/chinese-japanese/".$word;
	$toURL = $url;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
		CURLOPT_ENCODING=>"gzip,deflate",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	$first = explode("<div class=\"panel panel-default translator\"  trans=\"gg\">",$result);
	$second = explode("<div class=\"panel-body result\">",$first[1]);
	$third = explode("</div>",$second[1]);
	$name = $third[0];
	return $name;
}
function TransZhTWtoJ($word)
{
	$url = "http://tw.xyzdict.com/japanese-chinese/".$word;
	$toURL = $url;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
		CURLOPT_ENCODING=>"gzip,deflate",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	$first = explode("<div class=\"panel panel-default translator\"  trans=\"gg\">",$result);
	$second = explode("<div class=\"panel-body result\">",$first[1]);
	$third = explode("</div>",$second[1]);
	$name = $third[0];
	return $name;
}
function attent($content){
	global $host;
	global $dbUser;
	global $dbPass;
	global $dbName;
	$mysql = new MySQL($host,$dbUser,$dbPass,$dbName);
	
	$sqlx = "select * from attention where publish = 'Y'";
	$resultx = $mysql->query($sqlx);
	$x = 0;
	while($rowx = $resultx->fetch()){
		$checkName = explode(",",$rowx["name"]);
		$an = 0;
		for($i = 0; $i < sizeof($checkName); $i++){
			if(substr_count($content,$checkName[$i]) > 0){
				$an++;
			}
		}
		if($an > 0){
			$attent[$x] = $rowx["content"];
			$x++;
		}
	}
	return $attent;
}
function attentPop($content){
	global $host;
	global $dbUser;
	global $dbPass;
	global $dbName;
	$mysql = new MySQL($host,$dbUser,$dbPass,$dbName);
	
	$sqlx = "select * from attention where publish = 'Y' and pop = 1";
	$resultx = $mysql->query($sqlx);
	$x = 0;
	$attent = "";
	while($rowx = $resultx->fetch()){
		$checkName = explode(",",$rowx["name"]);
		$an = 0;
		for($i = 0; $i < sizeof($checkName); $i++){
			if(substr_count($content,$checkName[$i]) > 0){
				$an++;
			}
		}
		if($an > 0){
			$attent[$x] = $rowx["content"];
			$x++;
		}
	}
	return $attent;
}
function attentP($content){
	global $host;
	global $dbUser;
	global $dbPass;
	global $dbName;
	$mysql = new MySQL($host,$dbUser,$dbPass,$dbName);
	
	$sqlx = "select * from attention where publish = 'Y'";
	$resultx = $mysql->query($sqlx);
	$x = 0;
	$y = 0;
	while($rowx = $resultx->fetch()){
		$checkName = explode(",",$rowx["name"]);
		$an = 0;
		for($i = 0; $i < sizeof($checkName); $i++){
			if(substr_count($content,$checkName[$i]) > 0){
				$an++;
			}
		}
		if($an > 0){
			$attent[0][$x] = $rowx["content"];
			$x++;
			if($rowx["pop"] == 1){
				$attent[1][$y] = $rowx["content"];
				$y++;
			}
		}
	}
	return $attent;
}
function attentCate($content,$id){
	global $host;
	global $dbUser;
	global $dbPass;
	global $dbName;
	$mysql = new MySQL($host,$dbUser,$dbPass,$dbName);
	
	$sqlx = "select * from attention where publish = 'Y' and id = ".$id;
	$resultx = $mysql->query($sqlx);
	$x = 0;
	while($rowx = $resultx->fetch()){
		$checkName = explode(",",$rowx["name"]);
		$an = 0;
		for($i = 0; $i < sizeof($checkName); $i++){
			if(substr_count($content,$checkName[$i]) > 0){
				$an++;
			}
		}
		if($an > 0){
			$attent[$x] = $rowx["content"];
			$x++;
		}
	}
	if($x > 0){
		return true;
	}else{
		return false;
	}
}
function frameUrl($url,$myUrl)
{
	$toURL = $url;
	$link = $myhome;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	return mb_convert_encoding($result,"Utf-8","EUC-JP");

}
function transCate($cateNo){
	global $host;
	global $dbUser;
	global $dbPass;
	global $dbName;
	$mysql = new MySQL($host,$dbUser,$dbPass,$dbName);
	
	$sql = "select Count(id) as num from cateTrans where cateNo = '".$cateNo."' and publish = 1";
	$result = $mysql->query($sql);
	$row = $result->fetch();
	if($row["num"] > 0){
		return true;
	}else{
		return false;
	}
}
function transCateName($cateNo){
	global $host;
	global $dbUser;
	global $dbPass;
	global $dbName;
	$mysql = new MySQL($host,$dbUser,$dbPass,$dbName);
	
	$sql = "select * from cateTrans where cateNo = '".$cateNo."' and publish = 1";
	$result = $mysql->query($sql);
	$row = $result->fetch();
	return $row["name"];
}
function transYandex($name){
	$toURL = "https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20171211T040426Z.aa08e2ac57d625db.7bdb35611b0b44d96f8fbc15455167bcc3ab0b7d&text=".rawurlencode($name)."&lang=ja-zh";
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	$itemData = json_decode($result);
	return $itemData->text[0];
}
function transYandexJ($name){
	$toURL = "https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20171211T040426Z.aa08e2ac57d625db.7bdb35611b0b44d96f8fbc15455167bcc3ab0b7d&text=".rawurlencode($name)."&lang=zh-ja";
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	$itemData = json_decode($result);
	return $itemData->text[0];
}
function stoz($name){
	
	$toURL = "http://convert.cdict.info/g2btext.php";
	$post = array(
			"textbody"=>$name,
	);
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
		CURLOPT_POST=>true,
		CURLOPT_POSTFIELDS=>http_build_query($post),
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	$nameL = explode("<textarea class=\"inputc\" id=\"textall\" readonly=\"readonly\">",$result);
	$name = explode("</textarea>",$nameL[1]);
	return $name[0];
}
function transCate2($cateNo){
	global $host;
	global $dbUser;
	global $dbPass;
	global $dbName;
	$mysql = new MySQL($host,$dbUser,$dbPass,$dbName);
	
	$sql = "select Count(id) as num from cateTransName where cateName = '".$cateNo."' and publish = 1";
	$result = $mysql->query($sql);
	$row = $result->fetch();
	if($row["num"] > 0){
		return true;
	}else{
		return false;
	}
}
function transCateName2($cateNo){
	global $host;
	global $dbUser;
	global $dbPass;
	global $dbName;
	$mysql = new MySQL($host,$dbUser,$dbPass,$dbName);
	
	$sql = "select * from cateTransName where cateName = '".$cateNo."' and publish = 1";
	$result = $mysql->query($sql);
	$row = $result->fetch();
	return $row["name"];
}
function iframeGet($url,$myUrl)
{
	$toURL = $url;
	$cookie_txt = "../../cookie_yahoo6.txt";
	$link = $myhome;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_COOKIEFILE=>$cookie_txt,
		CURLOPT_COOKIEJAR=>$cookie_txt,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	return $result;
}
function telegram($name){
	$toURL = "https://api.telegram.org/bot630012047:AAHp_xxJwBcEBIYwYioujoL2Cx_eCV12s84/sendMessage?chat_id=-1001361443240&text=".$name;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
}
function telegramAccount($name){
	$toURL = "https://api.telegram.org/bot630012047:AAHp_xxJwBcEBIYwYioujoL2Cx_eCV12s84/sendMessage?chat_id=-1001314927816&text=".$name;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
}
function telegramRakuma($name){
	$toURL = "https://api.telegram.org/bot630012047:AAHp_xxJwBcEBIYwYioujoL2Cx_eCV12s84/sendMessage?chat_id=-1001471174059&text=".$name;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
}
function telegramAlert($name){
	$toURL = "https://api.telegram.org/bot630012047:AAHp_xxJwBcEBIYwYioujoL2Cx_eCV12s84/sendMessage?chat_id=-1001167103770&text=".$name;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
}
function telegramOffer($name){
	$toURL = "https://api.telegram.org/bot630012047:AAHp_xxJwBcEBIYwYioujoL2Cx_eCV12s84/sendMessage?chat_id=-1001283169041&text=".$name;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
}
function telegramSelf($name){
	$toURL = "https://api.telegram.org/bot630012047:AAHp_xxJwBcEBIYwYioujoL2Cx_eCV12s84/sendMessage?chat_id=-1001452620102&text=".$name;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
}
function bankCheckTel($name){
	$toURL = "https://api.telegram.org/bot630012047:AAHp_xxJwBcEBIYwYioujoL2Cx_eCV12s84/sendMessage?chat_id=-1001415992934&text=".$name;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
}
function check_mobile(){
    $regex_match="/(nokia|iphone|android|motorola|^mot\-|softbank|foma|docomo|kddi|up\.browser|up\.link|";
    $regex_match.="htc|dopod|blazer|netfront|helio|hosin|huawei|novarra|CoolPad|webos|techfaith|palmsource|";
    $regex_match.="blackberry|alcatel|amoi|ktouch|nexian|samsung|^sam\-|s[cg]h|^lge|ericsson|philips|sagem|wellcom|bunjalloo|maui|";
    $regex_match.="symbian|smartphone|midp|wap|phone|windows ce|iemobile|^spice|^bird|^zte\-|longcos|pantech|gionee|^sie\-|portalmmm|";   
    $regex_match.="jig\s browser|hiptop|^ucweb|^benq|haier|^lct|opera\s*mobi|opera\*mini|320x320|240x320|176x220";
    $regex_match.=")/i";
    return preg_match($regex_match, strtolower($_SERVER['HTTP_USER_AGENT']));
}
function discountDay($total,$money,$url){
	global $host;
	global $dbUser;
	global $dbPass;
	global $dbName;
	$mysql = new MySQL($host,$dbUser,$dbPass,$dbName);
	
	$sqlDisc = "select * from service_discount where begin_date <= '".date("Y-m-d")."' and end_date >= '".date("Y-m-d")."'";
	$resultDisc = $mysql->query($sqlDisc);
	$rowDisc = $resultDisc->fetch();
	// echo $rowDisc["url"];
	// echo "<br>".$rowDisc["price"];
	if($resultDisc->size() > 0){
		$str = explode(";",$rowDisc["url"]);
		$disc = 0;
		for($i = 0; $i < sizeof($str); $i++){
			// echo $str[$i]."<br>";
			if(substr_count($url,$str[$i]) > 0){
				$disc++;
			}
		}
		if($disc > 0){
			$total+= $money;
		}
		return $total;
	}else{
		return 0;
	}
}
function getMetaOfWebAuction($html=NULL){
    if(is_null($html))
    {
        return NULL;
    }
    if(strlen($html)!=0)
    {
        $ret = array();

        $metapattern = '/<meta[^>]*?>/is';
        $kvpattern = '/([\w\-]+)=[\"\']?([^\s]+)["\']?/is';
		$kvpattern2 = '/([\w\-]+)=[\"\']?([^"]+)["\']?/is';
		// echo $kvpattern;
        preg_match_all($metapattern, $html, $matches);
        if(!empty($matches))
        {
            $meta = $matches[0];
            foreach ($meta as $key => $value) {
                $value = preg_replace('/<meta\s+/is', "", $value);
                $value = rtrim($value,'/>');
                $value =trim($value);
				// echo $value."<br>";
                //替換;+空格
                // $repattern = '/;\s+/is';
				// $repattern = '/;+/is';
                // $value = preg_replace($repattern, ';', $value);

                preg_match_all($kvpattern2, $value, $kvmatches);
                if(!empty($kvmatches))
                {
                    $type = (int)count($kvmatches[0]);
					
                    switch ($type) {
                        case 1://meta裡面只有一條語句 <meta charset=UTF-8>
                            $metakey = rtrim($kvmatches[1][0],"\"'");
                            $metakey    =   ltrim($metakey,"\"'");
                            $metavalue = rtrim($kvmatches[2][0],"\"'");
							// echo $metavalue."<br>";
                            $metavalue  =   ltrim($metavalue,"\"'");
                            $ret[$metakey]  =   $metavalue;
							// echo $metavalue."<br>";
                            break;
                        case 2://meta裡面是引數名稱/引數值的方式
                            $metakey = rtrim($kvmatches[2][0],"\"'");
                            $metakey    =   ltrim($metakey,"\"'");
                            $metavalue = rtrim($kvmatches[2][1],"\"'");
							// echo $kvmatches[2][1]."<br>";
                            $metavalue  =   ltrim($metavalue,"\"'");
                            $ret[$metakey]  =   $metavalue;
							// echo $metavalue."<br>";
                            break;
                        case 3://meta裡面;+空格<meta http-equiv=mobile-agent content="format=wml;url=http://m.qidian.com
                            $metakey = rtrim($kvmatches[2][0],"\"'");
                            $metakey    =   ltrim($metakey,"\"'");
                            $tmp = rtrim($kvmatches[2][1],"\"'");
                            $tmp = ltrim($tmp,"\"'");
                            $tmp2 = rtrim($kvmatches[2][2],"\"'");
                            $tmp2 = ltrim($tmp2,"\"'");
							// echo $tmp2;
                            $metavalue  =   $tmp.$tmp2;
                            $ret[$metakey]  =   $metavalue;
                            break;
                    }
					// echo rtrim($kvmatches[2][1],"\"'");
                }
            }
            return $ret;
        }
        return NULL;
    }
}
function getWebMetaAuction($url){
	// $url="https://item.mercari.com/jp/m35118945420/";
	$UserAgent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; .NET CLR 3.5.21022; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
	$curl = curl_init();	//建立一個新的CURL資源
	curl_setopt($curl, CURLOPT_URL, $url);	//設定URL和相應的選項
	curl_setopt($curl, CURLOPT_HEADER, 0);  //0表示不輸出Header，1表示輸出
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);	//設定是否顯示頭資訊,1顯示，0不顯示。
	//如果成功只將結果返回，不自動輸出任何內容。如果失敗返回FALSE

	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($curl, CURLOPT_ENCODING, '');	//設定編碼格式，為空表示支援所有格式的編碼
	//header中“Accept-Encoding: ”部分的內容，支援的編碼格式為："identity"，"deflate"，"gzip"。

	curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
	//設定這個選項為一個非零值(象 “Location: “)的頭，伺服器會把它當做HTTP頭的一部分發送(注意這是遞迴的，PHP將傳送形如 “Location: “的頭)。

	$data = curl_exec($curl); 
	// echo $data;
	//echo curl_errno($curl); //返回0時表示程式執行成功
	curl_close($curl);	//關閉cURL資源，並釋放系統資源

	$aryMeta = getMetaOfWebAuction($data);
	// print_r($aryMeta);
	// $sell = explode("<th>出品者</th>",$data);
	// $sell1 = explode("<div>",$sell[1]);
	// $sell_url = str_replace("<td>",$sell1[0]);
	// $sell_id = trim(catch_word($sell_url));
	// $aryMeta["sell_id"] = $sell_id;
	//商品金額
	// if(substr_count($url,"item.mercari.com") > 0){
		// return $aryMeta["twitter:data1"];
	// }elseif(substr_count($url,"fril.jp") > 0){
		// return "¥ ".$aryMeta["product:price:amount"];
	// }else{
		// return $aryMeta["twitter:data1"];
	// }
	//商品圖片
	// echo "<img src=\"".$aryMeta["og:image"]."\" width=\"60\">";
	return $aryMeta["og:description"];
}
function storePrint($code){
	// $code = $code;
	$toURL = "https://epayment.7-11.com.tw/C2C/C2CWeb/MultiplePrintC2CPinCode.aspx";
	$post = array(
			"eshopid"=> "851",
			"PinCodes"=> $code,
			"tempvar"=> "",
			"BackTag"=> "https://tokukai.com/Admin/closeWin.php",
			"member_pwd"=> "851presco"
	);
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
		CURLOPT_POST=>true,
		CURLOPT_POSTFIELDS=>http_build_query($post),
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch); 
	curl_close($ch);
	$nameArray = explode("<div class=\"div_frame\">",$result);
	$codeArray = "";
	$j = 0;
	// $contentArray = "";
	for($i = 1; $i < sizeof($nameArray); $i++){
		$content = explode("</div>",$nameArray[$i]);
		$k = $i - 1;
		$contentArray[$k] = $content[0];
		// $j++;
	}
	return $contentArray;
	// return $result;
}
function stored($id){
	global $host;
	global $dbUser;
	global $dbPass;
	global $dbName;
	$mysql = new MySQL($host,$dbUser,$dbPass,$dbName);
	$sql = "select * from storedList where storedName = '".$id."'";
	$result = $mysql->query($sql);
	if($result->size() > 0){
		$x = 1;
	}else{
		$x = 0;
	}
	return $x;
}
?>
