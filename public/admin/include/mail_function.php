<?
function mail_send_action($p_name,$begin_date,$end_date,$pm_name,$pm,$user,$member){
//變數設定
global $host;
global $dbUser;
global $dbPass;
global $dbName;
$mysql = &new MySQL($host,$dbUser,$dbPass,$dbName);
	
/*==================================================================================================*/
//發送信件

$content1 ="<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html;charset=utf-8\">";
$content1.="<html>";
$content1.="<head>";
$content1.="<title>孕龍科技 - 系統作業平台</title>";
$content1.="<meta http-equiv=Content-Type content=text/html; charset=utf-8>";
$content1.="<link rel=stylesheet href=http://www.zeroplus.com.tw/notice/css/style.css type=text/css>";
$content1.="</head>";
$content1.="<body bgcolor=#FEFCF1 text=#000000>";
$content1.="<div width=\"700\" align=\"center\">";		
$content1.="<table width=\"680\" cellpadding=\"0\" cellspacing=\"0\" style=\"background-color:#FFF;border: 1px solid #9f9f9f;\">";
$content1.="	<tr height=\"80\">";
$content1.="		<td align=\"left\" style=\"background-image:url(http://www.zeroplus.com.tw/notice/images/mail_title.gif);background-repeat:no-repeat;padding:10px 0px 10px 0px\">";
$content1.="			<span style=\"padding:0px 0px 0px 10px\">";
$content1.="				<img src=\"http://www.zeroplus.com.tw/notice/images/zeroplus_title.jpg\">";
$content1.="			</span>";
$content1.="			<span style=\"padding:0px 0px 0px 10px\">專案管理系統</span>";
$content1.="		</td>";
$content1.="	</tr>";
$content1.="	<tr height=\"30\">";
$content1.="		<td valign=\"bottom\">";
$content1.="			<span style=\"padding:0px 0px 0px 20px;color:green;\">此為系統發信，請勿回覆</span>";
$content1.="		</td>";
$content1.="	</tr>";
$content1.="	<tr>";
$content1.="		<td align=\"center\" style=\"padding:10px 0px 20px 0px\">";
$content1.="		<table width=\"640\" cellpadding=\"0\" cellspacing=\"1\" class=\"table_1\" style=\"background-color:#FFF\">";
$content1.="			<tr>";
$content1.="				<th colspan=\"2\" align=\"left\">[專案管理]系統通知</th>";
$content1.="			</tr>";
$content1.="			<tr>";
$content1.="				<td width=\"20%\" style=\"background-color:#dae8ff\">專案歸類</td>";
$content1.="				<td align=\"left\">".$p_name."</td>";
$content1.="			</tr>";
$content1.="			<tr>";
$content1.="				<td width=\"20%\" style=\"background-color:#dae8ff\">起迄時間</td>";
$content1.="				<td align=\"left\">".$begin_date."～".$end_date."</td>";
$content1.="			</tr>";
$content1.="			<tr>";
$content1.="				<td width=\"20%\" style=\"background-color:#dae8ff\">名稱</td>";
$content1.="				<td align=\"left\">".$pm_name."</td>";
$content1.="			</tr>";
//$content1.="			<tr>";
//$content1.="				<td width=\"20%\" style=\"background-color:#dae8ff\">內容</td>";
//$content1.="				<td align=\"left\">".$content."</td>";
//$content1.="			</tr>";
$content1.="			<tr>";
$content1.="				<td width=\"20%\" style=\"background-color:#dae8ff\">指派成員</td>";
$content1.="				<td align=\"left\">".$pm."</td>";
$content1.="			</tr>";
$content1.="			<tr>";
$content1.="				<td width=\"20%\" style=\"background-color:#dae8ff\">負責成員</td>";
$content1.="				<td align=\"left\">".$user."</td>";
$content1.="			</tr>";
$content1.="		</table>";
$content1.="		<td>";
$content1.="	</tr>";
$content1.="</table>";
$content1.="</div>";
$content1.="</body>";
$content1.="</html>";

	$subject = "[專案管理]".$pm."新增任務__".$begin_date."～".$end_date."_".$user."_".$pm_name;
	$mail = new PHPMailer();
	$mail->CharSet = "utf-8";
	$mail->Encoding = "base64";
	$mail->IsHTML(true);
	$mail->AddReplyTo("service_2@zeroplus.com.tw", "系統郵件");
	$mail->Subject = $subject;
	$mail->From = "service_2@zeroplus.com.tw";
	$mail->FromName = "孕龍作業平台-專案管理系統發送通知";
	$mail->Body = $content1;
	
	$manager = explode(",",$member);
	for($i = 0; $i < sizeof($manager); $i++){
		$sqls = "select email from pass_account where id = ".$manager[$i];
		$results = $mysql->query($sqls);
		$rows = $results->fetch();
		$send_email = $rows["email"];
		$mail->AddAddress($send_email);
	}
	$mail->Send();
}
?>
