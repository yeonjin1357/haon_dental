$(function(){ // jQuery 준비

		// 퀵메뉴
		var quickID = $('#quick_menu');
		var offset = quickID.offset();
		$(window).scroll(function(){
			//quickID.find('span').text($(window).scrollTop());
			if($(window).scrollTop() > offset.top){ // 스크롤탑 > offset.top(0) 즉, 스크롤탑이 조금이라도 움직였다면
				quickID.stop().animate({
					marginTop : $(window).scrollTop() //스크롤바가 올라가는 만큼 마진을 주면 내려옴!
				},1000);
			}else{
					quickID.stop().animate({
					marginTop:0 //스크롤바가 올라가는 만큼 마진을 주면 내려옴!
				},200);
			}
		});

	}); //jQuery 종료