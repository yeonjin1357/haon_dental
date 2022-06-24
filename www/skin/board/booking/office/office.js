$(document).ready(function(){

	
	$(".close_section_a").change(function() {
		var sec = $(".close_section_a").val();
		if(sec==1) {
			$(".booking_closed_daya").css({"display":"block"});
			$(".close_day_a").attr({"required":"required"});
		} else {
			$(".booking_closed_daya").css({"display":"none"});
			$(".close_day_a").removeAttr("required");
			$(".close_day_a").removeAttr("value");
		}
	});
	var close_a = "<?php echo $booking_close[0];?>";
	if(close_a==1) {
		$(".booking_closed_daya").css({"display":"block"});
	}
	
	$(".close_section_b").change(function() {
		var sec = $(".close_section_b").val();
		if(sec==1) {
			$(".booking_closed_dayb").css({"display":"block"});
			$(".close_day_b").attr("required","required");
		} else {
			$(".booking_closed_dayb").css({"display":"none"});
			$(".close_day_b").removeAttr("required");
			$(".close_day_b").removeAttr("value");
		}
	});
	var close_b = "<?php echo $booking_close[3];?>";
	if(close_b==1) {
		$(".booking_closed_dayb").css({"display":"block"});
	}

	// 정기휴무일 등록
	$("#office_table").on("click", "button#btn_holiday", function(){
		$("#ifm_m").attr("src","./_sub_holiday.php?bo_table="+g5_bo_table);
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
	// 정기휴무일등록끝.
	holiday_load(); // 정기휴무 로드

	$('button.btn_cal').click(function(){
		var url = g5_bbs_url+'/board.php?bo_table='+g5_bo_table;
		location.href=url;
	});

});

function holiday_load() {
	$("#holiday").load("./_sub_holiday_list.php?bo_table="+g5_bo_table);
}
