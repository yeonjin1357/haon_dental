<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/icode.sms.lib.php');

// 코멘트 등록시 관리자에게 전송

$sms_hp =  $write['wr_7'].$write['wr_8'].$write['wr_9']; //입력전번저장db명
$send_hp_mb = "01040157522"; // 보내는 전화번호
$recv_hp_mb = "$sms_hp"; // 받는 전화번호
$send_hp = str_replace("-","",$send_hp_mb); // - 제거
$recv_hp = str_replace("-","",$recv_hp_mb); // - 제거
$send_number = "$send_hp";
$recv_number = "$recv_hp";
$sms_content = $wr_name."님의 답변이 올라왔습니다."; // 문자 내용
$SMS = new SMS; // SMS 연결
$SMS->SMS_con($config['cf_icode_server_ip'], $config['cf_icode_id'], $config['cf_icode_pw'], $config['cf_icode_server_port']);
$SMS->Add($recv_number, $send_number, $config['cf_icode_id'], iconv("utf-8", "euc-kr", stripslashes($sms_content)), "");
$SMS->Send();

alert("글쓴이에게 문자알림 전송완료.", "./board.php?bo_table=$bo_table&wr_id=$wr_id");

// 문자보내기 끝
 

?>