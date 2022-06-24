// 정비내역확인(업체용)
$(document).ready(function() {

	// 달력이 확장상태 유지
	var aside = sessionStorage.getItem('aside_view');
	if(aside=="OFF") {
		setTimeout(function() {
			$("#cal_wide").trigger("click");
		},0);
	}

	// 달력 확장 또는 축소
	$("span#cal_wide").click(function() {
		var cls = $(this).attr("class");
		if(cls=="cal_wide_on") {
			$("#aside").hide();
			var w = $("#container").width();
			sessionStorage.setItem('container_width', w); // container 너비를 세션에 저장.
			sessionStorage.setItem('aside_view', "OFF"); // aside 뷰
			$(this).attr("class", "cal_wide_off").text("축소");
			$("#container").css({"width":"100%"});
		} else {
			$("#aside").show();
			$(this).attr("class", "cal_wide_on").text("확장");
			var w = sessionStorage.getItem('container_width');
			$("#container").css({"width":w+"px"});
			sessionStorage.setItem('aside_view', "ON"); // aside 뷰
		}
	});


	// 예약현황 자동업데이트가 ON일경우 페이지 이동시에도 상태유지
	var auto_interval = sessionStorage.getItem('auto_interval');
	if(auto_interval=="ON") {
		setTimeout(function() {
			$("span#set_interval").trigger('click');
		},100);
	}

	// 예약현황 자동업데이트 및 중지
	$("span#set_interval").click(function() {
		var cls = $(this).attr("class");
		if(cls=='interval_off') {
			$(this).attr('class', 'interval_on');
			booking_load = setInterval(function() {
				booking_reload();
			},30000); // 1000 = 1s
			sessionStorage.setItem('auto_interval', 'ON'); // 월 이동시 자동업데이트 유지
		} else {
			$(this).attr('class', 'interval_off');
			clearInterval(booking_load);
			sessionStorage.setItem('auto_interval', 'OFF');
		}
	});


	// 이전달 클릭시
	$('span.prev_text').click(function() {
		var prev = $("input.cal_prev").val();
		var office_no = $("input.office_no").val();
		calPage(prev, office_no);
		var cal_day = prev.split('-');
		$('span.center_today').text(cal_day[0]+'년 '+cal_day[1]+'월');
	});

	// 다음달 클릭시
	$('span.next_text').click(function() {
		var next = $("input.cal_next").val();
		var office_no = $("input.office_no").val();
		calPage(next, office_no);
		var cal_day = next.split('-');
		$('span.center_today').text(cal_day[0]+'년 '+cal_day[1]+'월');
	});
	

	booking_view = function (url) {
		$("#ifm_booking").attr("src",url);
		$('#dialog_booking').dialog({
		    title : '온라인예약 상세보기',
			width : 640,
		    height : 480,
			modal : true,
			resizable : false,
			buttons: {
				"닫기":function(){ 
					$(this).dialog("close");
				}
			},
			open:function() {   // 팝업시 실행
				$(":button:contains('닫기')").css({"background":"#555555", "color":"#eeeeee"});
			},
			close: function () {  // 팝업닫을때 실행.
			}
		});	
	}

	except_pop = function(day, min, max, office_no, bo_table) {
		var url = board_skin_url+"/_sub_except.php?bo_table="+g5_bo_table+"&office_no="+office_no+"&select="+day;
		var d = day.split('-');

		$("#ifm_booking").attr("src",url);
		$('#dialog_booking').dialog({
		    title : '온라인예약 상세보기',
			width : 640,
		    height : 420,
			modal : true,
			resizable : false,
			buttons: {
				"저장":function(e){
					$("#ifm_booking").contents().find("#btn_submit").trigger("click");
				},
				"삭제":function(){
					$("#ifm_booking").contents().find("#btn_delete").trigger("click");
				},
				"닫기":function(){ 
					$(this).dialog("close");
				}
			},
			open:function() {   // 팝업시 실행
				$(".ui-dialog-buttonpane button:contains('삭제')").hide();
				$(".ui-dialog-buttonpane button:contains('닫기')").css({"background":"#555555", "color":"#eeeeee"});
				
			},
			close: function () {  // 팝업닫을때 실행.
				day_info(day, d[2], min, max, g5_bo_table, office_no);
				//booking_member(day, d[2], min, max, g5_bo_table, office_no);
			}
		});	
	};
});

function go_edit(url) {
	location.href=url;
}

// 년-월 이동
function calPage(select, office_no) {
	var url = board_skin_url+'/_calendar.php?bo_table='+g5_bo_table+'&office_no='+office_no+'&select='+select;
	//$("#cal_zone").load(url);
	$.ajax({
		type : 'POST',
		url : url,
		data : {
			"off":off
		},
		dataType: "html",
		async: false,
		cache: false,
		error : function(error) {
			alert("Error!");
		},
		success : function(data) {
			//alert("success!");
			$("#cal_zone").html(data);
			//setTimeout(function() {
				var prev = $('input.cal_prev').val();
				var next = $('input.cal_next').val();
				$('span.prev_text').html("<i class='fa fa-backward' aria-hidden='true'></i> "+prev);
				$('span.next_text').html(next+" <i class='fa fa-forward' aria-hidden='true'></i>");
			//},0);
		},
		complete : function() {
			//alert("complete!");
		}
	});
}

// 임시휴무 및 예약시간제외설정값 불러오기 
function booking_reload() {
	var office_no = $('input.office_no').val();
	var min = $('input.cal_min').val();
	var max = $('input.cal_max').val();
	var ym = $('input.cal_ym').val();
	var idx = $('ul.day_title').length;
	for(i=0; i < idx; i++) {
		if(i < 9) {
			var d = '0'+(i+1);
		} else {
			var d = (i+1);
		}
		day_info(ym+d, (i+1), min, max, g5_bo_table, office_no);
	}
}

function day_info(ymd, day, min, max, bo_table, office_no) {
	var idx = day - 1;
	$.ajax({
		type : 'POST',
		url : board_skin_url+"/_day_info.php?office_no="+office_no,
		data : {
			"bo_table":bo_table,
			"url":board_skin_path,
			"var":ymd,
			"day":day,
			"min":min,
			"max":max
		},
		dataType: "json",
		async: false,
		cache: false,
		error : function(error) {
			//alert("Error!");
		},
		success : function(data) {
			//console.log(data);
			$("ul.day_title").eq(idx).html(data[0]);
			$("ul.m_list").eq(idx).html(data[1]);
		},
		complete : function() {
			//alert("complete!");    
		}
	});
}