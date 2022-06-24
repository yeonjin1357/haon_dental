<?php
	include_once('../../../common.php');	
	if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
	$write_table = trim($_POST['write_table']);
	$wr_id = trim($_POST['wr_id']);
	$date = trim($_POST['date']);
	$pr_id = trim($_POST['pr_id']);
	//if (!$is_admin) die("{\"result\":\"0\",\"msg\":\"관리자가 아닙니다.\"}");	
	$wr = get_write($write_table, $wr_id);
	
    /* 	
	$sql = "  select wr_8 
	               from $write_table 
	          where 
	               wr_id != '$wr_id' and
	               wr_parent = '{$wr['wr_parent']}' and
	               wr_9 = '{$date}' and
	               wr_7 = '2';
	";
	
	
	 */
	$sql = "  select wr_8
	           from $write_table
	       where
	           wr_parent = '$pr_id' and
	        wr_9 = '{$date}' and
	       (wr_7 = '2'and wr_id != '{$wr_id}');
	";
	
	$result = sql_query($sql);
	
	$json = array();

	$i=0;
	while ($row = sql_fetch_array($result)){
	    $json['option'][$i]= json_decode($row['wr_8']);
	    $i++;
	}
	
	$json['add']=json_decode($wr['wr_6']);
    die(json_encode($json));
?>