<?php
	include_once('../../../common.php');	
	if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
	$write_table = trim($_POST['write_table']);
	$wr_id = trim($_POST['wr_id']);
	$type = trim($_POST['type']);

	//if (!$is_admin) die("{\"result\":\"0\",\"msg\":\"관리자가 아닙니다.\"}");
	
	$wr = get_write($write_table, $wr_id);
	if (empty($wr['wr_id'])) die("{\"result\":\"0\",\"msg\":\"글이 존재하지 않습니다.\\n글이 삭제되었거나 이동하였을 수 있습니다.\"}");
	sql_query(" update $write_table set wr_7 = '{$type}' where wr_id = '$wr_id' ");
	$wr = get_write($write_table, $wr_id);
	if ($wr['wr_7']==$type && $type == 2) die("{\"result\":\"1\",\"msg\":\"승인을 완료하였습니다.\"}");
	else if($wr['wr_7']==$type && $type == 3) die("{\"result\":\"1\",\"msg\":\"승인이 취소되었습니다.\"}"); 
	else die("{\"result\":\"0\",\"msg\":\"작업을 완료하지 못했습니다. 관리자에게 문의하세요.\"}");
?>