<?
require_once 'MySQL.php';
$title = "後端管理系統";
$host = 'localhost';

$dbUser = 'tokuvipa_admin';
$dbPass = 'ad9349gjr3';
$dbName = 'tokuvipa_tokukai';
$f_server = "";
$f_user = "";
$f_pass = "";
$path_select = "./webuploadpic/";
$path_select1 = "./webuploadfile/";
@define("Page_00", "第一頁");
@define("Page_01", "上一頁"); 
@define("Page_02", "下一頁"); 
@define("Page_03", "最後頁");
@define("Title", "後端管理系統");
$mysql = new MySQL($host,$dbUser,$dbPass,$dbName);

$fileData = substr($_SERVER["PHP_SELF"],1,6);
$AdminData = substr($_SERVER["PHP_SELF"],1,5);
$allWeb = $_SERVER["SERVER_NAME"];

// if($AdminData == "Admin"){
	// if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") {
	// }else{
		// header("Location:https://".$_SERVER["SERVER_NAME"].$_SERVER['REQUEST_URI']);
	// }
// }else{
	// if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") {
	// }else{
		// header("Location:https://".$_SERVER["SERVER_NAME"].$_SERVER['REQUEST_URI']);
	// }
// }
//else
//{
	// if($_SERVER["PHP_SELF"] == "/shopping/order_step01.php" || $_SERVER["PHP_SELF"] == "/shopping/order_step01_t.php"){
	// }else{
		// if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") {
		    // header("Location:http://".$_SERVER["SERVER_NAME"].$_SERVER['REQUEST_URI']);
		// }
	// }
//}

$Y_a_appid = 'dj0zaiZpPVYxTlJBZFJoNHpHSyZzPWNvbnN1bWVyc2VjcmV0Jng9ODE-'; //主要
$Y_a_appid2 = 'dj00aiZpPXFWYWFUZHRnMEwwSiZzPWNvbnN1bWVyc2VjcmV0Jng9YjY-'; //次要
$Y_s_appid = 'dj0zaiZpPWNsdEl5aXN2ZjNUTSZzPWNvbnN1bWVyc2VjcmV0Jng9YmY-';
$R_s_appid = '1078705405583963342';

