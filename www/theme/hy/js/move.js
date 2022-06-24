$(function(){ // jQuery 시작
	$(document).ready(function(){
		var c=0; //  각 콘텐츠 순서번호
		$('.sub_move_btn ul li a').eq(c).addClass('on');
		$('.sub_move_btn ul li').click(function(){
			c=$(this).index();
			var h_top = $('#container section').eq(c).offset().top-105; 
		
			$('html,body').animate({
				scrollTop:h_top
			},1000);

			return false;
		});
		
		var st = 0;
		//각 콘텐츠 위치에 도달 시 또는 메뉴 클릭 시 해당 스타일 적용
		$('#container section').each(function(){
			var i = $(this).index(); 
			if($(this).offset().top-105 <= st){ 
				$('.sub_move_btn ul li a').removeClass('on'); 
				$('.sub_move_btn ul li').eq(i).find('a').addClass('on'); 


			}
		});
		//마지막 콘텐츠 영역에 도달시 메뉴 스타일 적용
		if(st >= $('#container').height()-$(window).height()){
				$('sub_move_btn ul li a').removeClass('on');
				$('sub_move_btn ul li:last').find('a').addClass('on');
		}

		  $(document).ready(function(){
			$('.sub_bg').stop().animate({'opacity':'1'},500,"linear")
		  });

	});


}); //jQuery 종료
