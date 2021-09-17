<?php
/**
 * 檔案上傳函式檔
*/

/* 程式保護機制 */
if (!defined('IN_ZERO_PLUS')) die('請使用正常方式連結本網站');

/**
* 上傳檔案至指定位置
*
* @access   public
* @param   array   $src   檔案上傳陣列資訊
* @param   string   $path   上傳至指定伺服器位置
* @return   string
**/
function up_file($src, $path, $allow_type, $is_rename = 1, $plusName = '')
{

    /* 判斷檔案是否存在 */
    if (!file_exists($src['tmp_name']))
    {
        $GLOBALS['file_error'] = '上傳失敗，沒有選擇上傳檔案';
     
        return false;
    }

    /* 判斷有無指定上傳位置 */
    if (!$path)
    {
        $GLOBALS['file_error'] = '上傳失敗，沒有指定上傳位置';
     
        return false;
    }

    /* 檔案副檔名 */
    $docType = strtolower(end(explode('.', $src['name'])));
	$docName = mb_convert_encoding(str_replace('.' .$docType, '', $src['name']), "big5", "utf-8");

    /* 判斷檔案是否符合允許類型 */
    $pattern = "(" .@$allow_type. ")";
    if (!preg_match($pattern, $docType))
    {
        $GLOBALS['file_error'] = '上傳失敗，檔案格式不正確';
     
        return false;
    }

    /* 判斷指定路徑是否存在，若沒有則直接建立對應資料夾 */
    if (!file_exists($path))
	{
		mkdir($path, 0777);
	}

	//將UNIX時間戳記和微秒數分別存入陣列
	$times = split(' ', microtime());

	//格式化時間，顯示微秒數前兩位
	$micro_s = substr($times[0], 2, 3);

    /* 判斷是否更名 */
    if ($is_rename)
    {
        /* 亂數流水號 */
        $code = rand_code(5, 'str');
     
        /* 建立檔案名稱並給予副檔名 */
        $doc = $plusName.date("Ymd").$micro_s.'_'.$code. "." .$docType;
    }
    else
    {
        /* 建立檔案名稱並給予副檔名 */
        $doc = date("Ymd").$micro_s.'_'.$docName. "." .$docType;
    }

    /* 將檔案搬移至指定位置 */
    if (@move_uploaded_file($src['tmp_name'], $path.$doc))
    {
        $GLOBALS['file_error'] = '';
     
        return  $doc;
    }
    else
    {
        $GLOBALS['file_error'] = '上傳失敗，無法在伺服器建立檔案';
     
        return false;
    }
}




/**
* 上傳圖檔至指定位置
*
* @access   public
* @param   array   $src   圖檔上傳陣列資訊
* @param   string   $path   上傳至指定伺服器位置
* @param   integer   $imgNum   建立對應數量圖檔
* @param   string   $plusName   檔名前綴系統名稱
* @return   array
**/
function up_img($type_id, $src, $path)
{
    /* 判斷圖檔是否存在 */
    if (!file_exists($src['tmp_name']))
    {
        $GLOBALS['img_error'] = '上傳失敗，沒有選擇上傳圖片';
     
        return false;
    }

    /* 判斷有無指定上傳位置 */
    if (!$path)
    {
        $GLOBALS['img_error'] = '上傳失敗，沒有指定上傳位置';
     
        return false;
    }

    /* 檔案副檔名 */
    $imgType = strtolower(end(explode('.', $src['name'])));

    /* 判斷圖檔是否符合允許類型 */
    $pattern = "(" .@UP_PHOTO_ALLOW. ")";
    if (!preg_match($pattern, $imgType))
    {
        $GLOBALS['img_error'] = '上傳失敗，圖片格式不正確';
     
        return false;
    }

    /* 判斷指定路徑是否存在，若沒有則直接建立對應資料夾 */
    if (!file_exists($path)) mkdir($path, 0777);

    /* 建立圖檔名稱並給予副檔名 */
    if (preg_match("(gif)", $imgType)) $img = $type_id. ".gif";
    elseif (preg_match("(jpg)", $imgType)) $img = $type_id. ".jpg";
    else                            $img = $type_id. ".png";
    
    /* 將圖檔搬移至指定位置 */
    if (@move_uploaded_file($src['tmp_name'], $path.$img))
    {
        $GLOBALS['img_error'] = '';
     
        return $img;
    }
    else
    {
        $GLOBALS['img_error'] = '上傳失敗，無法在伺服器建立圖片';
     
        return false;
    }
}




