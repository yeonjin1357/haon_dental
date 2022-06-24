<?php
include_once('./_common.php');
// 스킨파일은 단독으로 실행할 수 없다
if(defined('_GNUBOARD_') == false) {
    exit('함수파일은 단독으로 실행할 수 없습니다.');
}
$office_no = ($_GET['office_no'])? $_GET['office_no']:'1';
// 업체 정보(사업자정보 및 예약관련정보등등....)
$sql = "select
			*
		from
			cm_office
		where
			id_no = '".$office_no."' ";
$off = sql_fetch($sql, true);

// 주소창에 office_no를 직접 입력하고 접속시 업체정보가 없는 경우.
if(!is_array($off)) {
	alert("사업자 정보가 존재하지 않습니다..",G5_URL);
}
// 예약설정값
list($start_date, $end_date, $start_time, $end_time, $time_gubun, $time_person) = explode("|",$off['office_booking_time']);
?>