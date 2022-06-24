<?
include_once("./_common.php");

// 삭제 =================================
if($_POST['mode'] == "del") {

	sql_query(" delete from ".$_POST['table']."_sub where id_no = '".$_POST['id_no']."' ", true);
	$msg = array(
			"rst" => "OK"
		);
	echo json_encode($msg);
	exit;
}
//  삭제 끝 =================================

include_once(G5_PATH.'/head.sub.php');
include_once($board_skin_path.'/skin.function.php');

if(!$is_admin) {
	alert("회원이 아니거나 접근 권한이 없습니다.", G5_URL);
	exit;
}

if($_POST['mode']) {

	//예약시간 제외
	if(count($except)>0) {
		foreach($except as $value) {
			$ex_except .= "|".$value;
		}
		$ex_except = substr($ex_except, 1);
	}

	// ex_kind==1 이면 임시휴무일 (아닐시 예약시간만 제외)
	$ex_kind = ($_POST['ex_kind']=="1")? $_POST['ex_kind']:"2";

	$select = $_POST['select'];
	$bo_table = $_POST['table'];
	$office_no = $_POST['office_no'];

	switch($_POST['mode']) {

			case "new" : // 신규등록

				// 신규등록시 중복등록 금지.
				$sql = "select
							count(*) as cnt
						from
							".$table."_sub
						where
							mb_id		= '".$member['mb_id']."'
							and ex_date		= '".$_POST['select']."'
							and ex_kind		= '".$ex_kind."' ";
				$rs = sql_fetch($sql, true);
				if($rs['cnt'] > 0) {
					alert("선택한 날짜로 이미 등록된 자료입니다.");
					exit;
				}

				$sql = "insert into
							".$table."_sub
						set
							mb_id		= '".$member['mb_id']."',
							office_no	= '".$_POST['office_no']."',
							ex_date		= '".$_POST['select']."',
							ex_kind		= '".$ex_kind."',
							ex_except	= '".$ex_except."' ";
				sql_query($sql, true);
			break;

			case "save" : // 수정

				$sql = "update
							".$table."_sub
						set
							ex_date		= '".$_POST['select']."',
							ex_kind		= '".$ex_kind."',
							ex_except	= '".$ex_except."'
						where
							id_no = '".$_POST['id_no']."' ";
				sql_query($sql, true);
			break;

	} // end switch
} // end if


// 업체정보
if($office_no) {
	$sql = "select
				*
			from
				cm_office
			where
				id_no = '$office_no'";
	$off = sql_fetch($sql, true);
}
list($start_date, $end_date, $start_time, $end_time, $time_gubun, $time_person) = explode("|",$off['office_booking_time']);

// 예약시간대별 배열생성 ( 1시간단위 및 30분단위 )
$bt = array();
for($i=$start_time; $i < $end_time; $i++) {
	$hour=(strlen($i)==1)? "0".$i:$i;
	$bt[] = $hour.":00";

	// 30분단위 예약추가
	if($time_gubun==1) {
		$bt[] .= $hour.":30";
	}
}

// 배열을 구분자로 분리"|"
$amsub = implode("|", $bt);

if(!$select) {
	exit;
}

$sql = "select
			*
		from
			".$write_table."_sub
		where
			ex_date = '".$select."'
			and office_no	= '".$office_no."' ";
$rs = sql_fetch($sql, true);
list($year, $month, $day) = explode("-",$select);
$toDay = $year."년 ".$month[1]."월 ".$day."일";
?>

<script>
$(function() {

	$("#except input.except").on("click", "", function() {
		var idx = $("#except input.except").index(this);
		var	chk = $("#except input.except").eq(idx).is(":checked");
		if(chk==true) {
			$("#except label").eq(idx).css({"color":"red"});
		} else {
			$("#except label").eq(idx).css({"color":""});
		}
	});

	$("input#ex_kind").click(function() {
		var temp_holiday = $("input#ex_kind").is(":checked");
		if(temp_holiday==true) {
			// 휴무일로 설정시 예약시간제외를 선택하지 못하게 한다.
			$("#except input.except").prop("disabled",true);
		} else {
			$("#except input.except").prop("disabled",false);

		}
	});

	var ex_kind = "<?php echo $rs['ex_kind']; ?>";
	if(ex_kind=='1') {
		$("input#ex_kind").prop("checked",true);
		$("#except input.except").prop("disabled",true);
	}

	$("#carinfo_basic").on("click", "#btn_delete", function() {
		if(!confirm("한번 삭제한 자료는 복구가 불가능합니다. 정말로 삭제 하시겠습니까?")) {
			return false;
		};
		$.ajax({
			type : "POST",
			url : "./_sub_except.php",
			data : {
				"id_no":$(".id_no").val(),
				"table":$(".table").val(),
				"mode":"del"
			},
			dataType: "json",
			async: false,
			cache: false,
			error : function(error) {
				alert("요청한 작업이 실패하였습니다. 오류가 지속적으로 발생할 경우 개발사에 문의 바랍니다.");
			},
			success : function(data) {
					console.log(data);
					setTimeout(function(){
						$(".ui-dialog-buttonpane button:contains('닫기')", parent.document).trigger('click');
					},200);
			},
			complete : function() {

			}
		});
	});

	var id_no ="<?php echo $rs['id_no']; ?>";
	if(id_no) {
		$(".ui-dialog-buttonpane button:contains('삭제')", parent.document).show();
	}

	$('input:checkbox[name="expert[]"]').each(function() {
		alert("===");
	});

	$('input[name="except[]"]').each(function(e) {
		if(this.checked==true) {
			$(this).next().css({"color":"red"})
		}
	})
});


