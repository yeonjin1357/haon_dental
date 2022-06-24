<?
include_once("./_common.php");
include_once('../skin.function.php');
if(!$is_admin) {
	exit;
}

$sql = "select
			*
		from
			cm_holiday
		where
			mb_id = '".$member['mb_id']."' ";
$result = sql_query($sql, true);
?>
<link rel="stylesheet" href="<?php echo $board_skin_url; ?>/office/office.css">
<script>
$(document).ready(function() {

	// 정기휴무일 수정
	$("#holiday_list").on("click", ".holiday_edit", function() {
		var idx = $(".holiday_edit").index(this);
		var id_no = $("input.hs_no").eq(idx).val();

		$("#ifm_m").attr("src","./_sub_holiday.php?bo_table="+g5_bo_table+"&id_no="+id_no);
		$( '#dialog_m' ).dialog({
		    title : "정기휴무일 설정",
			width : 700,
		    height : 450,
	        modal : true,
		    resizable : false,
			buttons: {
				"등록":function(){
					$("#ifm_m").contents().find("#btn_submit").trigger("click");
				},
				"닫기":function(){
					$(this).dialog("close");
				}
			},
			open:function() { // 팝업시 실행
				$(".ui-dialog-buttonpane button:contains('닫기')").css({"background":"#555555", "color":"#eeeeee"});
				// 부모창 스크롤 막기
				$('html, body').css({'overflow': 'hidden'});
				$('#element').on('scroll touchmove mousewheel', function(event) {
					event.preventDefault();
					event.stopPropagation();
					return false;
				});
				// 부모창 스크롤 막기 끝.
			},
			close: function () {
				// 부모창 스크롤 막기 해제
				$('html').css({'overflow': 'scroll'});
				holiday_load();
			}
	    });
	});

	// 정기휴무일 삭제
	$("#holiday_list").on("click", ".holiday_del", function() {
		var idx = $(".holiday_del").index(this);
		var id_no = $("input.hs_no").eq(idx).val();
		if(!confirm("한번 삭제한 자료는 복구가 불가능합니다. 정말로 삭제 하시겠습니까?")) {
			return false;
		};
		$.ajax({
			type : "POST",
			url : "./_sub_holiday.php",
			data : {
				"id_no":id_no,
				"mode":"del"
			},
			dataType: "json",
			async: false,
			cache: false,
			error : function(error) {
				alert("요청한 작업이 실패하였습니다. 오류가 지속적으로 발생할 경우 개발자에게 문의 바랍니다.");
			},
			success : function(data) {
				holiday_load();
			},
			complete : function() {
				//alert("작업완료");
			}
		});
	});

});
</script>

<div id="holiday_list">
	<table>
		<colgroup>
			<col width="8%" />
			<col width="25%" />
			<col width="26%" />
			<col width="25%" />
			<col width="8%" />
			<col width="8%" />
		</colgroup>
		<tr>
			<th>번호</th>
			<th>구분선택</th>
			<th>요일선택</th>
			<th>기준일자</th>
			<th>수정</th>
			<th>삭제</th>
		</tr>

		<?php for($i=0; $row=sql_fetch_array($result); $i++) { ?>
		<tr>
			<td>
				<?php echo ($i+1); ?>
				<input type="hidden" name="hs_no" class="hs_no" value="<?php echo $row['id_no']; ?>">
			</td>
			<td><?php echo $HOLIDAY_SECTION[$row['section']]; ?></td>
			<td><?php echo $HOLIDAY_YOIL[$row['yoil']]; ?></td>
			<td><?php echo $row['initial']; ?></td>
			<td><i class='fa fa-edit hand holiday_edit' aria-hidden='true' title="휴무일 수정"></i></td>
			<td><i class='fa fa-trash-o hand  holiday_del' aria-hidden='true' title="휴무일 삭제"></i></td>
		</tr>
		<?php
		}
		if($i==0) {
			echo "<tr class='no_data'><td colspan='6'>자료가 없습니다.</td></tr>";
		}
		?>
	</table>
</div>