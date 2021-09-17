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
	if($page > 1){ echo "<font size=2><a href='".$site."?".$during_k."key=".$key_word."&".$date_to_k."search=".$search."&".$date_from_k."page=".$up."'>".Page_01."</a>&nbsp;&nbsp;&nbsp;</font>"; }
	for($i=$start;$i<=$end;$i++){

		if($i == $page){ echo "<b>"; }
		echo "<a href='".$site."?".$during_k."key=".$key_word."&".$date_to_k."search=".$search."&".$date_from_k."page=".$i."'>".$i."</a>&nbsp&nbsp"; 
		if($i == $page){ echo "</b>"; }

	}
	$down = $page+1;
	if($down <= $total_page_num){ echo "<font size=2>&nbsp;&nbsp;&nbsp;<a href='".$site."?".$during_k."key=".$key_word."&".$date_to_k."search=".$search."&".$date_from_k."page=".$down."'>".Page_02."</a></font>"; }
	$total_p = intval($total_page_num);
	echo "</font><font size=\"2\">　　　".Page_03.":  </font><font color=\"#FF0000\">".$total_p."</font></p>";	
}

//群組權限
function group($host,$dbUser,$dbPass,$dbName,$position,$control){
	$mysql = &new MySQL($host,$dbUser,$dbPass,$dbName);
	$sql = "select ".$control." from pass_group where id = ".$position;
	$result = $mysql->query($sql);
	$Row = $result->fetch();
	if($Row["$control"] == 'Y'){
		return true;
	}else{
		return false;
	}
}

