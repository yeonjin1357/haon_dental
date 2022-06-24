<?php
// 스킨파일은 단독으로 실행할 수 없다
if(defined('_GNUBOARD_') == false) {
    exit('스킨파일은 단독으로 실행할 수 없습니다.');
}

// 게시판아이디체크
if(!$office_no) {
	alert("정비업체를 선택하지 않으셨습니다.");
}

if(!$select) {
	alert("예약 날짜를 선택하지 않으셨습니다.");
}

//$office_no = ($office_no)? $office_no:$_SESSION['ss_office_no'];
//$select = ($select)? $select:$_SESSION['ss_select'];

include_once($board_skin_path . '/company_info.php');
include_once($board_skin_path.'/skin.function.php'); // 함수모음

// URL에서 직접 입력하고 접속시 휴무일인지 체크 ($booking_holiday = 업체휴무일 배열, $select = 달력상의 날짜.);
$office_yoil = closed_Day($booking_holiday, $select); // 휴무일이면 0~6 반환, 휴무일이 아니면 X 반환
if($office_yoil!="X") {
	//alert("선택한 날짜는 정기 휴무일입니다.\\n예약가능한 날짜를 선택해 주세요.", G5_BBS_URL."/board.php?bo_table=booking&office_no={$office_no}");
	exit;
}

// 임시공휴일인지 체크
$chk = holiday_check($select);
if($chk == 'true') {
	alert("[ ".$select." ]은 임시휴일이므로 예약을 하실 수 없습니다.");
}

// 선택한 날짜가 예약가능한 날짜인가를 체크
$booking_min = date("Y-m-d", strtotime("{$start_date} day")); //예약 시작 일자.
$booking_max = date("Y-m-d", strtotime("{$end_date} day"));  // 예약 마감일자.

// 오늘날짜가 예약가능한날짜 사이에 있는지 체크
if($select < $booking_min || $select > $booking_max) {
	alert("선택한 날짜는 예약할 수 없습니다.\\n달력에서 예약가능한 날짜를 선택해 주세요.", G5_BBS_URL."/board.php?bo_table={$bo_table}&office_no={$office_no}");
}


## 기타작업
$jobs_01_sub = "기타 작업";
$jobs_01 = "타이밍벨트세트교환|타이밍체인세트교환|롱벨로우즈교환|겉벨트교환|워셔액 보충|자동차정기검사대행|기어오일교환(전륜)|기어오일교환(후륜)";

## 엔진오일
$jobs_02_sub = "엔진오일관련계통";
$jobs_02 = "엔진오일세트(5W40 100% 합성유)|엔진오일세트(5W30 100% 합성유)|엔진오일세트(5W30 반합성유)|엔진오일세트(0W20 100% 합성유)|엔진오일세트(10W30 FMX)|엔진오일세트(일반광유)|엔진오일세트(100%합성유)|엔진오일 플러싱(첨가제)|엔진오일누유방지제(첨가제)|엔진코팅제(첨가제)|매연감소첨가제(첨가제)";

## 미션계통
$jobs_03_sub = "미션계통";
$jobs_03 = "오토미션오일교환(ATF 100% 합성유)|오토미션오일교환(ATF DEXRON6)|오토미션오일교환(일반)|오토미션오일교환(5단이상/전용오일)|쏠레노이드 크리닝|미션오일누유방지제(첨가제)";

## 인젝터/흡기/점화장치
$jobs_04_sub = "인젝터/흡기/점화장치";
$jobs_04 = "흡기카본크리닝(약품식/DOHC)|흡기카본크리닝(약품식/SOHC)|흡기카본크리닝(약품식/V6)|흡기카본크리닝(탈착식/DOHC)|흡기카본크리닝(탈착식/SOHC)|흡기카본크리닝(탈착식/V6)|연소실 크리닝|예열플러그교환(비품)|예열플러그교환(정품)|인젝터교환(디젤/재생)|인젝터교환(디젤/정품)|인젝터크리닝(가솔린)|인젝터크리닝(디젤)";

## 냉각계통
$jobs_05_sub = "에어콘/히터/냉각계통";
$jobs_05 = "에어컨 에바 크리닝|에어컨 가스 교환|에어컨 라인 크리닝|항균필터 교환|에어컨 냉매오일 교환|에어콘콤푸레샤교환(재생)|에어콘콤푸레샤교환(정품)|부동액 교환|라지에다 플러싱(첨가제)|부동액 누수 방지제(첨가제)|부동액 윤활제(첨가제)";

