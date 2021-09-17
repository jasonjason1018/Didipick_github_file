<?
function getMetaOfWeb($html=NULL){
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
// $aryMeta = getMetaOfWeb("https://tokukai.com/index.php");
// print_r($ayyMeta);
/* function merPrice($url){
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

	$aryMeta = getMetaOfWeb($data);
	// print_r($aryMeta);
	// $sell = explode("<th>出品者</th>",$data);
	// $sell1 = explode("<div>",$sell[1]);
	// $sell_url = str_replace("<td>",$sell1[0]);
	// $sell_id = trim(catch_word($sell_url));
	// $aryMeta["sell_id"] = $sell_id;
	//商品金額
	if(substr_count($url,"item.mercari.com") > 0){
		return $aryMeta["twitter:data1"];
	}elseif(substr_count($url,"fril.jp") > 0){
		return "¥ ".$aryMeta["product:price:amount"];
	}else{
		return $aryMeta["twitter:data1"];
	}
	//商品圖片
	// echo "<img src=\"".$aryMeta["og:image"]."\" width=\"60\">";
}
function merNew($url){
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

	if(substr_count($data,"新品、未使用") > 0){
		$ans = "NEW";
	}else{
		$ans = "USED";
	}
	return $ans;
}
function merItem($url){
	// $url="https://item.mercari.com/jp/m35118945420/";
	$UserAgent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; .NET CLR 3.5.21022; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
	$curl = curl_init();	//建立一個新的CURL資源
	curl_setopt($curl, CURLOPT_URL, $url);	//設定URL和相應的選項
	curl_setopt($curl, CURLOPT_HEADER, 1);  //0表示不輸出Header，1表示輸出
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

	$aryMeta = getMetaOfWeb($data);
	
	// $sell = explode("<th>出品者</th>",$data);
	// $sell1 = explode("<div>",$sell[1]);
	// $sell_id = str_replace("<td>",$sell1[0]);
	// $sell_id = trim(catch_word($sell_id));
	// $aryMeta["sell_id"] = $sell_id;
	// print_r($aryMeta);
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
	return $aryMeta;
}
function merItemSeller($url){
	// $url="https://item.mercari.com/jp/m35118945420/";
	$UserAgent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; .NET CLR 3.5.21022; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
	$curl = curl_init();	//建立一個新的CURL資源
	curl_setopt($curl, CURLOPT_URL, $url);	//設定URL和相應的選項
	curl_setopt($curl, CURLOPT_HEADER, 1);  //0表示不輸出Header，1表示輸出
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

	// $aryMeta = getMetaOfWeb($data);
	
	$sell = explode("<th>出品者</th>",$data);
	$sell1 = explode("<div>",$sell[1]);
	$sell_url = str_replace("<td>","",$sell1[0]);
	$sell_id = trim(catch_word($sell_url));
	// $aryMeta = $sell_id;
	// print_r($aryMeta);
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
	return $sell_id;
} */
function merPrice($url){
	// $url="https://item.mercari.com/jp/m35118945420/";
	$url = "https://image.tokukai.com/catch_meta_mercari.php?type=1&url=".$url;
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

	// $aryMeta = getMetaOfWeb($data);
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
	return $data;
}
function merNew($url){
	/* // $url="https://item.mercari.com/jp/m35118945420/";
	// $url = "https://image.tokukai.com/catch_meta_mercari.php?type=2&url=".$url;
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

	// $aryMeta = getMetaOfWeb($data);
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
	return $data; */
	
	
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

	if(substr_count($data,"新品、未使用") > 0){
		$ans = "NEW";
	}else{
		$ans = "USED";
	}
	return $ans;
}
function merItemSeller($url){
	// $url="https://item.mercari.com/jp/m35118945420/";
	$url = "https://image.tokukai.com/catch_meta_mercari.php?type=3&url=".$url;
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

	// $aryMeta = getMetaOfWeb($data);
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
	return $data;
}
function merItem($url){
	// $url="https://item.mercari.com/jp/m35118945420/";
	$url = "https://image.tokukai.com/catch_meta_mercari.php?type=4&url=".$url;
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

	// $aryMeta = getMetaOfWeb($data);
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
	// return $data;
	$aryList = json_decode(urldecode($data),true);
	return $aryList;
}
function merIndexCapture(){
	$url="https://www.mercari.com/jp/category/1/";
	$UserAgent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; .NET CLR 3.5.21022; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
	$curl = curl_init();	//建立一個新的CURL資源
	curl_setopt($curl, CURLOPT_URL, $url);	//設定URL和相應的選項
	curl_setopt($curl, CURLOPT_HEADER, 1);  //0表示不輸出Header，1表示輸出
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
	// if($aryMeta[1] == ""){
		// $aryMeta = explode("<div class=\"sc-jWojfa dLTcQa\">",$data);
	// }
	// if($aryMeta[1] == ""){
		// $aryMeta = explode("<div class=\"sc-imABML ezCMzW\">",$data);
	// }
	// $aryMeta = explode("<section class=\"items-box\">",$data);
	  $aryMeta = explode("<li class=\"",$data);
	// $aryMeta = $data;

	return $aryMeta;
}
function merOwner($url){
	// $url="https://www.mercari.com/jp/category/1/";
	$UserAgent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; .NET CLR 3.5.21022; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
	$curl = curl_init();	//建立一個新的CURL資源
	curl_setopt($curl, CURLOPT_URL, $url);	//設定URL和相應的選項
	curl_setopt($curl, CURLOPT_HEADER, 1);  //0表示不輸出Header，1表示輸出
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
	// if($aryMeta[1] == ""){
		// $aryMeta = explode("<div class=\"sc-jWojfa dLTcQa\">",$data);
	// }
	// if($aryMeta[1] == ""){
		// $aryMeta = explode("<div class=\"sc-imABML ezCMzW\">",$data);
	// }
	$aryMeta = explode("<th>出品者</th>",$data);
	$aryMeta2 = explode("</td>",$aryMeta[1]);
	$oList = explode("\"",$aryMeta2[0]);
	$owner = substr($oList[1],27,-1);
	// $aryMeta = $data;

	return $owner;
}
?>