<?
include_once("./_common.php");

// 삭제 =================================
if($_POST['mode'] == "del") {

	sql_query("delete from cm_holiday where id_no = '".$_POST['id_no']."' ", true);
	$msg = array(
			"rst" => "OK"
		);
	echo json_encode($msg);
	exit;
}
//  삭제 끝 =================================

include_once(G5_PATH.'/head.sub.php');
include_once('../skin.function.php');

if(!$is_admin) {
	exit;
}

switch($_POST['mode']) {

		case "new" : // 신규등록

			// 신규등록시 이미 동일한 자료가 등록되어 있는지 검사.
			$sql = "select
						count(*) as cnt
					from
						cm_holiday
					where
						mb_id	= '".$member['mb_id']."'
						and section	= '".$_POST['section']."'
						and yoil = '".$_POST['yoil']."'
						and initial = '".$_POST['initial']."' ";
			$rs = sql_fetch($sql, true);
			if($rs['cnt']>0) {
				alert("이미 동일한 조건으로 정기휴무일 자료가 존재합니다.");
			}

			$sql = "insert into
						cm_holiday
					set
						mb_id	= '".$member['mb_id']."',
						section	= '".$_POST['section']."',
						yoil	= '".$_POST['yoil']."',
						initial	= '".$_POST['initial']."' ";
			sql_query($sql, true);
			$id_no = sql_insert_id();
		break;

		case "save" : // 수정
			$sql = "update
						cm_holiday
					set
						section	= '".$_POST['section']."',
						yoil	= '".$_POST['yoil']."',
						initial	= '".$_POST['initial']."'
					where
						id_no = '".$_POST['id_no']."' ";
			sql_query($sql, true);
			$id_no = $_POST['id_no'];

		break;

}

if($id_no) {

	$sql = "select
				*
			from
				cm_holiday
			where
				id_no = '".$id_no."' ";
	$rs = sql_fetch($sql);
}

/* 정기휴무 배열 - skin.function.php 에 선언 */
$sec_txt = implode("|", $HOLIDAY_SECTION); // 정기휴무구분 - 요소의 값
$sec_val = implode("|", array_keys($HOLIDAY_SECTION)); // 정기휴무구분 - 요소의 키

/* 요일 배열 - skin.function.php 에 선언 */
$yo_txt = implode("|", $HOLIDAY_YOIL); // 요일 - 요소의 값
$yo_val = implode("|", array_keys($HOLIDAY_YOIL)); // 요일 - 요소의 키

include_once($board_skin_path.'/_jquery.php');
?>
<script>
$(function() {
		/* 달력 끝 */
	$(".initial").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: "yy-mm-dd",
		showButtonPanel: true,
		yearRange: "c-5:c+10",
		minDate: "-365",
		maxDate: "+365"
	});
	/* 달력 끝 */


	$("#section").on("click", "input", function() {
		var sec = $("#section input").index(this);
		$("#section label").css({"color":""});
		$("#section label").eq(sec).css({"color":"red"});
	});

	$("#yoil").on("click", "input", function() {
		var sec = $("#yoil input").index(this);
		$("#yoil label").css({"color":""});
		$("#yoil label").eq(sec).css({"color":"red"});
	});

	var idx = "<?php echo $id_no; ?>";
	if(idx) {
		var section = "<?php echo $rs['section']; ?>";
		var yoil = "<?php echo $rs['yoil']; ?>";
		$("#section label").eq(section).css({"color":"red"});
		$("#yoil label").eq(yoil).css({"color":"red"});
	}
});
</script>
<link rel="stylesheet" href="<?php echo $board_skin_url; ?>/office/office.css">

<div id="holiday_write">
	<form name="fmData" method="post">
	<input type="hidden" name="mode" value="<?php echo ($id_no)? "save":"new"; ?>" />
	<input type="hidden" name="id_no" class="id_no" value="<?php echo $rs['id_no']; ?>" />
	<input type="hidden" name="mb_id" class="mb_id" value="<?php echo $member['mb_id']; ?>" />

	<table>
		<caption>※ 반복되는 휴무일을 설정할 수 있습니다.</caption>
		<colgroup>
			<col width="15%" />
			<col width="85%" />
		</colgroup>
		<tr>
			<th>구분선택</th>
			<td>
				<div id="section"><?php echo radio($sec_txt, $sec_val , $rs['section'], 'section'); ?></div>
			</td>
		</tr>
		<tr>
			<th>요일선택</th>
			<td>
				<div id="yoil"><?php echo radio($yo_txt, $yo_val , $rs['yoil'], 'yoil'); ?></div>
			</td>
		</tr>
		<tr>
			<th>기준일자</th>
			<td><input type="text" name="initial" class="initial width80" value="<?php echo $rs['initial']; ?>" readonly required />
				<br/>* 가장 최근에 휴무한 날짜를 달력에서 선택해 주세요.
			</td>
		</tr>
	</table>

	<ul class="help">
		<li>매월 반복 또는 매년 반복은 요일선택과 무관하게 기준일자에 적용되므로 요일은 아무거나 선택하면 됩니다.</li>
		<li></li>
	</ul>

	<div class="button_zone">
		<button type="submit" id="btn_submit" class="btn_submit">저장</button>&nbsp;&nbsp;
	</div>
	</form>
</div>