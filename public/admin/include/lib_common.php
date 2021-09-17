<?php
/* 程式保護機制 */
//if (!defined('IN_GRS'))  die('請使用正常方式連結本網站');

/**
 * 遞歸方式的對變量中的特殊字符進行轉義
 *
 * @access  public
 * @param   mix     $value
 *
 * @return  mix
 */
function addslashes_deep($value)
{
    if (empty($value))
    {
        return $value;
    }
    else
    {
        return is_array($value) ? array_map('addslashes_deep', $value) : addslashes($value);
    }
}

/**
 * 資料分頁
 *
 * @access   public
 * @param    integer   $nowPage   當前頁數
 * @param    integer   $dataPer   每頁顯示資料筆數
 * @param    integer   $dataNum   資料總筆數
 * @return    array
 */
function get_page($nowPage, $dataPer, $dataNum = 0)
{
    /* 計算總頁數 */
    $totalPage = ceil($dataNum / $dataPer);

    /* 判斷總頁數是否存在 */
    $totalPage = ($totalPage <= 0) ? 1 : $totalPage;

    /* 判斷當前頁數是否存在 */
    $nowPage = ($nowPage <= 0) ? 1 : (($nowPage > $totalPage) ? $totalPage : $nowPage);

    /* 計算上一頁與下一頁對應頁數 */
    $prevPage = ($nowPage - 1 < 1) ? 1 : $nowPage - 1;
    $nextPage = ($nowPage + 1 > $totalPage) ? $totalPage : $nowPage + 1;

    /* 建立頁數陣列 */
    $pages = array('nowPage'   => $nowPage,
                   'totalPage' => $totalPage,
                   'prevPage'  => $prevPage,
                   'nextPage'  => $nextPage,
                   'dataPer'   => $dataPer,
                   'dataNum'   => $dataNum);

    return $pages;
}




/**
 * 分頁連結
 *
 * @access   public
 * @param    array   $pages   分頁陣列
 * @param    string   $url   分頁網址
 * @param    array   $params   查詢字串
 * @param    integer   $pagePer   每頁顯示分頁筆數
 * @return    array
 */
function page_url($pages, $url, $params = array(), $pagePer = 4)
{
    /* 輸出查詢字串 */
    $query = $url. '?';
    foreach ($params as $key => $val) {
        $query .= $key. '=' .urlencode($val). '&';
    }

    /* 判斷分頁是否大於每頁顯示筆數 */
    if ($pages['totalPage'] > $pagePer)
    {
        /* 計算分頁顯示比例 */
        $a = ceil($pagePer / 2);
        $b = $pagePer - $a;
        $x = ($pages['totalPage'] - $pages['nowPage'] <= $b) ? $pages['nowPage'] - $pages['totalPage'] + $b : 0;
        $y = ($pages['nowPage'] <= $a) ? $a - $pages['nowPage'] + 1 : 0;
     
        /* 取得起始與結束分頁 */
        $pageStart = (($pages['nowPage'] - $a <= 1) ? 1 : $pages['nowPage'] - $a) - $x;
        $pageEnd = (($pages['nowPage'] + $b >= $pages['totalPage']) ? $pages['totalPage'] : $pages['nowPage'] + $b) + $y;
    }
    else
    {
        /* 取得起始與結束分頁 */
        $pageStart = 1;
        $pageEnd = $pages['totalPage'];
    }

    /* 建立分頁網址 */
    $pagers = array('firstPage' => $query. 'page=1',
                    'lastPage'  => $query. 'page=' .$pages['totalPage'],
                    'prevPage'  => $query. 'page=' .$pages['prevPage'],
                    'nextPage'  => $query. 'page=' .$pages['nextPage']);

    for ($i = $pageStart; $i <= $pageEnd; $i++) {
        $pagers['url'][$i] = $query. 'page=' .$i;
    }

    return $pagers;
}

// 取得用戶端語系
function get_client_language($availableLanguages, $default='en'){
	if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
	{
		$langs = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);

		foreach ($langs as $value)
		{
			if(in_array($value, $availableLanguages))
			{
				return $value;
			} 
		}
	}
	return $default;
}

function get_zip_html_str($id)
{
    /* 取得影片 */
    $tb = '`channel`';
    $op = "*";
	$act = "`v_id` = '" .$id. "'";
    $video = $GLOBALS['db']->getRow("SELECT $op FROM $tb WHERE $act");

	// 判斷是否為自行上傳的檔案
	if ($video['v_file_name'])
	{
		// 取得副檔名
		$ex_name = explode('.', $video['v_file_name']);

		// flash link 字串
		if ($ex_name[1] == 'swf')
		{
			$link_status = 1;
			$link_str = "<script type=\"text/javascript\">swfobject.embedSWF('" .$video['v_file_name']. "', 'link', '800', '600', '9.0.0', 'expressInstall.swf', {}, {allowfullscreen:true, wmode:'Transparent'}, {id: 'link'});</script>";
		}
		else
		{
			$link_status = 2;
			// wmv link 字串
			$link_str = "<object classid=\"clsid:6BF52A52-394A-11d3-B153-00C04F79FAA6\" id=\"WindowsMediaPlayer\" width=\"800\" height=\"600\">";
			$link_str .= "<param name=\"url\" value=\"".$video['v_file_name']."\">";
			$link_str .= "<param name=\"autoStart\" value=\"true\">";
			$link_str .= "<param name=\"stretchToFit\" value=\"true\">";
			$link_str .= "<param name=\"fullScreen\" value=\"false\">";
			$link_str .= "<embed src=\"".$video['v_file_name']."\" type=\"application/x-ms-wmp\" width=\"800\" height=\"600\" autoStart=\"true\" stretchToFit=\"true\" fullScreen=\"false\" showControls=\"1\"></embed>";
			$link_str .= "</object>";
		}
	}
	else
	{
		$link_status = 3;
		// 外部 flash link 字串
		$link_str = "<script type=\"text/javascript\">swfobject.embedSWF('" .$video['v_link']. "&fs=1', 'link', '800', '600', '9.0.0', 'expressInstall.swf', {}, {allowfullscreen:true, wmode:'Transparent'}, {id: 'link'});</script>";
	}

    /* 寫入設定檔資料 */
    $str = "<html xmlns=\"http://www.w3.org/1999/xhtml\">\n";
    $str .= "<head>\n";
    $str .= "<title>" .WEB_NAME.$video['v_title']. "</title>\n";
    $str .= "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n";
	$str .= ($link_status <> 2 ? "<script type=\"text/javascript\" src=\"swfobject.js\"></script>\n" : '');
	$str .= ($link_status <> 2 ? $link_str."\n" : '');
	$str .= "</head>\n";
    $str .= "<body style=\"margin:0px 0px 0px 0px;\">\n";
    $str .= "<div align=\"center\" style=\"width:100%; height:100%; margin:0px 0px 0px 0px;\">\n";
    $str .= "<div id=\"link\">\n";
	$str .= ($link_status == 2 ? $link_str."\n" : '');
	$str .= "</div>\n";
    $str .= "<div align=\"center\" style=\"width:100%;\">\n";
    $str .= "<input type=\"button\" value=\"關閉視窗\" onclick=\"javascript:window.close();\">\n";
    $str .= "</div>\n";
    $str .= "</div>\n";
    $str .= "</body>\n";

    $str .= "</html>";

    /* 設定檔路徑 */
    $setFile = ROOT_PATH. "file/play_video.html";

    /* 對應檔案讀取、寫入動作 */
    file_put_contents($setFile, $str);
}
?>
