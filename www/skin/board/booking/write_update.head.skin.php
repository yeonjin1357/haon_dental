<?php

// 스킨파일은 단독으로 실행할 수 없다
if(defined('_GNUBOARD_') == false) {
    exit('스킨파일은 단독으로 실행할 수 없습니다.');
}

// 예약작업
//if(count($jobs)>0) {
//	foreach($jobs as $value) {
//		$wr_5 .= "|".$value[0];
//	}
//	$wr_5 = substr($wr_5,1);   // 선택한 작업 리스트
//}
if(is_array($jobs)) {
	$wr_5 = implode("|", $jobs);
}

$wr_option = 'secret'; // 모든 등록되는 글은 비밀글로 등록.
//print_r2($_POST);
//print_r2($wr_5);
//exit();
?>
