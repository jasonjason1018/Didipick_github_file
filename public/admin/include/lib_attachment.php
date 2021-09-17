<?php
/* 程式保護機制 */
if (!defined('IN_ZERO_PLUS'))  die('請使用正常方式連結本網站');

/* 新增送簽附件 */
function add_attachment($file_tmp_code, $wffs_id, $wfs_id, $file_name, $file_size)
{
	$tb		= "`workflow_attachment`";
	$input = "`wfa_wffs_id`, `wfa_wfs_id`, `wfa_name`, `wfa_size`, `wfa_editor_id`, `wfa_edit_time`, `wfa_tmp_code`";

	$value	= "'" .($wffs_id <> '' ? $wffs_id : 0). "', ";
	$value	.= "'" .($wfs_id <> '' ? $wfs_id : 0). "', ";
	$value	.= "'" .$file_name. "', ";
	$value	.= "'" .$file_size. "', ";
	$value	.= "'" .$_SESSION['person']['id']. "', ";
	$value	.= "'" .time(). "', ";
	$value	.= "'" .$file_tmp_code. "'";

	$GLOBALS['db']->query("INSERT INTO $tb ($input) VALUES ($value)");
}




/* 更新送簽附件 */
function update_attachment($file_tmp_code, $wffs_id, $wfs_id)
{
	$tb		= "`workflow_attachment`";
	$act	= "`wfa_tmp_code` = '" .$file_tmp_code. "'";

	$fix	= "`wfa_wffs_id` = '" .$wffs_id. "', ";
	$fix	.= "`wfa_wfs_id` = '" .$wfs_id. "', ";
	$fix	.= "`wfa_tmp_code` = NULL";
	
	$GLOBALS['db']->query("UPDATE $tb SET $fix WHERE $act");
}




/* 取得所有附件 */
function get_all_attachment($wffs_id, $wfs_id)
{
	/* 取得所有附件 */
	$tb  = '`workflow_attachment`';
	$op  = "*";
	$act = "`wfa_wffs_id` = '" .$wffs_id. "' AND `wfa_wfs_id` = '" .$wfs_id. "' ORDER BY `wfa_id` ASC";

	$all_attachment = $GLOBALS['db']->getAll("SELECT $op FROM $tb WHERE $act");

	return $all_attachment;
}




/* 移除使用者所有暫存附件 */
function all_temp_attachment_remove($user_id)
{
	/* 取得表單附件 */
	$tb  = '`workflow_attachment`';
	$op  = "*";
	$act = "`wfa_editor_id` = '" .$user_id. "' AND `wfa_tmp_code` IS NOT NULL";

	$attachment_remove = $GLOBALS['db']->getAll("SELECT $op FROM $tb WHERE $act");

	foreach ($attachment_remove as $val)
	{
		@unlink('upload_file/' .encrypt('file'). '/' .mb_convert_encoding($val['wfa_name'], "big5", "utf-8"));
	}

	$GLOBALS['db']->query("DELETE FROM $tb WHERE $act");
}




/* 移除使用者所有附件 */
function all_attachment_remove($wfs_id, $user_id)
{
	/* 取得表單附件 */
	$tb  = '`workflow_attachment`';
	$op  = "*";
	$act = "`wfa_wfs_id` = '" .$wfs_id. "' AND `wfa_editor_id` = '" .$user_id. "'";

	$attachment_remove = $GLOBALS['db']->getAll("SELECT $op FROM $tb WHERE $act");

	foreach ($attachment_remove as $val)
	{
		@unlink('upload_file/' .encrypt('file'). '/' .mb_convert_encoding($val['wfa_name'], "big5", "utf-8"));
	}

	$GLOBALS['db']->query("DELETE FROM $tb WHERE $act");
}




/* 附件下載 */
function attachment_download($file_id, $wffs_id)
{
	/* 取得送簽表單附件 */
	$tb  = '`workflow_attachment`';
	$op  = "*";
	$act = "`wfa_id` = '" .$file_id. "' AND `wfa_wffs_id` = '" .$wffs_id. "'";

	$form_attachment = $GLOBALS['db']->getRow("SELECT $op FROM $tb WHERE $act");

	$filePath  = 'upload_file/'.encrypt('file').'/';

	$args = array(
			'download_path'		=>	$filePath,
			'file'				=>	mb_convert_encoding($form_attachment['wfa_name'], "big5", "utf-8"),
			'rename'			=>	FALSE,
			'extension_check'	=>	TRUE,
			'referrer_check'	=>	FALSE,
			'referrer'			=>	NULL,
			);

	$download = new chip_download($args);

	$download_hook = $download->get_download_hook();

	if( $download_hook['download'] == TRUE )
	{
		$download->get_download();
	}
	else
	{
		$download->chip_print($download_hook);
	}
}
?>