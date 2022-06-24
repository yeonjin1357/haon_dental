<?php
if(defined('_GNUBOARD_') == false) {
    exit('스킨파일은 단독으로 실행할 수 없습니다.');
}

// 업체정보 테이블
@sql_query(
"CREATE TABLE IF NOT EXISTS `cm_office` (
  `id_no` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `mb_id` varchar(50) NOT NULL,
  `office_name` varchar(50) NOT NULL DEFAULT '',
  `office_email` varchar(100) DEFAULT NULL,
  `office_tel` varchar(100) DEFAULT NULL,
  `office_hp` varchar(20) DEFAULT NULL,
  `office_fax` varchar(255) DEFAULT NULL,
  `office_zip` varchar(7) DEFAULT NULL,
  `office_addr1` varchar(100) DEFAULT NULL,
  `office_addr2` varchar(50) NOT NULL DEFAULT '',
  `office_addr3` varchar(50) NOT NULL,
  `office_addr_jibeon` int(255) NOT NULL,
  `office_ceo` varchar(100) DEFAULT NULL,
  `office_license` varchar(100) DEFAULT NULL,
  `office_uptae` varchar(255) DEFAULT NULL,
  `office_jongmok` varchar(255) DEFAULT NULL,
  `office_sms_admin` int(1) NOT NULL,
  `office_sms_user` int(1) NOT NULL,
  `office_booking_time` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_no`)
  )", TRUE
);

// 정기휴무일설정 테이블
@sql_query(
"CREATE TABLE IF NOT EXISTS `cm_holiday` (
	`id_no` int(11) NOT NULL AUTO_INCREMENT,
	`mb_id` varchar(50) NOT NULL,
	`section` tinyint(1) NOT NULL,
	`yoil` tinyint(1) NOT NULL,
	`initial` date NOT NULL,
	PRIMARY KEY (`id_no`)
	)", FALSE
);

// 임시휴무 및 예약시간제외 설정 테이블
@sql_query(
"CREATE TABLE IF NOT EXISTS `{$write_table}_sub` (
	`id_no` int(11) NOT NULL AUTO_INCREMENT,
	`mb_id` varchar(50) NOT NULL,
	`office_no` tinyint(1) NOT NULL,
	`ex_date` date NOT NULL,
	`ex_kind` int(1) NOT NULL,
	`ex_except` varchar(255) NOT NULL,
	PRIMARY KEY (`id_no`)
	)", FALSE
);

// 사업자정보 샘플 INSERT : mb_id의 'admin'을 관리자아이디로 변경해주세요. (필수)
@sql_query(
"INSERT INTO
	`cm_office`
set
	`id_no` = '1',
	`mb_id` = 'admin',
	`office_name` = '나사풀린카센타',
	`office_email` = 'admin@yourdomain.com',
	`office_tel` = '02-6666-6666',
	`office_hp` = '010-9999-9999',
	`office_fax` = '02-7777-7777',
	`office_zip` = '03048',
	`office_addr1` = '서울 종로구 청와대로 1',
	`office_addr2` = '1층',
	`office_addr3` = '(세종로)',
	`office_addr_jibeon` = '0',
	`office_ceo` = '홍길동',
	`office_license` = '123-45-67890',
	`office_uptae` = '자동차종합수리업',
	`office_jongmok` = '1',
	`office_sms_admin` = '1',
	`office_sms_user` = '서비스',
	`office_booking_time` = '0|15|10|16|1|2'
	", FALSE
);

?>