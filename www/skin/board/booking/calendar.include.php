<?php
include_once('./_common.php');
// 종속파일은 단독으로 실행할 수 없다
if(defined('_GNUBOARD_') == false) {
    exit('종속파일은 단독으로 실행할 수 없습니다.');
}
unset($list);
// 선택일자로부터 필요한 변수를 정의한다
$select = ($select)? $select:G5_TIME_YMD;

list($year, $month, $date) = explode('-', $select);
$start = '01'; // 월의 시작 날자
$end = date('t', strtotime($select . ' 00:00:00')); // 월의 마지막 날자
$limit['min'] = date("Y-m-d", strtotime("{$start_date} day"));
$limit['max'] = date("Y-m-d", strtotime("{$end_date} day"));
list($limit['min'])= array($limit['min']);
list($limit['max'])= array($limit['max']);


// 이전버튼과 다음버튼을 정의한다
$month_first_day = $year."-".$month."-".$start;
$month_last_day = $year."-".$month."-".$end;
$prev = date("Y-m-d", strtotime("-1 day", strtotime($month_first_day)));
$prev_text = substr($prev,0,4)."년 ".substr($prev,5,2)."월";
$next = date("Y-m-d", strtotime("+1 day", strtotime($month_last_day)));
$next_text = substr($next,0,4)."년 ".substr($next,5,2)."월";


// 달력출력에 필요한 변수를 정의한다
$m_start = strtotime($year."-".$month."-".$start);
list($min) = array(date('w', $m_start));
$max = $min + $end;
if($max % 7 > 0) {
    $total = $max + (7 - ($max % 7));
} else {
    $total = $max;
}
$day = 1;
?>
