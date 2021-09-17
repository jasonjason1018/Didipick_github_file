<?
function CheckMacValue($ary,$hashkey,$hashiv){
	$sortAry = sortAryToString($ary);
	// echo $sortAry."<br>";
	$sortAry = "HashKey=".$hashkey."&".$sortAry."&HashIV=".$hashiv;
	$sortAry = phpToNet(strtolower(urlencode($sortAry)));
	// echo $sortAry."<br>";
	$sortAry = md5($sortAry);
	$sortAry = strtoupper($sortAry);
	// echo $sortAry."<br>";
	return $sortAry;
}
function sortAryToString($ary){
	ksort($ary);
	// print_r($people);
	$string = "";
	while ($keyName = key($ary)) {
		if($keyName != "InvoiceRemark" && $keyName != "ItemName" && $keyName != "ItemWord" && $keyName != "ItemRemark" && $keyName != "CheckMacValue"){
			// if($ary[$keyName] != ""){
				if($string == ""){
					if($keyName == "CustomerName" or $keyName == "CustomerAddr" or $keyName == "CustomerEmail"){
						$string = $keyName."=".phpToNet(strtolower(urlencode($ary[$keyName])));
					}else{
						$string = $keyName."=".$ary[$keyName];
					}
				}else{
					if($keyName == "CustomerName" or $keyName == "CustomerAddr" or $keyName == "CustomerEmail"){
						$string.= "&".$keyName."=".phpToNet(strtolower(urlencode($ary[$keyName])));
					}else{
						$string.= "&".$keyName."=".$ary[$keyName];
					}
				}
			// }
		}
		next($ary);
	}
	return $string;
}
function phpToNet($str){
	$str = str_replace("%21","!",$str);
	$str = str_replace("%2a","*",$str);
	$str = str_replace("%28","(",$str);
	$str = str_replace("%29",")",$str);
	$str = str_replace("%20","+",$str);
	$str = str_replace("%2e",".",$str);
	// $str = str_replace("%21","!",$str);
	return $str;
}
function curl_post($url,$post){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST,true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$result = curl_exec($ch);
curl_close ($ch);
return $result;
}
function invoiceAction($id,$hashkey,$hashiv,$merchantid){
	global $host;
	global $dbUser;
	global $dbPass;
	global $dbName;
	$mysql = new MySQL($host,$dbUser,$dbPass,$dbName);
	$url = "https://einvoice.ecpay.com.tw/Invoice/Issue";
	
	$sql = "select * from shipping where id = ".$id;
	$result = $mysql->query($sql);
	$row = $result->fetch();
	$user_id = $row["user_id"];
	$shippingNo = $row["shippingNo"];
	$orderList = $row["order_no"];
	$invoiceType = $row["invoiceType"];
	if($row["invoiceKind"] == 2){
		$invoiceKind = 3;
	}elseif($row["invoiceKind"] == 3){
		$invoiceKind = 2;
	}else{
		$invoiceKind = $row["invoiceKind"];
	}
	$invoiceCarruer = $row["invoiceCarruer"];
	$invoicePno = $row["invoicePno"];
	$invoiceTitle = $row["invoiceTitle"];
	if($invoiceType == 1){
		$donat = 1;
		$lovecode = "199185";
		$invoiceKind = 1;
	}else{
		$donat = 0;
		$lovecode = "";
	}
	
	
	$sqla = "select mobile,zipcode,area,address,email from member where id = ".$user_id;
	$resulta = $mysql->query($sqla);
	$rowa = $resulta->fetch();
	$mobile = $rowa["mobile"];
	$email = str_replace(" ","",$rowa["email"]);
	if($invoiceType == 3){
		$print = 1;
		// $address = $rowa["zipcode"].$rowa["area"].$rowa["address"];
		$address = str_replace(" ","",$rowa["area"].$rowa["address"]);
		// $address = "新北市中和區福祥路70號";
		$invoiceKind = "";
		$invoiceCarruer = "";
	}else{
		$print = 0;
		$address = "";
	}
	
	$sqlx = "select * from inorder where id in (".$row["order_no"].")";
	$resultx = $mysql->query($sqlx);
	$orNo = "";
	$kk = 0;
	$ss = 0;
	$aq = 0;
	// echo $sqlx;
	$invo1 = "";
	$invo2 = "";
	$invo3 = "";
	$invo4 = "";
	$invo5 = "";
	$invo6 = "";
	while($rowx = $resultx->fetch()){
		//發票結算
		$ii = $rowx["service_rate"] - $rowx["bonus_use"] - $rowx["coupon"];
		if($ii > 0){
			$kk+= $ii;
			$aq+= $ii;
		}
	}
	if($kk > 0){
		$invo1 = "服務費";
		$invo2 = "1";
		$invo3 = "筆";
		$invo4 = $kk;
		$invo5 = "1";
		$invo6 = $kk;
	}
	if($row["bill"] > 0){
		$ss+= $row["bill"];
		$aq+= $row["bill"];
		if($invo1 != ""){
			$invo1.= "|運費";
			$invo2.= "|1";
			$invo3.= "|筆";
			$invo4.= "|".$ss;
			$invo5.= "|1";
			$invo6.= "|".$ss;
		}else{
			$invo1.= "運費";
			$invo2.= "1";
			$invo3.= "筆";
			$invo4.= $ss;
			$invo5.= "1";
			$invo6.= $ss;
		}
	}
	//手機載具
	$invoicC = str_replace("+"," ",$invoiceCarruer);
	
	$post_value2 = array(
	'TimeStamp' => strtotime(date("Y-m-d H:i:s")),
	'MerchantID' => $merchantid,
	'RelateNumber' => $shippingNo,
	'CustomerID' => $user_id,
	'CustomerIdentifier' => $invoicePno,
	'CustomerName' => $invoiceTitle,
	'CustomerAddr' => $address,
	'CustomerPhone' => $mobile,
	'CustomerEmail' => $email,
	'ClearanceMark' => '1',
	'Print' => $print,
	'Donation' => $donat,
	'LoveCode' => $lovecode,
	'CarruerType' => $invoiceKind,
	'CarruerNum' => $invoicC,
	'TaxType' => '1',
	'SalesAmount' => $aq,
	'InvoiceRemark' => '',
	'ItemName' => $invo1,
	'ItemCount' => $invo2,
	'ItemWord' => $invo3,
	'ItemPrice' => $invo4,
	'ItemTaxType' => $invo5,
	'ItemAmount' => $invo6,
	'ItemRemark' => '',
	'InvType' => '07',
	'vat' => '1'
	);
	
	$post_value = array(
	'TimeStamp' => strtotime(date("Y-m-d H:i:s")),
	'MerchantID' => $merchantid,
	'RelateNumber' => $shippingNo,
	'CustomerID' => $user_id,
	'CustomerIdentifier' => $invoicePno,
	'CustomerName' => $invoiceTitle,
	'CustomerAddr' => $address,
	'CustomerPhone' => $mobile,
	'CustomerEmail' => $email,
	'ClearanceMark' => '1',
	'Print' => $print,
	'Donation' => $donat,
	'LoveCode' => $lovecode,
	'CarruerType' => $invoiceKind,
	'CarruerNum' => $invoiceCarruer,
	'TaxType' => '1',
	'SalesAmount' => $aq,
	'InvoiceRemark' => '',
	'ItemName' => $invo1,
	'ItemCount' => $invo2,
	'ItemWord' => $invo3,
	'ItemPrice' => $invo4,
	'ItemTaxType' => $invo5,
	'ItemAmount' => $invo6,
	'ItemRemark' => '',
	'InvType' => '07',
	'vat' => '1'
	);
	$checkValue = CheckMacValue($post_value2,$hashkey,$hashiv);
	$post_value["CheckMacValue"] = $checkValue;
	// echo $checkValue."<br>";
	// print_r($post_value)."<br>";
	if($aq > 0){
		//開立發票
		$act = curl_post($url,$post_value);
		
		//回傳參數取得發票號碼
		$actList = explode("&",$act);
		$actAry = "";
		for($i = 0; $i < sizeof($actList); $i++){
			$item = explode("=",$actList[$i]);
			$actAry[$item[0]] = $item[1];
		}
		// $InvoiceDate = $actAry["InvoiceDate"];
		// $InvoiceNumber = $actAry["InvoiceNumber"];
		// $RandomNumber = $actAry["RandomNumber"];
		// $RtnMsg = $actAry["RtnMsg"];
		// $CheckMacValue = $actAry["CheckMacValue"];
		return $actAry;
	}else{
		return 0;
	}
}
function invoiceActionDia($id,$rid,$price,$hashkey,$hashiv,$merchantid){
	global $host;
	global $dbUser;
	global $dbPass;
	global $dbName;
	$mysql = new MySQL($host,$dbUser,$dbPass,$dbName);
	$url = "https://einvoice.ecpay.com.tw/Invoice/Issue";
	
	$invoiceType = 2;
	$invoiceKind = 1;
	$invoiceCarruer = "";
	$invoicePno = "";
	$invoiceTitle = "";
	$shippingNo = $rid;
	$donat = 0;
	$lovecode = "";
	
	
	$sqla = "select mobile,zipcode,area,address,oversea,email from member where id = ".$id;
	$resulta = $mysql->query($sqla);
	$rowa = $resulta->fetch();
	$mobile = $rowa["mobile"];
	$email = str_replace(" ","",$rowa["email"]);;
	if($oversea == 0){
		if($invoiceType == 3){
			$print = 1;
			// $address = $rowa["zipcode"].$rowa["area"].$rowa["address"];
			$address = str_replace(" ","",$rowa["area"].$rowa["address"]);
			// $address = "新北市中和區福祥路70號";
			$invoiceKind = "";
			$invoiceCarruer = "";
		}else{
			$print = 0;
			$address = "";
		}

		$orNo = "";
		$kk = 0;
		$ss = 0;
		$aq = $price;
		// echo $sqlx;
		$invo1 = "";
		$invo2 = "";
		$invo3 = "";
		$invo4 = "";
		$invo5 = "";
		$invo6 = "";

		$invo1 = "服務費";
		$invo2 = "1";
		$invo3 = "筆";
		$invo4 = $price;
		$invo5 = "1";
		$invo6 = $price;
		//手機載具
		$invoicC = str_replace("+"," ",$invoiceCarruer);
		
		$post_value2 = array(
		'TimeStamp' => strtotime(date("Y-m-d H:i:s")),
		'MerchantID' => $merchantid,
		'RelateNumber' => $shippingNo,
		'CustomerID' => $id,
		'CustomerIdentifier' => $invoicePno,
		'CustomerName' => $invoiceTitle,
		'CustomerAddr' => $address,
		'CustomerPhone' => $mobile,
		'CustomerEmail' => '',
		'ClearanceMark' => '1',
		'Print' => $print,
		'Donation' => $donat,
		'LoveCode' => $lovecode,
		'CarruerType' => $invoiceKind,
		'CarruerNum' => $invoicC,
		'TaxType' => '1',
		'SalesAmount' => $aq,
		'InvoiceRemark' => '',
		'ItemName' => $invo1,
		'ItemCount' => $invo2,
		'ItemWord' => $invo3,
		'ItemPrice' => $invo4,
		'ItemTaxType' => $invo5,
		'ItemAmount' => $invo6,
		'ItemRemark' => '',
		'InvType' => '07',
		'vat' => '1'
		);
		
		$checkValue = CheckMacValue($post_value2,$hashkey,$hashiv);
		$post_value2["CheckMacValue"] = $checkValue;
		// echo $checkValue."<br>";
		// print_r($post_value)."<br>";
		if($aq > 0){
			//開立發票
			$act = curl_post($url,$post_value2);
			
			//回傳參數取得發票號碼
			$actList = explode("&",$act);
			$actAry = "";
			for($i = 0; $i < sizeof($actList); $i++){
				$item = explode("=",$actList[$i]);
				$actAry[$item[0]] = $item[1];
			}
			// $InvoiceDate = $actAry["InvoiceDate"];
			// $InvoiceNumber = $actAry["InvoiceNumber"];
			// $RandomNumber = $actAry["RandomNumber"];
			// $RtnMsg = $actAry["RtnMsg"];
			// $CheckMacValue = $actAry["CheckMacValue"];
			return $actAry;
		}else{
			return 0;
		}
	}else{
		return 0;
	}
}
?>