## 조향/제동장차 관련
$jobs_06_sub = "조향/제동장치 계통";
$jobs_06 = "브레이크라이닝(앞)|브레이크라이닝(뒤)|브레이크액교환(DOT3)|브레이크액교환(DOT4)|브레이크패드교환(전/정품)|브레이크패드교환(후/정품)|브레이크패드교환(전/비품)|브레이크패드교환(후/비품)|휠 얼라이먼트|파워핸들오일교환|타이어위치교환|타이어교환(신품)|드럼연마(점검필요)";

## 연료계통
$jobs_07_sub = "연료계통";
$jobs_07 = "연료 고압 펌프 교환(재생)|연료 고압 펌프 교환(정품)|연료라인 크리닝|연료필터 교환|연료계통점검|연료첨가제(가솔린)|연료첨가제(디젤)";

## 전기장치계통
$jobs_08_sub = "전기장치계통";
$jobs_08 = "플러그배선세트교환(DOHC)|플러그배선세트교환(SOHC)|플러그배선세트교환(V6)|발전기 교환(재생)|발전기 교환(정품)|밧데리교환|각종 전기장치 점검";

list($year, $month, $day) = explode("-",$select);
$toDay = $year."년 ".$month."월 ".$day."일";

?>
<script>
var g5_bbs_skin_url = "<?php echo $board_skin_url; ?>";

$(document).ready(function(){

	var ss = "<i class='fa fa-home hand' aria-hidden='true' style='font-size:20px;' onclick=\"location.href='<?php echo G5_URL; ?>';\"></i> 온라인 정비 예약 - <?php echo $off['office_name']; ?> 예약하기&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-phone-square' aria-hidden='true'></i> <?php echo $off['office_tel'];?> ";
	$("#container_title span").html(ss);

	$(".car_id").change(function(){
		var car_name = $(".car_id option:selected").text();
		console.log(car_name);
		var car_no = car_name.split(' [ ')[0];
		var car_name = car_name.split(' [ ')[1].split(' ]')[0];
		console.log(car_no);
		console.log(car_name);
		$(".wr_subject").val(car_no);
		$(".wr_4").val(car_name);
	});

	/* 달력 끝 */
	var start_date = '<?php echo $start_date; ?>';
	var end_date = '<?php echo $end_date; ?>';
	if(end_date==0) { end_date =""; } // 예약 마지막날이 0이면 예약 제한 없음.
	//$(".booking_date").datepicker({ changeMonth: true, changeYear: true, dateFormat: "yy-mm-dd", showButtonPanel: true, yearRange: "c-3:c+3", minDate: start_date, maxDate: end_date });
	/* 달력 끝 */

	$(".time_bg input[name='wr_2']").on("click", function() {
		var idx = $(".time_bg input[name='wr_2']").index(this);
		//var sec = $(this).index();
		$(".time_bg label").css({"color":"", "background":""});
		$(".time_bg label").eq(idx).css({"color":"#ffffff", "background":"#dd6666"});
	});

	var wr_id = "<?php echo $wr_id; ?>";
	if(wr_id) {
		//$('input[name=""]').each(function(){});
	}

});
</script>
<script src="<?php echo $board_skin_url; ?>/script.js"></script>
<link rel="stylesheet" href="<?php echo $board_skin_url; ?>/style.css">

