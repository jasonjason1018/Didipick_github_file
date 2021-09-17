<?
require_once '/home/httpd/vhosts/tokukai.com/httpdocs/Admin/include/ver_script.php';
//require_once './include/cls_mysql.php';
//require_once './include/lib_common.php';
require_once '/home/httpd/vhosts/tokukai.com/httpdocs/Admin/include/MySQL.php';
require_once '/home/httpd/vhosts/tokukai.com/httpdocs/Admin/include/Session.php';
require_once '/home/httpd/vhosts/tokukai.com/httpdocs/Admin/include/Page.php';
require_once '/home/httpd/vhosts/tokukai.com/httpdocs/yahoo_auction/bid_Function2.php';
require_once '/home/httpd/vhosts/tokukai.com/httpdocs/smsSend_action.php';

// $mysql = &new MySQL($host,$dbUser,$dbPass,$dbName);
$session = new Session();

// $sql = "select rate from exchange_rate order by change_date desc limit 1";
// $result = $mysql->query($sql);
// $row = $result->fetch();
// $rate = $row["rate"];
//系統時間差
// $serverTime = 1*3600;

$table = "yahooLogin";

function checkLogin($cookie_file,$CheckName){
	$toURL = "https://auctions.yahoo.co.jp/";
	$cookie_txt = "/home/httpd/vhosts/tokukai.com/".$cookie_file;
	$ch = curl_init();
	$options = array(
		CURLOPT_URL=>$toURL,
		CURLOPT_HEADER=>0,
		CURLOPT_VERBOSE=>0,
		CURLOPT_COOKIEFILE=>$cookie_txt,
		CURLOPT_COOKIEJAR=>$cookie_txt,
		CURLOPT_RETURNTRANSFER=>true,
		CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
		// CURLOPT_POST=>true,
		// CURLOPT_POSTFIELDS=>http_build_query($post),
	);
	curl_setopt_array($ch, $options);
	// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
	// false 時只回傳成功與否
	$result = curl_exec($ch);
	// return $result;
	$names = explode("<div class=\"yjmthloginarea\">",$result);
	$name = explode("</div>",$names[1]);
	$num = substr_count($name[0],$CheckName);
	return $num;
}

$sql = "select * from $table where publish = 1 order by id";
$result = $mysql->query($sql);
while($row = $result->fetch()){
	if(checkLogin($row["file_name"],$row["name"]) == 1){
		$sql5 = "insert into yahooLoginRobot set name = '".$row["name"]."',status=1,insert_time = '".date("Y-m-d H:i:s")."'";
		$result5 = $mysql->query($sql5);
	}else{
		//第一組
		$mobile = "0920167600";
		$msg = "帳號:".$row["name"]."已登出，請進入後台管理系統進行登入";
		SmsAtt($mobile,$msg);
		//第二組
		$mobile = "0918397092";
		$msg = "帳號:".$row["name"]."已登出，請進入後台管理系統進行登入";
		SmsAtt($mobile,$msg);
		
	}
}
?>