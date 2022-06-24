<?php
	include_once('../../../common.php');	
	$table = trim($_POST['table']);
	$num = trim($_POST['num']);
	$cencel = trim($_POST['cencel']);
	$cencel == 1 ? $cencel="123456" : $cencel=""; 


	if (!$is_admin) die("{\"result\":\"0\",\"msg\":\"관리자가 아닙니다.\"}");
	
	$wr = get_write($table, $num);
	if (empty($wr['wr_id'])) die("{\"result\":\"0\",\"msg\":\"글이 존재하지 않습니다.\\n글이 삭제되었거나 이동하였을 수 있습니다.\"}");
	
	sql_query(" update $table set wr_9 = '{$cencel}' where wr_id = '$num' ");
	
	$wr = get_write($table, $num);
	if (empty($wr['wr_9'])) die("{\"result\":\"1\",\"msg\":\"승인을 완료하였습니다.\"}");
	else die("{\"result\":\"0\",\"msg\":\"승인이 취소되었습니다.\"}"); 
?>