<div id ="mara_view">
	<form name="fwrite" id="mara_write" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
	<input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
	<input type="hidden" name="w" value="<?php echo $w; ?>">
	<input type="hidden" name="wr_id" id="wr_id" value="<?php echo $wr_id; ?>">
	<input type="hidden" name="ca_name" value="<?php echo $office_no; ?>">
	<input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>">
	<input type="hidden" name="select" value="<?php echo $select; ?>">
	<input type="hidden" name="wr_content" value="<?php echo $off['office_name']; ?> 예약">

	<ol class="explain">
		<li>온라인 정비예약을 하면 정비업체 방문후 대기시간 없이 바로 정비를 받을 수 있어 편리합니다.</li>
		<li>정비수리가 아닌 일반적인 점검을 받고자 할경우에도 예약을 하면 빠른 서비스를 받을 수 있습니다.</li>
		<li>예약완료후 개인적인 사유로 정비업체에 방문 하지 못할 경우 반드시 예약업체에 연락주시기 바랍니다.</li>
	</ol>

	<table>
		<colgroup>
			<col width="13%" />
			<col width="37%" />
			<col width="13%" />
			<col width="37%" />
		</colgroup>
		<tbody>
		<tr>
			<th>예약업체명</th>
			<td class="office_name" colspan="3">
				<?php echo $off['office_name']; ?>
				( <i class='fa fa-phone-square' aria-hidden='true'></i> <?php echo $off['office_tel'];?> / <i class='fa fa-fax' aria-hidden='true'></i> <?php echo $off['office_fax'];?> )
			</td>
		</tr>
		<tr>
			<th>예약일자</th>
			<td colspan="3">
				<i class='fa fa-clock-o' aria-hidden='true'></i>
				<?php echo ($write['wr_1'])? $write['wr_1']:$toDay; ?>
				<input type="hidden" name="wr_1" class="wr_1" value="<?php echo ($write['wr_1'])? $write['wr_1']:$select; ?>" readonly />
			</td>
		</tr>
		<tr>
			<th>예약시간</th>
			<td class="time_bg" colspan="3">
				<?php if($time_person > 0) { //시간대별 예약인원 제한일경우.. ?>
					<div style="height:auto;padding-top:8px;line-height:160%">
						※ 예약 시간대별 최대 예약가능한 인원은 <span style="color:red;"><?php echo $time_person;?></span>명입니다.<br/>
						※ 예약시간 옆 괄호안의 숫자는 현재 예약 수 입니다.
					</div>
				<?php } ?>
				<?php
					$am = booking_time($bo_table, $select); // 예약가능한시간대별리스트
					//print_r2($am);
					echo radio_time($am,$am,$write['wr_2'],'wr_2');
				?>
			</td>
		</tr>
		<tr>
			<th>이름</th>
			<td><input type="text" name="wr_name" value="<?php echo $member['mb_name']; ?>" id="if_name" required <?php echo $readonly; ?>></td>
			<th><?php echo ($is_password)? "비밀번호":""; ?></th>
			<td> <?php if ($is_password) {
						echo "<input type='password' name='wr_password' id='wr_password' {$password_required} class='frm_input {$password_required}' maxlength='20'>";
					}?>
			</td>
		</tr>
		<tr>
			<th>연락처</th>
			<td colspan="3" class="hp_num">
					<input type="text" name="wr_homepage" value="<?php echo ($homepage)? $homepage:$member['mb_hp']; ?>" id="wr_homepage" class="required" required>
					<span class="frm_info"> ( 연락가능한 번호를 입력해 주세요. )</span>
				</td>
		</tr>
		<tr>
			<th>차량번호</th>
			<td colspan="3"><input type="text" name="wr_subject" class="wr_subject required" value="<?php echo $write['wr_subject']; ?>" required ></td>
		</tr>
		<tr>
			<th>차종</th>
			<td colspan="3"><input type="text" name="wr_4" class="wr_4 required" value="<?php echo $write['wr_4']; ?>"  required></td>
		</tr>
		<tr>
			<th>메모</th>
			<td colspan="3"><textarea name="wr_6" id="if_memo" cols="10" rows="5"><?php echo $write['wr_6']; ?></textarea></td>
		</tr>
		<tr>
			<th colspan="4" class="job_list">점검 및 정비를 원하는 항목을 모두 체크해주세요.</th>
		</tr>
		<tr>
			<td colspan="4">
				<!-- 작업항목 시작 -->
				<div id="jobs_list">
					<div class="jobs">
						<h1><i class='fa fa-wrench' aria-hidden='true'></i> <?php echo $jobs_01_sub?></h1>
						<?php echo checkBox_booking($jobs_01,$jobs_01,$write['wr_5'],'jobs[]','jobs1',1)?>
					</div>

					<div class="jobs">
						<h1><i class='fa fa-wrench' aria-hidden='true'></i> <?php echo $jobs_02_sub?></h1>
						<?php echo checkBox_booking($jobs_02,$jobs_02,$write['wr_5'],'jobs[]','jobs2',1)?>
					</div>

					<div class="jobs">
						<h1><i class='fa fa-wrench' aria-hidden='true'></i> <?php echo $jobs_03_sub?></h1>
						<?php echo checkBox_booking($jobs_03,$jobs_03,$write['wr_5'],'jobs[]','jobs3',1)?>
					</div>
					<div style="clear:both;"></div>

					<div class="jobs">
						<h1><i class='fa fa-wrench' aria-hidden='true'></i> <?php echo $jobs_04_sub?></h1>
						<?php echo checkBox_booking($jobs_04,$jobs_04,$write['wr_5'],'jobs[]','jobs4',1)?>
					</div>

					<div class="jobs">
						<h1><i class='fa fa-wrench' aria-hidden='true'></i> <?php echo $jobs_05_sub?></h1>
						<?php echo checkBox_booking($jobs_05,$jobs_05,$write['wr_5'],'jobs[]','jobs5',1)?>
					</div>

					<div class="jobs">
						<h1><i class='fa fa-wrench' aria-hidden='true'></i> <?php echo $jobs_06_sub?></h1>
						<?php echo checkBox_booking($jobs_06,$jobs_06,$write['wr_5'],'jobs[]','jobs6',1)?>
					</div>
					<div style="clear:both;"></div>


					<div class="jobs">
						<h1><i class='fa fa-wrench' aria-hidden='true'></i> <?php echo $jobs_07_sub?></h1>
						<?php echo checkBox_booking($jobs_07,$jobs_07,$write['wr_5'],'jobs[]','jobs7',1)?>
					</div>

					<div class="jobs">
						<h1><i class='fa fa-wrench' aria-hidden='true'></i> <?php echo $jobs_08_sub?></h1>
						<?php echo checkBox_booking($jobs_08,$jobs_08,$write['wr_5'],'jobs[]','jobs8',1)?>
					</div>
				</div>
			</td>
		</tr>
	</tbody>
	</table>

	<h1>개인정보처리방침안내</h1>
	<table id="tbl_agree">
		<caption>개인정보처리방침안내</caption>
		<colgroup>
			<col width="50%" />
			<col width="25%" />
			<col width="25%" />
		</colgroup>
		<thead>
			<tr>
				<th>목적</th>
				<th>항목</th>
				<th>보유기간</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>이용자 식별 및 본인여부 확인</td>
				<td>이름, 비밀번호</td>
				<td>본인요청 또는 사이트폐쇄시까지</td>
			</tr>
			<tr>
				<td>고객서비스 이용에 관한 통지, CS대응을 위한 이용자 식별</td>
				<td>기본정보(이름,연락처,차량번호)</td>
				<td>본인요청 또는 사이트폐쇄시까지</td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="3">
					<input type="checkbox" name="agree" id="agree" value="Y" required />
					<label for="agree"> (필수) 위 내용에 동의합니다.</label>
				</th>
			</tr>
		</tfoot>
	</table>


	<?php if ($is_guest) { //자동등록방지  ?>
	<table>
		<colgroup>
			<col width="13%" />
			<col width="87%" />
		</colgroup>
		<tbody>
			<tr>
				<th scope="row">자동등록방지</th>
		           <td colspan="3"><?php echo $captcha_html ?></td>
			</tr>
		</tbody>
	</table>
	<?php } ?>

	<div id="button_zone">
		<button type="submit" id="btn_submit" class="btn_submit"><i class='fa fa-check' aria-hidden='true'></i> 예약하기</button>
		<button type="button" class="btn_cancel" onclick="location.href='<?php echo G5_BBS_URL; ?>/board.php?bo_table=<?php echo $bo_table; ?>&amp;office_no=<?php echo $office_no; ?>&amp;select=<?php echo $select; ?>';">
		<i class='fa fa-remove' aria-hidden='true'></i> <?php echo ($w=='u')? "수정":"예약"; ?>취소</button>
	</div>