//帳號檢查
function control($host,$dbUser,$dbPass,$dbName,$session){
	$person = $session->get("person");
	$mysql = &new MySQL($host,$dbUser,$dbPass,$dbName);
	if($_POST["user_name"]){
		$sql = "select * from pass_account where user_name = '".$_POST["user_name"]."'";
		$result = $mysql->query($sql);
		$row = $result->fetch();
		if($row){
			if(($row["password"] == md5($_POST["password"])) && ($row["passing"] == "Y" or $row["accept"] == "Y" or $row["cus_passing"] == "Y" or $row["cus_gb_passing"] == "Y" or $row["col_passing"] == "Y")){
				$session->set("person",$row);
			}else{
				header("Location:https://www.zeroplus.com.tw/_ze_acc/login.php");
			}
		}else{
			header("Location:https://www.zeroplus.com.tw/_ze_acc/login.php");
		}
	}elseif($person["user_name"] != ""){
		//$person = $session->get("person");
		$sql = "select * from pass_account where user_name = '".$person["user_name"]."'";
		$result = $mysql->query($sql);
		$row = $result->fetch();
		if($row){
			if(($row["password"] == $person["password"]) && ($row["passing"] == "Y" or $row["accept"] == "Y" or $row["cus_passing"] == "Y" or $row["cus_gb_passing"] == "Y" or $row["col_passing"] == "Y")){
				$person = $row;
				$session->set("person",$person);
			}else{
				header("Location:https://www.zeroplus.com.tw/_ze_acc/login.php");
			}
		}else{
			header("Location:https://www.zeroplus.com.tw/_ze_acc/login.php");
		}
	}else{
		header("Location:https://www.zeroplus.com.tw/_ze_acc/login.php");
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

function check_Day_class($num){
	$slot = $num;
	switch($slot){
		case "00" :
			return 24;
			break;
		case "01" :
			return 1;
			break;
		case "02" :
			return 2;
			break;
		case "03" :
			return 3;
			break;
		case "04" :
			return 4;
			break;
		case "05" :
			return 5;
			break;
		case "06" :
			return 6;
			break;
		case "07" :
			return 7;
			break;
		case "08" :
			return 8;
			break;
		case "09" :
			return 9;
			break;
		case "10" :
			return 10;
			break;
		case "11" :
			return 11;
			break;
		case "12" :
			return 12;
			break;
		case "13" :
			return 13;
			break;
		case "14" :
			return 14;
			break;
		case "15" :
			return 15;
			break;
		case "16" :
			return 16;
			break;
		case "17" :
			return 17;
			break;
		case "18" :
			return 18;
			break;
		case "19" :
			return 19;
			break;
		case "20" :
			return 20;
			break;
		case "21" :
			return 21;
			break;
		case "22" :
			return 22;
			break;
		case "23" :
			return 23;
			break;
		case "24" :
			return 24;
			break;
		default :
			return 0;
			break;
	}
}
function check_Day_class_dis($num){
	$slot = $num;
	switch($slot){
		case "1" :
			return "01:00～02:00";
			break;
		case "2" :
			return "02:00～03:00";
			break;
		case "3" :
			return "03:00～04:00";
			break;
		case "4" :
			return "04:00～05:00";
			break;
		case "5" :
			return "05:00～06:00";
			break;
		case "6" :
			return "06:00～07:00";
			break;
		case "7" :
			return "07:00～08:00";
			break;
		case "8" :
			return "08:00～09:00";
			break;
		case "9" :
			return "09:00～10:00";
			break;
		case "10" :
			return "10:00～11:00";
			break;
		case "11" :
			return "11:00～12:00";
			break;
		case "12" :
			return "12:00～13:00";
			break;
		case "13" :
			return "13:00～14:00";
			break;
		case "14" :
			return "14:00～15:00";
			break;
		case "15" :
			return "15:00～16:00";
			break;
		case "16" :
			return "16:00～17:00";
			break;
		case "17" :
			return "17:00～18:00";
			break;
		case "18" :
			return "18:00～19:00";
			break;
		case "19" :
			return "19:00～20:00";
			break;
		case "20" :
			return "20:00～21:00";
			break;
		case "21" :
			return "21:00～22:00";
			break;
		case "22" :
			return "22:00～23:00";
			break;
		case "23" :
			return "23:00～24:00";
			break;
		case "24" :
			return "24:00～01:00";
			break;
		default :
			return "";
			break;
	}
}
function doc_list($top,$type,$level=0,$ctrl,$uhead){
	global $host;
	global $dbUser;
	global $dbPass;
	global $dbName;
	global $doc_id;
	global $val;
	global $w;
	$mysql = &new MySQL($host,$dbUser,$dbPass,$dbName);
	$table = "depart";
	$sql = "select * from ".$table." where forward_dep = ".$top." order by area,depart_name";
	$result = $mysql->query($sql);
	$r = $level;
	if($result->size() != 0){
		while($row = $result->fetch()){
			if($type == 1){
				$head = "";
				if($row["forward_dep"] == 0){ $r = 0;$level = 0;}
				for($i = 0; $i < $r; $i++){
					$head.= "　";
				}
				if($uhead == 2){
					echo "<option value=\"".$row["path"]."\"";
					if($doc_id == $row["path"]) echo " selected";
				}else{
					echo "<option value=\"".$row["id"]."\"";
					if($doc_id == $row["id"]) echo " selected";
				}
				echo ">".$head.$row["depart_name"]."</option>";
			}elseif($type == 0){
				echo "d.add(".$row["id"].",".$top.",'".$row["depart_name"]."','";
				if($ctrl == 1){	
					echo "javascript:getData(\'./update/update_pass-depart.php?a=".$row["id"]."&\',\'showDiv\')";
				}
				echo "','".$row["path"]."','','images/folder.gif','images/imgfolder.gif');";
				if($ctrl == 2){
					$sqlm = "select * from pass_account where depart_group = ".$row["id"]." and passing = 'Y'";
					$resultm = $mysql->query($sqlm);
					while($rowm = $resultm->fetch()){
						echo "d.add(1000".$rowm["id"].",".$row["id"].",'".$rowm["real_name"]."&nbsp;分機:".$rowm["ext"]."&nbsp;手機:".$rowm["mobile"]."','mailto:".$rowm["email"]."','".$rowm["email"]."');";
					}
				}
			}elseif($type == 2){
				$sqlv = "select * from pass_account where (depart_group = '".$row["id"]."' or depart_path like '".$row["path"].",%') and passing = 'Y'";
				$resultv = $mysql->query($sqlv);
				$b = $resultv->size();
				echo "key[".$w."]=new Array(".$b.");\n";
				echo "key1[".$w."]=new Array(".$b.");\n";
				$y = 1;
				echo "key[".$w."][0]=\"----請選擇人員----\";\n";
				echo "key1[".$w."][0]=\"\";\n";
				while($rowv = $resultv->fetch()){
					echo "key[".$w."][".$y."]=\"".$rowv["real_name"]."\";\n";
					if($uhead == 0){
						echo "key1[".$w."][".$y."]=\"".$rowv["id"]."\";\n";
					}else{
						echo "key1[".$w."][".$y."]=\"".$_SERVER["PHP_SELF"]."?user=".$rowv["id"]."\";\n";
					}
					$y++;
				}
				$w++;
			}elseif($type == 3){
				$head = "";
				if($row["forward_dep"] == 0){ $r = 0;$level = 0;}
				for($i = 0; $i < $r; $i++){
					$head.= "　";
				}
				if($uhead == 2){
					echo "<option value=\"?class=".$row["path"]."\"";
					if($doc_id == $row["path"]) echo " selected";
				}else{
					echo "<option value=\"?class=".$row["id"]."\"";
					if($doc_id == $row["id"]) echo " selected";
				}
				echo ">".$head.$row["depart_name"]."</option>";
			}else{
				//
			}
			
			if($uhead == 0){
				if($val == $row["id"]){

				}else{
					doc_list($row["id"],$type,$level = $r+1,$ctrl,$uhead,$x);
				}
			}else{
				doc_list($row["id"],$type,$level = $r+1,$ctrl,$uhead,$x);
			}
			
		}
	}
}
?>