/**
* 建立指定圖檔縮放圖片
*
* @access    public
* @param   string   $src   原圖片路徑
* @param   string   $dest   建立縮放圖片路徑
* @param   integer   $width   縮放指定寬度
* @param   integer   $height   縮放指定高度
* @param   boolean   $is_color   判斷是否使用背底色
* @param   integer   $R   圖片背底色 R ( 可用 16 進位 )
* @param   integer   $G   圖片背底色 G ( 可用 16 進位 )
* @param   integer   $B   圖片背底色 B ( 可用 16 進位 )
* @param   integer   $quality   縮放圖片品質
* @return   void
**/
function up_resize($src, $dest, $width, $height, $is_color = 1, $R = 0xff, $G = 0xff, $B = 0xff, $quality = 100)
{
    /* 檢查檔案是否存在 */
    if (!file_exists($src) || !$dest)
    {
        $GLOBALS['img_error'] .= '&nbsp;(縮圖產生失敗，無來源圖片或沒有設定輸出圖片檔名)';
     
        return false;
    }

    /* 判斷有無設定縮圖寬高 */
    if (!$width || !$height)
    {
        $GLOBALS['img_error'] .= '&nbsp;(縮圖產生失敗，沒有設定縮圖寬和高)';
     
        return false;
    }

    /* 取得圖檔寬高 */
    $srcSize = getImageSize($src);

    /* 判斷圖片是否超過設定大小 */
    if ($srcSize[0] >= $width || $srcSize[1] >= $height)
    {
        /* 計算圖檔和設定寬高比例 */
        $srcRate  = $srcSize[0] / $srcSize[1];
        $destRate = $width / $height;
     
        if ($destRate > $srcRate)
        {
            $destSize[0] = $height * $srcRate;
            $destSize[1] = $height;
        }
        else
        {
            $destSize[0] = $width;
            $destSize[1] = $width / $srcRate;
        }
    }
    else
    {
        $destSize[0] = $srcSize[0];
        $destSize[1] = $srcSize[1];
    }

    /* 建立一個 True Color 的影像  */
    $destImage = imageCreateTrueColor($width, $height); 

    /* 判斷是否使用背底色 */
    if ($is_color)
    {
        /* 填滿顏色 */
        $color = imagecolorallocate($destImage, $R, $G, $B);
     
        /* 圖片著色 */
        imagefill($destImage, 0, 0, $color);
    }

    /* 根據副檔名讀取圖檔 */
    switch($srcSize[2])
    {
        case 1:  $srcImage = imageCreateFromGif($src);  break;
        case 2:  $srcImage = imageCreateFromJpeg($src);  break;
        case 3:  $srcImage = imageCreateFromPng($src);  break;
        default:
            $GLOBALS['img_error'] .= '&nbsp;(縮圖產生失敗，GD 模組不支援此圖片格式)';
         
            return false;
        break;
    }

    /* 計算縮圖 x 點和 Y 點 */
    if ($width - $destSize[0] == 0)
    {
        $dx = 0;
        $dy = ceil(($height - $destSize[1]) / 2);
    }
    elseif ($height - $destSize[1] == 0)
    {
        $dx = ceil(($width - $destSize[0]) / 2);
        $dy = 0;
    }
    else
    {
        $dx = ceil(($width - $destSize[0]) / 2);
        $dy = ceil(($height - $destSize[1]) / 2);
    }

    /* 取樣縮圖 */
    ImageCopyResampled($destImage, $srcImage, $dx, $dy, 0, 0, $destSize[0], $destSize[1], $srcSize[0], $srcSize[1]);

    /* 輸出圖檔 */
    switch($srcSize[2])
    {
        case 1: case 2: imageJpeg($destImage, $dest, $quality);  break;
        case 3:         imagePng($destImage, $dest);  break;
    }
}
?>