</form>
</div>

<script>
function fwrite_submit(f) {

	var chk = $("input.wr_2").is(":checked");
	if(chk==false) {
		alert("예약 시간은 반드시 선택해야 합니다.");
		$(".office_name").focus();
		$(".time_bg").css("background","#CEE7FF");
		return false;
	}

	var phone_number = $("#wr_homepage").val();
	//console.log(phone_number);
	var phone = phone_number.split("-");
	var pattern = /^[0-9]{3,4}-[0-9]{4}$/;
	var array = new Array("02", "031", "032", "033", "041", "042", "043", "051", "052", "053", "054", "055", "061", "062", "063", "064", "010", "011", "016", "017", "018", "019");
	var max = array.length;
	for(var i = 0; i < max; i++) {
		if(array[i] == phone["0"]) {
			break;
		}
	}

	/*
	// 전화번호 형식 검사 불필요.
	if(max == i || pattern.test(phone["1"] + "-" + phone["2"]) == false) {
		alert("연락처가 올바른 형식이 아닙니다.");
		$(".mara_info").focus();
		$(".hp_num").css({"background":"#CEE7FF"});
		$(".frm_info").css({"color":"red","font-weight":"bold"});
		return false;
	}
	*/

	<?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>
	document.getElementById("btn_submit").disabled = "disabled";
	return true;
}
</script>
