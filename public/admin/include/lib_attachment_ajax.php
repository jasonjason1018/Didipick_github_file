<?php
/* 程式保護機制 */
//if (!defined('IN_ZERO_PLUS'))  die('請使用正常方式連結本網站');

/* 更新附件選單 */
function refresh_attachment_select($target_op, $file_tmp_code)
{
    /* 建立 xajaxResponse 物件 */
    $ajaxObj = new xajaxResponse();
	
	/* 取得附件清單 */
	$tb  = '`workflow_attachment`';
	$op  = "*";
	$act = "`wfa_tmp_code` = '" .$file_tmp_code. "' ORDER BY `wfa_id` DESC";
	$options = $GLOBALS['db']->getAll("SELECT $op FROM $tb WHERE $act");

    /* 清除選項內容 */
	if (empty($options))
	{
		$ajaxObj->script("$('" .$target_op. "').options.length = 0;");
		$ajaxObj->assign($target_op, 'style.width', '24px');
		$ajaxObj->addOption("$('" .$target_op. "')", '', '', false);
		return $ajaxObj;
	}

    /* 判斷有無資料 */
    if (!empty($options))
    {
		$ajaxObj->script("$('" .$target_op. "').options.length = 0;");
		$ajaxObj->assign($target_op, 'style.width', '');

        /* 輸出選項 */
        foreach ($options as $val)
		{
//			$file_name = explode('.', $val['wfa_name']);
//			$file_name[0] = base64_decode($file_name[0]);
//			$val['wfa_name'] = implode('.', $file_name);

            $ajaxObj->addOption("$('" .$target_op. "')", $val['wfa_id'], addslashes($val['wfa_name']), false);
        }
    }
	return $ajaxObj;
}




/* 附件移除 */
function attachment_remove($file_id, $target_op, $file_tmp_code)
{
	/* 建立 xajaxResponse 物件 */
    $ajaxObj = new xajaxResponse();

	if ($file_id == '')
	{
		$ajaxObj->alert('請選擇欲刪除的附件！');
		return $ajaxObj;
	}

	/* 取得表單附件 */
	$tb  = '`workflow_attachment`';
	$op  = "*";
	$act = "`wfa_id` = '" .$file_id. "'";

	$attachment = $GLOBALS['db']->getRow("SELECT $op FROM $tb WHERE $act");

	@unlink('upload_file/' .encrypt('file'). '/' .mb_convert_encoding($attachment['wfa_name'], "big5", "utf-8"));

	$GLOBALS['db']->query("DELETE FROM $tb WHERE $act");

	//$ajaxObj->alert('表單附件刪除完成！');
	$ajaxObj->script("xajax_refresh_attachment_select('".$target_op."', '".$file_tmp_code."');");
	return $ajaxObj;
}
?>
