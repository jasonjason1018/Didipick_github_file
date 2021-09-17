<?
function kakakuSearch($query,$page,$sort,$category){
	$query = rawurlencode(mb_convert_encoding($query, "SJIS", "UTF-8"));
	$url = "https://kakaku.com/search_results/".$query."/";
	$url = $url."?page=".$page;
	if($sort != ""){
		$url.= "&sort=".$sort;
	}
	if($category != ""){
		$url.= "&category=".$category;
	}
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

	return $data;
}
?>