$index_page = "index.php";
$Homeurl = "https://tokukai.com/";
$Homeurls = "https://tokukai.com/";
$HomeurlM = "https://tokukai.com/m/";
// $Homeurl = "http://124.150.129.141/";
//貝殼島玉山銀行代碼
$bankCode = "92834";
//HTML Header Title首頁
$pageTitle = "跨買 TOKUKAI - 日本代標代購，日本Y拍代標，mercari代購，rakuma代購，日本代購網站首選";
$ogDescript = "跨買 TOKUKAI是一個專業的日本代購代標網站，協助您代標與代購日本各大網站，如日本樂天、日本amazon雅馬遜 、日本Yahoo、日本mercari、rakuma等等，為你提供最划算的日本跨境購物服務！\"><meta name=\"description\" content=\"跨買 TOKUKAI是一個專業的日本代購代標網站，協助您代標與代購日本各大網站，如日本樂天、日本amazon雅馬遜 、日本Yahoo、日本代標、日本mercari、rakuma等等，為你提供最划算的日本跨境購物服務！";
$ogTitle = "跨買 TOKUKAI - 日本代購，日本代標，日本Y拍代標，mercari代購，rakuma代購，日本代購網站首選。";
//HTML Header Title代標
$pageTitleA = "跨買 TOKUKAI - 日本Y拍代標首選，日本代標";
$ogDescriptA = "日本Yahoo代標拍賣服務，跨買 TOKUKAI是一個專業的日本Y拍拍賣代標網站，為你提供最簡便與划算的代標服務。\"><meta name=\"description\" content=\"日本Yahoo代標拍賣服務，跨買 TOKUKAI是一個專業的日本Y拍拍賣代標網站，為你提供最簡便與划算的代標服務。";
$ogTitleA = "跨買 TOKUKAI - 日本Y拍代標首選，日本代標";
//HTML Header Title代購
$pageTitleB = "跨買 TOKUKAI - 日本代購首選，網友回購率最高";
$ogDescriptB = "日本樂天、Yahoo購物、亞馬遜、ZOZOTOWN等...日本各大購物網站代購，以最合理划算的價格，幫你把日本商品買回來。\"><meta name=\"description\" content=\"日本樂天、Yahoo購物、亞馬遜、ZOZOTOWN等...日本各大購物網站代購，以最合理划算的價格，幫你把日本商品買回來。";
$ogTitleB = "跨買 TOKUKAI - 日本代購首選，網友回購率最高";
//HTML Header TitleMercari
$pageTitleM = "跨買 TOKUKAI - Mercari和RAKUMA 商品代購";
$ogDescriptM = "想買Mercari和RAKUMA卻不知道該怎麼辦嗎？ 來「跨買」讓你輕鬆買到Mercari和RAKUMA 的商品。業界唯一協助Mercari議價的日本代購。\"><meta name=\"description\" content=\"想買Mercari和RAKUMA卻不知道該怎麼辦嗎？ 來「跨買」讓你輕鬆買到Mercari和RAKUMA 的商品。業界唯一協助Mercari議價的日本代購。";
$ogTitleM = "跨買 TOKUKAI - Mercari和RAKUMA 商品代購";
//HTML Header Title直購
$pageTitleD = "跨買 TOKUKAI - 日本商品直直購";
$ogDescriptD = "精選日本商品提供一口價，包運費包關稅，不額外加價，幫你省荷包，簡單直購沒煩惱。\"><meta name=\"description\" content=\"精選日本商品提供一口價，包運費包關稅，不額外加價，幫你省荷包，簡單直購沒煩惱。";
$ogTitleD = "跨買 TOKUKAI - 日本商品直直購";
//HTML Header Title費用
$pageTitleF = "跨買 TOKUKAI - 代購費用計算機";
$ogDescriptF = "想買日本商品卻不知道需要多少錢嗎？ 報價不求人，商品費、國際運費等所有費用一次算給你！\"><meta name=\"description\" content=\"想買日本商品卻不知道需要多少錢嗎？ 報價不求人，商品費、國際運費等所有費用一次算給你！";
$ogTitleF = "跨買 TOKUKAI - 代購費用計算機";
//HTML Header Title特輯
$pageTitleS = "跨買 TOKUKAI - 日本情報特輯";
$ogDescriptS = "日本必買好物推薦、流行有趣商品介紹、日本最新優惠資訊、購物小技巧，通通報你知！想知道日本哪裡便宜，什麼東西好買，看這裡就對了！\"><meta name=\"description\" content=\"日本必買好物推薦、流行有趣商品介紹、日本最新優惠資訊、購物小技巧，通通報你知！想知道日本哪裡便宜，什麼東西好買，看這裡就對了！";
$ogTitleS = "跨買 TOKUKAI - 日本情報特輯";
//HTML Header Title幫助中心
$pageTitleH = "跨買 TOKUKAI - 幫助中心";
$ogDescriptH = "日本代標代購常見的問題與回答、商品寄送、費用說明、新手教學，購物碰到的疑問都能在這裡找到解答。\"><meta name=\"description\" content=\"日本代標代購常見的問題與回答、商品寄送、費用說明、新手教學，購物碰到的疑問都能在這裡找到解答。";
$ogTitleH = "跨買 TOKUKAI - 幫助中心";
//HTML Header Title最新公告
$pageTitleN = "跨買 TOKUKAI - 最新公告";
$ogDescriptN = "關於跨買 TOKUKAI的營業時間、優惠活動、網站更新等所有與跨買相關的公告。\"><meta name=\"description\" content=\"關於跨買 TOKUKAI的營業時間、優惠活動、網站更新等所有與跨買相關的公告。";
$ogTitleN = "跨買 TOKUKAI - 最新公告";

/* $sqlg = "insert into hackIP set ipAddress = '".$_SERVER["HTTP_X_FORWARDED_FOR"]."',url = '".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].$_SERVER['PHP_SELF'].$_SERVER['QUERY_STRING']."',inTime = '".date("Y-m-d H:i:s")."'";
$resultg = $mysql->query($sqlg);
if($_SERVER["HTTP_X_FORWARDED_FOR"] == "103.15.216.195"){
	// echo "<script>";
	// echo "for(i=0; i<1000000; i++){ alert('Hi!');}";
	// echo "</script>";
	header("Location:/logout.php");
} */
/* //統一發票開立系統參數 測試 */
// $hashkey = "ejCk326UnaZWKisg";
// $hashiv = "q9jcZX8Ib9LM8wYk";
// $merchantid = "2000132";

/* //統一發票開立系統參數 正式 */
$hashkey = "Y1sF9mJfnFmGR1Yz";
$hashiv = "x6KsCjyFx80HYPiz";
$merchantid = "3120237";

/* 超商儲值系統參數 測試*/
$cvsUrl = "https://payment-stage.ecpay.com.tw/Cashier/AioCheckOut/V5";
$cvsMerchantID = "2000132";
$cvsHashKey = "5294y06JbISpM5x9";
$cvsHashIV = "v77hoKGq4kWxNNIS";
$cvsBill = 30;

/* 超商儲值系統參數 正式*/
$cvsUrl = "https://payment.ecpay.com.tw/Cashier/AioCheckOut/V5";
$cvsMerchantID = "3120237";
$cvsHashKey = "SJ5vl8vNeKifLcvW";
$cvsHashIV = "QNKlwDqpXWrJ7ebi";
$cvsBill = 30;
?>
