<?
/**
  * 抓取要縮圖的比例, 下述只處理 jpeg
 * $from_filename : 來源路徑, 檔名, ex: /tmp/xxx.jpg
 * $save_filename : 縮圖完要存的路徑, 檔名, ex: /tmp/ooo.jpg
 * $in_width : 縮圖預定寬度
 * $in_height: 縮圖預定高度
 * $quality  : 縮圖品質(1~100)
 *
 * Usage:
 *   ImageResize('ram/xxx.jpg', 'ram/ooo.jpg');
 */
/* function ImageResize($from_filename, $save_filename, $in_width=400, $in_height=300, $quality=60){
    $allow_format = array('jpeg', 'png', 'gif');
    $sub_name = $t = '';

    // Get new dimensions
    $img_info = getimagesize($from_filename);
    $width    = $img_info['0'];
    $height   = $img_info['1'];
    $imgtype  = $img_info['2'];
    $imgtag   = $img_info['3'];
    $bits     = $img_info['bits'];
    $channels = $img_info['channels'];
    $mime     = $img_info['mime'];

    list($t, $sub_name) = split('/', $mime);
    if ($sub_name == 'jpg') {
        $sub_name = 'jpeg';
    }

    if (!in_array($sub_name, $allow_format)) {
        return false;
    }

    // 取得縮在此範圍內的比例
    $percent = getResizePercent($width, $height, $in_width, $in_height);
    $new_width  = $width * $percent;
    $new_height = $height * $percent;

    // Resample
    $image_new = imagecreatetruecolor($new_width, $new_height);

    // $function_name: set function name
    //   => imagecreatefromjpeg, imagecreatefrompng, imagecreatefromgif
    
    // $sub_name = jpeg, png, gif
    //$function_name = 'imagecreatefrom'.$sub_name;
    //$image = $function_name($filename); //$image = imagecreatefromjpeg($filename);
   
    $image = imagecreatefromjpeg($from_filename);

    imagecopyresampled($image_new, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

    return imagejpeg($image_new, $save_filename, $quality);
} */

/**
 * 抓取要縮圖的比例
 * $source_w : 來源圖片寬度
 * $source_h : 來源圖片高度
 * $inside_w : 縮圖預定寬度
 * $inside_h : 縮圖預定高度
 *
 * Test:
 *   $v = (getResizePercent(1024, 768, 400, 300));
 *   echo 1024 * $v . "\n";
 *   echo  768 * $v . "\n";
 */
/* function getResizePercent($source_w, $source_h, $inside_w, $inside_h){
    if ($source_w < $inside_w && $source_h < $inside_h) {
        return 1; // Percent = 1, 如果都比預計縮圖的小就不用縮
    }

    $w_percent = $inside_w / $source_w;
    $h_percent = $inside_h / $source_h;

    return ($w_percent > $h_percent) ? $h_percent : $w_percent;
} */
/* function catchToS3($imgUrl){
	$imgNameLst = explode("/",$imgUrl);
	$aryNum = sizeof($imgNameLst) - 1;
	$imgNameN = $imgNameLst[$aryNum];
	$quoImgLst = explode("?",$imgNameN);
	$imgName = $quoImgLst[0];

	$natest = explode(".",$imgName);
	if($natest[1] == ""){
		$imgName = $natest[0].".jpg";
	}
	$folder = "/var/www/html/webimage/";
	$thumb = "/var/www/html/webimage/thumb/";
	$img = file_get_contents($imgUrl);
	file_put_contents($folder.$imgName,$img);
	ImageResize($folder.$imgName,$thumb.date("ymd").$imgName);
	$newImgUrl = "https://tokukai.com/webimage/thumb/".date("ymd").$imgName;
	return $newImgUrl;
}
function catchToS3_check($imgUrl){
	$imgName = $imgUrl;

	$natest = explode(".",$imgName);
	if($natest[1] == ""){
		$imgName = $natest[0].".jpg";
	}
	$folder = "/var/www/html/webimage/";
	$thumb = "/var/www/html/webimage/checkProd/";
	// $img = file_get_contents($imgUrl);
	// file_put_contents($folder.$imgName,$img);
	ImageResize($folder.$imgName,$thumb.date("ymd").$imgName,800,600);
	$newImgUrl = "https://tokukai.com/webimage/checkProd/".date("ymd").$imgName;
	return $newImgUrl;
} */
function catchToS3($url){
	// $url="https://item.mercari.com/jp/m35118945420/";
	$url = "https://image.tokukai.com/catch_meta_mercari.php?type=5&url=".$url;
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
function catchToS3_check($url){
	// $url="https://item.mercari.com/jp/m35118945420/";
	$url = "https://image.tokukai.com/catch_meta_mercari.php?type=6&url=".$url;
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
?>