function frm_Submit(f) {

	var cnt1 = $("input[name='ex_kind']:checked").length; // 에약시간 체크된 갯수.
	var cnt2 = $("input[name='except[]']:checked").length; // 에약시간 체크된 갯수.
	var id_no = $(".id_no").val();
	if(cnt1==0 && cnt2==0) {
		var txt = "아무것도 선택되지 않았습니다.\r\n[임시휴무설정] 또는 [예약시간제외]를 선택하세요.";
		if(id_no) {
			txt += "\r\n모든 설정을 해제하려면 [삭제]를 하세요.";
		}
		alert(txt);
		return false;
	}

	f.submit;

}
</script>
<style>
#carinfo_basic { width:100%; margin:auto; min-height:100px; padding:0px 20px 0px 15px;}
#carinfo_basic table { width:100%; border-spacing:0; border-collapse:collapse; }
#carinfo_basic th { font-size:12px; height:4px; text-align:right; background:#eeeeee; border:1px solid #cccccc; padding-right:10px;}
#carinfo_basic td { font-size:12px; height:40px; text-align:left; background:#ffffff; border:1px solid #cccccc; padding:10px; }
#carinfo_basic caption { text-align:left; font-weight:bold; padding:15px 0px 15px 0px; font-size:12px; }
#carinfo_basic label { cursor:pointer; }
#carinfo_basic input[type=checkbox] { cursor:pointer; }
#carinfo_basic .button_zone { display:none; }
#carinfo_basic li { display:inline-block; padding:4px 10px 4px 0px;}
#carinfo_basic .day { font-size:13px; color:#ff0000; font-weight:bold; }
</style>
<div id="carinfo_basic">
	<form name="fmData" method="post" onsubmit="return frm_Submit(this);">
	<input type="hidden" name="mode" value="<?php echo ($rs['id_no'])? "save":"new"; ?>" />
	<input type="hidden" name="table" class="table" value="<?php echo $write_table; ?>" />
	<input type="hidden" name="id_no" class="id_no" value="<?php echo $rs['id_no']; ?>" />
	<input type="hidden" name="mb_id" class="mb_id" value="<?php echo $member['mb_id']; ?>" />
	<input type="hidden" name="select" class="select" value="<?php echo $select; ?>" />
	<input type="hidden" name="office_no" class="office_no" value="<?php echo $office_no; ?>" />

	<table>
		<caption>※ 선택한 날짜를 임시휴무로 설정하거나 예약시간제외할 수 있습니다.</caption>
		<colgroup>
			<col width="17%" />
			<col width="83%" />
		</colgroup>
		<tr>
			<th>적용날짜</th>
			<td class='day'><?php echo $select; ?></td>
		<tr>
		<tr>
			<th>임시휴무설정</th>
			<td colspan="3"><input type="checkbox" name="ex_kind" id="ex_kind" class="hand" value="1" />
				<label for="ex_kind" class='txt_red hand'><?php echo $toDay; ?>을 임시휴무일로 지정하려면 체크하세요.</label>
			</td>
		</tr>

		</tr>
			<th>예약시간제외</th>
			<td>
				<div style="margin:5px 0px 20px 0px;">
					※ 예약시간을 선택할 수 없도록 설정합니다.<br/>
					※ 예약시간에서 제외할 시간을 선택해 주세요.
				</div>
				<div id="except">
					<?php echo checkbox($amsub, $amsub, $rs['ex_except'], 'except'); ?>
				</div>
			</td>
		</tr>
	</table>
	<ul>
		<li>임시휴무설정 또는 예약시간제외중 하나만 설정이 가능합니다.</li>
		<?php if($rs['id_no']) { ?>
		<li>모든 설정을 해제하려면 삭제를 해야 합니다.</li>
		<?php } ?>
	</ul>

	<div class="button_zone">
		<button type="submit" id="btn_submit" class="btn_submit">저장</button>
		<button type="button" id="btn_delete" class="btn_submit">삭제</button>
	</div>
	</form>
</div>