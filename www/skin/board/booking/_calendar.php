<?php
include_once('./_common.php');


// 스킨파일은 단독으로 실행할 수 없다
if(defined('_GNUBOARD_') == false) {
    exit('스킨파일은 단독으로 실행할 수 없습니다.');
}

// 예약설정값
list($start_date, $end_date, $start_time, $end_time, $time_gubun, $time_person) = explode("|",$off['office_booking_time']);

include_once($board_skin_path.'/calendar.include.php');
include_once($board_skin_path . '/skin.function.php');

// 임시공휴일 및 예약시간제외 관련 배열
$holiday = holiday_array($month_first_day, $month_last_day, $office_no);

// 예약현황 배열
$booking = booking_array($month_first_day, $month_last_day, $office_no);
$holiday_title = ($is_admin)? "title='임시휴무일 및 예약시간제외 설정'":"";
?>
<input type="hidden" name="min" class="cal_min" value="<?php echo $limit['min'];?>" />
<input type="hidden" name="max" class="cal_max" value="<?php echo $limit['max'];?>" />
<input type="hidden" name="prev" class="cal_prev" value="<?php echo $prev; ?>" />
<input type="hidden" name="next" class="cal_next" value="<?php echo $next; ?>" />
<input type="hidden" name="office_no" class="office_no" value="<?php echo $office_no;?>" />
<input type="hidden" name="ym" class="cal_ym" value="<?php echo $year.'-'.$month.'-'; ?>" />

	<table>
	    <caption>온라인정비 예약 현황</caption>
		<colgroup>
			<col width="15%">
			<col width="14%">
			<col width="14%">
			<col width="14%">
			<col width="14%">
			<col width="14%">
			<col width="15%">
		</colgroup>
	    <thead>
		    <tr>
		        <th class="red">일요일</th>
		        <th>월요일</th>
		        <th>화요일</th>
		        <th>수요일</th>
		        <th>목요일</th>
		        <th>금요일</th>
		        <th class="blue">토요일</th>
		    </tr>
	    </thead>
	    <tbody>
		    <tr>
		    <?php
			for($i = 0; $i < $total; $i++) {
				if($i>0 && $i%7 == 0){ echo '</tr><tr>'; }
				if($i >= $min && $i < $max) {
					$var = "{$year}-{$month}-" . sprintf('%02d', $day); // 달력 날짜(년-월-일로 변환).
					$yoil = date('w', strtotime($var)); // 요일 번호 추출
					list($y, $bg) = yoil_class($yoil); // 요일별 글자색상과 배경색에 관련된 class 명
					if(G5_TIME_YMD == $var) { $bg = 'today_td'; } // 오늘이면 배경색 변경
					echo '<td class="'.$bg.'">';
					echo '<ul class="day_title">';
						list($holiday_info, $booking_info) = day_info($var, $day, $limit['min'], $limit['max']);
						echo $holiday_info;
					echo "</ul>";
					echo "<ul class='m_list'>";
						echo $booking_info;
					echo '</ul>';
					echo '</td>';
				    $day++;
				} else {
					echo '<td class="null">&nbsp;</td>';
				}
			}
			?>
			</tr>
		</tbody>
	</table>