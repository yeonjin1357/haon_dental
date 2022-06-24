<?php
// 스킨파일은 단독으로 실행할 수 없다
if(defined('_GNUBOARD_') == false) {
    exit('스킨파일은 단독으로 실행할 수 없습니다.');
}
include_once($board_skin_path . '/sql.php'); // 테이블이 정상적으로 설치가 되었다면 파일은 삭제해도 됩니다.
include_once($board_skin_path . '/company_info.php');
include_once($board_skin_path . '/_jquery.php');

// 회사정보변경 URL
$office_edit_url = $board_skin_url.'/office/office_edit.php?bo_table='.$bo_table;
$YMD = ($select)? $select:G5_TIME_YMD; // 달력접속시 날짜 설정.


if($start_date>0 && $end_date > 0) {
	$top_msg = "<span style='color:blue'>".$off['office_name']."</span>의 온라인 예약 가능일은 최소 <span style='color:red'>".$start_date."</span>일후부터 최대 <span style='color:red'>".$end_date."</span>일후까지 가능합니다.";
}
if($start_date==0 && $end_date > 0) {
	$top_msg = "<span style='color:blue'>".$off['office_name']."</span>의 온라인 예약은 <span style='color:red'>당일예약</span>이 가능하며, 최대 <span style='color:red'>".$end_date."</span>일후까지 가능합니다.";
}
if($start_date>0 && $end_date == 0) {
	$top_msg = "<span style='color:blue'>".$off['office_name']."</span>의 온라인 예약 가능일은 최소 <span style='color:red'>".$end_date."</span>일후부터 가능합니다.";
}
if($start_date==0 && $end_date == 0) {
	$top_msg = "<span style='color:blue'>".$off['office_name']."</span>의 온라인 예약은 <span style='color:red'>당일 예약</span>이 가능합니다.";
}


?>
<div id="dialog_booking" style="display:none;z-index:1000;">
	<iframe id="ifm_booking" width="100%" height="99%"  marginwidth="0" marginheight="0" frameborder="0" scrolling="auto"></iframe>
</div><!-- dialog 팝업용 -->

<script src="<?php echo $board_skin_url; ?>/script.js"></script>
<link rel="stylesheet" href="<?php echo $board_skin_url; ?>/style.css">

<script>
var board_skin_url = "<?php echo $board_skin_url; ?>";
var board_skin_path = "<?php echo $board_skin_path; ?>";
var off = <?php echo json_encode($off); ?>;

$(document).ready(function() {

	// 페이지 접속시 최초 실행
	var today = "<?php echo $YMD; ?>";
	var office_no = "<?php echo $office_no; ?>";
	var cal_day = today.split('-');
	$('span.center_today').text(cal_day[0]+'년 '+cal_day[1]+'월');
	calPage(today, office_no);

	// 년월 클릭시.
	$('span.center_today').click(function() {
		calPage(today, office_no);
		$('span.center_today').text(cal_day[0]+'년 '+cal_day[1]+'월');
	});

	var ss = "<i class='fa fa-home hand' aria-hidden='true' style='font-size:20px;' onclick=\"location.href='<?php echo G5_URL; ?>';\"></i> 온라인예약 - <?php echo $off['office_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-phone-square' aria-hidden='true'></i> <?php echo $off['office_tel'];?> ";
	$("#container_title span").html(ss);

});
</script>

<div id="mara_cal">

	<div class="title">
		<span class="prev_text"></span>
		<span class="center_today" title="오늘날짜로 이동"></span>
		<span class="next_text"></span>
    </div>

	<div class="top_msg"><?php echo $top_msg; ?></div>
	<div class="interval_switch">
		<span id="cal_wide" class="cal_wide_on">확장</span>
		<?php if($is_admin) { ?>
			<span class="office_edit" onclick='go_edit("<?php echo $office_edit_url;?>");'>회사정보변경</span>
			<span id="set_interval" class="interval_off"></span><!-- 스위치 -->
		<?php } ?>
	</div>

	<div id="cal_zone"><!--달력 LOAD--></div>
</div>