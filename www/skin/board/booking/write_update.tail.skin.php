<?php
// 스킨파일은 단독으로 실행할 수 없다
if(defined('_GNUBOARD_') == false) {
    exit('스킨파일은 단독으로 실행할 수 없습니다.');
}

//print_r2($_POST);
// ca_name 에 cm_office.id_no 값이 들어갑니다. (다수 업체 동시 사용시 필요)
$sql = "update
			{$write_table}
		set
			wr_option = 'HTML',
			ca_name	= '".$_POST['ca_name']."',
			wr_homepage = '".$_POST['wr_homepage']."',
			wr_8 = '".$_POST['agree']."'
		where
			wr_id = '".$wr_id."'";
sql_query($sql,true);
delete_cache_latest($bo_table);

// 최초 예약시에만 SMS 발송
if(!$w) {

	// SMS 발송을 위한 업체정보 불러오기
	$sql = "select
				mb_id,
				office_tel,
				office_hp,
				office_sms_admin,
				office_sms_user
			from
				cm_office
			where
				id_no = '".$_POST['ca_name']."' ";
	$row = sql_fetch($sql, true);

	include_once(G5_LIB_PATH.'/icode.lms.lib.php');
	$sms_type = $config['cf_sms_type'];
	//$send_number = str_replace("-","",$row['office_tel']); // 보내는 번호 '-' 제거
	$send_number = str_replace("-","",$row['office_tel']); // 보내는 번호 '-' 제거 (관리자휴대폰또는 회사일반전화로 지정)
	$recv_number = str_replace("-","",$row['office_hp']); // 받는 번호 (관리자휴대폰)

	// 예약시 문자는 관리자휴대폰과 예약자휴대폰으로 총 2개의 문자메세지가 발송됩니다.
	$strDestA = array();
	$strDestB = array();
	$strDestA[0] = $recv_number; // 받는번호 (관리자휴대폰)
	$strDestB[0] = $_POST['wr_homepage']; // 받는번호 - 예약자휴대폰번호

	$sms_msg = "[온라인 예약알림]\r\n";
	$sms_msg .= "일자:".$_POST['select']."\r\n";
	$sms_msg .= "전화:".$_POST['wr_homepage']."\r\n";
	$sms_msg .= "☞ ".$_POST['wr_subject']."\r\n";
	$sms_msg .= "☞ ".$_POST['wr_4'];
	$sms_content =$sms_msg;  // 문자 내용

	$SMS = new LMS; // SMS 연결
	$port_setting = get_icode_port_type($config['cf_icode_id'], $config['cf_icode_pw']);
	$SMS->SMS_con($config['cf_icode_server_ip'], $config['cf_icode_id'], $config['cf_icode_pw'], $port_setting);

	// 관리자에게 문자 발송.
	if($row['office_sms_admin']==1) {
		$SMS->Add($strDestA, $send_number, $config['cf_icode_id'],"","", iconv("utf-8", "euc-kr", stripslashes($sms_content)), "","1");
		$SMS->Send();
	}

	// 예약자에게 문자 발송.
	if($row['office_sms_user']==1) {
		$SMS->Add($strDestB, $send_number, $config['cf_icode_id'],"","", iconv("utf-8", "euc-kr", stripslashes($sms_content)), "","1");
		$SMS->Send();
	}

	$SMS->Init();
} // SMS 발송 끝.
goto_url(G5_BBS_URL.'/board.php?bo_table='.$_POST['bo_table'].'&amp;office_no='.$_POST['ca_name'].'&amp;select='.$_POST['select']);
?>