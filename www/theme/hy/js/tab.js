	$(function(){ // jQuery 준비

		$('ul.tab > li').eq(0).addClass('selected');
		$('.tab_box > div').hide(); 
		$('.tab_box > div').eq(0).show(); 
		$('ul.tab > li').click(function(){ 
			$('ul.tab > li').removeClass('selected');
			$(this).addClass('selected');
			$('.tab_box > div').hide();
			$('.tab_box > div').eq($(this).index()).show(); 
						
			return false;
			
		});
	}); //jQuery 종료