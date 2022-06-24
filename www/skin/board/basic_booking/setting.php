<?php 
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
$sql = "SHOW COLUMNS FROM {$write_table} LIKE 'wr_10'";
$setting = sql_fetch($sql);
//echo $board_skin_path;
if($setting['Type']!="text"){
	$sql ="ALTER TABLE {$write_table} CHANGE wr_10 wr_10 TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;";
	sql_query($sql);
}
?>