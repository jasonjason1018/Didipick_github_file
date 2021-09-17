<?
require_once 'MySQL.php';
$title = "後端管理系統";
$host = 'localhost';

$dbUser = 'fisher';
$dbUser2 = 'fisher123';
$dbPass = 'fish9567283';
$dbPass2 = 'fish9567283195';
$dbName = 'eatfish';
$f_server = "103.17.9.152";
$f_user = "design";
$f_pass = "24332628";
$path_select = "./webuploadpic/";
$path_select1 = "./webuploadfile/";
@define("Page_00", "第一頁");
@define("Page_01", "上一頁"); 
@define("Page_02", "下一頁"); 
@define("Page_03", "最後頁");
@define("Title", "後端管理系統");
$mysql = new MySQL($host,$dbUser,$dbPass,$dbName);

?>
